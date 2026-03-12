<?php

namespace Golampi\Semantic;

class TypeTable
{
    /**
     * Tabla de resultados para suma (+)
     * Clave: "tipoIzq:tipoDer" → tipo resultado
     */
    private static array $addTable = [
        'int32:int32'     => 'int32',
        'int32:float32'   => 'float32',
        'int32:rune'      => 'int32',
        'float32:int32'   => 'float32',
        'float32:float32' => 'float32',
        'float32:rune'    => 'float32',
        'rune:int32'      => 'int32',
        'rune:float32'    => 'float32',
        'rune:rune'       => 'int32',
        'string:string'   => 'string',
    ];

    /**
     * Tabla de resultados para resta (-)
     */
    private static array $subTable = [
        'int32:int32'     => 'int32',
        'int32:float32'   => 'float32',
        'int32:rune'      => 'int32',
        'float32:int32'   => 'float32',
        'float32:float32' => 'float32',
        'float32:rune'    => 'float32',
        'rune:int32'      => 'int32',
        'rune:float32'    => 'float32',
        'rune:rune'       => 'int32',
    ];

    /**
     * Tabla de resultados para multiplicación (*)
     */
    private static array $mulTable = [
        'int32:int32'     => 'int32',
        'int32:float32'   => 'float32',
        'int32:rune'      => 'int32',
        'int32:string'    => 'string',
        'float32:int32'   => 'float32',
        'float32:float32' => 'float32',
        'float32:rune'    => 'float32',
        'rune:int32'      => 'int32',
        'rune:float32'    => 'float32',
        'rune:rune'       => 'int32',
        'string:int32'    => 'string',
    ];

    /**
     * Tabla de resultados para división (/)
     */
    private static array $divTable = [
        'int32:int32'     => 'int32',
        'int32:float32'   => 'float32',
        'int32:rune'      => 'int32',
        'float32:int32'   => 'float32',
        'float32:float32' => 'float32',
        'float32:rune'    => 'float32',
        'rune:int32'      => 'int32',
        'rune:float32'    => 'float32',
        'rune:rune'       => 'int32',
    ];

    /**
     * Tabla de resultados para módulo (%)
     */
    private static array $modTable = [
        'int32:int32' => 'int32',
        'int32:rune'  => 'int32',
        'rune:int32'  => 'int32',
        'rune:rune'   => 'int32',
    ];

    /**
     * Consulta el tipo resultado de una operación aritmética.
     * Retorna null si la combinación es inválida.
     */
    public static function arithmetic(string $operator, string $leftType, string $rightType): ?string
    {
        $key = "{$leftType}:{$rightType}";

        return match ($operator) {
            '+'  => self::$addTable[$key] ?? null,
            '-'  => self::$subTable[$key] ?? null,
            '*'  => self::$mulTable[$key] ?? null,
            '/'  => self::$divTable[$key] ?? null,
            '%'  => self::$modTable[$key] ?? null,
            default => null,
        };
    }
}