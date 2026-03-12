<?php

namespace Golampi\Reports;

use Golampi\Errors\ErrorCollector;

class ErrorReport
{
    /**
     * Retorna el reporte como array para JSON.
     */
    public static function toArray(): array
    {
        return ErrorCollector::getInstance()->toReport();
    }

    /**
     * Genera el reporte como tabla HTML descargable.
     */
    public static function toHtml(): string
    {
        $errors = ErrorCollector::getInstance()->getErrors();

        $html = '<!DOCTYPE html><html><head><meta charset="UTF-8">';
        $html .= '<title>Reporte de Errores - Golampi</title>';
        $html .= '<style>';
        $html .= 'body { font-family: Arial, sans-serif; margin: 20px; }';
        $html .= 'h1 { color: #333; }';
        $html .= 'table { border-collapse: collapse; width: 100%; margin-top: 10px; }';
        $html .= 'th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }';
        $html .= 'th { background-color: #2c3e50; color: white; }';
        $html .= 'tr:nth-child(even) { background-color: #f2f2f2; }';
        $html .= '.lexico { color: #e74c3c; }';
        $html .= '.sintactico { color: #e67e22; }';
        $html .= '.semantico { color: #8e44ad; }';
        $html .= '</style></head><body>';
        $html .= '<h1>Reporte de Errores</h1>';

        if (empty($errors)) {
            $html .= '<p>No se encontraron errores.</p>';
        } else {
            $html .= '<table>';
            $html .= '<tr><th>#</th><th>Tipo</th><th>Descripción</th><th>Línea</th><th>Columna</th></tr>';

            foreach ($errors as $i => $error) {
                $class = match ($error->type) {
                    'Léxico'     => 'lexico',
                    'Sintáctico' => 'sintactico',
                    'Semántico'  => 'semantico',
                    default      => '',
                };

                $num = $i + 1;
                $html .= "<tr>";
                $html .= "<td>{$num}</td>";
                $html .= "<td class='{$class}'>{$error->type}</td>";
                $html .= "<td>{$error->description}</td>";
                $html .= "<td>{$error->line}</td>";
                $html .= "<td>{$error->column}</td>";
                $html .= "</tr>";
            }

            $html .= '</table>';
        }

        $html .= '</body></html>';
        return $html;
    }
}