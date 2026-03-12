<?php

namespace Golampi\Errors;

use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Recognizer;

class GolampiLexerErrorListener extends BaseErrorListener
{
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?\Exception $e
    ): void {
        ErrorCollector::getInstance()->addLexical(
            "Símbolo no reconocido en la posición {$charPositionInLine}",
            $line,
            $charPositionInLine
        );
    }
}