<?php

namespace Golampi\Compiler\Traits;

use Golampi\Compiler\TypeSizes;

trait CodeGenStatementTrait
{
    public function visitAssignStmt($ctx): mixed
    {
        $leftValue = $ctx->leftValue();
        $op = $ctx->assignOp()->getText();
        $leftClass = get_class($leftValue);

        if (str_contains($leftClass, 'LValueId')) {
            $name = $leftValue->ID()->getText();
            $symbol = $this->env->lookup($name);
            if ($symbol === null) { $this->semanticError("Variable '{$name}' no declarada", $ctx); return null; }
            if ($symbol->isConstant) { $this->semanticError("No se puede modificar la constante '{$name}'", $ctx); return null; }

            $isFloat = ($symbol->dataType === 'float32');

            if ($op === '=') {
                $this->visit($ctx->expr());
            } else {
                $this->emitter->comment("{$name} {$op} expr");
                if ($isFloat) {
                    $this->emitFrameLoad('s1', $symbol->offset);
                    $this->emitter->emit("str s1, [sp, #-16]!");
                } else {
                    $this->emitFrameLoad('w1', $symbol->offset);
                    $this->emitter->emit("str w1, [sp, #-16]!");
                }

                $this->visit($ctx->expr());

                if ($isFloat) {
                    $this->emitter->emit("ldr s1, [sp], #16");
                    match ($op) { '+=' => $this->emitter->emit("fadd s0, s1, s0"), '-=' => $this->emitter->emit("fsub s0, s1, s0"), '*=' => $this->emitter->emit("fmul s0, s1, s0"), '/=' => $this->emitter->emit("fdiv s0, s1, s0"), default => null };
                } else {
                    $this->emitter->emit("ldr w1, [sp], #16");
                    match ($op) { '+=' => $this->emitter->emit("add w0, w1, w0"), '-=' => $this->emitter->emit("sub w0, w1, w0"), '*=' => $this->emitter->emit("mul w0, w1, w0"), '/=' => $this->emitter->emit("sdiv w0, w1, w0"), default => null };
                }
            }

            $this->emitter->comment("{$name} = resultado");
            $this->emitStoreResult($symbol->dataType, $symbol->offset);
            return null;
        }

        if (str_contains($leftClass, 'LValueArray')) {
            $name = $leftValue->ID()->getText();
            $symbol = $this->env->lookup($name);
            if ($symbol === null) { $this->semanticError("Arreglo '{$name}' no declarado", $ctx); return null; }

            $dataType = $symbol->dataType;
            $isPointerToArray = str_starts_with($dataType, '*[') || str_starts_with($dataType, '*[]');

            $baseType = $isPointerToArray
                ? preg_replace('/^\*(\[\d*\])+/', '', $dataType)
                : preg_replace('/^(\[\d*\])+/', '', $dataType);
            if (!$baseType) $baseType = 'int32';

            $elemSize = TypeSizes::of($baseType);
            $indices = $leftValue->expr();
            $dims = is_array($symbol->value) ? $symbol->value : [];

            // Evaluate RHS
            $this->visit($ctx->expr());
            if ($baseType === 'float32') $this->emitter->emit("str s0, [sp, #-16]!");
            elseif (TypeSizes::is64Bit($baseType)) $this->emitter->emit("str x0, [sp, #-16]!");
            else $this->emitter->emit("str w0, [sp, #-16]!");

            // Compute linearized index
            $this->visit($indices[0]);
            $this->emitter->emit("mov w2, w0");

            for ($k = 1; $k < count($indices); $k++) {
                if (isset($dims[$k])) {
                    $this->emitter->emit("mov w3, #{$dims[$k]}");
                    $this->emitter->emit("mul w2, w2, w3");
                }
                $this->emitter->emit("str w2, [sp, #-16]!");
                $this->visit($indices[$k]);
                $this->emitter->emit("ldr w2, [sp], #16");
                $this->emitter->emit("add w2, w2, w0");
            }

            $this->emitter->emit("mov w3, #{$elemSize}");
            $this->emitter->emit("mul w2, w2, w3");

            if ($isPointerToArray) {
                $this->emitFrameLoad('x1', $symbol->offset);
            } else {
                $this->emitFrameAddr('x1', $symbol->offset);
            }

            $this->emitter->emit("sxtw x2, w2");
            $this->emitter->emit("add x1, x1, x2");

            if ($baseType === 'float32') { $this->emitter->emit("ldr s0, [sp], #16"); $this->emitter->emit("str s0, [x1]"); }
            elseif (TypeSizes::is64Bit($baseType)) { $this->emitter->emit("ldr x0, [sp], #16"); $this->emitter->emit("str x0, [x1]"); }
            else { $this->emitter->emit("ldr w0, [sp], #16"); $this->emitter->emit("str w0, [x1]"); }
            return null;
        }

        if (str_contains($leftClass, 'LValuePointer')) {
            $name = $leftValue->ID()->getText();
            $symbol = $this->env->lookup($name);
            if ($symbol === null) { $this->semanticError("Variable '{$name}' no declarada", $ctx); return null; }
            $this->visit($ctx->expr());
            $this->emitFrameLoad('x1', $symbol->offset);
            $this->emitter->emit("str w0, [x1]");
            return null;
        }

        $this->semanticError("Asignación no reconocida", $ctx);
        return null;
    }

    public function visitIncStmt($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) { $this->semanticError("Variable '{$name}' no declarada", $ctx); return null; }
        $this->emitter->comment("{$name}++");
        $this->emitFrameLoad('w0', $symbol->offset);
        $this->emitter->emit("add w0, w0, #1");
        $this->emitFrameStore('w0', $symbol->offset);
        return null;
    }

    public function visitDecStmt($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) { $this->semanticError("Variable '{$name}' no declarada", $ctx); return null; }
        $this->emitter->comment("{$name}--");
        $this->emitFrameLoad('w0', $symbol->offset);
        $this->emitter->emit("sub w0, w0, #1");
        $this->emitFrameStore('w0', $symbol->offset);
        return null;
    }

    public function visitExprStmt($ctx): mixed
    {
        $this->visit($ctx->expr());
        return null;
    }
}