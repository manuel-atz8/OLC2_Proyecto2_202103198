# Documentación Técnica — Golampi Interpreter

## 1. Gramática Formal

La gramática del lenguaje Golampi está definida en ANTLR4 y se divide en las siguientes secciones.

### 1.1 Programa

Un programa Golampi consiste en declaraciones a nivel global: funciones, variables y constantes. La ejecución inicia buscando y ejecutando la función `main`.
```
program → (functionDeclaration | varDeclaration | constDeclaration)* EOF
```

### 1.2 Funciones
```
functionDeclaration → FUNC ID '(' params? ')' returnType? block

params     → param (',' param)*
param      → ID pointerMark? type
pointerMark → '*'

returnType → type
           | '(' type (',' type)+ ')'
```

Las funciones soportan retorno simple y múltiple. Los parámetros pueden ser por valor o por referencia mediante punteros.

### 1.3 Variables y Constantes
```
varDeclaration   → VAR idList arrayDimension* type ('=' exprList)?
                 | VAR idList '=' exprList
constDeclaration → CONST ID type '=' expr
shortVarDecl     → idList ':=' exprList

idList         → ID (',' ID)*
exprList       → expr (',' expr)*
arrayDimension → '[' expr ']'
```

### 1.4 Sentencias
```
stmt → varDeclaration
     | constDeclaration
     | shortVarDecl
     | assignStmt
     | incDecStmt
     | ifStmt
     | switchStmt
     | forStmt
     | BREAK
     | CONTINUE
     | returnStmt
     | exprStmt
     | block
```

### 1.5 Asignaciones
```
assignStmt → leftValue assignOp expr

leftValue → ID                     (variable simple)
          | ID ('[' expr ']')+     (acceso a arreglo)
          | '*' ID                 (desreferencia de puntero)

assignOp → '=' | '+=' | '-=' | '*=' | '/='
```

### 1.6 Control de Flujo
```
ifStmt       → IF expr block elseIfClause* elseClause?
elseIfClause → ELSE IF expr block
elseClause   → ELSE block

switchStmt    → SWITCH expr '{' caseClause* defaultClause? '}'
caseClause    → CASE exprList ':' stmt*
defaultClause → DEFAULT ':' stmt*

forStmt → FOR forInit? ';' expr? ';' forPost? block   (clásico)
        | FOR expr block                               (condición)
        | FOR block                                    (infinito)
```

### 1.7 Expresiones

La precedencia de operadores se maneja mediante reglas en cascada (de menor a mayor precedencia):
```
expr      → orExpr
orExpr    → andExpr (OR andExpr)*
andExpr   → eqExpr (AND eqExpr)*
eqExpr    → relExpr (('==' | '!=') relExpr)*
relExpr   → addExpr (('>' | '>=' | '<' | '<=') addExpr)*
addExpr   → mulExpr (('+' | '-') mulExpr)*
mulExpr   → unaryExpr (('*' | '/' | '%') unaryExpr)*

unaryExpr → '!' unaryExpr
          | '-' unaryExpr
          | '&' ID
          | '*' ID
          | atom
```

### 1.8 Átomos (Valores Primarios)
```
atom → FLOAT_LIT | INT_LIT | RUNE_LIT | STRING_LIT
     | TRUE | FALSE | NIL
     | TYPE '(' expr ')'              (casteo: int32(x), float32(y))
     | ID '.' ID '(' argList? ')'     (método: fmt.Println)
     | ID '(' argList? ')'            (llamada a función)
     | ID ('[' expr ']')+             (acceso a arreglo)
     | ID                             (identificador)
     | '(' expr ')'                   (agrupación)
     | arrayLiteral                   (literal de arreglo)
```

### 1.9 Tipos
```
type → INT32_T | INT_T | FLOAT32_T | BOOL_T | RUNE_T | STRING_T
     | arrayDimension+ type           (tipo arreglo)
     | '*' type                        (tipo puntero)
```

### 1.10 Tokens Léxicos

| Token | Patrón |
|-------|--------|
| INT_LIT | `[0-9]+` |
| FLOAT_LIT | `[0-9]+ '.' [0-9]+` |
| RUNE_LIT | `'\'' (~['\\] \| '\\' .) '\''` |
| STRING_LIT | `'"' (~["\\] \| '\\' .)* '"'` |
| ID | `[a-zA-Z_][a-zA-Z0-9_]*` |
| LINE_COMMENT | `'//' ~[\r\n]*` → skip |
| BLOCK_COMMENT | `'/*' .*? '*/'` → skip |

