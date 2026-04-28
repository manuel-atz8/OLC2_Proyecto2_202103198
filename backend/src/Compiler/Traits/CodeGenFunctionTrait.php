<?php

namespace Golampi\Compiler\Traits;

use Golampi\Runtime\Types\GolampiFunction;
use Golampi\Runtime\Environment\Symbol;
use Golampi\Compiler\TypeSizes;

trait CodeGenFunctionTrait
{
    public function registerFunction($ctx): void
    {
        $name = $ctx->ID()->getText();
        $line = $ctx->ID()->getSymbol()->getLine();
        $col = $ctx->ID()->getSymbol()->getCharPositionInLine();

        if (isset($this->functions[$name])) { $this->semanticError("Función '{$name}' ya declarada", $ctx); return; }

        $params = [];
        $paramsCtx = $ctx->params();
        if ($paramsCtx !== null) {
            foreach ($paramsCtx->param() as $paramCtx) {
                $paramName = $paramCtx->ID()->getText();
                $isPointer = $paramCtx->pointerMark() !== null;
                $typeCtx = $paramCtx->type();
                $typeClass = get_class($typeCtx);

                if (str_contains($typeClass, 'TArray')) {
                    $arrayDims = $typeCtx->arrayDimension();
                    $innerType = $this->resolveType($typeCtx->type());
                    $dims = [];
                    foreach ($arrayDims as $d) $dims[] = (int) $d->expr()->getText();
                    $arrayType = str_repeat('[]', count($dims)) . $innerType;

                    if ($isPointer) {
                        $params[] = ['name' => $paramName, 'type' => $innerType, 'fullType' => '*' . $arrayType, 'isPointer' => true, 'isArray' => true, 'isPointerToArray' => true, 'dims' => $dims];
                    } else {
                        $params[] = ['name' => $paramName, 'type' => $innerType, 'fullType' => $arrayType, 'isPointer' => false, 'isArray' => true, 'isPointerToArray' => false, 'dims' => $dims];
                    }
                } elseif (str_contains($typeClass, 'TPointer')) {
                    $innerTypeCtx = $typeCtx->type();
                    $innerTypeClass = get_class($innerTypeCtx);
                    if (str_contains($innerTypeClass, 'TArray')) {
                        $arrayDims = $innerTypeCtx->arrayDimension();
                        $baseType = $this->resolveType($innerTypeCtx->type());
                        $dims = [];
                        foreach ($arrayDims as $d) $dims[] = (int) $d->expr()->getText();
                        $arrayType = str_repeat('[]', count($dims)) . $baseType;
                        $params[] = ['name' => $paramName, 'type' => $baseType, 'fullType' => '*' . $arrayType, 'isPointer' => true, 'isArray' => true, 'isPointerToArray' => true, 'dims' => $dims];
                    } else {
                        $innerType = $this->resolveType($innerTypeCtx);
                        $params[] = ['name' => $paramName, 'type' => $innerType, 'fullType' => '*' . $innerType, 'isPointer' => true, 'isArray' => false];
                    }
                } else {
                    $paramType = $this->resolveType($typeCtx);
                    if ($isPointer) {
                        $params[] = ['name' => $paramName, 'type' => $paramType, 'fullType' => '*' . $paramType, 'isPointer' => true, 'isArray' => false];
                    } else {
                        $params[] = ['name' => $paramName, 'type' => $paramType, 'fullType' => $paramType, 'isPointer' => false, 'isArray' => false];
                    }
                }
            }
        }

        $returnTypes = [];
        $returnCtx = $ctx->returnType();
        if ($returnCtx !== null) {
            foreach ($returnCtx->type() as $typeCtx) {
                $typeClass = get_class($typeCtx);
                if (str_contains($typeClass, 'TArray')) {
                    $arrayDims = $typeCtx->arrayDimension();
                    $innerType = $this->resolveType($typeCtx->type());
                    $dims = [];
                    foreach ($arrayDims as $d) $dims[] = (int) $d->expr()->getText();
                    $returnTypes[] = ['type' => str_repeat('[]', count($dims)) . $innerType, 'baseType' => $innerType, 'dims' => $dims, 'isArray' => true];
                } else {
                    $rt = $this->resolveType($typeCtx);
                    $returnTypes[] = ['type' => $rt, 'baseType' => $rt, 'isArray' => false];
                }
            }
        }

        $func = new GolampiFunction($name, $params, $returnTypes, $ctx->block(), $line, $col);
        $this->functions[$name] = $func;
        $this->symbolTable->register(new Symbol($name, 'función', null, 'global', 'function', $line, $col));
    }

