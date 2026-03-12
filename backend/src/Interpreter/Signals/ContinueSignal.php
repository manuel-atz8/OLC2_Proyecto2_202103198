<?php

namespace Golampi\Interpreter\Signals;

class ContinueSignal extends \Exception
{
    public function __construct()
    {
        parent::__construct('continue');
    }
}