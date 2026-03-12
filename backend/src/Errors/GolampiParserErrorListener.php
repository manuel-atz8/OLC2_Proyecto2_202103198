<?php

namespace Golampi\Errors;

use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Recognizer;

class GolampiParserErrorListener extends BaseErrorListener
{
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?\Exception $e
    ): void {
        ErrorCollector::getInstance()->addSyntactic(
            $this->translateMessage($msg),
            $line,
            $charPositionInLine
        );
    }

    /**
     * Traduce mensajes comunes de ANTLR a español.
     */
    private function translateMessage(string $msg): string
    {
        if (str_contains($msg, 'missing')) {
            preg_match("/missing '(.+?)'/", $msg, $matches);
            $token = $matches[1] ?? '?';
            return "Se esperaba '{$token}'";
        }

        if (str_contains($msg, 'extraneous input')) {
            return "Entrada inesperada en la instrucción";
        }

        if (str_contains($msg, 'no viable alternative')) {
            return "Construcción no reconocida";
        }

        if (str_contains($msg, 'mismatched input')) {
            preg_match("/expecting (.+)/", $msg, $matches);
            $expected = $matches[1] ?? '?';
            return "Se esperaba {$expected}";
        }

        return $msg;
    }
}