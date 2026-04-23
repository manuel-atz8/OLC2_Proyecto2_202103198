<?php

namespace Golampi\Compiler;

use Golampi\Runtime\Environment\Environment;
use Golampi\Runtime\Environment\SymbolTableCollector;
use Golampi\Errors\ErrorCollector;
use Golampi\Compiler\AssemblyEmitter;
use Golampi\Compiler\LabelGenerator;
use Golampi\Compiler\StringPool;
use Golampi\Compiler\TypeSizes;

class GolampiCompiler extends \GolampiBaseVisitor
{
    public Environment $env;
    public Environment $globalEnv;
    public SymbolTableCollector $symbolTable;
    public ErrorCollector $errors;

    /** Emisor de código ensamblador ARM64. */
    public AssemblyEmitter $emitter;

    /** Generador de etiquetas únicas. */
    public LabelGenerator $labels;

    /** Pool de literales string para .data. */
    public StringPool $stringPool;

    /** Pila de contextos de bucle para break/continue. */
    public array $loopStack = [];

    /** Nombre de la función actual (para etiquetas de epílogo). */
    public string $currentFunction = '';

    public function __construct()
    {
        $this->globalEnv = new Environment(null, 'global');
        $this->env = $this->globalEnv;
        $this->symbolTable = new SymbolTableCollector();
        $this->errors = ErrorCollector::getInstance();
        $this->emitter = new AssemblyEmitter();
        $this->labels = new LabelGenerator();
        $this->stringPool = new StringPool();
    }

    /**
     * Punto de entrada: por ahora sigue emitiendo el stub,
     * pero usando el AssemblyEmitter para validar la integración.
     * Se reemplaza con codegen real en la Fase 4.
     */
    public function visitProgram($ctx): mixed
    {
        // Stub Fase 2: programa mínimo que hace exit(0)
        // usando el emitter real en lugar de un string hardcodeado.
        $this->emitter->label('_start');
        $this->emitter->comment('Stub Fase 2 - se reemplaza en Fase 4');
        $this->emitter->emit('mov x0, #0');
        $this->emitter->emit('mov x8, #93');
        $this->emitter->emit('svc #0');

        return null;
    }

    /**
     * Retorna el código ensamblador ARM64 generado.
     */
    public function getAssembly(): string
    {
        return $this->emitter->build($this->stringPool);
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
}