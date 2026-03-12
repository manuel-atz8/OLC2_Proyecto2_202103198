<?php

namespace Golampi\Runtime\Types;

class GolampiFunction
{
    public string $name;
    public array $params;           // [{name, type, isPointer}, ...]
    public array $returnTypes;      // ['int32'] o ['int32', 'bool'] para múltiples
    public mixed $body;             // el nodo del bloque del AST (Context de ANTLR)
    public int $line;
    public int $column;

    public function __construct(
        string $name,
        array $params,
        array $returnTypes,
        mixed $body,
        int $line,
        int $column
    ) {
        $this->name = $name;
        $this->params = $params;
        $this->returnTypes = $returnTypes;
        $this->body = $body;
        $this->line = $line;
        $this->column = $column;
    }

    public function hasReturn(): bool
    {
        return !empty($this->returnTypes);
    }

    public function isMain(): bool
    {
        return $this->name === 'main';
    }

    public function paramCount(): int
    {
        return count($this->params);
    }
}