<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Runtime\Types\GolampiValue;
use Golampi\Runtime\Types\GolampiArray;
use Golampi\Runtime\Environment\Symbol;
use Golampi\Semantic\TypeChecker;

trait DeclarationTrait
{
        /**
     * var x int32
     * var x int32 = 10
     * var x, y int32 = 1, 2
     * var a [5]int32
     */
    public function visitVarDeclaration($ctx): mixed
    {
        $ids = $ctx->idList()->ID();

        // Caso: var sin tipo (var x, y = expr, expr) — infiere tipos
        if ($ctx->type() === null) {
            $exprs = $ctx->exprList()->expr();

            // Puede ser multi-retorno: var a, b, c = func()
            if (count($ids) > 1 && count($exprs) === 1) {
                $this->lastMultiReturn = [];
                $val = $this->visit($exprs[0]);

                if (!empty($this->lastMultiReturn) && count($this->lastMultiReturn) === count($ids)) {
                    foreach ($ids as $i => $idToken) {
                        $name = $idToken->getText();
                        $line = $idToken->getSymbol()->getLine();
                        $col = $idToken->getSymbol()->getCharPositionInLine();

                        $v = $this->lastMultiReturn[$i];
                        $type = $v->isNil() ? 'nil' : $v->type;

                        if ($this->env->lookupLocal($name) === null) {
                            $symbol = new Symbol($name, $type, $v->value, $this->env->getScopeName(), 'variable', $line, $col);
                            $this->env->declare($symbol);
                            $this->symbolTable->register($symbol);
                        } else {
                            $this->env->assign($name, $v->value);
                        }
                    }
                    return null;
                }

                $this->semanticError("La cantidad de identificadores no coincide con las expresiones", $ctx);
                return null;
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

                $val = $this->visit($exprs[$i]);
                if ($val === null) $val = GolampiValue::nil();

                $type = $val->isNil() ? 'nil' : $val->type;
                $symbol = new Symbol($name, $type, $val->value, $this->env->getScopeName(), 'variable', $line, $col);
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);
            }

            return null;
        }

        $type = $this->resolveType($ctx->type());
        $dims = $ctx->arrayDimension();
        $hasInit = $ctx->exprList() !== null;

        if ($hasInit) {
            $exprs = $ctx->exprList()->expr();

            if (count($ids) !== count($exprs)) {
                $this->semanticError(
                    "La cantidad de identificadores (" . count($ids) . ") no coincide con las expresiones (" . count($exprs) . ")",
                    $ctx
                );
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

            if (!empty($dims)) {
                $dimensions = $this->resolveArrayDimensions($dims);
                $array = new GolampiArray($type, $dimensions);

                if ($hasInit) {
                    $val = $this->visit($exprs[$i]);
                    if ($val !== null && $val->value instanceof GolampiArray) {
                        $array = $val->value;
                    }
                }

                $value = new GolampiValue('[]' . $type, $array);
                $category = 'array';
                $symbol = new Symbol($name, $type, $array, $this->env->getScopeName(), $category, $line, $col);
            } else {
                if ($hasInit) {
                    $val = $this->visit($exprs[$i]);
                    if ($val === null) {
                        $val = GolampiValue::nil();
                    }

                    if (!$val->isNil() && !TypeChecker::isAssignable($type, $val->type)) {
                        $this->semanticError(
                            "No se puede asignar tipo '{$val->type}' a variable de tipo '{$type}'",
                            $ctx
                        );
                        continue;
                    }
                } else {
                    $val = GolampiValue::defaultFor($type);
                }

                $category = 'variable';
                $symbol = new Symbol($name, $type, $val->value, $this->env->getScopeName(), $category, $line, $col);
            }

            $this->env->declare($symbol);
            $this->symbolTable->register($symbol);
        }

        return null;
    }

    

    /**
     * x, y := 34, 68
     * resultado, ok := dividir(10, 2)
     */
    public function visitShortVarDecl($ctx): mixed
    {
        $ids = $ctx->idList()->ID();
        $exprs = $ctx->exprList()->expr();

        // Caso especial: múltiples IDs, una sola expresión (multi-retorno)
        if (count($ids) > 1 && count($exprs) === 1) {
            $this->lastMultiReturn = [];
            $val = $this->visit($exprs[0]);

            if (!empty($this->lastMultiReturn) && count($this->lastMultiReturn) === count($ids)) {
                foreach ($ids as $i => $idToken) {
                    $name = $idToken->getText();
                    $line = $idToken->getSymbol()->getLine();
                    $col = $idToken->getSymbol()->getCharPositionInLine();

                    $v = $this->lastMultiReturn[$i];
                    $type = $v->isNil() ? 'nil' : $v->type;

                    $existing = $this->env->lookupLocal($name);
                    if ($existing === null) {
                        $symbol = new Symbol($name, $type, $v->value, $this->env->getScopeName(), 'variable', $line, $col);
                        $this->env->declare($symbol);
                        $this->symbolTable->register($symbol);
                    } else {
                        $this->env->assign($name, $v->value);
                    }
                }
                return null;
            }

            // Si no fue multi-retorno, es error
            $this->semanticError(
                "La cantidad de identificadores no coincide con las expresiones",
                $ctx
            );
            return null;
        }

        // Caso normal: misma cantidad de IDs y expresiones
        if (count($ids) !== count($exprs)) {
            $this->semanticError(
                "La cantidad de identificadores no coincide con las expresiones",
                $ctx
            );
            return null;
        }

        $atLeastOneNew = false;

        foreach ($ids as $i => $idToken) {
            $name = $idToken->getText();
            $line = $idToken->getSymbol()->getLine();
            $col = $idToken->getSymbol()->getCharPositionInLine();

            $val = $this->visit($exprs[$i]);
            if ($val === null) {
                $val = GolampiValue::nil();
            }

            $existing = $this->env->lookupLocal($name);

            if ($existing === null) {
                $atLeastOneNew = true;
                $type = $val->isNil() ? 'nil' : $val->type;
                $symbol = new Symbol($name, $type, $val->value, $this->env->getScopeName(), 'variable', $line, $col);
                $this->env->declare($symbol);
                $this->symbolTable->register($symbol);
            } else {
                $this->env->assign($name, $val->value);
            }
        }

        if (!$atLeastOneNew) {
            $this->semanticError("Declaración corta ':=' requiere al menos una variable nueva", $ctx);
        }

        return null;
    }

    /**
     * const max int32 = 100
     */
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

        $val = $this->visit($ctx->expr());
        if ($val === null) {
            $val = GolampiValue::nil();
        }

        if (!$val->isNil() && !TypeChecker::isAssignable($type, $val->type)) {
            $this->semanticError(
                "No se puede asignar tipo '{$val->type}' a constante de tipo '{$type}'",
                $ctx
            );
            return null;
        }

        $symbol = new Symbol($name, $type, $val->value, $this->env->getScopeName(), 'constant', $line, $col, true);
        $this->env->declare($symbol);
        $this->symbolTable->register($symbol);

        return null;
    }
}