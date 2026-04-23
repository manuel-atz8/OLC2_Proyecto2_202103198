<?php

namespace Golampi\Runtime\Environment;

class Symbol
{
    public string $id;
    public string $dataType;
    public mixed $value;
    public string $scope;
    public string $category;
    public int $line;
    public int $column;
    public bool $isConstant;

    // === Campos nuevos para el compilador (Fase 2) ===
    /** Desplazamiento respecto a x29 (frame pointer). 0 para globales. */
    public int $offset;
    /** Tamaño en bytes que ocupa este símbolo en memoria. */
    public int $size;
    /** Dónde vive: 'stack', 'global', 'param', 'const_data'. */
    public string $storage;
    /** Etiqueta en .data para globales y literales string. null si no aplica. */
    public ?string $label;

    public function __construct(
        string $id,
        string $dataType,
        mixed $value,
        string $scope,
        string $category,
        int $line,
        int $column,
        bool $isConstant = false,
        // Campos nuevos con defaults para no romper el intérprete
        int $offset = 0,
        int $size = 0,
        string $storage = 'stack',
        ?string $label = null
    ) {
        $this->id = $id;
        $this->dataType = $dataType;
        $this->value = $value;
        $this->scope = $scope;
        $this->category = $category;
        $this->line = $line;
        $this->column = $column;
        $this->isConstant = $isConstant;
        $this->offset = $offset;
        $this->size = $size;
        $this->storage = $storage;
        $this->label = $label;
    }
}