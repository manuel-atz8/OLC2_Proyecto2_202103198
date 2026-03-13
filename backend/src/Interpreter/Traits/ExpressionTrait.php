<?php

namespace Golampi\Interpreter\Traits;

use Golampi\Runtime\Types\GolampiValue;
use Golampi\Runtime\Types\GolampiArray;
use Golampi\Semantic\TypeChecker;

trait ExpressionTrait
{
    /**
     * expr OR expr
     * Cortocircuito: si izquierda es true, no evalúa derecha.
     */
    public function visitOrExpr($ctx): mixed
    {
        $left = $this->visit($ctx->expr(0));

        if ($left === null || !$left->isBool()) {
            $this->semanticError("Operador '||' requiere operandos booleanos", $ctx);
            return GolampiValue::nil();
        }

        if ($left->value === true) {
            return new GolampiValue('bool', true);
        }

        $right = $this->visit($ctx->expr(1));
        return TypeChecker::logicalOp('||', $left, $right);
    }

    /**
     * expr AND expr
     * Cortocircuito: si izquierda es false, no evalúa derecha.
     */
    public function visitAndExpr($ctx): mixed
    {
        $left = $this->visit($ctx->expr(0));

        if ($left === null || !$left->isBool()) {
            $this->semanticError("Operador '&&' requiere operandos booleanos", $ctx);
            return GolampiValue::nil();
        }

        if ($left->value === false) {
            return new GolampiValue('bool', false);
        }

        $right = $this->visit($ctx->expr(1));
        return TypeChecker::logicalOp('&&', $left, $right);
    }

    /**
     * expr == expr | expr != expr
     */
    public function visitEqualExpr($ctx): mixed
    {
        $left = $this->visit($ctx->expr(0));
        $right = $this->visit($ctx->expr(1));
        $op = $ctx->getChild(1)->getText();

        $result = TypeChecker::relationalOp($op, $left, $right);

        if ($result->isNil()) {
            $this->semanticError(
                "Operación '{$op}' inválida entre '{$left->type}' y '{$right->type}'",
                $ctx
            );
        }

        return $result;
    }

    /**
     * expr > expr | expr >= expr | expr < expr | expr <= expr
     */
    public function visitRelExpr($ctx): mixed
    {
        $left = $this->visit($ctx->expr(0));
        $right = $this->visit($ctx->expr(1));
        $op = $ctx->getChild(1)->getText();

        $result = TypeChecker::relationalOp($op, $left, $right);

        if ($result->isNil()) {
            $this->semanticError(
                "Operación '{$op}' inválida entre '{$left->type}' y '{$right->type}'",
                $ctx
            );
        }

        return $result;
    }

    /**
     * expr + expr | expr - expr
     */
    public function visitAddExpr($ctx): mixed
    {
        $left = $this->visit($ctx->expr(0));
        $right = $this->visit($ctx->expr(1));
        $op = $ctx->getChild(1)->getText();

        $result = TypeChecker::arithmeticOp($op, $left, $right);

        if ($result->isNil()) {
            $this->semanticError(
                "Operación '{$op}' inválida entre '{$left->type}' y '{$right->type}'",
                $ctx
            );
        }

        return $result;
    }

    /**
     * expr * expr | expr / expr | expr % expr
     */
    public function visitMulExpr($ctx): mixed
    {
        $left = $this->visit($ctx->expr(0));
        $right = $this->visit($ctx->expr(1));
        $op = $ctx->getChild(1)->getText();

        $result = TypeChecker::arithmeticOp($op, $left, $right);

        if ($result->isNil()) {
            $this->semanticError(
                "Operación '{$op}' inválida entre '{$left->type}' y '{$right->type}'",
                $ctx
            );
        }

        return $result;
    }

    /**
     * !expr
     */
    public function visitNotExpr($ctx): mixed
    {
        $val = $this->visit($ctx->expr());
        $result = TypeChecker::logicalOp('!', $val);

        if ($result->isNil()) {
            $this->semanticError("Operador '!' requiere operando booleano", $ctx);
        }

        return $result;
    }

    /**
     * -expr
     */
    public function visitNegExpr($ctx): mixed
    {
        $val = $this->visit($ctx->expr());
        $result = TypeChecker::negateOp($val);

        if ($result->isNil()) {
            $this->semanticError("Negación unaria no aplicable a tipo '{$val->type}'", $ctx);
        }

        return $result;
    }

    /**
     * &ID — obtener dirección (referencia con environment)
     */
    public function visitAddrExpr($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            return GolampiValue::nil();
        }

