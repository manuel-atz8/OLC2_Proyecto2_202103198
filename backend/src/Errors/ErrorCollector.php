<?php

namespace Golampi\Errors;

class ErrorCollector
{
    private array $errors = [];
    private static ?ErrorCollector $instance = null;

    private function __construct() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addLexical(string $description, int $line, int $column): void
    {
        $this->errors[] = GolampiError::lexical($description, $line, $column);
    }

    public function addSyntactic(string $description, int $line, int $column): void
    {
        $this->errors[] = GolampiError::syntactic($description, $line, $column);
    }

    public function addSemantic(string $description, int $line, int $column): void
    {
        $this->errors[] = GolampiError::semantic($description, $line, $column);
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getByType(string $type): array
    {
        return array_filter($this->errors, fn($e) => $e->type === $type);
    }

    /**
     * Genera el reporte como array para el frontend.
     */
    public function toReport(): array
    {
        $report = [];
        foreach ($this->errors as $index => $error) {
            $report[] = [
                'no'          => $index + 1,
                'type'        => $error->type,
                'description' => $error->description,
                'line'        => $error->line,
                'column'      => $error->column,
            ];
        }
        return $report;
    }

    /**
     * Limpia todos los errores (para nueva ejecución).
     */
    public function clear(): void
    {
        $this->errors = [];
    }

    /**
     * Resetea la instancia singleton (para nueva ejecución completa).
     */
    public static function reset(): void
    {
        self::$instance = null;
    }
}