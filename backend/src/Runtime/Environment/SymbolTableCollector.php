<?php

namespace Golampi\Runtime\Environment;

class SymbolTableCollector
{
    private array $allSymbols = [];

    /**
     * Registra un símbolo para el reporte.
     * Se llama cada vez que se declara algo en cualquier scope.
     */
    public function register(Symbol $symbol): void
    {
        $this->allSymbols[] = $symbol;
    }

    /**
     * Retorna todos los símbolos recopilados.
     */
    public function getAll(): array
    {
        return $this->allSymbols;
    }

    /**
     * Limpia todo (para nueva ejecución).
     */
    public function clear(): void
    {
        $this->allSymbols = [];
    }

    /**
     * Retorna los símbolos como array asociativo para el reporte.
     */
    public function toReport(): array
    {
        $report = [];
        foreach ($this->allSymbols as $symbol) {
            $report[] = [
                'id' => $symbol->id,
                'type' => $symbol->dataType,
                'scope' => $symbol->scope,
                'value' => $this->formatValue($symbol->value),
                'category' => $symbol->category,
                'line' => $symbol->line,
                'column' => $symbol->column,
            ];
        }
        return $report;
    }

    private function formatValue(mixed $value): string
    {
        if ($value === null) {
            return '—';
        }
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }
        if ($value instanceof \Golampi\Runtime\Types\GolampiArray) {
            return $value->fullType();
        }
        if (is_array($value)) {
            return '{' . implode(',', $value) . '}';
        }
        if (is_object($value)) {
            return '(objeto)';
        }
        return (string) $value;
    }
}