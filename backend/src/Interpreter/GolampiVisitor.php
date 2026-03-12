<?php

namespace Golampi\Interpreter;

use Golampi\Runtime\Environment\Environment;
use Golampi\Runtime\Environment\SymbolTableCollector;
use Golampi\Runtime\Types\GolampiFunction;
use Golampi\Runtime\Types\GolampiValue;
use Golampi\Errors\ErrorCollector;
use Golampi\Interpreter\Traits\TypeResolverTrait;
use Golampi\Interpreter\Traits\DeclarationTrait;
use Golampi\Interpreter\Traits\ExpressionTrait;
use Golampi\Interpreter\Traits\StatementTrait;
use Golampi\Interpreter\Traits\ControlFlowTrait;
use Golampi\Interpreter\Traits\FunctionTrait;
use Golampi\Interpreter\Traits\BuiltinTrait;

class GolampiVisitor extends \GolampiBaseVisitor
{
    use TypeResolverTrait;
    use DeclarationTrait;
    use ExpressionTrait;
    use StatementTrait;
    use ControlFlowTrait;
    use FunctionTrait;
    use BuiltinTrait;

    public Environment $env;
    public Environment $globalEnv;
    public SymbolTableCollector $symbolTable;
    public ErrorCollector $errors;
    public array $functions = [];        // nombre → GolampiFunction
    public array $lastMultiReturn = [];
    public string $output = '';          // salida de consola acumulada

    public function __construct()
    {
        $this->globalEnv = new Environment(null, 'global');
        $this->env = $this->globalEnv;
        $this->symbolTable = new SymbolTableCollector();
        $this->errors = ErrorCollector::getInstance();
    }

    /**
     * Punto de entrada: visita el programa completo.
     * 1. Recorre declaraciones globales y registra funciones (hoisting)
     * 2. Busca y ejecuta main()
     */
    public function visitProgram($ctx): mixed
    {
        // Fase 1: Registrar todas las funciones (hoisting)
        foreach ($ctx->functionDeclaration() as $funcCtx) {
            $this->registerFunction($funcCtx);
        }

        // Fase 2: Procesar declaraciones globales de variables/constantes
        foreach ($ctx->varDeclaration() as $varCtx) {
            $this->visit($varCtx);
        }
        foreach ($ctx->constDeclaration() as $constCtx) {
            $this->visit($constCtx);
        }

        // Fase 3: Buscar y ejecutar main
        if (!isset($this->functions['main'])) {
            $this->errors->addSemantic("No se encontró la función 'main'", 0, 0);
            return null;
        }

        $main = $this->functions['main'];

        if ($main->paramCount() > 0) {
            $this->errors->addSemantic("La función 'main' no puede recibir parámetros", $main->line, $main->column);
            return null;
        }

        if ($main->hasReturn()) {
            $this->errors->addSemantic("La función 'main' no puede retornar valores", $main->line, $main->column);
            return null;
        }

        $this->executeBlock($main->body, 'main');

        return null;
    }

    /**
     * Visita un bloque creando un scope hijo.
     */
    public function visitBlock($ctx): mixed
    {
        foreach ($ctx->stmt() as $stmtCtx) {
            $this->visit($stmtCtx);
        }
        return null;
    }

    /**
     * Ejecuta un bloque en un scope nuevo con nombre dado.
     */
    public function executeBlock($blockCtx, string $scopeName): void
    {
        $previousEnv = $this->env;
        $this->env = $this->env->createChild($scopeName);

        $this->visitBlock($blockCtx);

        $this->env = $previousEnv;
    }

    /**
     * Agrega texto a la salida de consola.
     */
    public function appendOutput(string $text): void
    {
        $this->output .= $text;
    }

    /**
     * Helper: reporta error semántico desde cualquier punto.
     */
    public function semanticError(string $msg, $ctx): void
    {
        $line = 0;
        $col = 0;
        if ($ctx !== null && method_exists($ctx, 'getStart')) {
            $token = $ctx->getStart();
            $line = $token->getLine();
            $col = $token->getCharPositionInLine();
        }
        $this->errors->addSemantic($msg, $line, $col);
    }

    /**
     * Visita una sentencia individual.
     * Intercepta BREAK y CONTINUE que son tokens directos.
     */
    public function visitStmt($ctx): mixed
    {
        // Verificar si es un token directo (BREAK o CONTINUE)
        if ($ctx->getChildCount() === 1) {
            $child = $ctx->getChild(0);
            if ($child instanceof \Antlr\Antlr4\Runtime\Tree\TerminalNode) {
                $tokenType = $child->getSymbol()->getType();
                $tokenText = $child->getText();

                if ($tokenText === 'break') {
                    throw new \Golampi\Interpreter\Signals\BreakSignal();
                }
                if ($tokenText === 'continue') {
                    throw new \Golampi\Interpreter\Signals\ContinueSignal();
                }
            }
        }

        // Para todo lo demás, delegar al visitor normal
        return $this->visitChildren($ctx);
}
}