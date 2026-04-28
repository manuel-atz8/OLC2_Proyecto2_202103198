<?php

namespace Golampi\Compiler\Traits;

/**
 * Genera código ARM64 para control de flujo:
 * if/else if/else, switch/case/default, for (clásico, condición, infinito),
 * break y continue (usando pila de contextos de bucle).
 */
trait CodeGenControlFlowTrait
{
    /**
     * if expr { stmts } else if expr { stmts } else { stmts }
     */
    public function visitIfStmt($ctx): mixed
    {
        $elseIfClauses = $ctx->elseIfClause() ?? [];
        $elseClause = $ctx->elseClause();
        $endLabel = $this->labels->next('if_end');

        // ── Condición principal ──
        $this->emitter->blank();
        $this->emitter->comment("if");
        $this->visit($ctx->expr());

        if (count($elseIfClauses) === 0 && $elseClause === null) {
            // Solo if, sin else
            $this->emitter->emit("cbz w0, " . $endLabel);
            $this->executeCompilerBlock($ctx->block(0), 'if');
        } else {
            $nextLabel = $this->labels->next('else');
            $this->emitter->emit("cbz w0, " . $nextLabel);
            $this->executeCompilerBlock($ctx->block(0), 'if');
            $this->emitter->emit("b " . $endLabel);

            // ── else if ──
            foreach ($elseIfClauses as $i => $elseIfCtx) {
                $this->emitter->label($nextLabel);

                $this->emitter->comment("else if");
                $this->visit($elseIfCtx->expr());

                $isLast = ($i === count($elseIfClauses) - 1) && ($elseClause === null);

                if ($isLast) {
                    $this->emitter->emit("cbz w0, " . $endLabel);
                    $this->executeCompilerBlock($elseIfCtx->block(), 'else_if');
                } else {
                    $nextLabel = $this->labels->next('else');
                    $this->emitter->emit("cbz w0, " . $nextLabel);
                    $this->executeCompilerBlock($elseIfCtx->block(), 'else_if');
                    $this->emitter->emit("b " . $endLabel);
                }
            }

            // ── else ──
            if ($elseClause !== null) {
                $this->emitter->label($nextLabel);
                $this->emitter->comment("else");
                $this->executeCompilerBlock($elseClause->block(), 'else');
            }
        }

        $this->emitter->label($endLabel);
        return null;
    }

    /**
     * switch expr { case expr: stmts ... default: stmts }
     */
    public function visitSwitchStmt($ctx): mixed
    {
        $endLabel = $this->labels->next('switch_end');

        $this->emitter->blank();
        $this->emitter->comment("switch");

        // Evaluar expresión del switch → w0, guardar en stack
        $this->visit($ctx->expr());
        $this->emitter->emit("str w0, [sp, #-16]!");

        $caseClauses = $ctx->caseClause() ?? [];
        $defaultClause = $ctx->defaultClause();

        $caseLabels = [];
        $defaultLabel = null;

        // Primero: generar comparaciones y saltos
        foreach ($caseClauses as $i => $caseCtx) {
            $bodyLabel = $this->labels->next('case');
            $caseLabels[] = $bodyLabel;

            $caseExprs = $caseCtx->exprList()->expr();
            foreach ($caseExprs as $caseExpr) {
                // Recuperar valor del switch sin consumirlo
                $this->emitter->emit("ldr w1, [sp]");

                // Evaluar expresión del case → w0
                $this->visit($caseExpr);

                // Comparar
                $this->emitter->emit("cmp w1, w0");
                $this->emitter->emit("b.eq " . $bodyLabel);
            }
        }

        // Salto a default si existe, o al final
        if ($defaultClause !== null) {
            $defaultLabel = $this->labels->next('default');
            $this->emitter->emit("b " . $defaultLabel);
        } else {
            $this->emitter->emit("b " . $endLabel);
        }

        // Segundo: emitir cuerpos de cada case
        foreach ($caseClauses as $i => $caseCtx) {
            $this->emitter->label($caseLabels[$i]);

            // Push contexto de switch para break
            $this->loopStack[] = ['break' => $endLabel, 'continue' => null];

            $previousEnv = $this->env;
            $this->env = $this->env->createChild('case');

            foreach ($caseCtx->stmt() as $stmtCtx) {
                $this->visit($stmtCtx);
            }

            $this->env = $previousEnv;
            array_pop($this->loopStack);

            $this->emitter->emit("b " . $endLabel);
        }

        // Default
        if ($defaultClause !== null) {
            $this->emitter->label($defaultLabel);

            $this->loopStack[] = ['break' => $endLabel, 'continue' => null];

            $previousEnv = $this->env;
            $this->env = $this->env->createChild('default');

            foreach ($defaultClause->stmt() as $stmtCtx) {
                $this->visit($stmtCtx);
            }

            $this->env = $previousEnv;
            array_pop($this->loopStack);
        }

        $this->emitter->label($endLabel);

        // Limpiar stack del valor del switch
        $this->emitter->emit("add sp, sp, #16");

        return null;
    }

