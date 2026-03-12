<?php

namespace Golampi\Runtime\Environment;

class Environment
{
    private array $symbols = [];
    private ?Environment $parent;
    private string $scopeName;

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
}