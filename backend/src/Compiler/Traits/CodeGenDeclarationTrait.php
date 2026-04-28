<?php

namespace Golampi\Compiler\Traits;

use Golampi\Runtime\Environment\Symbol;
use Golampi\Compiler\TypeSizes;

trait CodeGenDeclarationTrait
{
    public function visitVarDeclaration($ctx): mixed
    {
        $ids = $ctx->idList()->ID();

        // ─── Case 1: No explicit type → infer from expression ───
        if ($ctx->type() === null) {
            $exprs = $ctx->exprList()->expr();

            // Multi-return: N ids, 1 expr (function call)
            if (count($ids) > 1 && count($exprs) === 1) {
                return $this->declareMultiReturn($ids, $exprs[0], $ctx);
            }

            if (count($ids) !== count($exprs)) {
                $this->semanticError("La cantidad de identificadores no coincide con las expresiones", $ctx);
                return null;
            }

            foreach ($ids as $i => $idToken) {
                $name = $idToken->getText();
                $line = $idToken->getSymbol()->getLine();
                $col = $idToken->getSymbol()->getCharPositionInLine();

                if ($this->env->lookupLocal($name) !== null) {
                    $this->semanticError("Identificador '{$name}' ya declarado en este ámbito", $ctx);
                    continue;
                }

                $isArrayLit = $this->isArrayLiteralExpr($exprs[$i]);

                if ($isArrayLit) {
                    $this->declareArrayFromExpr($name, $exprs[$i], $line, $col);
                } else {
                    $this->visit($exprs[$i]);
                    $type = $this->lastExprType;
                    $size = TypeSizes::of($type);
                    $offset = $this->env->allocateLocal($size);

                    $this->emitter->comment("var {$name} ({$type} inferido) = expr");
                    $this->emitStoreResult($type, $offset);

                    $symbol = new Symbol($name, $type, null, $this->env->getScopeName(), 'variable', $line, $col, false, $offset, $size, 'stack');
                    $this->env->declare($symbol);
                    $this->symbolTable->register($symbol);
                }
            }
            return null;
        }

        // ─── Case 2: Explicit type ───
        $type = $this->resolveType($ctx->type());
        $dims = $ctx->arrayDimension();
        $hasInit = $ctx->exprList() !== null;

        // ─── Case 2a: Array declaration ───
        if (!empty($dims)) {
            $dimensions = [];
            foreach ($dims as $dimCtx) {
                $dimVal = $dimCtx->expr()->getText();
                $dimensions[] = (int) $dimVal;
            }

            foreach ($ids as $i => $idToken) {
                $name = $idToken->getText();
                $line = $idToken->getSymbol()->getLine();
                $col = $idToken->getSymbol()->getCharPositionInLine();

                if ($this->env->lookupLocal($name) !== null) {
                    $this->semanticError("Identificador '{$name}' ya declarado en este ámbito", $ctx);
                    continue;
                }

                $totalSize = TypeSizes::arrayTotal($type, $dimensions);
                $offset = $this->env->allocateLocal($totalSize);

                $this->emitter->comment("var {$name} array {$type} dims=" . implode('x', $dimensions) . " size={$totalSize}");

                // Zero-initialize
                $elemSize = TypeSizes::of($type);
                $totalElements = 1;
                foreach ($dimensions as $d) $totalElements *= $d;

                $this->emitZeroInitArray($offset, $totalElements, $elemSize, $type);

                if ($hasInit) {
                    $exprs = $ctx->exprList()->expr();
                    if (isset($exprs[$i])) {
                        $this->arrayTarget = [
                            'offset' => $offset,
                            'baseType' => $type,
                            'dims' => $dimensions,
                        ];
                        $this->visit($exprs[$i]);
                        $this->arrayTarget = null;
                    }
                }

                $arrayType = str_repeat('[]', count($dimensions)) . $type;
                $symbol = new Symbol($name, $arrayType, null, $this->env->getScopeName(), 'array', $line, $col, false, $offset, $totalSize, 'stack');
                $symbol->value = $dimensions;
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);
            }
            return null;
        }

