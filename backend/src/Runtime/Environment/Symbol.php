<?php

namespace Golampi\Runtime\Environment;

class Symbol
{
    public string $id;
    public string $dataType;    // int32, float32, bool, rune, string
    public mixed $value;
    public string $scope;       // global, main, nombreFuncion, if, for, switch
    public string $category;    // variable, constant, function, array, parameter
    public int $line;
    public int $column;
    public bool $isConstant;

    public function __construct(
        string $id,
        string $dataType,
        mixed $value,
        string $scope,
        string $category,
        int $line,
        int $column,
        bool $isConstant = false
    ) {
        $this->id = $id;
        $this->dataType = $dataType;
        $this->value = $value;
        $this->scope = $scope;
        $this->category = $category;
        $this->line = $line;
        $this->column = $column;
        $this->isConstant = $isConstant;
    }
}