---

### 1.11 Características adicionales

**Casteo de tipos:**
El lenguaje soporta conversión explícita de tipos usando la sintaxis `tipo(expresión)`:
```
int32(3.14)    → 3
float32(42)    → 42.0
rune("A")      → 65
string(65)     → "65"
```

**Indexación de strings:**
Se puede acceder a caracteres individuales de un string por índice, retornando un valor de tipo `rune`:
```
var texto string = "Hola"
var c rune = texto[0]    → 72 (código Unicode de 'H')
```

**Arreglos N-dimensionales:**
La inicialización de arreglos soporta cualquier nivel de anidamiento:
```
var cubo [2][2][2]int32 = [2][2][2]int32{
    {{1, 2}, {3, 4}},
    {{5, 6}, {7, 8}},
}
```

---

## 2. Arquitectura del Sistema

### 2.1 Diagrama General
```
┌─────────────────┐     HTTP/JSON     ┌──────────────────────────┐
│    Frontend      │ ◄──────────────► │        Backend           │
│  React + Vite    │                  │     PHP + ANTLR4         │
│  Tailwind CSS    │                  │                          │
└─────────────────┘                  └──────────────────────────┘
                                              │
                                    ┌─────────┴──────────┐
                                    │                    │
                              ┌─────▼─────┐      ┌──────▼──────┐
                              │  Grammar   │      │    src/     │
                              │  (ANTLR4)  │      │  (Lógica)  │
                              └───────────┘      └─────────────┘
```

### 2.2 Pipeline de Ejecución
```
Código fuente (.go)
       │
       ▼
┌──────────────┐
│  GolampiLexer │  ← Análisis Léxico (tokens)
│  (ANTLR4)     │
└──────┬───────┘
       │ tokens
       ▼
┌──────────────┐
│ GolampiParser │  ← Análisis Sintáctico (AST)
│  (ANTLR4)     │
└──────┬───────┘
       │ AST
       ▼
┌──────────────┐
│GolampiVisitor │  ← Análisis Semántico + Ejecución
│  (PHP)        │
└──────┬───────┘
       │
       ▼
┌──────────────┐
│   Resultado   │  ← Output + Errores + Tabla de Símbolos
└──────────────┘
```

---

## 3. Diagrama de Clases

### 3.1 Módulo Api
```
┌─────────────────────┐     ┌─────────────────────┐
│       Router        │────►│     Interpreter      │
├─────────────────────┤     ├─────────────────────┤
│ + handle()          │     │ - sourceCode: string │
│ - executeCode()     │     │ - visitor: Visitor   │
│ - respond()         │     │ + run(): array       │
└─────────────────────┘     └─────────────────────┘
```

### 3.2 Módulo Runtime/Environment
```
┌──────────────────────┐
│       Symbol         │
├──────────────────────┤
│ + id: string         │
│ + dataType: string   │
│ + value: mixed       │
│ + scope: string      │
│ + category: string   │
│ + line: int          │
│ + column: int        │
│ + isConstant: bool   │
└──────────────────────┘

┌────────────────────────────┐       ┌─────────────────────────────┐
│       Environment          │       │   SymbolTableCollector       │
├────────────────────────────┤       ├─────────────────────────────┤
│ - symbols: array           │       │ - allSymbols: array         │
│ - parent: Environment?     │       │ + register(Symbol)          │
│ - scopeName: string        │       │ + getAll(): array           │
├────────────────────────────┤       │ + toReport(): array         │
│ + declare(Symbol): bool    │       └─────────────────────────────┘
│ + lookup(id): Symbol?      │
│ + lookupLocal(id): Symbol? │
│ + assign(id, value): bool  │
│ + createChild(name): Env   │
└────────────────────────────┘
         ▲
         │ parent
         │
┌────────┴───────────────────┐
│   Scope hijo (if, for...)  │
└────────────────────────────┘
```