        // ─── Case 2b: Scalar variable with explicit type ───
        if ($hasInit) {
            $exprs = $ctx->exprList()->expr();
            if (count($ids) !== count($exprs)) {
                $this->semanticError("La cantidad de identificadores (" . count($ids) . ") no coincide con las expresiones (" . count($exprs) . ")", $ctx);
                return null;
            }
        }

        foreach ($ids as $i => $idToken) {
            $name = $idToken->getText();
            $line = $idToken->getSymbol()->getLine();
            $col = $idToken->getSymbol()->getCharPositionInLine();

            if ($this->env->lookupLocal($name) !== null) {
                $this->semanticError("Identificador '{$name}' ya declarado en este ámbito", $ctx);
                continue;
            }

            $size = TypeSizes::of($type);
            $offset = $this->env->allocateLocal($size);

            if ($hasInit) {
                $this->visit($exprs[$i]);
                $this->emitter->comment("var {$name} {$type} = expr");
            } else {
                $this->emitter->comment("var {$name} {$type} (default)");
                if ($type === 'float32') {
                    $this->emitter->emit("movi v0.2s, #0");
                } elseif ($type === 'string') {
                    $label = $this->stringPool->add("");
                    $this->emitter->emit("adrp x0, {$label}");
                    $this->emitter->emit("add x0, x0, :lo12:{$label}");
                } elseif (TypeSizes::is64Bit($type)) {
                    $this->emitter->emit("mov x0, #0");
                } else {
                    $this->emitter->emit("mov w0, #0");
                }
            }

            $this->emitStoreResult($type, $offset);

            $symbol = new Symbol($name, $type, null, $this->env->getScopeName(), 'variable', $line, $col, false, $offset, $size, 'stack');
            $this->env->declare($symbol);
            $this->symbolTable->register($symbol);
        }
        return null;
    }

    public function visitShortVarDecl($ctx): mixed
    {
        $ids = $ctx->idList()->ID();
        $exprs = $ctx->exprList()->expr();

        // Multi-return: N ids, 1 expr (function call)
        if (count($ids) > 1 && count($exprs) === 1) {
            return $this->declareMultiReturn($ids, $exprs[0], $ctx);
        }

        if (count($ids) !== count($exprs)) {
            $this->semanticError("La cantidad de identificadores no coincide con las expresiones", $ctx);
            return null;
        }

        foreach ($ids as $i => $idToken) {
            $name = $idToken->getText();
            $line = $idToken->getSymbol()->getLine();
            $col = $idToken->getSymbol()->getCharPositionInLine();

            $isArrayLit = $this->isArrayLiteralExpr($exprs[$i]);
            $existing = $this->env->lookupLocal($name);

            if ($isArrayLit && $existing === null) {
                $this->declareArrayFromExpr($name, $exprs[$i], $line, $col);
            } else if ($existing === null) {
                $this->visit($exprs[$i]);
                $type = $this->lastExprType;

                // Check if this was an array return from a function call
                if ($this->lastArrayReturnOffset !== null) {
                    $offset = $this->lastArrayReturnOffset;
                    $dims = $this->lastArrayReturnDims ?? [];
                    $baseType = $this->lastArrayReturnBaseType ?? 'int32';
                    $totalSize = TypeSizes::arrayTotal($baseType, $dims);
                    $arrayType = str_repeat('[]', count($dims)) . $baseType;

                    $this->emitter->comment("{$name} := array return ({$arrayType})");
                    $symbol = new Symbol($name, $arrayType, null, $this->env->getScopeName(), 'array', $line, $col, false, $offset, $totalSize, 'stack');
                    $symbol->value = $dims;
                    $this->env->declare($symbol);
                    $this->symbolTable->register($symbol);

                    $this->lastArrayReturnOffset = null;
                    $this->lastArrayReturnDims = null;
                    $this->lastArrayReturnBaseType = null;
                } else {
                    $size = TypeSizes::of($type);
                    $offset = $this->env->allocateLocal($size);

                    $this->emitter->comment("{$name} := expr ({$type})");
                    $this->emitStoreResult($type, $offset);

                    $symbol = new Symbol($name, $type, null, $this->env->getScopeName(), 'variable', $line, $col, false, $offset, $size, 'stack');
                    $this->env->declare($symbol);
                    $this->symbolTable->register($symbol);
                }
            } else {
                $this->visit($exprs[$i]);
                $this->emitter->comment("{$name} = expr (reasignación en :=)");
                $this->emitStoreResult($existing->dataType, $existing->offset);
            }
        }
        return null;
    }

    /**
     * Handle multi-return: a, b, c := someFunc(args)
     * The function puts values in x0, x1, x2.
     * We call the function, then store each return register.
     */
    private function declareMultiReturn(array $ids, $exprCtx, $ctx): mixed
    {
        $count = count($ids);
        $this->emitter->comment("Multi-return: {$count} values");

        // Visit the expression (function call) — puts results in x0, x1, x2
        $this->visit($exprCtx);

        // Now x0 has first value. For multi-return, x1 has second, x2 has third.
        // We need to determine the types from the function signature
        $funcName = null;
        try {
            $text = $exprCtx->getText();
            // Extract function name from call expression
            if (preg_match('/^([a-zA-Z_]\w*)\(/', $text, $m)) {
                $funcName = $m[1];
            }
        } catch (\Throwable $e) {}

        $func = $funcName ? ($this->functions[$funcName] ?? null) : null;

        // Determine return types
        $returnTypes = [];
        if ($func && !empty($func->returnTypes)) {
            foreach ($func->returnTypes as $rt) {
                if (is_array($rt)) {
                    $returnTypes[] = $rt['type'] ?? 'int32';
                } else {
                    $returnTypes[] = $rt;
                }
            }
        }

        // Fill missing types with int32
        while (count($returnTypes) < $count) {
            $returnTypes[] = 'int32';
        }

        // Save all return registers to stack first (in case they'd be clobbered)
        for ($i = $count - 1; $i >= 0; $i--) {
            $this->emitter->emit("str x{$i}, [sp, #-16]!");
        }

        // Now declare each variable and store from the saved stack values
        foreach ($ids as $i => $idToken) {
            $name = $idToken->getText();
            $line = $idToken->getSymbol()->getLine();
            $col = $idToken->getSymbol()->getCharPositionInLine();
            $type = $returnTypes[$i];

            $size = TypeSizes::of($type);
            $offset = $this->env->allocateLocal($size);

            // Pop the saved value
            $this->emitter->emit("ldr x0, [sp], #16");
            $this->emitter->comment("{$name} := return[{$i}] ({$type})");
            $this->emitStoreResult($type, $offset);

            $existing = $this->env->lookupLocal($name);
            if ($existing === null) {
                $symbol = new Symbol($name, $type, null, $this->env->getScopeName(), 'variable', $line, $col, false, $offset, $size, 'stack');
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);
            }
        }

        return null;
    }

    public function visitConstDeclaration($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $type = $this->resolveType($ctx->type());
        $line = $ctx->ID()->getSymbol()->getLine();
        $col = $ctx->ID()->getSymbol()->getCharPositionInLine();

        if ($this->env->lookupLocal($name) !== null) {
            $this->semanticError("Identificador '{$name}' ya declarado en este ámbito", $ctx);
            return null;
        }

        $this->visit($ctx->expr());
        $size = TypeSizes::of($type);
        $offset = $this->env->allocateLocal($size);

        $this->emitter->comment("const {$name} {$type} = expr");
        $this->emitStoreResult($type, $offset);

        $symbol = new Symbol($name, $type, null, $this->env->getScopeName(), 'constant', $line, $col, true, $offset, $size, 'stack');
        $this->env->declare($symbol);
        $this->symbolTable->register($symbol);
        return null;
    }

    // ─── Helpers ───

    /** Zero-initialize array elements on the stack */
    private function emitZeroInitArray(int $baseOffset, int $totalElements, int $elemSize, string $type): void
    {
        for ($j = 0; $j < $totalElements; $j++) {
            $elemOffset = $baseOffset - ($j * $elemSize);
            if ($type === 'string') {
                $this->emitFrameStore('xzr', $elemOffset);
            } else {
                $this->emitFrameStore('wzr', $elemOffset);
            }
        }
    }

    private function isArrayLiteralExpr($exprCtx): bool
    {
        try {
            $node = $exprCtx;
            if (method_exists($node, 'orExpr')) $node = $node->orExpr();
            if ($node && method_exists($node, 'andExpr')) $node = $node->andExpr(0);
            if ($node && method_exists($node, 'eqExpr')) $node = $node->eqExpr(0);
            if ($node && method_exists($node, 'relExpr')) $node = $node->relExpr(0);
            if ($node && method_exists($node, 'addExpr')) $node = $node->addExpr(0);
            if ($node && method_exists($node, 'mulExpr')) $node = $node->mulExpr(0);
            if ($node && method_exists($node, 'unaryExpr')) $node = $node->unaryExpr(0);
            if ($node && method_exists($node, 'atom')) $node = $node->atom();
            if ($node !== null) {
                return str_contains(get_class($node), 'ArrayAtom');
            }
        } catch (\Throwable $e) {}
        return false;
    }

    private function getArrayLiteralFromExpr($exprCtx)
    {
        try {
            $node = $exprCtx;
            if (method_exists($node, 'orExpr')) $node = $node->orExpr();
            if ($node && method_exists($node, 'andExpr')) $node = $node->andExpr(0);
            if ($node && method_exists($node, 'eqExpr')) $node = $node->eqExpr(0);
            if ($node && method_exists($node, 'relExpr')) $node = $node->relExpr(0);
            if ($node && method_exists($node, 'addExpr')) $node = $node->addExpr(0);
            if ($node && method_exists($node, 'mulExpr')) $node = $node->mulExpr(0);
            if ($node && method_exists($node, 'unaryExpr')) $node = $node->unaryExpr(0);
            if ($node && method_exists($node, 'atom')) $node = $node->atom();
            if ($node !== null && method_exists($node, 'arrayLiteral')) {
                return $node->arrayLiteral();
            }
        } catch (\Throwable $e) {}
        return null;
    }

    private function declareArrayFromExpr(string $name, $exprCtx, int $line, int $col): void
    {
        $arrayLit = $this->getArrayLiteralFromExpr($exprCtx);
        if ($arrayLit === null) {
            $this->visit($exprCtx);
            $type = $this->lastExprType;
            $size = TypeSizes::of($type);
            $offset = $this->env->allocateLocal($size);
            $this->emitStoreResult($type, $offset);
            $symbol = new Symbol($name, $type, null, $this->env->getScopeName(), 'variable', $line, $col, false, $offset, $size, 'stack');
            $this->env->declare($symbol);
            $this->symbolTable->register($symbol);
            return;
        }

        $dimCtxs = $arrayLit->arrayDimension();
        $dimensions = [];
        foreach ($dimCtxs as $d) {
            $dimensions[] = (int) $d->expr()->getText();
        }

        $baseType = $this->resolveType($arrayLit->type());
        $elemSize = TypeSizes::of($baseType);
        $totalSize = TypeSizes::arrayTotal($baseType, $dimensions);
        $offset = $this->env->allocateLocal($totalSize);

        $this->emitter->comment("{$name} := array {$baseType} dims=" . implode('x', $dimensions));

        $totalElements = 1;
        foreach ($dimensions as $d) $totalElements *= $d;
        $this->emitZeroInitArray($offset, $totalElements, $elemSize, $baseType);

        $this->arrayTarget = [
            'offset' => $offset,
            'baseType' => $baseType,
            'dims' => $dimensions,
        ];
        $this->visit($exprCtx);
        $this->arrayTarget = null;

        $arrayType = str_repeat('[]', count($dimensions)) . $baseType;
        $symbol = new Symbol($name, $arrayType, null, $this->env->getScopeName(), 'array', $line, $col, false, $offset, $totalSize, 'stack');
        $symbol->value = $dimensions;
        $this->env->declare($symbol);
        $this->symbolTable->register($symbol);
    }

    /** @deprecated Use $this->emitStoreResult() instead */
    private function storeResult(string $type, int $offset): void
    {
        $this->emitStoreResult($type, $offset);
    }
}