        return new GolampiValue('*' . $symbol->dataType, [
            'env' => $this->env,
            'name' => $name,
        ]);
    }

    /**
     * *ID — desreferenciar variable puntero
     */
    public function visitDerefExpr($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            return GolampiValue::nil();
        }

        if (!str_starts_with($symbol->dataType, '*')) {
            $this->semanticError("'{$name}' no es un puntero", $ctx);
            return GolampiValue::nil();
        }

        // Referencia con environment
        if (is_array($symbol->value) && isset($symbol->value['env'])) {
            $refEnv = $symbol->value['env'];
            $refName = $symbol->value['name'];
            $refSymbol = $refEnv->lookup($refName);

            if ($refSymbol === null) {
                $this->semanticError("Referencia inválida del puntero '{$name}'", $ctx);
                return GolampiValue::nil();
            }

            $baseType = substr($symbol->dataType, 1);
            return new GolampiValue($baseType, $refSymbol->value);
        }

        // Fallback
        $refSymbol = $this->env->lookup($symbol->value);
        if ($refSymbol === null) {
            return GolampiValue::nil();
        }

        return new GolampiValue($refSymbol->dataType, $refSymbol->value);
    }

    /**
     * atom → pasa al atom correspondiente
     */
    public function visitAtomExpr($ctx): mixed
    {
        return $this->visit($ctx->atom());
    }

    // ==================== ATOMS ====================

    public function visitIntAtom($ctx): mixed
    {
        return new GolampiValue('int32', (int) $ctx->getText());
    }

    public function visitFloatAtom($ctx): mixed
    {
        return new GolampiValue('float32', (float) $ctx->getText());
    }

    public function visitRuneAtom($ctx): mixed
    {
        $text = $ctx->getText();
        // Quitar comillas simples
        $char = substr($text, 1, -1);

        // Manejar secuencias de escape
        $char = match ($char) {
            '\\n'  => "\n",
            '\\t'  => "\t",
            '\\r'  => "\r",
            '\\\\' => "\\",
            "\\'"  => "'",
            default => $char,
        };

        return new GolampiValue('rune', mb_ord($char, 'UTF-8'));
    }

    public function visitStringAtom($ctx): mixed
    {
        $text = $ctx->getText();
        // Quitar comillas dobles
        $content = substr($text, 1, -1);

        // Procesar secuencias de escape
        $content = str_replace(
            ['\\n', '\\t', '\\r', '\\\\', '\\"'],
            ["\n", "\t", "\r", "\\", '"'],
            $content
        );

        return new GolampiValue('string', $content);
    }

    public function visitTrueAtom($ctx): mixed
    {
        return new GolampiValue('bool', true);
    }

    public function visitFalseAtom($ctx): mixed
    {
        return new GolampiValue('bool', false);
    }

    public function visitNilAtom($ctx): mixed
    {
        return GolampiValue::nil();
    }

    /**
     * ID — acceso a variable
     */
    public function visitIdAtom($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Variable '{$name}' no declarada", $ctx);
            return GolampiValue::nil();
        }

        return new GolampiValue($symbol->dataType, $symbol->value);
    }

    /**
     * ID[expr] — acceso a arreglo
     */
    public function visitIndexAtom($ctx): mixed
    {
        $name = $ctx->ID()->getText();
        $symbol = $this->env->lookup($name);

        if ($symbol === null) {
            $this->semanticError("Arreglo '{$name}' no declarado", $ctx);
            return GolampiValue::nil();
        }

        if (!($symbol->value instanceof GolampiArray)) {
            $this->semanticError("'{$name}' no es un arreglo", $ctx);
            return GolampiValue::nil();
        }

        $array = $symbol->value;
        $indices = [];

        foreach ($ctx->expr() as $exprCtx) {
            $idx = $this->visit($exprCtx);
            if ($idx === null || !$idx->isInt()) {
                $this->semanticError("El índice del arreglo debe ser entero", $ctx);
                return GolampiValue::nil();
            }
            $indices[] = (int) $idx->value;
        }

        $result = $array->get($indices);

        if ($result === null) {
            $this->semanticError("Índice fuera de rango en arreglo '{$name}'", $ctx);
            return GolampiValue::nil();
        }

        return new GolampiValue($array->elementType, $result);
    }

    /**
     * (expr) — expresión agrupada
     */
    public function visitParenAtom($ctx): mixed
    {
        return $this->visit($ctx->expr());
    }

    /**
     * Literal de arreglo: [3]int32{1, 2, 3}
     */
    public function visitArrayAtom($ctx): mixed
    {
        return $this->visit($ctx->arrayLiteral());
    }
    

    public function visitArrayLiteral($ctx): mixed
    {
        $dims = $this->resolveArrayDimensions($ctx->arrayDimension());
        $typeCtx = $ctx->type();
        $baseType = $this->resolveType($typeCtx);

        $initCtx = $ctx->arrayInitList();

        if ($initCtx !== null) {
            $elements = $this->resolveArrayInit($initCtx, $baseType);
            return new GolampiValue('[]' . $baseType, new GolampiArray($baseType, $dims, $elements));
        }

        return new GolampiValue('[]' . $baseType, new GolampiArray($baseType, $dims));
    }

    /**
     * Resuelve la inicialización de un arreglo detectando el tipo de contexto.
     */
    private function resolveArrayInit($ctx, string $baseType): array
    {
        $class = get_class($ctx);

        // Inicialización plana: {1, 2, 3}
        if (str_contains($class, 'FlatInit')) {
            $elements = [];
            foreach ($ctx->expr() as $exprCtx) {
                $val = $this->visit($exprCtx);
                $elements[] = $val !== null ? $val->value : GolampiValue::defaultFor($baseType)->value;
            }
            return $elements;
        }

        // Inicialización anidada: {{1, 2}, {3, 4}}
        if (str_contains($class, 'NestedInitList')) {
            $elements = [];
            foreach ($ctx->nestedInit() as $nested) {
                $row = [];
                foreach ($nested->expr() as $exprCtx) {
                    $val = $this->visit($exprCtx);
                    $row[] = $val !== null ? $val->value : GolampiValue::defaultFor($baseType)->value;
                }
                $elements[] = $row;
            }
            return $elements;
        }

        return [];
    }

    
}