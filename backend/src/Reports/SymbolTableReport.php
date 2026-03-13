<?php

namespace Golampi\Reports;

use Golampi\Runtime\Environment\SymbolTableCollector;

class SymbolTableReport
{
    private SymbolTableCollector $collector;

    public function __construct(SymbolTableCollector $collector)
    {
        $this->collector = $collector;
    }

    /**
     * Retorna el reporte como array para JSON.
     */
    public function toArray(): array
    {
        return $this->collector->toReport();
    }

    /**
     * Genera el reporte como tabla HTML descargable.
     */
    public function toHtml(): string
    {
        $symbols = $this->collector->getAll();

        $html = '<!DOCTYPE html><html><head><meta charset="UTF-8">';
        $html .= '<title>Tabla de Símbolos - Golampi</title>';
        $html .= '<style>';
        $html .= 'body { font-family: Arial, sans-serif; margin: 20px; }';
        $html .= 'h1 { color: #333; }';
        $html .= 'table { border-collapse: collapse; width: 100%; margin-top: 10px; }';
        $html .= 'th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }';
        $html .= 'th { background-color: #2c3e50; color: white; }';
        $html .= 'tr:nth-child(even) { background-color: #f2f2f2; }';
        $html .= '.function { color: #2980b9; font-weight: bold; }';
        $html .= '.variable { color: #27ae60; }';
        $html .= '.constant { color: #e74c3c; }';
        $html .= '.parameter { color: #8e44ad; }';
        $html .= '.array { color: #e67e22; }';
        $html .= '</style></head><body>';
        $html .= '<h1>Tabla de Símbolos</h1>';

        if (empty($symbols)) {
            $html .= '<p>No se registraron símbolos.</p>';
        } else {
            $html .= '<table>';
            $html .= '<tr><th>#</th><th>Identificador</th><th>Tipo</th><th>Ámbito</th>';
            $html .= '<th>Categoría</th><th>Valor</th><th>Línea</th><th>Columna</th></tr>';

            foreach ($symbols as $i => $symbol) {
                $num = $i + 1;
                $class = $symbol->category ?? 'variable';
                $value = $this->formatValue($symbol->value);

                $html .= "<tr>";
                $html .= "<td>{$num}</td>";
                $html .= "<td class='{$class}'>{$symbol->id}</td>";
                $html .= "<td>{$symbol->dataType}</td>";
                $html .= "<td>{$symbol->scope}</td>";
                $html .= "<td>{$symbol->category}</td>";
                $html .= "<td>{$value}</td>";
                $html .= "<td>{$symbol->line}</td>";
                $html .= "<td>{$symbol->column}</td>";
                $html .= "</tr>";
            }

            $html .= '</table>';
        }

        $html .= '</body></html>';
        return $html;
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
        if (is_array($value) && isset($value['env'])) {
            return '&' . $value['name'];
        }
        if (is_array($value)) {
            return '{' . implode(',', array_map(fn($v) => is_scalar($v) ? (string)$v : '?', $value)) . '}';
        }
        if (is_object($value)) {
            return '(objeto)';
        }
        return htmlspecialchars((string) $value);
    }
}