### 3.3 Módulo Runtime/Types
```
┌─────────────────────────┐
│     GolampiValue        │
├─────────────────────────┤
│ + type: string          │
│ + value: mixed          │
├─────────────────────────┤
│ + isNil(): bool         │
│ + isInt(): bool         │
│ + isFloat(): bool       │
│ + isBool(): bool        │
│ + isRune(): bool        │
│ + isString(): bool      │
│ + toPrintable(): string │
│ + getTypeString(): str  │
│ + defaultFor(type): Val │
│ + nil(): GolampiValue   │
└─────────────────────────┘

┌─────────────────────────┐     ┌─────────────────────────┐
│     GolampiArray        │     │    GolampiFunction      │
├─────────────────────────┤     ├─────────────────────────┤
│ + elementType: string   │     │ + name: string          │
│ + dimensions: array     │     │ + params: array         │
│ + elements: array       │     │ + returnTypes: array    │
├─────────────────────────┤     │ + body: Context         │
│ + get(indices): mixed   │     ├─────────────────────────┤
│ + set(indices, val):bool│     │ + hasReturn(): bool     │
│ + length(): int         │     │ + isMain(): bool        │
│ + fullType(): string    │     │ + paramCount(): int     │
└─────────────────────────┘     └─────────────────────────┘
```

### 3.4 Módulo Interpreter
```
┌──────────────────────────────────────────┐
│            GolampiVisitor                │
├──────────────────────────────────────────┤
│ + env: Environment                       │
│ + globalEnv: Environment                 │
│ + symbolTable: SymbolTableCollector      │
│ + errors: ErrorCollector                 │
│ + functions: array                       │
│ + output: string                         │
│ + lastMultiReturn: array                 │
├──────────────────────────────────────────┤
│ + visitProgram()                         │
│ + visitBlock()                           │
│ + executeBlock()                         │
│ + appendOutput()                         │
│ + semanticError()                        │
├──────────────────────────────────────────┤
│  uses TypeResolverTrait                  │
│  uses DeclarationTrait                   │
│  uses ExpressionTrait                    │
│  uses StatementTrait                     │
│  uses ControlFlowTrait                   │
│  uses FunctionTrait                      │
│  uses BuiltinTrait                       │
└──────────────────────────────────────────┘
```

### 3.5 Módulo Semantic
```
┌────────────────────────┐   ┌────────────────────────┐   ┌────────────────────────┐
│      TypeTable         │   │   RelationalTable      │   │     TypeChecker        │
├────────────────────────┤   ├────────────────────────┤   ├────────────────────────┤
│ - addTable: array      │   │ - equalityTable: array │   │ + arithmeticOp()       │
│ - subTable: array      │   │ - orderTable: array    │   │ + relationalOp()       │
│ - mulTable: array      │   ├────────────────────────┤   │ + logicalOp()          │
│ - divTable: array      │   │ + canCompareEquality() │   │ + negateOp()           │
│ - modTable: array      │   │ + canCompareOrder()    │   │ + isAssignable()       │
├────────────────────────┤   └────────────────────────┘   │ + normalizeType()      │
│ + arithmetic()         │                                └────────────────────────┘
└────────────────────────┘
```

### 3.6 Módulo Errors
```
┌────────────────────────┐     ┌──────────────────────────────┐
│     GolampiError       │     │      ErrorCollector           │
├────────────────────────┤     ├──────────────────────────────┤
│ + type: string         │◄────│ - errors: array              │
│ + description: string  │     │ - instance: ErrorCollector    │
│ + line: int            │     ├──────────────────────────────┤
│ + column: int          │     │ + getInstance(): self         │
├────────────────────────┤     │ + addLexical()               │
│ + lexical(): self      │     │ + addSyntactic()             │
│ + syntactic(): self    │     │ + addSemantic()              │
│ + semantic(): self     │     │ + hasErrors(): bool          │
└────────────────────────┘     │ + toReport(): array          │
                               └──────────────────────────────┘

┌──────────────────────────┐   ┌──────────────────────────────┐
│ GolampiLexerErrorListener│   │GolampiParserErrorListener    │
├──────────────────────────┤   ├──────────────────────────────┤
│ + syntaxError()          │   │ + syntaxError()              │
└──────────────────────────┘   │ - translateMessage()         │
                               └──────────────────────────────┘
```

---

## 4. Flujo de la Tabla de Símbolos

### 4.1 Estructura de Scopes

La tabla de símbolos se implementa como una cadena de ambientes (environments) enlazados. Cada scope tiene una referencia a su padre.
```
┌─────────────────┐
│   Global Env    │  ← variables globales, constantes globales
│  scope: global  │
└────────┬────────┘
         │ createChild("main")
         ▼
┌─────────────────┐
│   Main Env      │  ← variables locales de main
│  scope: main    │
└────────┬────────┘
         │ createChild("for")
         ▼
┌─────────────────┐
│   For Env       │  ← variable i del for
│  scope: for     │
└────────┬────────┘
         │ createChild("for_body")
         ▼
┌─────────────────┐
│  For Body Env   │  ← variables del cuerpo del for
│ scope: for_body │
└────────┬────────┘
         │ createChild("if")
         ▼
┌─────────────────┐
│    If Env       │  ← variables del bloque if
│  scope: if      │
└─────────────────┘
```

