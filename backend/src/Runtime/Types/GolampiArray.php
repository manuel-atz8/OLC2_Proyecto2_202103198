<?php

namespace Golampi\Runtime\Types;

class GolampiArray
{
    public string $elementType;     // tipo base: int32, float32, etc.
    public array $dimensions;       // [2, 3] para [2][3]int
    public array $elements;         // los valores almacenados

    public function __construct(string $elementType, array $dimensions, array $elements = [])
    {
        $this->elementType = $elementType;
        $this->dimensions = $dimensions;
        $this->elements = $elements;

        if (empty($elements)) {
            $this->elements = $this->initDefaults($dimensions, $elementType);
        }
    }

    /**
     * Accede a un elemento por índices [i], [i][j], etc.
     * Retorna null si el índice es inválido.
     */
    public function get(array $indices): mixed
    {
        $current = $this->elements;
        foreach ($indices as $i => $index) {
            if ($index < 0 || $index >= $this->dimensions[$i]) {
                return null;
            }
            $current = $current[$index];
        }
        return $current;
    }

    /**
     * Asigna un valor en la posición indicada.
     * Retorna false si el índice es inválido.
     */
    public function set(array $indices, mixed $value): bool
    {
        $ref = &$this->elements;
        foreach ($indices as $i => $index) {
            if ($index < 0 || $index >= $this->dimensions[$i]) {
                return false;
            }
            if ($i < count($indices) - 1) {
                $ref = &$ref[$index];
            }
        }
        $lastIndex = $indices[count($indices) - 1];
        $ref[$lastIndex] = $value;
        return true;
    }

    /**
     * Retorna la longitud de la primera dimensión.
     */
    public function length(): int
    {
        return $this->dimensions[0];
    }

    /**
     * Retorna el tipo completo como string: [2][3]int32
     */
    public function fullType(): string
    {
        $prefix = '';
        foreach ($this->dimensions as $dim) {
            $prefix .= "[{$dim}]";
        }
        return $prefix . $this->elementType;
    }

    /**
     * Inicializa el arreglo con valores por defecto.
     */
    private function initDefaults(array $dims, string $type): array
    {
        if (count($dims) === 1) {
            $default = GolampiValue::defaultFor($type)->value;
            return array_fill(0, $dims[0], $default);
        }

        $result = [];
        $remaining = array_slice($dims, 1);
        for ($i = 0; $i < $dims[0]; $i++) {
            $result[] = $this->initDefaults($remaining, $type);
        }
        return $result;
    }
}