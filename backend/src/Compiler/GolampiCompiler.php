<?php

namespace Golampi\Compiler;

use Golampi\Runtime\Environment\Environment;
use Golampi\Runtime\Environment\SymbolTableCollector;
use Golampi\Runtime\Types\GolampiFunction;
use Golampi\Errors\ErrorCollector;
use Golampi\Compiler\AssemblyEmitter;
use Golampi\Compiler\LabelGenerator;
use Golampi\Compiler\StringPool;
use Golampi\Compiler\TypeSizes;
use Golampi\Interpreter\Traits\TypeResolverTrait;

class GolampiCompiler extends \GolampiBaseVisitor
{
    use TypeResolverTrait;
    use Traits\CodeGenExpressionTrait;
    use Traits\CodeGenDeclarationTrait;
    use Traits\CodeGenStatementTrait;
    use Traits\CodeGenControlFlowTrait;
    use Traits\CodeGenBuiltinTrait;
    use Traits\CodeGenFunctionTrait;

    public Environment $env;
    public Environment $globalEnv;
    public SymbolTableCollector $symbolTable;
    public ErrorCollector $errors;

    public AssemblyEmitter $emitter;
    public LabelGenerator $labels;
    public StringPool $stringPool;

    public array $loopStack = [];
    public string $currentFunction = '';
    public array $functions = [];
    public array $frameSizes = [];
    private int $mainFrameSize = 0;
    public array $floatLiterals = [];

    public function __construct()
    {
        $this->globalEnv = new Environment(null, 'global');
        $this->env = $this->globalEnv;
        $this->symbolTable = new SymbolTableCollector();
        $this->errors = ErrorCollector::getInstance();
        $this->emitter = new AssemblyEmitter();
        $this->labels = new LabelGenerator();
        $this->stringPool = new StringPool();
    }

    // ═══════════════════════════════════════════════════════════════
    // SAFE FRAME ACCESS HELPERS
    // ═══════════════════════════════════════════════════════════════

    public function emitFrameStore(string $reg, int $offset): void
    {
        if ($offset <= 255) {
            $this->emitter->emit("stur {$reg}, [x29, #-{$offset}]");
        } else {
            $this->emitter->emit("sub x9, x29, #{$offset}");
            $this->emitter->emit("str {$reg}, [x9]");
        }
    }

    public function emitFrameLoad(string $reg, int $offset): void
    {
        if ($offset <= 255) {
            $this->emitter->emit("ldur {$reg}, [x29, #-{$offset}]");
        } else {
            $this->emitter->emit("sub x9, x29, #{$offset}");
            $this->emitter->emit("ldr {$reg}, [x9]");
        }
    }

    public function emitFrameAddr(string $destReg, int $offset): void
    {
        $this->emitter->emit("sub {$destReg}, x29, #{$offset}");
    }

    public function emitStoreResult(string $type, int $offset): void
    {
        if ($type === 'float32') $this->emitFrameStore('s0', $offset);
        elseif (TypeSizes::is64Bit($type)) $this->emitFrameStore('x0', $offset);
        else $this->emitFrameStore('w0', $offset);
    }

    public function emitLoadResult(string $type, int $offset): void
    {
        if ($type === 'float32') $this->emitFrameLoad('s0', $offset);
        elseif (TypeSizes::is64Bit($type)) $this->emitFrameLoad('x0', $offset);
        else $this->emitFrameLoad('w0', $offset);
    }

    public function emitMovImm(string $reg, int $value): void
    {
        if ($value >= 0 && $value <= 65535) {
            $this->emitter->emit("mov {$reg}, #{$value}");
        } elseif ($value >= -65536 && $value < 0) {
            $this->emitter->emit("mov {$reg}, #{$value}");
        } else {
            $unsigned = $value & 0xFFFFFFFF;
            $lo = $unsigned & 0xFFFF;
            $hi = ($unsigned >> 16) & 0xFFFF;
            $this->emitter->emit("movz {$reg}, #{$lo}");
            if ($hi != 0) {
                $this->emitter->emit("movk {$reg}, #{$hi}, lsl #16");
            }
        }
    }

