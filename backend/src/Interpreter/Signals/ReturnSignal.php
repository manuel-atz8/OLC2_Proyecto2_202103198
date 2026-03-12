<?php

namespace Golampi\Interpreter\Signals;

use Golampi\Runtime\Types\GolampiValue;

class ReturnSignal extends \Exception
{
    public array $values;

    public function __construct(array $values = [])
    {
        parent::__construct('return');
        $this->values = $values;
    }

    /**
     * Para funciones con un solo retorno.
     */
    public function first(): GolampiValue
    {
        return $this->values[0] ?? GolampiValue::nil();
    }
}