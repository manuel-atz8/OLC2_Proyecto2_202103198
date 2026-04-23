<?php

namespace Golampi\Compiler;

use Golampi\Runtime\Environment\Environment;
use Golampi\Runtime\Environment\SymbolTableCollector;
use Golampi\Errors\ErrorCollector;

class GolampiCompiler extends \GolampiBaseVisitor
{
    public Environment $env;
    public Environment $globalEnv;
    public SymbolTableCollector $symbolTable;
    public ErrorCollector $errors;

    /** Código ensamblador ARM64 acumulado (el .s final). */
    private string $assembly = '';

    public function __construct()
    {
        $this->globalEnv = new Environment(null, 'global');
        $this->env = $this->globalEnv;
        $this->symbolTable = new SymbolTableCollector();
        $this->errors = ErrorCollector::getInstance();
    }

    /**
     * Punto de entrada: por ahora emite un "hello world" ARM64 hardcodeado
     * que termina con exit(0). Sirve para validar el pipeline completo
     * antes de implementar el codegen real en la Fase 4.
     */
    public function visitProgram($ctx): mixed
    {
        $this->assembly = $this->buildHelloWorldStub();
        return null;
    }

    /**
     * Retorna el código ensamblador ARM64 generado.
     */
    public function getAssembly(): string
    {
        return $this->assembly;
    }

    /**
     * Stub temporal: programa ARM64 mínimo que termina con exit(0).
     * Se reemplaza con codegen real en la Fase 4.
     */
    private function buildHelloWorldStub(): string
    {
        return <<<ASM
// ============================================================
// Golampi Compiler - Stub Fase 1
// Este archivo se reemplaza con codegen real en la Fase 4.
// Por ahora solo emite un programa ARM64 valido que hace exit(0).
// ============================================================

.global _start

.section .text
_start:
    mov x0, #0          // exit code = 0
    mov x8, #93         // syscall: exit
    svc #0

ASM;
    }
}