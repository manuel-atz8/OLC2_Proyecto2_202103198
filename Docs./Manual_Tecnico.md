# Documentación Técnica — Compilador Golampi

**Proyecto 2 — Organización de Lenguajes y Compiladores 2**
**1er Semestre 2026**

---

## 1. Descripción general

El compilador Golampi traduce código fuente escrito en el lenguaje Golampi (un subconjunto de Go) a código ensamblador ARM64 (AArch64). El código generado se ensambla con `aarch64-linux-gnu-as`, se enlaza con `aarch64-linux-gnu-ld` y se ejecuta mediante `qemu-aarch64` en modo usuario.

### Stack tecnológico

| Componente | Tecnología |
|---|---|
| Frontend | React 18 + Vite + CodeMirror |
| Backend | PHP 8.3 |
| Parser generator | ANTLR4 (PHP target) |
| Código objetivo | ARM64 / AArch64 |
| Ensamblador | aarch64-linux-gnu-as |
| Enlazador | aarch64-linux-gnu-ld |
| Emulador | qemu-aarch64 (user mode) |

---

## 2. Arquitectura del sistema

```
┌──────────────┐     HTTP/JSON     ┌──────────────────────────────────┐
│   Frontend   │ ◄──────────────► │           Backend PHP            │
│  React/Vite  │                  │                                  │
│  CodeMirror  │                  │  ┌─────────┐  ┌──────────────┐  │
└──────────────┘                  │  │ ANTLR4  │  │  GolampiComp │  │
                                  │  │ Lexer/  │──│  iler.php    │  │
                                  │  │ Parser  │  │  (Visitor)   │  │
                                  │  └─────────┘  └──────┬───────┘  │
                                  │                      │ .s       │
                                  │  ┌───────────────────▼───────┐  │
                                  │  │  as → ld → qemu-aarch64  │  │
                                  │  └───────────────────────────┘  │
                                  └──────────────────────────────────┘
```

### Flujo de compilación

1. El usuario ingresa código Golampi en el editor web
2. El frontend envía el código al backend vía HTTP POST
3. ANTLR4 genera el árbol de parseo (CST)
4. `GolampiCompiler` (Visitor) recorre el CST y genera instrucciones ARM64
5. El código `.s` se ensambla a `.o` con `aarch64-linux-gnu-as`
6. Se enlaza a ejecutable con `aarch64-linux-gnu-ld`
7. Se ejecuta con `qemu-aarch64` y se captura stdout
8. Los resultados (salida, tabla de símbolos, errores) se devuelven al frontend

---

## 3. Gramática formal de Golampi

La gramática está definida en ANTLR4 (archivo `Golampi.g4`).

### 3.1 Programa

```
program        : (functionDeclaration | varDeclaration | constDeclaration)* EOF
```

### 3.2 Funciones

```
functionDeclaration : FUNC ID '(' params? ')' returnType? block
params              : param (',' param)*
param               : ID pointerMark? type
pointerMark         : '*'
returnType          : type | '(' type (',' type)+ ')'
```

### 3.3 Variables y constantes

```
varDeclaration  : VAR idList arrayDimension* type ('=' exprList)?
                | VAR idList '=' exprList
shortVarDecl    : idList ':=' exprList
constDeclaration: CONST ID type '=' expr
idList          : ID (',' ID)*
exprList        : expr (',' expr)*
arrayDimension  : '[' expr ']'
```

### 3.4 Sentencias

```
block : '{' stmt* '}'

stmt  : varDeclaration | constDeclaration | shortVarDecl
      | assignStmt | incDecStmt
      | ifStmt | switchStmt | forStmt
      | BREAK | CONTINUE | returnStmt
      | exprStmt | block
```

### 3.5 Asignaciones

```
assignStmt : leftValue assignOp expr
leftValue  : ID                     # LValueId
           | ID ('[' expr ']')+     # LValueArray
           | '*' ID                 # LValuePointer
assignOp   : '=' | '+=' | '-=' | '*=' | '/='
incDecStmt : ID '++'               # IncStmt
           | ID '--'               # DecStmt
```

### 3.6 Estructuras de control

```
ifStmt     : IF expr block elseIfClause* elseClause?
switchStmt : SWITCH expr '{' caseClause* defaultClause? '}'
forStmt    : FOR forInit? ';' expr? ';' forPost? block   # ForClassic
           | FOR expr block                               # ForCondition
           | FOR block                                    # ForForever
```

### 3.7 Expresiones

```
expr      : orExpr
orExpr    : andExpr (OR andExpr)*
andExpr   : eqExpr (AND eqExpr)*
eqExpr    : relExpr (('==' | '!=') relExpr)*
relExpr   : addExpr (('>' | '>=' | '<' | '<=') addExpr)*
addExpr   : mulExpr (('+' | '-') mulExpr)*
mulExpr   : unaryExpr (('*' | '/' | '%') unaryExpr)*

unaryExpr : '!' unaryExpr    # NotExpr
          | '-' unaryExpr    # NegExpr
          | '&' ID           # AddrExpr
          | '*' ID           # DerefExpr
          | atom             # AtomExpr
```

