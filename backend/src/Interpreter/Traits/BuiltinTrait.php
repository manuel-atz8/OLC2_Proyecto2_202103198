<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Runtime\Types\GolampiValue;
use Golampi\Runtime\Types\GolampiArray;

trait BuiltinTrait
{
    /**
     * Intenta ejecutar una función embebida de un solo nombre.
     * Retorna null si no es builtin (para que CallAtom busque en funciones del usuario).
     */
    public function tryBuiltinCall(string $name, $ctx): ?GolampiValue
    {
        return match ($name) {
            'len'    => $this->builtinLen($ctx),
            'now'    => $this->builtinNow(),
            'substr' => $this->builtinSubstr($ctx),
            'typeOf' => $this->builtinTypeOf($ctx),
            default  => null,
        };
    }

    /**
     * Ejecuta un método embebido (fmt.Println, etc.)
     */
    public function executeBuiltinMethod(string $fullName, $ctx): GolampiValue
    {
        return match ($fullName) {
            'fmt.Println' => $this->builtinPrintln($ctx),
            default => $this->handleUnknownMethod($fullName, $ctx),
        };
    }

    /**
     * fmt.Println(args...)
     * Imprime valores separados por espacio con salto de línea al final.
     */
    private function builtinPrintln($ctx): GolampiValue
    {
        $argList = $ctx->argList();
        $parts = [];

        if ($argList !== null) {
            foreach ($argList->arg() as $argCtx) {
                $val = $this->visit($argCtx);
                if ($val !== null) {
                    $parts[] = $val->toPrintable();
                }
            }
        }

        $this->appendOutput(implode(' ', $parts) . "\n");

        return GolampiValue::nil();
    }

    /**
     * len(arg)
     * Retorna longitud de string o arreglo.
     */
    private function builtinLen($ctx): GolampiValue
    {
        $args = $this->getBuiltinArgs($ctx, 1, 'len');
        if ($args === null) {
            return GolampiValue::nil();
        }

        $val = $args[0];

        if ($val->isString()) {
            return new GolampiValue('int32', mb_strlen($val->value, 'UTF-8'));
        }

        if ($val->value instanceof GolampiArray) {
            return new GolampiValue('int32', $val->value->length());
        }

        $this->semanticError("'len' solo acepta string o arreglo", $ctx);
        return GolampiValue::nil();
    }

    /**
     * now()
     * Retorna fecha y hora actual como string.
     */
    private function builtinNow(): GolampiValue
    {
        return new GolampiValue('string', date('Y-m-d H:i:s'));
    }

    /**
     * substr(str, inicio, longitud)
     * Extrae subcadena.
     */
    private function builtinSubstr($ctx): GolampiValue
    {
        $args = $this->getBuiltinArgs($ctx, 3, 'substr');
        if ($args === null) {
            return GolampiValue::nil();
        }

        $str = $args[0];
        $start = $args[1];
        $length = $args[2];

        if (!$str->isString()) {
            $this->semanticError("Primer argumento de 'substr' debe ser string", $ctx);
            return GolampiValue::nil();
        }

        if (!$start->isInt() || !$length->isInt()) {
            $this->semanticError("Índice y longitud de 'substr' deben ser enteros", $ctx);
            return GolampiValue::nil();
        }

        $s = $str->value;
        $i = (int) $start->value;
        $l = (int) $length->value;
        $strLen = mb_strlen($s, 'UTF-8');

        if ($i < 0 || $i >= $strLen || $l < 0 || ($i + $l) > $strLen) {
            $this->semanticError("Índices fuera de rango en 'substr'", $ctx);
            return GolampiValue::nil();
        }

        $result = mb_substr($s, $i, $l, 'UTF-8');
        return new GolampiValue('string', $result);
    }

    /**
     * typeOf(expr)
     * Retorna el tipo como string.
     */
    private function builtinTypeOf($ctx): GolampiValue
    {
        $args = $this->getBuiltinArgs($ctx, 1, 'typeOf');
        if ($args === null) {
            return GolampiValue::nil();
        }

        return new GolampiValue('string', $args[0]->getTypeString());
    }

    /**
     * Helper: extrae y valida argumentos de funciones embebidas.
     */
    private function getBuiltinArgs($ctx, int $expected, string $funcName): ?array
    {
        $argList = $ctx->argList();
        $args = [];

        if ($argList !== null) {
            foreach ($argList->arg() as $argCtx) {
                $val = $this->visit($argCtx);
                $args[] = $val ?? GolampiValue::nil();
            }
        }

        if (count($args) !== $expected) {
            $this->semanticError(
                "'{$funcName}' espera {$expected} argumento(s), recibió " . count($args),
                $ctx
            );
            return null;
        }

        return $args;
    }

    /**
     * Método no reconocido.
     */
    private function handleUnknownMethod(string $fullName, $ctx): GolampiValue
    {
        $this->semanticError("Método '{$fullName}' no reconocido", $ctx);
        return GolampiValue::nil();
    }
}