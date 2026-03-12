<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Semantic\TypeChecker;

trait TypeResolverTrait
{
    /**
     * Visita un nodo de tipo y retorna el string normalizado.
     * Ej: TInt32 → "int32", TArray → "[5]int32", TPointer → "*int32"
     */
    public function resolveType($ctx): string
    {
        if ($ctx === null) {
            return 'void';
        }

        $class = get_class($ctx);

        // Extraer solo el nombre corto del contexto
        $shortClass = substr($class, strrpos($class, '\\') + 1);

        return match (true) {
            str_contains($shortClass, 'TInt32')   => 'int32',
            str_contains($shortClass, 'TInt')     => 'int32',
            str_contains($shortClass, 'TFloat32') => 'float32',
            str_contains($shortClass, 'TBool')    => 'bool',
            str_contains($shortClass, 'TRune')    => 'rune',
            str_contains($shortClass, 'TString')  => 'string',
            str_contains($shortClass, 'TArray')   => $this->resolveArrayType($ctx),
            str_contains($shortClass, 'TPointer') => '*' . $this->resolveType($ctx->type()),
            default => 'void',
        };
    }

    /**
     * Resuelve tipo de arreglo: [5]int32, [2][3]float32, etc.
     */
    private function resolveArrayType($ctx): string
    {
        $prefix = '';
        $current = $ctx;

        // Recorre las dimensiones del arreglo
        while (str_contains(get_class($current), 'TArray')) {
            $prefix .= '[]';
            $current = $current->type();
        }

        $baseType = $this->resolveType($current);
        return $prefix . $baseType;
    }

    /**
     * Extrae las dimensiones de un arrayDimension* como enteros.
     * Retorna array de ints: [2, 3] para [2][3]
     */
    public function resolveArrayDimensions(array $dimContexts): array
    {
        $dims = [];
        foreach ($dimContexts as $dimCtx) {
            $val = $this->visit($dimCtx->expr());
            if ($val === null || !$val->isInt()) {
                $this->semanticError("La dimensión del arreglo debe ser un entero", $dimCtx);
                $dims[] = 0;
            } else {
                $dims[] = (int) $val->value;
            }
        }
        return $dims;
    }

    /**
     * Resuelve lista de tipos de retorno para funciones con retorno múltiple.
     */
    public function resolveReturnTypes($ctx): array
    {
        if ($ctx === null) {
            return [];
        }

        $types = [];
        foreach ($ctx->type() as $typeCtx) {
            $types[] = $this->resolveType($typeCtx);
        }
        return $types;
    }

    /**
     * Normaliza tipo (int → int32).
     */
    public function normalizeType(string $type): string
    {
        return TypeChecker::normalizeType($type);
    }
}