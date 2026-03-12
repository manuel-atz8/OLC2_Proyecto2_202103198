<?php

namespace Golampi\Errors;

class GolampiError
{
    public string $type;        // Léxico, Sintáctico, Semántico
    public string $description;
    public int $line;
    public int $column;

    public function __construct(string $type, string $description, int $line, int $column)
    {
        $this->type = $type;
        $this->description = $description;
        $this->line = $line;
        $this->column = $column;
    }

    public static function lexical(string $description, int $line, int $column): self
    {
        return new self('Léxico', $description, $line, $column);
    }

    public static function syntactic(string $description, int $line, int $column): self
    {
        return new self('Sintáctico', $description, $line, $column);
    }

    public static function semantic(string $description, int $line, int $column): self
    {
        return new self('Semántico', $description, $line, $column);
    }
}