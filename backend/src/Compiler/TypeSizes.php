<?php

namespace Golampi\Compiler;

/**
 * Tabla de tamaños en bytes para cada tipo primitivo de Golampi
 * en la arquitectura ARM64 (AArch64).
 *
 * Convenciones:
 * - int32, float32, rune, bool: 4 bytes (se usan registros wN de 32 bits).
 * - string: 8 bytes (puntero de 64 bits al heap, se usa xN).
 * - puntero (*tipo): 8 bytes (dirección de 64 bits).
 *
 * Nota: bool podría ser 1 byte, pero lo alineamos a 4 para simplificar
 * el acceso en ARM64 (ldr/str wN requiere alineamiento a 4).
 */
class TypeSizes
{
    private const SIZES = [
        'int32'   => 4,
        'int'     => 4,     // sinónimo de int32
        'float32' => 4,
        'bool'    => 4,     // alineado a 4 por ARM64
        'rune'    => 4,     // alias de int32
        'string'  => 8,     // puntero de 64 bits
    ];

    /**
     * Retorna el tamaño en bytes de un tipo primitivo.
     * Para arreglos, retorna el tamaño de un elemento individual.
     * Para punteros, retorna 8 (tamaño de una dirección de 64 bits).
     */
    public static function of(string $type): int
    {
        // Puntero: *int32, *float32, etc.
        if (str_starts_with($type, '*')) {
            return 8;
        }

        // Arreglo: []int32, [][]float32, etc. — extraer tipo base
        $baseType = ltrim($type, '[]');

        return self::SIZES[$baseType] ?? 8; // default 8 (puntero) si tipo desconocido
    }

    /**
     * Retorna el tamaño total de un arreglo dadas sus dimensiones.
     * Ejemplo: [2][3]int32 → 2 * 3 * 4 = 24 bytes.
     */
    public static function arrayTotal(string $baseType, array $dimensions): int
    {
        $elementSize = self::of($baseType);
        $total = $elementSize;
        foreach ($dimensions as $dim) {
            $total *= $dim;
        }
        return $total;
    }

    /**
     * Indica si un tipo usa registros de 32 bits (wN) o de 64 bits (xN).
     * Útil para elegir entre ldr/str (64) y ldr wN/str wN (32).
     */
    public static function is64Bit(string $type): bool
    {
        if (str_starts_with($type, '*')) {
            return true;    // punteros son 64 bits
        }
        return $type === 'string'; // strings son punteros de 64 bits
    }

    /**
     * Retorna el sufijo de registro ARM64 para un tipo.
     * 'w' para 32 bits, 'x' para 64 bits.
     */
    public static function regPrefix(string $type): string
    {
        return self::is64Bit($type) ? 'x' : 'w';
    }
}