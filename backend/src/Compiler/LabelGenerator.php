<?php

namespace Golampi\Compiler;

/**
 * Genera etiquetas únicas para el código ensamblador ARM64.
 * Cada llamada a next() devuelve una etiqueta que nunca se repite.
 *
 * Ejemplo: next('if') → '.L_if_0', next('if') → '.L_if_1', next('for') → '.L_for_2'
 */
class LabelGenerator
{
    private int $counter = 0;

    /**
     * Genera la siguiente etiqueta única con el prefijo dado.
     */
    public function next(string $prefix): string
    {
        return '.L_' . $prefix . '_' . ($this->counter++);
    }

    /**
     * Resetea el contador (para nueva compilación).
     */
    public function reset(): void
    {
        $this->counter = 0;
    }
}