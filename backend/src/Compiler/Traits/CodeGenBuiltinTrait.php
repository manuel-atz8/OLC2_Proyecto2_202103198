<?php

namespace Golampi\Compiler\Traits;

use Golampi\Compiler\TypeSizes;

trait CodeGenBuiltinTrait
{
    public function visitMethodAtom($ctx): mixed
    {
        $obj = $ctx->ID(0)->getText();
        $method = $ctx->ID(1)->getText();

        if ($obj === 'fmt' && ($method === 'Println' || $method === 'println')) {
            $this->emitPrintln($ctx);
            $this->lastExprType = 'nil';
            return null;
        }

        $this->semanticError("Método '{$obj}.{$method}' no reconocido", $ctx);
        $this->lastExprType = 'nil';
        return null;
    }

    private function emitPrintln($ctx): void
    {
        $argList = $ctx->argList();
        $args = $argList !== null ? $argList->arg() : [];

        $this->emitter->blank();
        $this->emitter->comment("fmt.Println(...)");

        foreach ($args as $i => $argCtx) {
            $argClass = get_class($argCtx);

            if (str_contains($argClass, 'RefArg')) {
                $this->visit($argCtx);
                $this->emitter->emit("bl _print_int");
            } else {
                $exprCtx = $argCtx->expr();
                if ($exprCtx !== null) $this->visit($exprCtx);
                else $this->visit($argCtx);

                $type = $this->lastExprType;
                $baseType = $type;
                if (str_starts_with($baseType, '*')) $baseType = substr($baseType, 1);

                match ($baseType) {
                    'string'  => $this->emitter->emit("bl _print_string"),
                    'bool'    => $this->emitter->emit("bl _print_bool"),
                    'rune'    => $this->emitter->emit("bl _print_char"),
                    'float32' => $this->emitter->emit("bl _print_float"),
                    'nil'     => $this->emitPrintNil(),
                    default   => $this->emitter->emit("bl _print_int"),
                };
            }

            if ($i < count($args) - 1) {
                $this->emitter->emit("mov w0, #32");
                $this->emitter->emit("bl _print_char");
            }
        }

        $this->emitter->emit("mov w0, #10");
        $this->emitter->emit("bl _print_char");
    }

    private function emitPrintNil(): void
    {
        $label = $this->stringPool->add("<nil>");
        $this->emitter->emit("adrp x0, {$label}");
        $this->emitter->emit("add x0, x0, :lo12:{$label}");
        $this->emitter->emit("bl _print_string");
    }

    public function emitBuiltinCall(string $name, $ctx): mixed
    {
        return match ($name) {
            'len'    => $this->emitLen($ctx),
            'now'    => $this->emitNow($ctx),
            'substr' => $this->emitSubstr($ctx),
            'typeOf' => $this->emitTypeOf($ctx),
            default  => null,
        };
    }

    private function emitLen($ctx): mixed
    {
        $argList = $ctx->argList();
        $args = $argList !== null ? $argList->arg() : [];
        if (count($args) !== 1) {
            $this->semanticError("'len' espera 1 argumento", $ctx);
            $this->emitter->emit("mov w0, #0");
            $this->lastExprType = 'int32';
            return null;
        }

        $argCtx = $args[0];
        $exprCtx = method_exists($argCtx, 'expr') ? $argCtx->expr() : null;
        $varName = $exprCtx ? $exprCtx->getText() : null;
        $symbol = $varName ? $this->env->lookup($varName) : null;

        if ($symbol !== null && is_array($symbol->value)) {
            $this->emitter->comment("len({$varName}) = {$symbol->value[0]}");
            $this->emitter->emit("mov w0, #{$symbol->value[0]}");
            $this->lastExprType = 'int32';
            return null;
        }

        if ($exprCtx !== null) $this->visit($exprCtx);
        else $this->visit($argCtx);
        $type = $this->lastExprType;

        if ($type === 'string') {
            $this->emitter->emit("bl _strlen");
        } else {
            $this->emitter->emit("mov w0, #0");
        }

        $this->lastExprType = 'int32';
        return null;
    }

    private function emitNow($ctx): mixed
    {
        $this->emitter->comment("now()");
        $this->emitter->emit("bl _get_datetime");
        $this->lastExprType = 'string';
        return null;
    }

    private function emitSubstr($ctx): mixed
    {
        $argList = $ctx->argList();
        $args = $argList !== null ? $argList->arg() : [];
        if (count($args) !== 3) {
            $this->semanticError("'substr' espera 3 argumentos", $ctx);
            $label = $this->stringPool->add("");
            $this->emitter->emit("adrp x0, {$label}");
            $this->emitter->emit("add x0, x0, :lo12:{$label}");
            $this->lastExprType = 'string';
            return null;
        }

        $this->emitter->comment("substr(str, start, length)");
        $e0 = $args[0]->expr(); if ($e0) $this->visit($e0); else $this->visit($args[0]);
        $this->emitter->emit("str x0, [sp, #-16]!");
        $e1 = $args[1]->expr(); if ($e1) $this->visit($e1); else $this->visit($args[1]);
        $this->emitter->emit("str w0, [sp, #-16]!");
        $e2 = $args[2]->expr(); if ($e2) $this->visit($e2); else $this->visit($args[2]);
        $this->emitter->emit("mov w2, w0");
        $this->emitter->emit("ldr w1, [sp], #16");
        $this->emitter->emit("ldr x0, [sp], #16");
        $this->emitter->emit("bl _substr");
        $this->lastExprType = 'string';
        return null;
    }

    private function emitTypeOf($ctx): mixed
    {
        $argList = $ctx->argList();
        $args = $argList !== null ? $argList->arg() : [];
        if (count($args) !== 1) {
            $label = $this->stringPool->add("unknown");
            $this->emitter->emit("adrp x0, {$label}");
            $this->emitter->emit("add x0, x0, :lo12:{$label}");
            $this->lastExprType = 'string';
            return null;
        }

        $exprCtx = $args[0]->expr();
        if ($exprCtx !== null) $this->visit($exprCtx);
        else $this->visit($args[0]);
        $type = $this->lastExprType;

        $typeName = match ($type) { 'int32', 'int' => 'int32', 'float32' => 'float32', 'bool' => 'bool', 'string' => 'string', 'rune' => 'rune', default => $type };
        $label = $this->stringPool->add($typeName);
        $this->emitter->emit("adrp x0, {$label}");
        $this->emitter->emit("add x0, x0, :lo12:{$label}");
        $this->lastExprType = 'string';
        return null;
    }
}