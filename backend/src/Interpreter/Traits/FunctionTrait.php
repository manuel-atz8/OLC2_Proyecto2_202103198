<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Runtime\Types\GolampiValue;
use Golampi\Runtime\Types\GolampiFunction;
use Golampi\Runtime\Environment\Environment;
use Golampi\Runtime\Environment\Symbol;
use Golampi\Interpreter\Signals\ReturnSignal;

trait FunctionTrait
{
    /**
     * Registra una función sin ejecutarla (hoisting).
     */
    public function registerFunction($ctx): void
    {
        $name = $ctx->ID()->getText();
        $line = $ctx->ID()->getSymbol()->getLine();
        $col = $ctx->ID()->getSymbol()->getCharPositionInLine();

        if (isset($this->functions[$name])) {
            $this->semanticError("Función '{$name}' ya declarada", $ctx);
            return;
        }

        // Resolver parámetros
        $params = [];
        $paramsCtx = $ctx->params();
        if ($paramsCtx !== null) {
            foreach ($paramsCtx->param() as $paramCtx) {
                $paramName = $paramCtx->ID()->getText();
                $paramType = $this->resolveType($paramCtx->type());
                $isPointer = $paramCtx->pointerMark() !== null;

                $params[] = [
                    'name' => $paramName,
                    'type' => $paramType,
                    'isPointer' => $isPointer,
                ];
            }
        }

        // Resolver tipos de retorno
        $returnTypes = [];
        $returnCtx = $ctx->returnType();
        if ($returnCtx !== null) {
            // Retorno múltiple: (int, bool)
            if (count($returnCtx->type()) > 1) {
                foreach ($returnCtx->type() as $typeCtx) {
                    $returnTypes[] = $this->resolveType($typeCtx);
                }
            } else {
                // Retorno simple
                $returnTypes[] = $this->resolveType($returnCtx->type(0));
            }
        }

        $func = new GolampiFunction($name, $params, $returnTypes, $ctx->block(), $line, $col);
        $this->functions[$name] = $func;

        // Registrar en tabla de símbolos
        $symbol = new Symbol($name, 'función', null, 'global', 'function', $line, $col);
        $this->symbolTable->register($symbol);
    }

    /**
     * ID(args) — llamada a función del usuario
     */
    public function visitCallAtom($ctx): mixed
    {
        $name = $ctx->ID()->getText();

        // Verificar si es función embebida de un solo nombre
        $builtinResult = $this->tryBuiltinCall($name, $ctx);
        if ($builtinResult !== null) {
            return $builtinResult;
        }

        // Buscar función declarada
        if (!isset($this->functions[$name])) {
            $this->semanticError("Función '{$name}' no declarada", $ctx);
            return GolampiValue::nil();
        }

        $func = $this->functions[$name];

        if ($func->isMain()) {
            $this->semanticError("No se puede llamar a 'main' explícitamente", $ctx);
            return GolampiValue::nil();
        }

        // Evaluar argumentos
        $args = $this->resolveArguments($ctx->argList(), $func, $ctx);
        if ($args === null) {
            return GolampiValue::nil();
        }

        // Ejecutar función
        return $this->executeFunction($func, $args, $ctx);
    }

    /**
     * ID.ID(args) — llamada a método (fmt.Println, etc.)
     */
    public function visitMethodAtom($ctx): mixed
    {
        $ids = $ctx->ID();
        $pkg = $ids[0]->getText();
        $method = $ids[1]->getText();
        $fullName = "{$pkg}.{$method}";

        return $this->executeBuiltinMethod($fullName, $ctx);
    }

    /**
     * Evalúa los argumentos y verifica contra los parámetros.
     */
    private function resolveArguments($argListCtx, GolampiFunction $func, $ctx): ?array
    {
        $args = [];

        if ($argListCtx !== null) {
            foreach ($argListCtx->arg() as $argCtx) {
                $args[] = $this->visit($argCtx);
            }
        }

        if (count($args) !== $func->paramCount()) {
            $this->semanticError(
                "Función '{$func->name}' espera {$func->paramCount()} argumentos, recibió " . count($args),
                $ctx
            );
            return null;
        }

        return $args;
    }

    /**
     * Ejecuta una función creando su scope y sus parámetros.
     */
    private function executeFunction(GolampiFunction $func, array $args, $ctx): GolampiValue
    {
        $previousEnv = $this->env;

        // Las funciones se ejecutan en el scope global (no en el del llamador)
        $this->env = $this->globalEnv->createChild($func->name);

        // Declarar parámetros como variables locales
        foreach ($func->params as $i => $param) {
            $val = $args[$i] ?? GolampiValue::nil();

            if ($param['isPointer']) {
                // Paso por referencia: guardar la referencia completa
                $symbol = new Symbol(
                    $param['name'],
                    $param['type'],       // tipo base sin *, ej: int32
                    $val->value,          // el array con ['env' => ..., 'name' => ...]
                    $func->name,
                    'parameter',
                    $func->line,
                    $func->column
                );
                // Marcar como puntero internamente
                $symbol->dataType = '*' . $param['type'];
            } else {
                $symbol = new Symbol(
                    $param['name'],
                    $param['type'],
                    $val->value,
                    $func->name,
                    'parameter',
                    $func->line,
                    $func->column
                );
            }

            $this->env->declare($symbol);
            $this->symbolTable->register($symbol);
        }

        // Ejecutar cuerpo
        try {
            $this->visitBlock($func->body);
        } catch (ReturnSignal $signal) {
            $this->env = $previousEnv;
            $this->lastMultiReturn = $signal->values;

            if (count($signal->values) === 1) {
                return $signal->first();
            }

            // Múltiples retornos: retorna el primero, los demás se acceden via lastMultiReturn
            return $signal->first();
        }

        $this->env = $previousEnv;

        // Si la función no tiene return explícito
        return GolampiValue::nil();
    }

    /**
     * return expr, expr, ...
     */
    public function visitReturnStmt($ctx): mixed
    {
        $values = [];

        if ($ctx->exprList() !== null) {
            foreach ($ctx->exprList()->expr() as $exprCtx) {
                $val = $this->visit($exprCtx);
                $values[] = $val ?? GolampiValue::nil();
            }
        }

        throw new ReturnSignal($values);
    }

    /**
     * &ID — argumento por referencia
     */
    public function visitRefArg($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            return GolampiValue::nil();
        }

        // Guardar referencia con el environment donde vive la variable
        error_log("RefArg: name={$name}, type=*{$symbol->dataType}, value_type=" . gettype($symbol->value));
        return new GolampiValue('*' . $symbol->dataType, [
            'env' => $this->env,
            'name' => $name,
        ]);
    }

    /**
     * expr — argumento por valor
     */
    public function visitValArg($ctx): mixed
    {
        return $this->visit($ctx->expr());
    }
}