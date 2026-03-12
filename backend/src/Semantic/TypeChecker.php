<?php

namespace Golampi\Semantic;

use Golampi\Runtime\Types\GolampiValue;

class TypeChecker
{
    /**
     * Evalúa una operación aritmética completa.
     * Retorna GolampiValue con resultado, o nil si es inválida.
     */
    public static function arithmeticOp(string $op, GolampiValue $left, GolampiValue $right): GolampiValue
    {
        if ($left->isNil() || $right->isNil()) {
            return GolampiValue::nil();
        }

        $resultType = TypeTable::arithmetic($op, $left->type, $right->type);

        if ($resultType === null) {
            return GolampiValue::nil();
        }

        // Concatenación de strings
        if ($op === '+' && $resultType === 'string') {
            return new GolampiValue('string', $left->value . $right->value);
        }

        // Repetición de string: "abc" * 3 o 3 * "abc"
        if ($op === '*' && $resultType === 'string') {
            if ($left->isString()) {
                return new GolampiValue('string', str_repeat($left->value, (int) $right->value));
            }
            return new GolampiValue('string', str_repeat($right->value, (int) $left->value));
        }

        // Obtener valores numéricos (rune → su código)
        $lVal = $left->isRune() ? $left->value : $left->value;
        $rVal = $right->isRune() ? $right->value : $right->value;

        // División entre cero
        if (($op === '/' || $op === '%') && $rVal == 0) {
            return GolampiValue::nil();
        }

        $result = match ($op) {
            '+' => $lVal + $rVal,
            '-' => $lVal - $rVal,
            '*' => $lVal * $rVal,
            '/' => $resultType === 'int32' ? intdiv((int) $lVal, (int) $rVal) : $lVal / $rVal,
            '%' => (int) $lVal % (int) $rVal,
        };

        // Castear según tipo resultado
        if ($resultType === 'int32') {
            $result = (int) $result;
        } elseif ($resultType === 'float32') {
            $result = (float) $result;
        }

        return new GolampiValue($resultType, $result);
    }

    /**
     * Evalúa una operación relacional.
     * Retorna GolampiValue bool, o nil si es inválida.
     */
    public static function relationalOp(string $op, GolampiValue $left, GolampiValue $right): GolampiValue
    {
        if ($left->isNil() || $right->isNil()) {
            return GolampiValue::nil();
        }

        $isEquality = ($op === '==' || $op === '!=');

        $valid = $isEquality
            ? RelationalTable::canCompareEquality($left->type, $right->type)
            : RelationalTable::canCompareOrder($left->type, $right->type);

        if (!$valid) {
            return GolampiValue::nil();
        }

        $lVal = $left->value;
        $rVal = $right->value;

        $result = match ($op) {
            '=='  => $lVal == $rVal,
            '!='  => $lVal != $rVal,
            '>'   => $lVal > $rVal,
            '>='  => $lVal >= $rVal,
            '<'   => $lVal < $rVal,
            '<='  => $lVal <= $rVal,
        };

        return new GolampiValue('bool', $result);
    }

    /**
     * Evalúa una operación lógica.
     * Solo acepta bool. Retorna nil si algún operando no es bool.
     */
    public static function logicalOp(string $op, GolampiValue $left, ?GolampiValue $right = null): GolampiValue
    {
        // Negación unaria
        if ($op === '!') {
            if (!$left->isBool()) {
                return GolampiValue::nil();
            }
            return new GolampiValue('bool', !$left->value);
        }

        if ($right === null || !$left->isBool() || !$right->isBool()) {
            return GolampiValue::nil();
        }

        $result = match ($op) {
            '&&' => $left->value && $right->value,
            '||' => $left->value || $right->value,
        };

        return new GolampiValue('bool', $result);
    }

    /**
     * Evalúa negación unaria aritmética (-).
     */
    public static function negateOp(GolampiValue $value): GolampiValue
    {
        if ($value->isNil()) {
            return GolampiValue::nil();
        }

        return match ($value->type) {
            'int32'   => new GolampiValue('int32', -$value->value),
            'float32' => new GolampiValue('float32', -$value->value),
            'rune'    => new GolampiValue('int32', -$value->value),
            default   => GolampiValue::nil(),
        };
    }

    /**
     * Verifica si un tipo es asignable a otro.
     */
    public static function isAssignable(string $targetType, string $sourceType): bool
    {
        if ($targetType === $sourceType) {
            return true;
        }

        // int y int32 son equivalentes
        if (($targetType === 'int32' && $sourceType === 'int') ||
            ($targetType === 'int' && $sourceType === 'int32')) {
            return true;
        }

        return false;
    }

    /**
     * Normaliza el nombre de tipo (int → int32).
     */
    public static function normalizeType(string $type): string
    {
        return $type === 'int' ? 'int32' : $type;
    }
}