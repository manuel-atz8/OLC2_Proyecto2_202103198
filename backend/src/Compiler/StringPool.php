<?php

namespace Golampi\Compiler;

/**
 * Registra literales string para la sección .data del ensamblador ARM64.
 * Cada string único recibe una etiqueta y se emite una sola vez.
 *
 * Ejemplo:
 *   $pool->add("Hola mundo") → '.Lstr_0'
 *   $pool->add("Hola mundo") → '.Lstr_0' (misma, no duplica)
 *   $pool->add("Otro")       → '.Lstr_1'
 */
class StringPool
{
    /** Mapa de string literal → etiqueta */
    private array $pool = [];

    /** Contador para generar etiquetas únicas */
    private int $counter = 0;

    /**
     * Registra un literal string y retorna su etiqueta.
     * Si ya existe, retorna la misma etiqueta sin duplicar.
     */
    public function add(string $value): string
    {
        if (isset($this->pool[$value])) {
            return $this->pool[$value];
        }

        $label = '.Lstr_' . ($this->counter++);
        $this->pool[$value] = $label;
        return $label;
    }

    /**
     * Retorna todas las entradas registradas como pares [etiqueta, valor].
     * Se usa al final de la compilación para emitir la sección .data.
     */
    public function getAll(): array
    {
        $entries = [];
        foreach ($this->pool as $value => $label) {
            $entries[] = ['label' => $label, 'value' => $value];
        }
        return $entries;
    }

    /**
     * Limpia todo (para nueva compilación).
     */
    public function clear(): void
    {
        $this->pool = [];
        $this->counter = 0;
    }
}