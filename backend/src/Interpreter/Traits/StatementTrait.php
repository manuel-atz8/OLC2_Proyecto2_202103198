<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Runtime\Types\GolampiValue;
use Golampi\Runtime\Types\GolampiArray;
use Golampi\Semantic\TypeChecker;

trait StatementTrait
{
    /**
     * leftValue assignOp expr
     */
    public function visitAssignStmt($ctx): mixed
    {
        $leftValue = $ctx->leftValue();
        $op = $ctx->assignOp()->getText();
        $val = $this->visit($ctx->expr());

        if ($val === null) {
            $val = GolampiValue::nil();
        }

        $leftClass = get_class($leftValue);

        // ID = expr (simple)
        if (str_contains($leftClass, 'LValueId')) {
            $name = $leftValue->ID()->getText();
            $symbol = $this->env->lookup($name);

            if ($symbol === null) {
                $this->semanticError("Variable '{$name}' no declarada", $ctx);
                return null;
            }

            if ($symbol->isConstant) {
                $this->semanticError("No se puede modificar la constante '{$name}'", $ctx);
                return null;
            }

            // Si es puntero, asignar al referenciado
            if (str_starts_with($symbol->dataType, '*') && is_array($symbol->value) && isset($symbol->value['env'])) {
                $refEnv = $symbol->value['env'];
                $refName = $symbol->value['name'];

                $finalValue = $val;
                if ($op !== '=') {
                    $refSymbol = $refEnv->lookup($refName);
                    $current = new GolampiValue(substr($symbol->dataType, 1), $refSymbol->value);
                    $finalValue = $this->resolveCompoundOp($op, $current, $val, $ctx);
                    if ($finalValue === null) return null;
                }

                $refEnv->assign($refName, $finalValue->value);
                return null;
            }

            $finalValue = $this->resolveCompoundAssign($op, $symbol, $val, $ctx);
            if ($finalValue !== null) {
                $this->env->assign($name, $finalValue->value);
            }

            return null;
        }

        // ID[expr] = expr (arreglo)
        if (str_contains($leftClass, 'LValueArray')) {
            $name = $leftValue->ID()->getText();
            $symbol = $this->env->lookup($name);

            if ($symbol === null) {
                $this->semanticError("Arreglo '{$name}' no declarado", $ctx);
                return null;
            }

            // Auto-desreferencia puntero a arreglo
            $array = $symbol->value;
            if (str_starts_with($symbol->dataType, '*') && is_array($symbol->value) && isset($symbol->value['env'])) {
                $refEnv = $symbol->value['env'];
                $refName = $symbol->value['name'];
                $refSymbol = $refEnv->lookup($refName);
                if ($refSymbol === null) {
                    $this->semanticError("Referencia inválida", $ctx);
                    return null;
                }
                $array = $refSymbol->value;
            }

            if (!($array instanceof GolampiArray)) {
                $this->semanticError("'{$name}' no es un arreglo", $ctx);
                return null;
            }

            $indices = [];
            foreach ($leftValue->expr() as $exprCtx) {
                $idx = $this->visit($exprCtx);
                if ($idx === null || !$idx->isInt()) {
                    $this->semanticError("El índice del arreglo debe ser entero", $ctx);
                    return null;
                }
                $indices[] = (int) $idx->value;
            }

            if ($op !== '=') {
                $currentVal = $array->get($indices);
                if ($currentVal === null) {
                    $this->semanticError("Índice fuera de rango en arreglo '{$name}'", $ctx);
                    return null;
                }
                $current = new GolampiValue($array->elementType, $currentVal);
                $val = $this->resolveCompoundOp($op, $current, $val, $ctx);
                if ($val === null) return null;
            }

            if (!$array->set($indices, $val->value)) {
                $this->semanticError("Índice fuera de rango en arreglo '{$name}'", $ctx);
            }

            return null;
        }

        // *ID = expr (puntero)
        if (str_contains($leftClass, 'LValuePointer')) {
            $name = $leftValue->ID()->getText();
            $symbol = $this->env->lookup($name);

            if ($symbol === null) {
                $this->semanticError("Variable '{$name}' no declarada", $ctx);
                return null;
            }

            // Resolver la referencia del puntero
            if (is_array($symbol->value) && isset($symbol->value['env'])) {
                $refEnv = $symbol->value['env'];
                $refName = $symbol->value['name'];
                $refSymbol = $refEnv->lookup($refName);

                if ($refSymbol === null) {
                    $this->semanticError("Referencia inválida del puntero '{$name}'", $ctx);
                    return null;
                }

                if ($op !== '=') {
                    $current = new GolampiValue($refSymbol->dataType, $refSymbol->value);
                    $val = $this->resolveCompoundOp($op, $current, $val, $ctx);
                    if ($val === null) {
                        return null;
                    }
                }

                $refEnv->assign($refName, $val->value);
                return null;
            }

            // Fallback
            $refName = $symbol->value;
            $refSymbol = $this->env->lookup($refName);

            if ($refSymbol === null) {
                $this->semanticError("Referencia inválida del puntero '{$name}'", $ctx);
                return null;
            }

            if ($op !== '=') {
                $current = new GolampiValue($refSymbol->dataType, $refSymbol->value);
                $val = $this->resolveCompoundOp($op, $current, $val, $ctx);
                if ($val === null) {
                    return null;
                }
            }

            $this->env->assign($refName, $val->value);
            return null;
        }

        $this->semanticError("Asignación no reconocida", $ctx);
        return null;
    }

    /**
     * ID++
     */
    public function visitIncStmt($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            return null;
        }

        if (!in_array($symbol->dataType, ['int32', 'float32', 'rune'])) {
            $this->semanticError("Incremento no aplicable a tipo '{$symbol->dataType}'", $ctx);
            return null;
        }

        $this->env->assign($name, $symbol->value + 1);
        return null;
    }

    /**
     * ID--
     */
    public function visitDecStmt($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            return null;
        }

        if (!in_array($symbol->dataType, ['int32', 'float32', 'rune'])) {
            $this->semanticError("Decremento no aplicable a tipo '{$symbol->dataType}'", $ctx);
            return null;
        }

        $this->env->assign($name, $symbol->value - 1);
        return null;
    }

    /**
     * Resuelve asignación compuesta (+=, -=, *=, /=).
     */
    private function resolveCompoundAssign(string $op, $symbol, GolampiValue $val, $ctx): ?GolampiValue
    {
        if ($op === '=') {
            return $val;
        }

        $current = new GolampiValue($symbol->dataType, $symbol->value);
        return $this->resolveCompoundOp($op, $current, $val, $ctx);
    }

    /**
     * Ejecuta la operación aritmética detrás de un operador compuesto.
     */
    private function resolveCompoundOp(string $op, GolampiValue $current, GolampiValue $val, $ctx): ?GolampiValue
    {
        $arithmeticOp = match ($op) {
            '+=' => '+',
            '-=' => '-',
            '*=' => '*',
            '/=' => '/',
            default => null,
        };

        if ($arithmeticOp === null) {
            return $val;
        }

        $result = TypeChecker::arithmeticOp($arithmeticOp, $current, $val);

        if ($result->isNil()) {
            $this->semanticError(
                "Operación '{$op}' inválida entre '{$current->type}' y '{$val->type}'",
                $ctx
            );
            return null;
        }

        return $result;
    }

    /**
     * expression como sentencia (ej: llamada a función sin usar retorno)
     */
    public function visitExprStmt($ctx): mixed
    {
        $this->visit($ctx->expr());
        return null;
    }
}