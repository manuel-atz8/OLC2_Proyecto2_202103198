<?php

namespace Golampi\Compiler\Traits;

use Golampi\Compiler\TypeSizes;

trait CodeGenExpressionTrait
{
    public string $lastExprType = 'int32';
    public ?array $arrayTarget = null;

    // Track array return info from last function call
    public ?int $lastArrayReturnOffset = null;
    public ?array $lastArrayReturnDims = null;
    public ?string $lastArrayReturnBaseType = null;

    public function visitExpr($ctx): mixed
    {
        $this->visit($ctx->orExpr());
        return $this->lastExprType;
    }

    public function visitOrExpr($ctx): mixed
    {
        $this->visit($ctx->andExpr(0));
        $andCount = count($ctx->andExpr());
        if ($andCount <= 1) return null;
        $endLabel = $this->labels->next('or_end');
        for ($i = 1; $i < $andCount; $i++) {
            $this->emitter->emit("cmp w0, #0");
            $this->emitter->emit("b.ne {$endLabel}");
            $this->visit($ctx->andExpr($i));
        }
        $this->emitter->label($endLabel);
        $this->lastExprType = 'bool';
        return null;
    }

    public function visitAndExpr($ctx): mixed
    {
        $this->visit($ctx->eqExpr(0));
        $eqCount = count($ctx->eqExpr());
        if ($eqCount <= 1) return null;
        $endLabel = $this->labels->next('and_end');
        for ($i = 1; $i < $eqCount; $i++) {
            $this->emitter->emit("cmp w0, #0");
            $this->emitter->emit("b.eq {$endLabel}");
            $this->visit($ctx->eqExpr($i));
        }
        $this->emitter->label($endLabel);
        $this->lastExprType = 'bool';
        return null;
    }

    public function visitEqExpr($ctx): mixed
    {
        $this->visit($ctx->relExpr(0));
        $children = $ctx->children;
        $relIndex = 1;
        for ($i = 1; $i < count($children); $i += 2) {
            $op = $children[$i]->getText();
            $leftType = $this->lastExprType;
            $this->pushResult($leftType);
            $this->visit($ctx->relExpr($relIndex++));
            if ($leftType === 'float32' || $this->lastExprType === 'float32') {
                $this->popFloat('s1');
                $this->emitter->emit("fcmp s1, s0");
            } else {
                $this->popW1();
                $this->emitter->emit("cmp w1, w0");
            }
            $this->emitter->emit("cset w0, " . ($op === '==' ? 'eq' : 'ne'));
            $this->lastExprType = 'bool';
        }
        return null;
    }

    public function visitRelExpr($ctx): mixed
    {
        $this->visit($ctx->addExpr(0));
        $children = $ctx->children;
        $addIndex = 1;
        for ($i = 1; $i < count($children); $i += 2) {
            $op = $children[$i]->getText();
            $leftType = $this->lastExprType;
            $this->pushResult($leftType);
            $this->visit($ctx->addExpr($addIndex++));
            if ($leftType === 'float32' || $this->lastExprType === 'float32') {
                $this->popFloat('s1');
                $this->emitter->emit("fcmp s1, s0");
            } else {
                $this->popW1();
                $this->emitter->emit("cmp w1, w0");
            }
            $cond = match ($op) { '>' => 'gt', '>=' => 'ge', '<' => 'lt', '<=' => 'le', default => 'eq' };
            $this->emitter->emit("cset w0, {$cond}");
            $this->lastExprType = 'bool';
        }
        return null;
    }

    public function visitAddExpr($ctx): mixed
    {
        $this->visit($ctx->mulExpr(0));
        $children = $ctx->children;
        $mulIndex = 1;
        for ($i = 1; $i < count($children); $i += 2) {
            $op = $children[$i]->getText();
            $leftType = $this->lastExprType;
            if ($leftType === 'string' && $op === '+') { $this->semanticError("Concatenación de strings no implementada", $ctx); return null; }
            $this->pushResult($leftType);
            $this->visit($ctx->mulExpr($mulIndex++));
            $rightType = $this->lastExprType;
            if ($leftType === 'float32' || $rightType === 'float32') {
                $this->popFloat('s1');
                if ($leftType !== 'float32') $this->emitter->emit("scvtf s1, w1");
                if ($rightType !== 'float32') $this->emitter->emit("scvtf s0, w0");
                $this->emitter->emit($op === '+' ? 'fadd s0, s1, s0' : 'fsub s0, s1, s0');
                $this->lastExprType = 'float32';
            } else {
                $this->popW1();
                $this->emitter->emit($op === '+' ? 'add w0, w1, w0' : 'sub w0, w1, w0');
            }
        }
        return null;
    }