    // ═══════════════════════════════════════════════════════════════

    public function visitProgram($ctx): mixed
    {
        foreach ($ctx->functionDeclaration() as $funcCtx) {
            $this->registerFunction($funcCtx);
        }

        if (!isset($this->functions['main'])) {
            $this->errors->addSemantic("No se encontró la función 'main'", 0, 0);
            return null;
        }

        $mainFunc = $this->functions['main'];
        if ($mainFunc->paramCount() > 0) { $this->errors->addSemantic("main no puede recibir parámetros", $mainFunc->line, $mainFunc->column); return null; }
        if ($mainFunc->hasReturn()) { $this->errors->addSemantic("main no puede retornar valores", $mainFunc->line, $mainFunc->column); return null; }

        foreach ($this->functions as $name => $func) {
            if ($name !== 'main') $this->emitFunction($func);
        }

        $this->currentFunction = 'main';
        $previousEnv = $this->env;
        $this->env = $this->globalEnv->createChild('main');

        $this->emitter->blank();
        $this->emitter->comment("=== Punto de entrada: main ===");
        $this->emitter->label('_start');
        $mainPlaceholder = '____MAIN_FRAME_SIZE____';
        $this->emitter->emit("stp x29, x30, [sp, #-16]!");
        $this->emitter->emit("mov x29, sp");
        $this->emitter->emit("stp x19, x20, [sp, #-16]!");
        $this->emitter->emit("sub sp, sp, #{$mainPlaceholder}");
        $this->emitter->blank();

        $this->visitBlock($mainFunc->body);

        $this->emitter->blank();
        $this->emitter->label(".L_epilogue_main");
        $this->emitter->emit("add sp, sp, #{$mainPlaceholder}");
        $this->emitter->emit("ldp x19, x20, [sp], #16");
        $this->emitter->emit("ldp x29, x30, [sp], #16");
        $this->emitter->emit("mov x0, #0");
        $this->emitter->emit("mov x8, #93");
        $this->emitter->emit("svc #0");

        $this->mainFrameSize = $this->env->getFrameSize();
        if ($this->mainFrameSize < 16) $this->mainFrameSize = 16;
        if ($this->mainFrameSize % 16 !== 0) $this->mainFrameSize = (int)(ceil($this->mainFrameSize / 16) * 16);

        $this->env = $previousEnv;
        return null;
    }

    public function getAssembly(): string
    {
        $asm = $this->emitter->build($this->stringPool);
        $asm = str_replace('____MAIN_FRAME_SIZE____', (string) $this->mainFrameSize, $asm);
        foreach ($this->frameSizes as $funcName => $size) {
            $asm = str_replace("____FRAME_{$funcName}____", (string) $size, $asm);
        }
        $asm .= "\n" . $this->getRuntimeRoutines();
        return $asm;
    }

    public function semanticError(string $msg, $ctx): void
    {
        $line = 0; $col = 0;
        if ($ctx !== null && method_exists($ctx, 'getStart')) {
            $token = $ctx->getStart(); $line = $token->getLine(); $col = $token->getCharPositionInLine();
        }
        $this->errors->addSemantic($msg, $line, $col);
    }

