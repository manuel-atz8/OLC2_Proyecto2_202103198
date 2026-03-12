<?php

namespace Golampi\Semantic;

class RelationalTable
{
    /**
     * Pares válidos para == y !=
     */
    private static array $equalityTable = [
        'int32:int32'     => true,
        'int32:float32'   => true,
        'int32:rune'      => true,
        'float32:int32'   => true,
        'float32:float32' => true,
        'float32:rune'    => true,
        'bool:bool'       => true,
        'rune:int32'      => true,
        'rune:float32'    => true,
        'rune:rune'       => true,
        'string:string'   => true,
    ];

    /**
     * Pares válidos para >, >=, <, <=
     */
    private static array $orderTable = [
        'int32:int32'     => true,
        'int32:float32'   => true,
        'int32:rune'      => true,
        'float32:int32'   => true,
        'float32:float32' => true,
        'float32:rune'    => true,
        'rune:int32'      => true,
        'rune:float32'    => true,
        'rune:rune'       => true,
        'string:string'   => true,
    ];

    /**
     * Verifica si una comparación de igualdad es válida.
     */
    public static function canCompareEquality(string $leftType, string $rightType): bool
    {
        $key = "{$leftType}:{$rightType}";
        return self::$equalityTable[$key] ?? false;
    }

    /**
     * Verifica si una comparación de orden es válida.
     */
    public static function canCompareOrder(string $leftType, string $rightType): bool
    {
        $key = "{$leftType}:{$rightType}";
        return self::$orderTable[$key] ?? false;
    }
}