    public function visitMulExpr($ctx): mixed
    {
        $this->visit($ctx->unaryExpr(0));
        $children = $ctx->children;
        $unaryIndex = 1;
        for ($i = 1; $i < count($children); $i += 2) {
            $op = $children[$i]->getText();
            $leftType = $this->lastExprType;
            $this->pushResult($leftType);
            $this->visit($ctx->unaryExpr($unaryIndex++));
            $rightType = $this->lastExprType;
            if ($leftType === 'float32' || $rightType === 'float32') {
                $this->popFloat('s1');
                if ($leftType !== 'float32') $this->emitter->emit("scvtf s1, w1");
                if ($rightType !== 'float32') $this->emitter->emit("scvtf s0, w0");
                $instr = match ($op) { '*' => 'fmul s0, s1, s0', '/' => 'fdiv s0, s1, s0', default => null };
                if ($instr === null) $this->semanticError("Módulo no soportado para float32", $ctx);
                else $this->emitter->emit($instr);
                $this->lastExprType = 'float32';
            } else {
                $this->popW1();
                match ($op) {
                    '*' => $this->emitter->emit('mul w0, w1, w0'),
                    '/' => $this->emitter->emit('sdiv w0, w1, w0'),
                    '%' => $this->emitModulo(),
                    default => $this->emitter->emit('mul w0, w1, w0'),
                };
            }
        }
        return null;
    }

    public function visitNotExpr($ctx): mixed { $this->visit($ctx->unaryExpr()); $this->emitter->emit("eor w0, w0, #1"); $this->lastExprType = 'bool'; return null; }
    public function visitNegExpr($ctx): mixed { $this->visit($ctx->unaryExpr()); if ($this->lastExprType === 'float32') $this->emitter->emit("fneg s0, s0"); else $this->emitter->emit("neg w0, w0"); return null; }
    public function visitAtomExpr($ctx): mixed { return $this->visit($ctx->atom()); }

    // ─── Átomos ───

    public function visitIntAtom($ctx): mixed
    {
        $value = (int) $ctx->getText();
        $this->emitMovImm('w0', $value);
        $this->lastExprType = 'int32';
        return null;
    }

    public function visitFloatAtom($ctx): mixed
    {
        $value = $ctx->getText();
        $label = $this->addFloatLiteral($value);
        $this->emitter->emit("adrp x1, {$label}");
        $this->emitter->emit("add x1, x1, :lo12:{$label}");
        $this->emitter->emit("ldr s0, [x1]");
        $this->lastExprType = 'float32';
        return null;
    }

    public function visitRuneAtom($ctx): mixed
    {
        $text = $ctx->getText();
        $char = substr($text, 1, -1);
        $ord = match ($char) {
            '\\n' => 10, '\\t' => 9, '\\r' => 13,
            '\\\\' => 92, "\\'" => 39, '\\0' => 0,
            default => mb_ord($char, 'UTF-8'),
        };
        $this->emitter->emit("mov w0, #{$ord}");
        $this->lastExprType = 'rune';
        return null;
    }

    public function visitStringAtom($ctx): mixed
    {
        $text = $ctx->getText();
        $content = substr($text, 1, -1);
        $content = str_replace(['\\n', '\\t', '\\r', '\\\\', '\\"'], ["\n", "\t", "\r", "\\", '"'], $content);
        $label = $this->stringPool->add($content);
        $this->emitter->emit("adrp x0, {$label}");
        $this->emitter->emit("add x0, x0, :lo12:{$label}");
        $this->lastExprType = 'string';
        return null;
    }

    public function visitTrueAtom($ctx): mixed { $this->emitter->emit("mov w0, #1"); $this->lastExprType = 'bool'; return null; }
    public function visitFalseAtom($ctx): mixed { $this->emitter->emit("mov w0, #0"); $this->lastExprType = 'bool'; return null; }
    public function visitNilAtom($ctx): mixed { $this->emitter->emit("mov w0, #0"); $this->lastExprType = 'nil'; return null; }

    public function visitIdAtom($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            $this->emitter->emit("mov w0, #0");
            $this->lastExprType = 'int32';
            return null;
        }

        if ($symbol->storage === 'global') {
            $label = $symbol->label ?? "var_{$name}";
            $this->emitter->emit("adrp x1, {$label}");
            $this->emitter->emit("add x1, x1, :lo12:{$label}");
            if ($symbol->dataType === 'float32') $this->emitter->emit("ldr s0, [x1]");
            elseif (TypeSizes::is64Bit($symbol->dataType)) $this->emitter->emit("ldr x0, [x1]");
            else $this->emitter->emit("ldr w0, [x1]");
        } else {
            $this->emitLoadResult($symbol->dataType, $symbol->offset);
        }