### 4.2 Flujo de Búsqueda (lookup)

Cuando se accede a una variable, se busca primero en el scope actual. Si no se encuentra, se sube al padre recursivamente hasta el scope global.
```
lookup("x")
    │
    ▼
┌─ Scope actual ──┐  ¿existe "x"? → Sí → retorna Symbol
│                  │                  No
└────────┬─────────┘                  │
         │                            ▼
┌─ Scope padre ────┐  ¿existe "x"? → Sí → retorna Symbol
│                  │                  No
└────────┬─────────┘                  │
         │                            ▼
┌─ Scope global ───┐  ¿existe "x"? → Sí → retorna Symbol
│                  │                  No → retorna null (error)
└──────────────────┘
```

### 4.3 Flujo de Declaración
```
declare("x", int32, 10)
    │
    ▼
┌─ Scope actual ──┐
│ ¿existe "x"     │ → Sí → Error: "ya declarado en este ámbito"
│  localmente?     │ → No → Se registra en symbols[]
└──────────────────┘         │
                             ▼
                    SymbolTableCollector.register()
                    (se guarda para el reporte final)
```

### 4.4 Flujo de Asignación
```
assign("x", 20)
    │
    ▼
┌─ Scope actual ──┐  ¿existe "x"? → Sí → ¿es constante?
│                  │                         │
└────────┬─────────┘                    Sí → Error
         │                              No → actualiza value
         │ No existe
         ▼
┌─ Scope padre ────┐  (repite búsqueda hacia arriba)
└──────────────────┘
```

### 4.5 Ciclo de Vida de un Scope
```
1. Entrada a bloque    → env = env.createChild("nombre")
2. Declaraciones       → env.declare(symbol)
3. Ejecución           → env.lookup(), env.assign()
4. Salida del bloque   → env = previousEnv (se descarta el hijo)
```

### 4.6 Funciones y Scopes

Las funciones se ejecutan en un scope hijo del global (no del llamador), garantizando aislamiento:
```
┌─────────────────┐
│   Global Env    │
└───┬─────────┬───┘
    │         │
    ▼         ▼
┌───────┐ ┌───────┐
│ main  │ │ func  │  ← scope hijo de global, NO de main
└───────┘ └───────┘
```

---

## 5. Tablas de Compatibilidad de Tipos

### 5.1 Suma (+)

| + | int32 | float32 | bool | rune | string |
|---|-------|---------|------|------|--------|
| int32 | int32 | float32 | — | int32 | — |
| float32 | float32 | float32 | — | float32 | — |
| bool | — | — | — | — | — |
| rune | int32 | float32 | — | int32 | — |
| string | — | — | — | — | string |

### 5.2 Resta (-)

| - | int32 | float32 | bool | rune | string |
|---|-------|---------|------|------|--------|
| int32 | int32 | float32 | — | int32 | — |
| float32 | float32 | float32 | — | float32 | — |
| bool | — | — | — | — | — |
| rune | int32 | float32 | — | int32 | — |
| string | — | — | — | — | — |

### 5.3 Multiplicación (*)

| * | int32 | float32 | bool | rune | string |
|---|-------|---------|------|------|--------|
| int32 | int32 | float32 | — | int32 | string |
| float32 | float32 | float32 | — | float32 | — |
| bool | — | — | — | — | — |
| rune | int32 | float32 | — | int32 | — |
| string | string | — | — | — | — |

### 5.4 División (/)

| / | int32 | float32 | bool | rune | string |
|---|-------|---------|------|------|--------|
| int32 | int32 | float32 | — | int32 | — |
| float32 | float32 | float32 | — | float32 | — |
| bool | — | — | — | — | — |
| rune | int32 | float32 | — | int32 | — |
| string | — | — | — | — | — |

### 5.5 Módulo (%)

| % | int32 | float32 | bool | rune | string |
|---|-------|---------|------|------|--------|
| int32 | int32 | — | — | int32 | — |
| float32 | — | — | — | — | — |
| bool | — | — | — | — | — |
| rune | int32 | — | — | int32 | — |
| string | — | — | — | — | — |

Las celdas con "—" representan operaciones inválidas que retornan nil.