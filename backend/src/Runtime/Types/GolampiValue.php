<?php

namespace Golampi\Runtime\Types;

class GolampiValue
{
    public string $type;    // int32, float32, bool, rune, string, nil
    public mixed $value;

    public function __construct(string $type, mixed $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function isNil(): bool
    {
        return $this->type === 'nil';
    }

    public function isNumeric(): bool
    {
        return in_array($this->type, ['int32', 'float32', 'rune']);
    }

    public function isInt(): bool
    {
        return $this->type === 'int32';
    }

    public function isFloat(): bool
    {
        return $this->type === 'float32';
    }

    public function isBool(): bool
    {
        return $this->type === 'bool';
    }

    public function isRune(): bool
    {
        return $this->type === 'rune';
    }

    public function isString(): bool
    {
        return $this->type === 'string';
    }

    public function isArray(): bool
    {
        return str_starts_with($this->type, '[]');
    }

    /**
     * Convierte el valor a su representación imprimible.
     */
    public function toPrintable(): string
    {
        if ($this->isNil()) {
            return '<nil>';
        }
        if ($this->isBool()) {
            return $this->value ? 'true' : 'false';
        }
        if ($this->isRune()) {
            return (string) $this->value;
        }
        return (string) $this->value;
    }

    /** */
    public function getTypeString(): string
    {
        if ($this->value instanceof \Golampi\Runtime\Types\GolampiArray) {
            return $this->value->fullType();
        }
        return $this->type;
    }

    /**
     * Crea un GolampiValue nil.
     */
    public static function nil(): self
    {
        return new self('nil', null);
    }

    /**
     * Crea un GolampiValue con el valor por defecto según el tipo.
     */
    public static function defaultFor(string $type): self
    {
        return match ($type) {
            'int32'   => new self('int32', 0),
            'float32' => new self('float32', 0.0),
            'bool'    => new self('bool', false),
            'rune'    => new self('rune', 0),
            'string'  => new self('string', ''),
            default   => self::nil(),
        };
    }
}