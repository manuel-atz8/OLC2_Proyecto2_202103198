<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Runtime\Types\GolampiValue;
use Golampi\Interpreter\Signals\BreakSignal;
use Golampi\Interpreter\Signals\ContinueSignal;

trait ControlFlowTrait
{
    /**
     * if expr { stmts } else if expr { stmts } else { stmts }
     */
    public function visitIfStmt($ctx): mixed
    {
        // Evaluar condición principal
        $cond = $this->visit($ctx->expr(0));

        if ($cond === null || !$cond->isBool()) {
            $this->semanticError("La condición del 'if' debe ser booleana", $ctx);
            return null;
        }

        if ($cond->value === true) {
            $this->executeBlock($ctx->block(0), 'if');
            return null;
        }

        // Evaluar else if
        $elseIfClauses = $ctx->elseIfClause();
        if ($elseIfClauses !== null) {
            foreach ($elseIfClauses as $i => $elseIfCtx) {
                $elseIfCond = $this->visit($elseIfCtx->expr());

                if ($elseIfCond === null || !$elseIfCond->isBool()) {
                    $this->semanticError("La condición del 'else if' debe ser booleana", $elseIfCtx);
                    return null;
                }

                if ($elseIfCond->value === true) {
                    $this->executeBlock($elseIfCtx->block(), 'else_if');
                    return null;
                }
            }
        }

        // Evaluar else
        $elseClause = $ctx->elseClause();
        if ($elseClause !== null) {
            $this->executeBlock($elseClause->block(), 'else');
        }

        return null;
    }

    /**
     * switch expr { case expr: stmts ... default: stmts }
     */
    public function visitSwitchStmt($ctx): mixed
    {
        $switchVal = $this->visit($ctx->expr());

        if ($switchVal === null) {
            $switchVal = GolampiValue::nil();
        }

        $matched = false;

        foreach ($ctx->caseClause() as $caseCtx) {
            $caseExprs = $caseCtx->exprList()->expr();

            foreach ($caseExprs as $caseExpr) {
                $caseVal = $this->visit($caseExpr);

                if ($caseVal !== null && $caseVal->value == $switchVal->value) {
                    $matched = true;
                    break;
                }
            }

            if ($matched) {
                $previousEnv = $this->env;
                $this->env = $this->env->createChild('case');

                try {
                    foreach ($caseCtx->stmt() as $stmtCtx) {
                        $this->visit($stmtCtx);
                    }
                } catch (BreakSignal $e) {
                    // break sale del switch
                }

                $this->env = $previousEnv;
                return null;
            }
        }

        // Si ningún case coincidió, ejecutar default
        $defaultCtx = $ctx->defaultClause();
        if ($defaultCtx !== null) {
            $previousEnv = $this->env;
            $this->env = $this->env->createChild('default');

            try {
                foreach ($defaultCtx->stmt() as $stmtCtx) {
                    $this->visit($stmtCtx);
                }
            } catch (BreakSignal $e) {
                // break sale del switch
            }

            $this->env = $previousEnv;
        }

        return null;
    }

    /**
     * for init; cond; post { stmts }
     */
    public function visitForClassic($ctx): mixed
    {
        $previousEnv = $this->env;
        $this->env = $this->env->createChild('for');

        // Ejecutar init
        if ($ctx->forInit() !== null) {
            $this->visit($ctx->forInit());
        }

        while (true) {
            // Evaluar condición
            if ($ctx->expr() !== null) {
                $cond = $this->visit($ctx->expr());

                if ($cond === null || !$cond->isBool()) {
                    $this->semanticError("La condición del 'for' debe ser booleana", $ctx);
                    break;
                }

                if ($cond->value === false) {
                    break;
                }
            }

            // Ejecutar cuerpo
            $bodyEnv = $this->env;
            try {
                $this->env = $this->env->createChild('for_body');
                $this->visitBlock($ctx->block());
                $this->env = $bodyEnv;
            } catch (BreakSignal $e) {
                $this->env = $bodyEnv;
                break;
            } catch (ContinueSignal $e) {
                $this->env = $bodyEnv;
            }

            // Ejecutar post
            if ($ctx->forPost() !== null) {
                $this->visit($ctx->forPost());
            }
        }

        $this->env = $previousEnv;
        return null;
    }

    /**
     * for expr { stmts }
     */
    public function visitForCondition($ctx): mixed
    {
        while (true) {
            $cond = $this->visit($ctx->expr());

            if ($cond === null || !$cond->isBool()) {
                $this->semanticError("La condición del 'for' debe ser booleana", $ctx);
                break;
            }

            if ($cond->value === false) {
                break;
            }

            try {
                $this->executeBlock($ctx->block(), 'for');
            } catch (BreakSignal $e) {
                break;
            } catch (ContinueSignal $e) {
                continue;
            }
        }

        return null;
    }

    /**
     * for { stmts }
     */
    public function visitForForever($ctx): mixed
    {
        while (true) {
            try {
                $this->executeBlock($ctx->block(), 'for');
            } catch (BreakSignal $e) {
                break;
            } catch (ContinueSignal $e) {
                continue;
            }
        }

        return null;
    }

    /**
     * break
     */
    public function visitBreakStatement($ctx): mixed
    {
        throw new BreakSignal();
    }

    /**
     * continue
     */
    public function visitContinueStatement($ctx): mixed
    {
        throw new ContinueSignal();
    }

}