    /**
     * for init; cond; post { stmts }
     */
    public function visitForClassic($ctx): mixed
    {
        $condLabel = $this->labels->next('for_cond');
        $postLabel = $this->labels->next('for_post');
        $endLabel = $this->labels->next('for_end');

        $this->emitter->blank();
        $this->emitter->comment("for clasico");

        // Scope para init
        $previousEnv = $this->env;
        $this->env = $this->env->createChild('for');

        // Init
        if ($ctx->forInit() !== null) {
            $this->visit($ctx->forInit());
        }

        // Condición
        $this->emitter->label($condLabel);
        if ($ctx->expr() !== null) {
            $this->visit($ctx->expr());
            $this->emitter->emit("cbz w0, " . $endLabel);
        }

        // Push contexto de bucle (break → endLabel, continue → postLabel)
        $this->loopStack[] = ['break' => $endLabel, 'continue' => $postLabel];

        // Cuerpo
        $bodyEnv = $this->env;
        $this->env = $this->env->createChild('for_body');
        $this->visitBlock($ctx->block());
        $this->env = $bodyEnv;

        array_pop($this->loopStack);

        // Post
        $this->emitter->label($postLabel);
        if ($ctx->forPost() !== null) {
            $this->visit($ctx->forPost());
        }

        // Saltar a condición
        $this->emitter->emit("b " . $condLabel);

        // Fin
        $this->emitter->label($endLabel);

        $this->env = $previousEnv;
        return null;
    }

    /**
     * for expr { stmts }
     */
    public function visitForCondition($ctx): mixed
    {
        $condLabel = $this->labels->next('for_cond');
        $endLabel = $this->labels->next('for_end');

        $this->emitter->blank();
        $this->emitter->comment("for condicion");

        $this->emitter->label($condLabel);
        $this->visit($ctx->expr());
        $this->emitter->emit("cbz w0, " . $endLabel);

        $this->loopStack[] = ['break' => $endLabel, 'continue' => $condLabel];

        $this->executeCompilerBlock($ctx->block(), 'for');

        array_pop($this->loopStack);

        $this->emitter->emit("b " . $condLabel);

        $this->emitter->label($endLabel);
        return null;
    }

    /**
     * for { stmts }
     */
    public function visitForForever($ctx): mixed
    {
        $startLabel = $this->labels->next('for_start');
        $endLabel = $this->labels->next('for_end');

        $this->emitter->blank();
        $this->emitter->comment("for infinito");

        $this->emitter->label($startLabel);

        $this->loopStack[] = ['break' => $endLabel, 'continue' => $startLabel];

        $this->executeCompilerBlock($ctx->block(), 'for');

        array_pop($this->loopStack);

        $this->emitter->emit("b " . $startLabel);

        $this->emitter->label($endLabel);
        return null;
    }

    /**
     * Visita un bloque de sentencias.
     */
    public function visitBlock($ctx): mixed
    {
        foreach ($ctx->stmt() as $stmtCtx) {
            $this->visit($stmtCtx);
        }
        return null;
    }

    /**
     * Ejecuta un bloque en un scope hijo (equivalente a executeBlock del intérprete).
     */
    public function executeCompilerBlock($blockCtx, string $scopeName): void
    {
        $previousEnv = $this->env;
        $this->env = $this->env->createChild($scopeName);

        $this->visitBlock($blockCtx);

        $this->env = $previousEnv;
    }

    /**
     * Visita una sentencia individual.
     * Intercepta BREAK y CONTINUE como tokens directos.
     */
    public function visitStmt($ctx): mixed
    {
        if ($ctx->getChildCount() === 1) {
            $child = $ctx->getChild(0);
            if ($child instanceof \Antlr\Antlr4\Runtime\Tree\TerminalNode) {
                $tokenText = $child->getText();

                if ($tokenText === 'break') {
                    if (empty($this->loopStack)) {
                        $this->semanticError("'break' fuera de un bucle o switch", $ctx);
                        return null;
                    }
                    $context = end($this->loopStack);
                    $this->emitter->comment("break");
                    $this->emitter->emit("b " . $context['break']);
                    return null;
                }

                if ($tokenText === 'continue') {
                    if (empty($this->loopStack)) {
                        $this->semanticError("'continue' fuera de un bucle", $ctx);
                        return null;
                    }
                    $context = end($this->loopStack);
                    if ($context['continue'] === null) {
                        $this->semanticError("'continue' no válido en este contexto", $ctx);
                        return null;
                    }
                    $this->emitter->comment("continue");
                    $this->emitter->emit("b " . $context['continue']);
                    return null;
                }
            }
        }

        return $this->visitChildren($ctx);
    }
}