### 3.8 Átomos

```
atom : FLOAT_LIT | INT_LIT | RUNE_LIT | STRING_LIT
     | TRUE | FALSE | NIL
     | (INT32_T|FLOAT32_T|BOOL_T|RUNE_T|STRING_T) '(' expr ')'   # CastAtom
     | ID '.' ID '(' argList? ')'                                  # MethodAtom
     | ID '(' argList? ')'                                         # CallAtom
     | ID ('[' expr ']')+                                          # IndexAtom
     | ID                                                          # IdAtom
     | '(' expr ')'                                                # ParenAtom
     | arrayLiteral                                                # ArrayAtom
```

### 3.9 Arreglos

```
arrayLiteral  : arrayDimension+ type '{' arrayInitList? '}'
arrayInitList : expr (',' expr)* ','?              # FlatInit
              | nestedInit (',' nestedInit)* ','?   # NestedInitList
nestedInit    : '{' expr (',' expr)* ','? '}'
              | '{' nestedInit (',' nestedInit)* ','? '}'
```

### 3.10 Tipos

```
type : INT32_T | INT_T | FLOAT32_T | BOOL_T | RUNE_T | STRING_T
     | arrayDimension+ type    # TArray
     | '*' type                # TPointer
```

### 3.11 Tokens léxicos

| Token | Patrón |
|---|---|
| INT_LIT | `[0-9]+` |
| FLOAT_LIT | `[0-9]+ '.' [0-9]+` |
| RUNE_LIT | `'\'' (~['\\] \| '\\' .) '\''` |
| STRING_LIT | `'"' (~["\\] \| '\\' .)* '"'` |
| ID | `[a-zA-Z_][a-zA-Z0-9_]*` |
| LINE_COMMENT | `'//' ~[\r\n]*` → skip |
| BLOCK_COMMENT | `'/*' .*? '*/'` → skip |
| WS | `[ \t\r\n]+` → skip |

---

## 4. Diagrama de clases del compilador

```
GolampiCompiler (extends GolampiBaseVisitor)
├── Traits/
│   ├── CodeGenExpressionTrait     ─ Expresiones, literales, aritmética
│   ├── CodeGenDeclarationTrait    ─ Variables, constantes, arreglos
│   ├── CodeGenStatementTrait      ─ Asignaciones, inc/dec
│   ├── CodeGenControlFlowTrait    ─ if, switch, for, break, continue
│   ├── CodeGenBuiltinTrait        ─ fmt.Println, len, substr, now, typeOf
│   └── CodeGenFunctionTrait       ─ Funciones, llamadas, return, hoisting
├── AssemblyEmitter                ─ Acumula instrucciones .text y .data
├── LabelGenerator                 ─ Etiquetas únicas (.L_xxx_N)
├── StringPool                     ─ Literales string para sección .data
└── TypeSizes                      ─ Tamaños por tipo (int32=4, string=8, etc.)

Runtime/Environment/
├── Environment                    ─ Scopes anidados, allocateLocal()
├── Symbol                         ─ Nombre, tipo, offset, tamaño, scope
└── SymbolTableCollector           ─ Recolecta símbolos para reporte
```

### Responsabilidad de cada trait

| Trait | Visitors principales |
|---|---|
| ExpressionTrait | visitIntAtom, visitFloatAtom, visitIdAtom, visitIndexAtom, visitArrayAtom, visitCastAtom, visitAddrExpr, visitDerefExpr, operadores aritméticos/relacionales/lógicos |
| DeclarationTrait | visitVarDeclaration, visitShortVarDecl, visitConstDeclaration, multi-return |
| StatementTrait | visitAssignStmt (LValueId, LValueArray, LValuePointer), visitIncStmt, visitDecStmt |
| ControlFlowTrait | visitIfStmt, visitSwitchStmt, visitForClassic, visitForCondition, visitForForever |
| BuiltinTrait | visitMethodAtom (fmt.Println), emitLen, emitSubstr, emitNow, emitTypeOf |
| FunctionTrait | registerFunction, emitFunction, visitCallAtom, visitReturnStmt, visitRefArg |

---

## 5. Generación de código ARM64

### 5.1 Convenciones de registros

| Registro | Uso |
|---|---|
| w0 / x0 | Resultado de expresiones (int32/bool/rune o puntero/string) |
| s0 | Resultado de expresiones float32 |
| x29 (fp) | Frame pointer — base para variables locales |
| x30 (lr) | Link register — dirección de retorno |
| sp | Stack pointer |
| x0–x7 | Paso de parámetros (hasta 8) |
| x0, x1, x2 | Retorno múltiple (hasta 3 valores) |
| x9 | Temporal para acceso a frame (offsets > 255) |
| x14, x15 | Temporales para acceso a arreglos (base, byte offset) |
| x19, x20 | Callee-saved, preservados en prólogo/epílogo |

