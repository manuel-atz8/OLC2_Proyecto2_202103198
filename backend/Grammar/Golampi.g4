grammar Golampi;

// Programa
program
    : (functionDeclaration | varDeclaration | constDeclaration)* EOF
    ;

// Funciones
functionDeclaration
    : FUNC ID '(' params? ')' returnType? block
    ;

params
    : param (',' param)*
    ;

param
    : ID pointerMark? type
    ;

pointerMark
    : '*'
    ;

returnType
    : type
    | '(' type (',' type)+ ')'
    ;

// Variables y constantes
varDeclaration
    : VAR idList arrayDimension* type ('=' exprList)?
    ;

constDeclaration
    : CONST ID type '=' expr
    ;

shortVarDecl
    : idList ':=' exprList
    ;

idList
    : ID (',' ID)*
    ;

exprList
    : expr (',' expr)*
    ;

arrayDimension
    : '[' expr ']'
    ;

// Bloques y sentencias
block
    : '{' stmt* '}'
    ;

stmt
    : varDeclaration
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
    ;

// Asignaciones
assignStmt
    : leftValue assignOp expr
    ;

leftValue
    : ID                                    # LValueId
    | ID ('[' expr ']')+                    # LValueArray
    | '*' ID                                # LValuePointer
    ;

assignOp
    : '=' | '+=' | '-=' | '*=' | '/='
    ;

// Incrementos y decrementos
incDecStmt
    : ID '++'                               # IncStmt
    | ID '--'                               # DecStmt
    ;

// If
ifStmt
    : IF expr block elseIfClause* elseClause?
    ;

elseIfClause
    : ELSE IF expr block
    ;

elseClause
    : ELSE block
    ;

// Switch
switchStmt
    : SWITCH expr '{' caseClause* defaultClause? '}'
    ;

caseClause
    : CASE exprList ':' stmt*
    ;

defaultClause
    : DEFAULT ':' stmt*
    ;

// For
forStmt
    : FOR forInit? ';' expr? ';' forPost? block   # ForClassic
    | FOR expr block                               # ForCondition
    | FOR block                                    # ForForever
    ;

forInit
    : shortVarDecl
    | assignStmt
    | incDecStmt
    ;

forPost
    : assignStmt
    | incDecStmt
    ;

// Return
returnStmt
    : RETURN exprList?
    ;

// Expresiones como sentencias
exprStmt
    : expr
    ;

// Expresiones
expr
    : expr OR expr                          # OrExpr
    | expr AND expr                         # AndExpr
    | expr ('==' | '!=') expr               # EqualExpr
    | expr ('>' | '>=' | '<' | '<=') expr   # RelExpr
    | expr ('+' | '-') expr                 # AddExpr
    | expr ('*' | '/' | '%') expr           # MulExpr
    | '!' expr                              # NotExpr
    | '-' expr                              # NegExpr
    | '&' ID                                # AddrExpr
    | '*' expr                              # DerefExpr
    | atom                                  # AtomExpr
    ;

atom
    : FLOAT_LIT                             # FloatAtom
    | INT_LIT                               # IntAtom
    | RUNE_LIT                              # RuneAtom
    | STRING_LIT                            # StringAtom
    | TRUE                                  # TrueAtom
    | FALSE                                 # FalseAtom
    | NIL                                   # NilAtom
    | ID '.' ID '(' argList? ')'            # MethodAtom
    | ID '(' argList? ')'                   # CallAtom
    | ID ('[' expr ']')+                    # IndexAtom
    | ID                                    # IdAtom
    | '(' expr ')'                          # ParenAtom
    | arrayLiteral                          # ArrayAtom
    ;

// Arreglos
arrayLiteral
    : arrayDimension+ type '{' arrayInitList? '}'
    ;

arrayInitList
    : expr (',' expr)* ','?                 # FlatInit
    | nestedInit (',' nestedInit)* ','?     # NestedInitList
    ;

nestedInit
    : '{' expr (',' expr)* ','? '}'
    ;

// Argumentos 
argList
    : arg (',' arg)*
    ;

arg
    : expr                                  # ValArg
    | '&' ID                                # RefArg
    ;

// Tipos
type
    : INT32_T                               # TInt32
    | INT_T                                 # TInt
    | FLOAT32_T                             # TFloat32
    | BOOL_T                                # TBool
    | RUNE_T                                # TRune
    | STRING_T                              # TString
    | arrayDimension+ type                  # TArray
    | '*' type                              # TPointer
    ;

// Palbras Reservadas
VAR      : 'var';
CONST    : 'const';
FUNC     : 'func';
IF       : 'if';
ELSE     : 'else';
SWITCH   : 'switch';
CASE     : 'case';
DEFAULT  : 'default';
FOR      : 'for';
BREAK    : 'break';
CONTINUE : 'continue';
RETURN   : 'return';
TRUE     : 'true';
FALSE    : 'false';
NIL      : 'nil';

// Tipos primitivos
INT32_T   : 'int32';
INT_T     : 'int';
FLOAT32_T : 'float32';
BOOL_T    : 'bool';
RUNE_T    : 'rune';
STRING_T  : 'string';

// Operadores lógicos
AND : '&&';
OR  : '||';

// Literales
FLOAT_LIT  : [0-9]+ '.' [0-9]+;
INT_LIT    : [0-9]+;
RUNE_LIT   : '\'' (~['\\] | '\\' .) '\'';
STRING_LIT : '"' (~["\\] | '\\' .)* '"';
ID         : [a-zA-Z_][a-zA-Z0-9_]*;

// Ignorar
LINE_COMMENT  : '//' ~[\r\n]* -> skip;
BLOCK_COMMENT : '/*' .*? '*/' -> skip;
WS            : [ \t\r\n]+ -> skip;