    private function getRuntimeRoutines(): string
    {
        return <<<'ASM'
// ============================================================
// Runtime Golampi - Rutinas auxiliares
// ============================================================

// _print_int: Prints a signed 32-bit integer in w0 to stdout.
// Handles full int32 range including -2147483648.
_print_int:
    stp x29, x30, [sp, #-64]!
    mov x29, sp
    stp x19, x20, [sp, #16]
    // Sign-extend w0 to x19 (64-bit) to handle INT32_MIN correctly
    sxtw x19, w0
    cmp x19, #0
    b.ge .Lpi_positive
    mov w0, #45
    bl _print_char
    neg x19, x19
.Lpi_positive:
    cmp x19, #0
    b.ne .Lpi_nonzero
    mov w0, #48
    bl _print_char
    b .Lpi_done
.Lpi_nonzero:
    mov x20, #0
.Lpi_loop:
    cmp x19, #0
    b.eq .Lpi_print
    mov x1, #10
    udiv x2, x19, x1
    msub x3, x2, x1, x19
    add w3, w3, #48
    sub sp, sp, #16
    str w3, [sp]
    add x20, x20, #1
    mov x19, x2
    b .Lpi_loop
.Lpi_print:
    cmp x20, #0
    b.eq .Lpi_done
    ldr w0, [sp]
    add sp, sp, #16
    sub x20, x20, #1
    bl _print_char
    b .Lpi_print
.Lpi_done:
    ldp x19, x20, [sp, #16]
    ldp x29, x30, [sp], #64
    ret

_print_char:
    stp x29, x30, [sp, #-32]!
    mov x29, sp
    strb w0, [sp, #16]
    mov x0, #1
    add x1, sp, #16
    mov x2, #1
    mov x8, #64
    svc #0
    ldp x29, x30, [sp], #32
    ret

_print_string:
    stp x29, x30, [sp, #-48]!
    mov x29, sp
    stp x19, x20, [sp, #16]
    mov x19, x0
    cbz x19, .Lps_done
    mov x20, #0
.Lps_len:
    ldrb w1, [x19, x20]
    cbz w1, .Lps_write
    add x20, x20, #1
    b .Lps_len
.Lps_write:
    cbz x20, .Lps_done
    mov x0, #1
    mov x1, x19
    mov x2, x20
    mov x8, #64
    svc #0
.Lps_done:
    ldp x19, x20, [sp, #16]
    ldp x29, x30, [sp], #48
    ret

_print_bool:
    stp x29, x30, [sp, #-16]!
    mov x29, sp
    cmp w0, #0
    b.eq .Lpb_false
    adrp x0, .Lbool_true
    add x0, x0, :lo12:.Lbool_true
    bl _print_string
    b .Lpb_done
.Lpb_false:
    adrp x0, .Lbool_false
    add x0, x0, :lo12:.Lbool_false
    bl _print_string
.Lpb_done:
    ldp x29, x30, [sp], #16
    ret

_strlen:
    stp x29, x30, [sp, #-16]!
    mov x29, sp
    mov x1, x0
    mov w0, #0
.Lsl_loop:
    ldrb w2, [x1, x0]
    cbz w2, .Lsl_done
    add w0, w0, #1
    b .Lsl_loop
.Lsl_done:
    ldp x29, x30, [sp], #16
    ret

_print_float:
    stp x29, x30, [sp, #-80]!
    mov x29, sp
    stp x19, x20, [sp, #16]
    str s8, [sp, #32]
    str s9, [sp, #36]
    str s10, [sp, #40]
    fmov s8, s0
    fcmp s8, #0.0
    b.ge .Lpf_positive
    mov w0, #45
    bl _print_char
    fneg s8, s8
.Lpf_positive:
    fcvtzs w19, s8
    mov w0, w19
    bl _print_int
    mov w0, #46
    bl _print_char
    scvtf s9, w19
    fsub s10, s8, s9
    movz w1, #0x9680
    movk w1, #0x98, lsl #16
    scvtf s9, w1
    fmul s10, s10, s9
    fcvtzs w19, s10
    cmp w19, #0
    b.ge .Lpf_dec_pos
    neg w19, w19
.Lpf_dec_pos:
    mov w20, #7
    mov x21, #0
.Lpf_dec_loop:
    cmp w20, #0
    b.eq .Lpf_dec_print
    mov w1, #10
    sdiv w2, w19, w1
    msub w3, w2, w1, w19
    add w3, w3, #48
    sub sp, sp, #16
    str w3, [sp]
    add x21, x21, #1
    mov w19, w2
    sub w20, w20, #1
    b .Lpf_dec_loop
.Lpf_dec_print:
    cmp x21, #0
    b.eq .Lpf_dec_done
    ldr w0, [sp]
    add sp, sp, #16
    sub x21, x21, #1
    bl _print_char
    b .Lpf_dec_print
.Lpf_dec_done:
    ldr s10, [sp, #40]
    ldr s9, [sp, #36]
    ldr s8, [sp, #32]
    ldp x19, x20, [sp, #16]
    ldp x29, x30, [sp], #80
    ret

// _substr: x0=string, w1=start, w2=length → x0=result
_substr:
    stp x29, x30, [sp, #-64]!
    mov x29, sp
    stp x19, x20, [sp, #16]
    stp x21, x22, [sp, #32]
    mov x19, x0
    mov w20, w1
    mov w21, w2
    add w22, w21, #16
    and w22, w22, #-16
    sxtw x22, w22
    sub sp, sp, x22
    mov x0, sp
    sxtw x20, w20
    add x1, x19, x20
    mov w3, #0
.Lss_copy:
    cmp w3, w21
    b.ge .Lss_null
    ldrb w4, [x1, x3]
    strb w4, [x0, x3]
    add w3, w3, #1
    b .Lss_copy
.Lss_null:
    strb wzr, [x0, x3]
    mov x0, sp
    ldp x21, x22, [x29, #32]
    ldp x19, x20, [x29, #16]
    mov sp, x29
    ldp x29, x30, [sp], #64
    ret

// _get_datetime: Returns x0 = pointer to "YYYY-MM-DD HH:MM:SS"
_get_datetime:
    stp x29, x30, [sp, #-96]!
    mov x29, sp
    stp x19, x20, [sp, #16]
    stp x21, x22, [sp, #32]
    mov x0, #0
    add x1, sp, #64
    mov x8, #113
    svc #0
    ldr x19, [sp, #64]
    movz x1, #0x5180
    movk x1, #0x1, lsl #16
    udiv x2, x19, x1
    msub x3, x2, x1, x19
    mov x1, #3600
    udiv x4, x3, x1
    msub x3, x4, x1, x3
    mov x1, #60
    udiv x5, x3, x1
    msub x6, x5, x1, x3
    adrp x0, .Ldatetime_buf
    add x0, x0, :lo12:.Ldatetime_buf
    add x0, x0, #11
    mov w1, #10
    udiv w2, w4, w1
    msub w3, w2, w1, w4
    add w2, w2, #48
    add w3, w3, #48
    strb w2, [x0, #0]
    strb w3, [x0, #1]
    mov w2, #58
    strb w2, [x0, #2]
    udiv w2, w5, w1
    msub w3, w2, w1, w5
    add w2, w2, #48
    add w3, w3, #48
    strb w2, [x0, #3]
    strb w3, [x0, #4]
    mov w2, #58
    strb w2, [x0, #5]
    udiv w2, w6, w1
    msub w3, w2, w1, w6
    add w2, w2, #48
    add w3, w3, #48
    strb w2, [x0, #6]
    strb w3, [x0, #7]
    strb wzr, [x0, #8]
    adrp x0, .Ldatetime_buf
    add x0, x0, :lo12:.Ldatetime_buf
    ldp x21, x22, [sp, #32]
    ldp x19, x20, [sp, #16]
    ldp x29, x30, [sp], #96
    ret

// _memcpy_arr: Copy x2 bytes from x1 to x0
_memcpy_arr:
    stp x29, x30, [sp, #-16]!
    mov x29, sp
    cbz x2, .Lmc_done
.Lmc_loop:
    ldrb w3, [x1], #1
    strb w3, [x0], #1
    sub x2, x2, #1
    cbnz x2, .Lmc_loop
.Lmc_done:
    ldp x29, x30, [sp], #16
    ret

// ─── Datos del runtime ───
.section .data
.Lbool_true: .asciz "true"
.Lbool_false: .asciz "false"
.Ldatetime_buf: .asciz "2026-04-25 00:00:00"

ASM;
    }
}