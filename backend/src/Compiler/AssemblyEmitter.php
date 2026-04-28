<?php

namespace Golampi\Compiler;

/**
 * Acumulador de código ensamblador ARM64.
 * Gestiona las secciones .data y .text, y emite el .s final.
 */
class AssemblyEmitter
{
    /** Líneas de la sección .data */
    private array $dataSection = [];

    /** Líneas de la sección .text */
    private array $textSection = [];

    // ─── Sección .data ───

    /**
     * Agrega una línea a la sección .data.
     */
    public function data(string $line): void
    {
        $this->dataSection[] = $line;
    }

    // ─── Sección .text ───

    /**
     * Emite una instrucción con indentación estándar.
     */
    public function emit(string $instruction): void
    {
        $this->textSection[] = '    ' . $instruction;
    }

    /**
     * Emite una etiqueta (sin indentación, con ':' al final).
     * Acepta nombres con o sin punto inicial (e.g. "_start" o ".L_if_end_0").
     */
    public function label(string $name): void
    {
        $this->textSection[] = $name . ':';
    }

    /**
     * Emite un comentario en la sección .text.
     */
    public function comment(string $text): void
    {
        $this->textSection[] = '    // ' . $text;
    }

    /**
     * Emite una línea en blanco para legibilidad.
     */
    public function blank(): void
    {
        $this->textSection[] = '';
    }

    /**
     * Emite una línea raw sin indentación (para directivas como .global).
     */
    public function raw(string $line): void
    {
        $this->textSection[] = $line;
    }

    // ─── Generación del .s final ───

    /**
     * Construye y retorna el archivo .s completo.
     */
    public function build(StringPool $stringPool): string
    {
        $lines = [];

        // Header
        $lines[] = '// Generado por Golampi Compiler';
        $lines[] = '// Arquitectura: ARM64 (AArch64)';
        $lines[] = '';

        // Sección .data
        $lines[] = '.section .data';

        // Strings del pool
        foreach ($stringPool->getAll() as $entry) {
            $escaped = $this->escapeAsmString($entry['value']);
            $lines[] = $entry['label'] . ': .asciz "' . $escaped . '"';
        }

        // Datos adicionales definidos manualmente
        foreach ($this->dataSection as $line) {
            $lines[] = $line;
        }

        $lines[] = '';

        // Sección .text
        $lines[] = '.section .text';
        $lines[] = '.align 2';
        $lines[] = '.global _start';
        $lines[] = '';

        foreach ($this->textSection as $line) {
            $lines[] = $line;
        }

        // Asegurar newline final
        $lines[] = '';

        return implode("\n", $lines);
    }

    /**
     * Limpia todo (para nueva compilación).
     */
    public function clear(): void
    {
        $this->dataSection = [];
        $this->textSection = [];
    }

    /**
     * Escapa caracteres especiales para literales .asciz.
     */
    private function escapeAsmString(string $value): string
    {
        return str_replace(
            ['\\', '"', "\n", "\t", "\r"],
            ['\\\\', '\\"', '\\n', '\\t', '\\r'],
            $value
        );
    }
}