    public function emitFunction(GolampiFunction $func): void
    {
        $this->emitter->blank();
        $this->emitter->comment("=== Función: {$func->name} ===");

        $previousEnv = $this->env;
        $previousFunction = $this->currentFunction;
        $this->currentFunction = $func->name;
        $this->env = $this->globalEnv->createChild($func->name);

        $this->emitter->label("func_{$func->name}");
        $placeholder = "____FRAME_{$func->name}____";
        $this->emitter->emit("stp x29, x30, [sp, #-16]!");
        $this->emitter->emit("mov x29, sp");
        $this->emitter->emit("stp x19, x20, [sp, #-16]!");
        $this->emitter->emit("sub sp, sp, #{$placeholder}");
        $this->emitter->blank();

        foreach ($func->params as $i => $param) {
            if ($i >= 8) { $this->semanticError("Máximo 8 parámetros soportados", null); break; }

            $isPointerToArray = $param['isPointerToArray'] ?? false;
            $isArray = $param['isArray'] ?? false;
            $isPointer = $param['isPointer'] ?? false;

            if ($isPointerToArray) {
                $size = 8;
                $offset = $this->env->allocateLocal($size);
                $fullType = $param['fullType'];
                $dims = $param['dims'] ?? [];
                $this->emitter->comment("param {$param['name']}: {$fullType} (ptr to array)");
                $this->emitFrameStore("x{$i}", $offset);
                $symbol = new Symbol($param['name'], $fullType, null, $func->name, 'parameter', $func->line, $func->column, false, $offset, $size, 'stack');
                $symbol->value = $dims;
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);

            } elseif ($isArray && !$isPointer) {
                $dims = $param['dims'] ?? [];
                $baseType = $param['type'];
                $totalSize = TypeSizes::arrayTotal($baseType, $dims);
                $offset = $this->env->allocateLocal($totalSize);
                $fullType = $param['fullType'];
                $this->emitter->comment("param {$param['name']}: {$fullType} (array copy, {$totalSize}B)");
                $this->emitter->emit("mov x10, x{$i}");
                $this->emitFrameAddr('x11', $offset);
                $this->emitter->emit("mov x12, #{$totalSize}");
                $cl = $this->labels->next('cp'); $cd = $this->labels->next('cpd');
                $this->emitter->label($cl);
                $this->emitter->emit("cbz x12, {$cd}");
                $this->emitter->emit("ldrb w13, [x10], #1");
                $this->emitter->emit("strb w13, [x11], #1");
                $this->emitter->emit("sub x12, x12, #1");
                $this->emitter->emit("b {$cl}");
                $this->emitter->label($cd);
                $symbol = new Symbol($param['name'], $fullType, null, $func->name, 'parameter', $func->line, $func->column, false, $offset, $totalSize, 'stack');
                $symbol->value = $dims;
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);

            } else {
                $type = $param['fullType'];
                $size = $isPointer ? 8 : TypeSizes::of($param['type']);
                $offset = $this->env->allocateLocal($size);
                $this->emitter->comment("param {$param['name']}: {$type}");

                if ($param['type'] === 'float32' && !$isPointer) {
                    $this->emitter->emit("fmov s0, w{$i}");
                    $this->emitFrameStore('s0', $offset);
                } elseif ($isPointer || TypeSizes::is64Bit($param['type'])) {
                    $this->emitFrameStore("x{$i}", $offset);
                } else {
                    $this->emitFrameStore("w{$i}", $offset);
                }

                $symbol = new Symbol($param['name'], $type, null, $func->name, 'parameter', $func->line, $func->column, false, $offset, $size, 'stack');
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);
            }
        }

        $this->emitter->blank();
        $this->visitBlock($func->body);

        $this->emitter->blank();
        $this->emitter->label(".L_epilogue_{$func->name}");
        $this->emitter->emit("add sp, sp, #{$placeholder}");
        $this->emitter->emit("ldp x19, x20, [sp], #16");
        $this->emitter->emit("ldp x29, x30, [sp], #16");
        $this->emitter->emit("ret");

        $frameSize = $this->env->getFrameSize();
        if ($frameSize < 16) $frameSize = 16;
        if ($frameSize % 16 !== 0) $frameSize = (int)(ceil($frameSize / 16) * 16);
        $this->frameSizes[$func->name] = $frameSize;

        $this->env = $previousEnv;
        $this->currentFunction = $previousFunction;
    }

    public function visitCallAtom($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        if (in_array($name, ['len', 'now', 'substr', 'typeOf'])) return $this->emitBuiltinCall($name, $ctx);

        if (!isset($this->functions[$name])) {
            $this->semanticError("Función '{$name}' no declarada", $ctx);
            $this->emitter->emit("mov w0, #0");
            $this->lastExprType = 'int32';
            return null;
        }

        $func = $this->functions[$name];
        if ($func->isMain()) { $this->semanticError("No se puede llamar a 'main'", $ctx); $this->emitter->emit("mov w0, #0"); $this->lastExprType = 'int32'; return null; }

        $argList = $ctx->argList();
        $args = $argList !== null ? $argList->arg() : [];
        if (count($args) !== $func->paramCount()) {
            $this->semanticError("'{$func->name}' espera {$func->paramCount()} args, recibió " . count($args), $ctx);
            $this->emitter->emit("mov w0, #0"); $this->lastExprType = 'int32'; return null;
        }

        $this->emitter->blank();
        $this->emitter->comment("Llamada a {$name}(...)");

        for ($i = count($args) - 1; $i >= 0; $i--) {
            $param = $func->params[$i] ?? null;
            $isArray = $param['isArray'] ?? false;
            $isPointer = $param['isPointer'] ?? false;
            $isPointerToArray = $param['isPointerToArray'] ?? false;

            if ($isArray && !$isPointer && !$isPointerToArray) {
                $argClass = get_class($args[$i]);
                if (str_contains($argClass, 'ValArg')) {
                    $exprCtx = $args[$i]->expr();
                    $argText = $exprCtx ? $exprCtx->getText() : $args[$i]->getText();
                    $arrSymbol = $this->env->lookup($argText);
                    if ($arrSymbol !== null) {
                        $this->emitFrameAddr('x0', $arrSymbol->offset);
                    } else {
                        $this->visit($args[$i]);
                    }
                } else {
                    $this->visit($args[$i]);
                }
                $this->emitter->emit("str x0, [sp, #-16]!");
            } else {
                $this->visit($args[$i]);
                $paramType = $param['type'] ?? 'int32';
                if ($paramType === 'float32' && !($param['isPointer'] ?? false)) {
                    $this->emitter->emit("fmov w0, s0");
                }
                $this->emitter->emit("str x0, [sp, #-16]!");
            }
        }

        for ($i = 0; $i < count($args); $i++) {
            $this->emitter->emit("ldr x{$i}, [sp], #16");
        }

        $this->emitter->emit("bl func_{$name}");

        // Determine return type and handle array returns
        $returnType = 'int32';
        if (!empty($func->returnTypes)) {
            $firstRet = $func->returnTypes[0];
            $returnType = is_array($firstRet) ? ($firstRet['type'] ?? 'int32') : $firstRet;

            // Array return: x0 = source address of callee's local array
            // Copy it immediately to our own frame before it's overwritten
            if (is_array($firstRet) && ($firstRet['isArray'] ?? false)) {
                $dims = $firstRet['dims'] ?? [];
                $baseType = $firstRet['baseType'] ?? 'int32';
                $totalSize = TypeSizes::arrayTotal($baseType, $dims);
                $localOffset = $this->env->allocateLocal($totalSize);

                $this->emitter->comment("copy returned array ({$totalSize}B) to local frame");
                $this->emitter->emit("mov x1, x0");  // source (callee's address)
                $this->emitFrameAddr('x0', $localOffset);  // dest (our frame)
                $this->emitter->emit("mov x2, #{$totalSize}");
                $this->emitter->emit("bl _memcpy_arr");

                // x0 now = our local copy's address
                $this->emitFrameAddr('x0', $localOffset);

                // Register this temp array so it can be accessed
                // Store the offset for later use by the assignment
                $this->lastArrayReturnOffset = $localOffset;
                $this->lastArrayReturnDims = $dims;
                $this->lastArrayReturnBaseType = $baseType;
                $this->lastExprType = $returnType;
                return null;
            }

            if ($returnType === 'float32') {
                $this->emitter->emit("fmov s0, w0");
            }
        }
        $this->lastExprType = $returnType;
        return null;
    }

    public function visitReturnStmt($ctx): mixed
    {
        $this->emitter->blank();
        $this->emitter->comment("return");

        if ($ctx->exprList() !== null) {
            $exprs = $ctx->exprList()->expr();
            $func = $this->functions[$this->currentFunction] ?? null;

            if (count($exprs) === 1) {
                if ($func && !empty($func->returnTypes)) {
                    $retInfo = $func->returnTypes[0];
                    if (is_array($retInfo) && ($retInfo['isArray'] ?? false)) {
                        $text = $exprs[0]->getText();
                        $symbol = $this->env->lookup($text);
                        if ($symbol !== null) {
                            $this->emitFrameAddr('x0', $symbol->offset);
                        } else {
                            $this->visit($exprs[0]);
                        }
                        $this->emitter->emit("b .L_epilogue_{$this->currentFunction}");
                        return null;
                    }
                }
                $this->visit($exprs[0]);
                if ($func && !empty($func->returnTypes)) {
                    $retInfo = $func->returnTypes[0];
                    $retType = is_array($retInfo) ? ($retInfo['type'] ?? 'int32') : $retInfo;
                    if ($retType === 'float32') $this->emitter->emit("fmov w0, s0");
                }
            } elseif (count($exprs) === 2) {
                $this->visit($exprs[0]);
                $this->emitter->emit("str x0, [sp, #-16]!");
                $this->visit($exprs[1]);
                $this->emitter->emit("mov x1, x0");
                $this->emitter->emit("ldr x0, [sp], #16");
            } elseif (count($exprs) === 3) {
                $this->visit($exprs[0]);
                $this->emitter->emit("str x0, [sp, #-16]!");
                $this->visit($exprs[1]);
                $this->emitter->emit("str x0, [sp, #-16]!");
                $this->visit($exprs[2]);
                $this->emitter->emit("mov x2, x0");
                $this->emitter->emit("ldr x1, [sp], #16");
                $this->emitter->emit("ldr x0, [sp], #16");
            }
        }

        $this->emitter->emit("b .L_epilogue_{$this->currentFunction}");
        return null;
    }

    public function visitFunctionDeclaration($ctx): mixed { return null; }
    public function visitValArg($ctx): mixed { return $this->visit($ctx->expr()); }

    public function visitRefArg($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);
        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            $this->emitter->emit("mov x0, #0");
            $this->lastExprType = '*int32';
            return null;
        }
        $this->emitFrameAddr('x0', $symbol->offset);
        $this->lastExprType = '*' . $symbol->dataType;
        return null;
    }
}