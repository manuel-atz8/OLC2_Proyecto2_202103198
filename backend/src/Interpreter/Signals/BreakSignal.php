<?php

namespace Golampi\Interpreter\Signals;

class BreakSignal extends \Exception
{
    public function __construct()
    {
        parent::__construct('break');
    }
}