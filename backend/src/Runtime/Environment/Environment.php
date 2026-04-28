<?php

namespace Golampi\Runtime\Environment;

class Environment
{
    private array $symbols = [];
    private ?Environment $parent;
    private string $scopeName;
    // === Campos nuevos para el compilador (Fase 2) ===
    /** Siguiente offset disponible en el frame (crece hacia abajo). */
    private int $nextOffset = 0;

    public function __construct(?Environment $parent = null, string $scopeName = 'global')
    {
        $this->parent = $parent;
        $this->scopeName = $scopeName;
    }

    public function getScopeName(): string
    {
        return $this->scopeName;
    }

    public function getParent(): ?Environment
    {
        return $this->parent;
    }

    /**
     * Declara un símbolo nuevo en el scope actual.
     * Retorna false si ya existe en ESTE scope (no busca en padres).
     */
    public function declare(Symbol $symbol): bool
    {
        if (isset($this->symbols[$symbol->id])) {
            return false;
        }
        $this->symbols[$symbol->id] = $symbol;
        return true;
    }

    /**
     * Busca un símbolo subiendo por la cadena de scopes.
     * Retorna null si no existe en ningún scope.
     */
    public function lookup(string $id): ?Symbol
    {
        if (isset($this->symbols[$id])) {
            return $this->symbols[$id];
        }
        if ($this->parent !== null) {
            return $this->parent->lookup($id);
        }
        return null;
    }

    /**
     * Busca un símbolo SOLO en el scope actual.
     */
    public function lookupLocal(string $id): ?Symbol
    {
        return $this->symbols[$id] ?? null;
    }

    /**
     * Actualiza el valor de un símbolo existente.
     * Busca subiendo por la cadena de scopes.
     * Retorna false si no existe o si es constante.
     */
    public function assign(string $id, mixed $value): bool
    {
        if (isset($this->symbols[$id])) {
            if ($this->symbols[$id]->isConstant) {
                return false;
            }
            $this->symbols[$id]->value = $value;
            return true;
        }
        if ($this->parent !== null) {
            return $this->parent->assign($id, $value);
        }
        return false;
    }

    /**
     * Actualiza valor Y tipo (útil para asignación corta :=)
     */
    public function assignWithType(string $id, mixed $value, string $dataType): bool
    {
        if (isset($this->symbols[$id])) {
            if ($this->symbols[$id]->isConstant) {
                return false;
            }
            $this->symbols[$id]->value = $value;
            $this->symbols[$id]->dataType = $dataType;
            return true;
        }
        if ($this->parent !== null) {
            return $this->parent->assignWithType($id, $value, $dataType);
        }
        return false;
    }

    /**
     * Retorna todos los símbolos de este scope (para reportes).
     */
    public function getSymbols(): array
    {
        return $this->symbols;
    }

    /**
     * Crea un scope hijo.
     */
    public function createChild(string $scopeName): Environment
    {
        return new Environment($this, $scopeName);
    }

    //===================================================================================================================

    /*
    // === Campos nuevos para el compilador (Fase 2) ===
    // Siguiente offset disponible en el frame (crece hacia abajo). 
    private int $nextOffset = 0;
    */

    /**
     * Reserva espacio para una variable local en el stack frame.
     * IMPORTANTE: siempre aloca en el scope raíz de la función
     * (sube por la cadena de padres) para que getFrameSize() del
     * scope de la función refleje el total real.
     */
    public function allocateLocal(int $size): int
    {
        if ($this->parent !== null && $this->parent->getParent() !== null) {
            return $this->parent->allocateLocal($size);
        }

        if ($size < 4) {
            $size = 4;
        }

        $this->nextOffset += $size;
        return $this->nextOffset;
    }

    /**
     * Retorna el tamaño total del frame de este scope, alineado a 16 bytes.
     * ARM64 ABI requiere que sp siempre esté alineado a 16.
     */
    public function getFrameSize(): int
    {
        if ($this->nextOffset === 0) {
            return 0;
        }
        // Redondear al múltiplo de 16 superior
        return (int)(ceil($this->nextOffset / 16) * 16);
    }

    /**
     * Resetea el contador de offsets (para reutilizar en nueva pasada).
     */
    public function resetOffsets(): void
    {
        $this->nextOffset = 0;
    }
}