### 5.2 Stack frame

Cada función tiene la estructura:

```
[sp al entrar]
    stp x29, x30, [sp, #-16]!     ← guardar frame pointer y link register
    mov x29, sp                    ← establecer nuevo frame pointer
    stp x19, x20, [sp, #-16]!     ← guardar callee-saved registers
    sub sp, sp, #FRAME_SIZE        ← reservar espacio para variables locales

Variables locales: [x29, #-4], [x29, #-8], [x29, #-12], ...
Arreglos: bloques contiguos desde su offset base

Epílogo:
    add sp, sp, #FRAME_SIZE
    ldp x19, x20, [sp], #16
    ldp x29, x30, [sp], #16
    ret
```

### 5.3 Acceso seguro a frame (offsets grandes)

ARM64 `stur`/`ldur` solo acepta offsets de -256 a +255. Para offsets mayores se usan helpers:

```
// offset ≤ 255:
stur w0, [x29, #-offset]

// offset > 255:
sub x9, x29, #offset
str w0, [x9]
```

### 5.4 Paso de parámetros float

Los floats se transportan como bits en registros enteros:
- Caller: `fmov w0, s0` (float → bits enteros) antes de `bl`
- Callee: `fmov s0, w0` (bits enteros → float) al recibir

### 5.5 Arreglos

Los arreglos se almacenan en el stack frame como bloques contiguos. El layout es row-major para multidimensionales.

Acceso a elemento: `base_address + (linearized_index × elem_size)`

Para 2D `[M][N]T`: offset = `(i × N + j) × sizeof(T)`
Para 3D `[L][M][N]T`: offset = `((i × M + j) × N + k) × sizeof(T)`

Paso por valor: se copia byte a byte al frame del callee.
Paso por referencia (`*[N]T`): se pasa la dirección base.

### 5.6 Retorno de arreglos

Cuando una función retorna un arreglo, el callee pone la dirección de su array local en x0. El caller copia inmediatamente los datos a su propio frame usando `_memcpy_arr` antes de que el stack del callee sea reutilizado.

### 5.7 Retorno múltiple

Hasta 3 valores en x0, x1, x2. El caller guarda los registros al stack y luego los distribuye a variables locales.

---

## 6. Tabla de símbolos

La tabla de símbolos se construye durante la compilación con `SymbolTableCollector`. Cada símbolo registra:

| Campo | Descripción |
|---|---|
| Identificador | Nombre de la variable, constante o función |
| Tipo | Tipo de dato (int32, float32, []int32, *[]int32, función, etc.) |
| Ámbito | Scope donde fue declarado (global, main, nombre_función) |
| Valor | Para arreglos: dimensiones; para constantes: valor |
| Línea | Línea de declaración en el código fuente |
| Columna | Columna de declaración |

### Manejo de scopes

Los scopes se manejan con la clase `Environment`:

- `global` → scope raíz
- `main` → hijo de global
- `nombre_función` → hijo de global
- Bloques anidados (`{...}`) → hijos del scope actual
- Cada `for`, `if`, `switch` crea un scope hijo

La resolución de variables usa búsqueda hacia arriba: primero en el scope actual, luego en el padre, hasta llegar al global.

La asignación de memoria (`allocateLocal`) delega al scope de la función contenedora para que `getFrameSize()` refleje el total de variables locales.

---

## 7. Rutinas runtime

El compilador incluye rutinas auxiliares en el código `.s` generado:

| Rutina | Descripción |
|---|---|
| `_print_int` | Imprime int32 (soporta rango completo incluyendo -2147483648) |
| `_print_char` | Imprime un carácter via syscall write |
| `_print_string` | Imprime string null-terminated |
| `_print_bool` | Imprime "true" o "false" |
| `_print_float` | Imprime float32 con 7 decimales |
| `_strlen` | Calcula longitud de string |
| `_substr` | Extrae subcadena (aloca en stack) |
| `_get_datetime` | Obtiene fecha/hora via clock_gettime syscall |
| `_memcpy_arr` | Copia N bytes (para retorno de arreglos) |

---

## 8. Reporte de errores

Los errores se clasifican en tres categorías:

| Tipo | Ejemplo |
|---|---|
| Léxico | Carácter no reconocido, literal mal formado |
| Sintáctico | Token inesperado, estructura incompleta |
| Semántico | Variable no declarada, tipos incompatibles, función no encontrada |

Cada error registra línea, columna y mensaje descriptivo. Los errores semánticos no detienen la compilación inmediatamente, permitiendo reportar múltiples errores en una sola pasada.