        $type = $symbol->dataType;
        if (str_starts_with($type, '*')) $type = substr($type, 1);
        $this->lastExprType = $type;
        return null;
    }

    public function visitParenAtom($ctx): mixed { $this->visit($ctx->expr()); return null; }

    public function visitCastAtom($ctx): mixed
    {
        $this->visit($ctx->expr());
        $sourceType = $this->lastExprType;
        $targetType = match ($ctx->children[0]->getText()) {
            'int32', 'int' => 'int32', 'float32' => 'float32', 'bool' => 'bool', 'rune' => 'rune', 'string' => 'string', default => 'int32',
        };
        if ($sourceType === 'int32' && $targetType === 'float32') $this->emitter->emit("scvtf s0, w0");
        elseif ($sourceType === 'float32' && $targetType === 'int32') $this->emitter->emit("fcvtzs w0, s0");
        elseif ($sourceType === 'rune' && $targetType === 'int32') { /* noop */ }
        elseif ($sourceType === 'int32' && $targetType === 'rune') { /* noop */ }
        $this->lastExprType = $targetType;
        return null;
    }

    /**
     * IndexAtom: arr[i], arr[i][j], texto[i], ptrArr[i]
     *
     * IMPORTANT: This visitor must not clobber registers used by callers.
     * The result ends up in w0/s0/x0. We use x14/x15 as temp regs for
     * base address and byte offset to avoid conflicts with expression evaluation.
     */
    public function visitIndexAtom($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            $this->emitter->emit("mov w0, #0");
            $this->lastExprType = 'int32';
            return null;
        }

        $indices = $ctx->expr();
        $dataType = $symbol->dataType;

        // ─── String indexing: texto[i] → rune ───
        if ($dataType === 'string') {
            $this->emitter->comment("string index {$name}[i]");
            $this->emitFrameLoad('x14', $symbol->offset);
            $this->visit($indices[0]);
            $this->emitter->emit("sxtw x0, w0");
            $this->emitter->emit("ldrb w0, [x14, x0]");
            $this->lastExprType = 'rune';
            return null;
        }

        $isPointerToArray = str_starts_with($dataType, '*[') || str_starts_with($dataType, '*[]');
        $isArray = str_starts_with($dataType, '[]');

        if (!$isArray && !$isPointerToArray) {
            $this->semanticError("'{$name}' no es un arreglo ni string", $ctx);
            $this->emitter->emit("mov w0, #0");
            $this->lastExprType = 'int32';
            return null;
        }

        $baseType = $isPointerToArray
            ? preg_replace('/^\*(\[\d*\])+/', '', $dataType)
            : preg_replace('/^(\[\d*\])+/', '', $dataType);
        if (!$baseType) $baseType = 'int32';

        $elemSize = TypeSizes::of($baseType);
        $dims = is_array($symbol->value) ? $symbol->value : [];

        $this->emitter->comment("array access {$name}[...]");

        // Compute base address into x14 FIRST (before evaluating indices)
        if ($isPointerToArray) {
            $this->emitFrameLoad('x14', $symbol->offset);
        } else {
            $this->emitFrameAddr('x14', $symbol->offset);
        }

        // Evaluate first index → w0, save in x15 as accumulated offset
        $this->visit($indices[0]);
        $this->emitter->emit("mov w15, w0");

        // Linearize multi-dimensional indices
        for ($k = 1; $k < count($indices); $k++) {
            if (isset($dims[$k])) {
                $this->emitter->emit("mov w3, #{$dims[$k]}");
                $this->emitter->emit("mul w15, w15, w3");
            }
            // Save w15 before evaluating next index (expression might clobber it)
            $this->emitter->emit("str w15, [sp, #-16]!");
            $this->visit($indices[$k]);
            $this->emitter->emit("ldr w15, [sp], #16");
            $this->emitter->emit("add w15, w15, w0");
        }

        // Convert element index to byte offset
        $this->emitter->emit("mov w3, #{$elemSize}");
        $this->emitter->emit("mul w15, w15, w3");

        // Load element
        $this->emitter->emit("sxtw x15, w15");
        $this->emitter->emit("add x14, x14, x15");

        if ($baseType === 'float32') $this->emitter->emit("ldr s0, [x14]");
        elseif (TypeSizes::is64Bit($baseType)) $this->emitter->emit("ldr x0, [x14]");
        else $this->emitter->emit("ldr w0, [x14]");

        $this->lastExprType = $baseType;
        return null;
    }

    /** ArrayAtom: [N]type{...} */
    public function visitArrayAtom($ctx): mixed
    {
        return $this->emitArrayLiteral($ctx->arrayLiteral());
    }

    public function emitArrayLiteral($arrayLit): mixed
    {
        $dimCtxs = $arrayLit->arrayDimension();
        $dims = [];
        foreach ($dimCtxs as $d) $dims[] = (int) $d->expr()->getText();

        $baseType = $this->resolveType($arrayLit->type());
        $elemSize = TypeSizes::of($baseType);
        $initList = $arrayLit->arrayInitList();
        $target = $this->arrayTarget;

        if ($target === null) {
            $totalElements = 1;
            foreach ($dims as $d) $totalElements *= $d;
            $totalSize = $totalElements * $elemSize;
            $offset = $this->env->allocateLocal($totalSize);
            $target = ['offset' => $offset, 'baseType' => $baseType, 'dims' => $dims];
        }

        if ($initList !== null) {
            $className = get_class($initList);
            if (str_contains($className, 'FlatInit')) {
                $exprs = $initList->expr();
                $this->emitter->comment("array flat init {$baseType}, " . count($exprs) . " elems");
                foreach ($exprs as $j => $exprCtx) {
                    $this->visit($exprCtx);
                    $elemOffset = $target['offset'] - ($j * $elemSize);
                    if ($baseType === 'float32') $this->emitFrameStore('s0', $elemOffset);
                    elseif (TypeSizes::is64Bit($baseType)) $this->emitFrameStore('x0', $elemOffset);
                    else $this->emitFrameStore('w0', $elemOffset);
                }
            } elseif (str_contains($className, 'NestedInitList')) {
                $nestedInits = $initList->nestedInit();
                $innerSize = 1;
                for ($d = 1; $d < count($dims); $d++) $innerSize *= $dims[$d];
                foreach ($nestedInits as $i => $nestedCtx) {
                    $this->emitNestedInit($nestedCtx, $target['offset'], $i * $innerSize, $elemSize, $baseType, $dims, 1);
                }
            }
        }

        $this->lastExprType = str_repeat('[]', count($dims)) . $baseType;
        return null;
    }

    private function emitNestedInit($nestedCtx, int $baseOffset, int $startElement, int $elemSize, string $baseType, array $dims, int $depth): void
    {
        $exprs = $nestedCtx->expr();
        $subNested = $nestedCtx->nestedInit();

        if (!empty($exprs) && count($exprs) > 0) {
            foreach ($exprs as $j => $exprCtx) {
                $elemOffset = $baseOffset - (($startElement + $j) * $elemSize);
                $this->visit($exprCtx);
                if ($baseType === 'float32') $this->emitFrameStore('s0', $elemOffset);
                elseif (TypeSizes::is64Bit($baseType)) $this->emitFrameStore('x0', $elemOffset);
                else $this->emitFrameStore('w0', $elemOffset);
            }
        } elseif (!empty($subNested)) {
            $innerSize = 1;
            for ($d = $depth + 1; $d < count($dims); $d++) $innerSize *= $dims[$d];
            foreach ($subNested as $i => $sub) {
                $this->emitNestedInit($sub, $baseOffset, $startElement + $i * $innerSize, $elemSize, $baseType, $dims, $depth + 1);
            }
        }
    }

    public function visitAddrExpr($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) { $this->semanticError("Variable '{$name}' no declarada", $ctx); $this->emitter->emit("mov x0, #0"); $this->lastExprType = '*int32'; return null; }
        $this->emitFrameAddr('x0', $symbol->offset);
        $this->lastExprType = '*' . $symbol->dataType;
        return null;
    }

    public function visitDerefExpr($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) { $this->semanticError("Variable '{$name}' no declarada", $ctx); $this->emitter->emit("mov w0, #0"); $this->lastExprType = 'int32'; return null; }
        $this->emitFrameLoad('x1', $symbol->offset);
        $this->emitter->emit("ldr w0, [x1]");
        $type = $symbol->dataType;
        if (str_starts_with($type, '*')) $type = substr($type, 1);
        $this->lastExprType = $type;
        return null;
    }

    // ─── Helpers ───
    private function pushW0(): void { $this->emitter->emit("str w0, [sp, #-16]!"); }
    private function popW1(): void { $this->emitter->emit("ldr w1, [sp], #16"); }
    private function pushResult(string $type): void
    {
        if ($type === 'float32') $this->emitter->emit("str s0, [sp, #-16]!");
        elseif (TypeSizes::is64Bit($type)) $this->emitter->emit("str x0, [sp, #-16]!");
        else $this->emitter->emit("str w0, [sp, #-16]!");
    }
    private function popFloat(string $reg): void { $this->emitter->emit("ldr {$reg}, [sp], #16"); }
    private function emitModulo(): void { $this->emitter->emit("sdiv w2, w1, w0"); $this->emitter->emit("msub w0, w2, w0, w1"); }

    private function addFloatLiteral(string $value): string
    {
        if (!isset($this->floatLiterals)) $this->floatLiterals = [];
        if (isset($this->floatLiterals[$value])) return $this->floatLiterals[$value];
        $label = '.Lflt_' . count($this->floatLiterals);
        $this->floatLiterals[$value] = $label;
        $this->emitter->data("{$label}: .float {$value}");
        return $label;
    }
}