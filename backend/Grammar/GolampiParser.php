<?php

/*
 * Generated from Grammar/Golampi.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GolampiParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, VAR = 32, 
               CONST = 33, FUNC = 34, IF = 35, ELSE = 36, SWITCH = 37, CASE = 38, 
               DEFAULT = 39, FOR = 40, BREAK = 41, CONTINUE = 42, RETURN = 43, 
               TRUE = 44, FALSE = 45, NIL = 46, INT32_T = 47, INT_T = 48, 
               FLOAT32_T = 49, BOOL_T = 50, RUNE_T = 51, STRING_T = 52, 
               AND = 53, OR = 54, FLOAT_LIT = 55, INT_LIT = 56, RUNE_LIT = 57, 
               STRING_LIT = 58, ID = 59, LINE_COMMENT = 60, BLOCK_COMMENT = 61, 
               WS = 62;

		public const RULE_program = 0, RULE_functionDeclaration = 1, RULE_params = 2, 
               RULE_param = 3, RULE_pointerMark = 4, RULE_returnType = 5, 
               RULE_varDeclaration = 6, RULE_constDeclaration = 7, RULE_shortVarDecl = 8, 
               RULE_idList = 9, RULE_exprList = 10, RULE_arrayDimension = 11, 
               RULE_block = 12, RULE_stmt = 13, RULE_assignStmt = 14, RULE_leftValue = 15, 
               RULE_assignOp = 16, RULE_incDecStmt = 17, RULE_ifStmt = 18, 
               RULE_elseIfClause = 19, RULE_elseClause = 20, RULE_switchStmt = 21, 
               RULE_caseClause = 22, RULE_defaultClause = 23, RULE_forStmt = 24, 
               RULE_forInit = 25, RULE_forPost = 26, RULE_returnStmt = 27, 
               RULE_exprStmt = 28, RULE_expr = 29, RULE_orExpr = 30, RULE_andExpr = 31, 
               RULE_eqExpr = 32, RULE_relExpr = 33, RULE_addExpr = 34, RULE_mulExpr = 35, 
               RULE_unaryExpr = 36, RULE_atom = 37, RULE_arrayLiteral = 38, 
               RULE_arrayInitList = 39, RULE_nestedInit = 40, RULE_argList = 41, 
               RULE_arg = 42, RULE_type = 43;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDeclaration', 'params', 'param', 'pointerMark', 'returnType', 
			'varDeclaration', 'constDeclaration', 'shortVarDecl', 'idList', 'exprList', 
			'arrayDimension', 'block', 'stmt', 'assignStmt', 'leftValue', 'assignOp', 
			'incDecStmt', 'ifStmt', 'elseIfClause', 'elseClause', 'switchStmt', 'caseClause', 
			'defaultClause', 'forStmt', 'forInit', 'forPost', 'returnStmt', 'exprStmt', 
			'expr', 'orExpr', 'andExpr', 'eqExpr', 'relExpr', 'addExpr', 'mulExpr', 
			'unaryExpr', 'atom', 'arrayLiteral', 'arrayInitList', 'nestedInit', 'argList', 
			'arg', 'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'('", "')'", "','", "'*'", "'='", "':='", "'['", "']'", "'{'", 
		    "'}'", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", "':'", "';'", 
		    "'=='", "'!='", "'>'", "'>='", "'<'", "'<='", "'+'", "'-'", "'/'", 
		    "'%'", "'!'", "'&'", "'.'", "'var'", "'const'", "'func'", "'if'", 
		    "'else'", "'switch'", "'case'", "'default'", "'for'", "'break'", "'continue'", 
		    "'return'", "'true'", "'false'", "'nil'", "'int32'", "'int'", "'float32'", 
		    "'bool'", "'rune'", "'string'", "'&&'", "'||'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, "VAR", 
		    "CONST", "FUNC", "IF", "ELSE", "SWITCH", "CASE", "DEFAULT", "FOR", 
		    "BREAK", "CONTINUE", "RETURN", "TRUE", "FALSE", "NIL", "INT32_T", 
		    "INT_T", "FLOAT32_T", "BOOL_T", "RUNE_T", "STRING_T", "AND", "OR", 
		    "FLOAT_LIT", "INT_LIT", "RUNE_LIT", "STRING_LIT", "ID", "LINE_COMMENT", 
		    "BLOCK_COMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 62, 499, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 1, 0, 1, 0, 1, 0, 5, 0, 92, 8, 0, 10, 0, 12, 0, 95, 9, 
		    0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 103, 8, 1, 1, 1, 1, 1, 
		    3, 1, 107, 8, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 5, 2, 114, 8, 2, 10, 
		    2, 12, 2, 117, 9, 2, 1, 3, 1, 3, 3, 3, 121, 8, 3, 1, 3, 1, 3, 1, 4, 
		    1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 4, 5, 132, 8, 5, 11, 5, 12, 5, 
		    133, 1, 5, 1, 5, 3, 5, 138, 8, 5, 1, 6, 1, 6, 1, 6, 5, 6, 143, 8, 
		    6, 10, 6, 12, 6, 146, 9, 6, 1, 6, 1, 6, 1, 6, 3, 6, 151, 8, 6, 1, 
		    7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 
		    9, 1, 9, 5, 9, 166, 8, 9, 10, 9, 12, 9, 169, 9, 9, 1, 10, 1, 10, 1, 
		    10, 5, 10, 174, 8, 10, 10, 10, 12, 10, 177, 9, 10, 1, 11, 1, 11, 1, 
		    11, 1, 11, 1, 12, 1, 12, 5, 12, 185, 8, 12, 10, 12, 12, 12, 188, 9, 
		    12, 1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 3, 13, 205, 8, 13, 1, 14, 
		    1, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 4, 
		    15, 217, 8, 15, 11, 15, 12, 15, 218, 1, 15, 1, 15, 3, 15, 223, 8, 
		    15, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 3, 17, 231, 8, 17, 1, 
		    18, 1, 18, 1, 18, 1, 18, 5, 18, 237, 8, 18, 10, 18, 12, 18, 240, 9, 
		    18, 1, 18, 3, 18, 243, 8, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    20, 1, 20, 1, 20, 1, 21, 1, 21, 1, 21, 1, 21, 5, 21, 257, 8, 21, 10, 
		    21, 12, 21, 260, 9, 21, 1, 21, 3, 21, 263, 8, 21, 1, 21, 1, 21, 1, 
		    22, 1, 22, 1, 22, 1, 22, 5, 22, 271, 8, 22, 10, 22, 12, 22, 274, 9, 
		    22, 1, 23, 1, 23, 1, 23, 5, 23, 279, 8, 23, 10, 23, 12, 23, 282, 9, 
		    23, 1, 24, 1, 24, 3, 24, 286, 8, 24, 1, 24, 1, 24, 3, 24, 290, 8, 
		    24, 1, 24, 1, 24, 3, 24, 294, 8, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 
		    24, 1, 24, 1, 24, 3, 24, 303, 8, 24, 1, 25, 1, 25, 1, 25, 3, 25, 308, 
		    8, 25, 1, 26, 1, 26, 3, 26, 312, 8, 26, 1, 27, 1, 27, 3, 27, 316, 
		    8, 27, 1, 28, 1, 28, 1, 29, 1, 29, 1, 30, 1, 30, 1, 30, 5, 30, 325, 
		    8, 30, 10, 30, 12, 30, 328, 9, 30, 1, 31, 1, 31, 1, 31, 5, 31, 333, 
		    8, 31, 10, 31, 12, 31, 336, 9, 31, 1, 32, 1, 32, 1, 32, 5, 32, 341, 
		    8, 32, 10, 32, 12, 32, 344, 9, 32, 1, 33, 1, 33, 1, 33, 5, 33, 349, 
		    8, 33, 10, 33, 12, 33, 352, 9, 33, 1, 34, 1, 34, 1, 34, 5, 34, 357, 
		    8, 34, 10, 34, 12, 34, 360, 9, 34, 1, 35, 1, 35, 1, 35, 5, 35, 365, 
		    8, 35, 10, 35, 12, 35, 368, 9, 35, 1, 36, 1, 36, 1, 36, 1, 36, 1, 
		    36, 1, 36, 1, 36, 1, 36, 1, 36, 3, 36, 379, 8, 36, 1, 37, 1, 37, 1, 
		    37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 
		    3, 37, 393, 8, 37, 1, 37, 1, 37, 1, 37, 1, 37, 3, 37, 399, 8, 37, 
		    1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 4, 37, 407, 8, 37, 11, 37, 
		    12, 37, 408, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 3, 37, 417, 
		    8, 37, 1, 38, 4, 38, 420, 8, 38, 11, 38, 12, 38, 421, 1, 38, 1, 38, 
		    1, 38, 3, 38, 427, 8, 38, 1, 38, 1, 38, 1, 39, 1, 39, 1, 39, 5, 39, 
		    434, 8, 39, 10, 39, 12, 39, 437, 9, 39, 1, 39, 3, 39, 440, 8, 39, 
		    1, 39, 1, 39, 1, 39, 5, 39, 445, 8, 39, 10, 39, 12, 39, 448, 9, 39, 
		    1, 39, 3, 39, 451, 8, 39, 3, 39, 453, 8, 39, 1, 40, 1, 40, 1, 40, 
		    1, 40, 5, 40, 459, 8, 40, 10, 40, 12, 40, 462, 9, 40, 1, 40, 3, 40, 
		    465, 8, 40, 1, 40, 1, 40, 1, 41, 1, 41, 1, 41, 5, 41, 472, 8, 41, 
		    10, 41, 12, 41, 475, 9, 41, 1, 42, 1, 42, 1, 42, 3, 42, 480, 8, 42, 
		    1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 4, 43, 489, 8, 43, 
		    11, 43, 12, 43, 490, 1, 43, 1, 43, 1, 43, 1, 43, 3, 43, 497, 8, 43, 
		    1, 43, 0, 0, 44, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 
		    28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 
		    62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 0, 5, 2, 0, 5, 
		    5, 11, 14, 1, 0, 19, 20, 1, 0, 21, 24, 1, 0, 25, 26, 2, 0, 4, 4, 27, 
		    28, 543, 0, 93, 1, 0, 0, 0, 2, 98, 1, 0, 0, 0, 4, 110, 1, 0, 0, 0, 
		    6, 118, 1, 0, 0, 0, 8, 124, 1, 0, 0, 0, 10, 137, 1, 0, 0, 0, 12, 139, 
		    1, 0, 0, 0, 14, 152, 1, 0, 0, 0, 16, 158, 1, 0, 0, 0, 18, 162, 1, 
		    0, 0, 0, 20, 170, 1, 0, 0, 0, 22, 178, 1, 0, 0, 0, 24, 182, 1, 0, 
		    0, 0, 26, 204, 1, 0, 0, 0, 28, 206, 1, 0, 0, 0, 30, 222, 1, 0, 0, 
		    0, 32, 224, 1, 0, 0, 0, 34, 230, 1, 0, 0, 0, 36, 232, 1, 0, 0, 0, 
		    38, 244, 1, 0, 0, 0, 40, 249, 1, 0, 0, 0, 42, 252, 1, 0, 0, 0, 44, 
		    266, 1, 0, 0, 0, 46, 275, 1, 0, 0, 0, 48, 302, 1, 0, 0, 0, 50, 307, 
		    1, 0, 0, 0, 52, 311, 1, 0, 0, 0, 54, 313, 1, 0, 0, 0, 56, 317, 1, 
		    0, 0, 0, 58, 319, 1, 0, 0, 0, 60, 321, 1, 0, 0, 0, 62, 329, 1, 0, 
		    0, 0, 64, 337, 1, 0, 0, 0, 66, 345, 1, 0, 0, 0, 68, 353, 1, 0, 0, 
		    0, 70, 361, 1, 0, 0, 0, 72, 378, 1, 0, 0, 0, 74, 416, 1, 0, 0, 0, 
		    76, 419, 1, 0, 0, 0, 78, 452, 1, 0, 0, 0, 80, 454, 1, 0, 0, 0, 82, 
		    468, 1, 0, 0, 0, 84, 479, 1, 0, 0, 0, 86, 496, 1, 0, 0, 0, 88, 92, 
		    3, 2, 1, 0, 89, 92, 3, 12, 6, 0, 90, 92, 3, 14, 7, 0, 91, 88, 1, 0, 
		    0, 0, 91, 89, 1, 0, 0, 0, 91, 90, 1, 0, 0, 0, 92, 95, 1, 0, 0, 0, 
		    93, 91, 1, 0, 0, 0, 93, 94, 1, 0, 0, 0, 94, 96, 1, 0, 0, 0, 95, 93, 
		    1, 0, 0, 0, 96, 97, 5, 0, 0, 1, 97, 1, 1, 0, 0, 0, 98, 99, 5, 34, 
		    0, 0, 99, 100, 5, 59, 0, 0, 100, 102, 5, 1, 0, 0, 101, 103, 3, 4, 
		    2, 0, 102, 101, 1, 0, 0, 0, 102, 103, 1, 0, 0, 0, 103, 104, 1, 0, 
		    0, 0, 104, 106, 5, 2, 0, 0, 105, 107, 3, 10, 5, 0, 106, 105, 1, 0, 
		    0, 0, 106, 107, 1, 0, 0, 0, 107, 108, 1, 0, 0, 0, 108, 109, 3, 24, 
		    12, 0, 109, 3, 1, 0, 0, 0, 110, 115, 3, 6, 3, 0, 111, 112, 5, 3, 0, 
		    0, 112, 114, 3, 6, 3, 0, 113, 111, 1, 0, 0, 0, 114, 117, 1, 0, 0, 
		    0, 115, 113, 1, 0, 0, 0, 115, 116, 1, 0, 0, 0, 116, 5, 1, 0, 0, 0, 
		    117, 115, 1, 0, 0, 0, 118, 120, 5, 59, 0, 0, 119, 121, 3, 8, 4, 0, 
		    120, 119, 1, 0, 0, 0, 120, 121, 1, 0, 0, 0, 121, 122, 1, 0, 0, 0, 
		    122, 123, 3, 86, 43, 0, 123, 7, 1, 0, 0, 0, 124, 125, 5, 4, 0, 0, 
		    125, 9, 1, 0, 0, 0, 126, 138, 3, 86, 43, 0, 127, 128, 5, 1, 0, 0, 
		    128, 131, 3, 86, 43, 0, 129, 130, 5, 3, 0, 0, 130, 132, 3, 86, 43, 
		    0, 131, 129, 1, 0, 0, 0, 132, 133, 1, 0, 0, 0, 133, 131, 1, 0, 0, 
		    0, 133, 134, 1, 0, 0, 0, 134, 135, 1, 0, 0, 0, 135, 136, 5, 2, 0, 
		    0, 136, 138, 1, 0, 0, 0, 137, 126, 1, 0, 0, 0, 137, 127, 1, 0, 0, 
		    0, 138, 11, 1, 0, 0, 0, 139, 140, 5, 32, 0, 0, 140, 144, 3, 18, 9, 
		    0, 141, 143, 3, 22, 11, 0, 142, 141, 1, 0, 0, 0, 143, 146, 1, 0, 0, 
		    0, 144, 142, 1, 0, 0, 0, 144, 145, 1, 0, 0, 0, 145, 147, 1, 0, 0, 
		    0, 146, 144, 1, 0, 0, 0, 147, 150, 3, 86, 43, 0, 148, 149, 5, 5, 0, 
		    0, 149, 151, 3, 20, 10, 0, 150, 148, 1, 0, 0, 0, 150, 151, 1, 0, 0, 
		    0, 151, 13, 1, 0, 0, 0, 152, 153, 5, 33, 0, 0, 153, 154, 5, 59, 0, 
		    0, 154, 155, 3, 86, 43, 0, 155, 156, 5, 5, 0, 0, 156, 157, 3, 58, 
		    29, 0, 157, 15, 1, 0, 0, 0, 158, 159, 3, 18, 9, 0, 159, 160, 5, 6, 
		    0, 0, 160, 161, 3, 20, 10, 0, 161, 17, 1, 0, 0, 0, 162, 167, 5, 59, 
		    0, 0, 163, 164, 5, 3, 0, 0, 164, 166, 5, 59, 0, 0, 165, 163, 1, 0, 
		    0, 0, 166, 169, 1, 0, 0, 0, 167, 165, 1, 0, 0, 0, 167, 168, 1, 0, 
		    0, 0, 168, 19, 1, 0, 0, 0, 169, 167, 1, 0, 0, 0, 170, 175, 3, 58, 
		    29, 0, 171, 172, 5, 3, 0, 0, 172, 174, 3, 58, 29, 0, 173, 171, 1, 
		    0, 0, 0, 174, 177, 1, 0, 0, 0, 175, 173, 1, 0, 0, 0, 175, 176, 1, 
		    0, 0, 0, 176, 21, 1, 0, 0, 0, 177, 175, 1, 0, 0, 0, 178, 179, 5, 7, 
		    0, 0, 179, 180, 3, 58, 29, 0, 180, 181, 5, 8, 0, 0, 181, 23, 1, 0, 
		    0, 0, 182, 186, 5, 9, 0, 0, 183, 185, 3, 26, 13, 0, 184, 183, 1, 0, 
		    0, 0, 185, 188, 1, 0, 0, 0, 186, 184, 1, 0, 0, 0, 186, 187, 1, 0, 
		    0, 0, 187, 189, 1, 0, 0, 0, 188, 186, 1, 0, 0, 0, 189, 190, 5, 10, 
		    0, 0, 190, 25, 1, 0, 0, 0, 191, 205, 3, 12, 6, 0, 192, 205, 3, 14, 
		    7, 0, 193, 205, 3, 16, 8, 0, 194, 205, 3, 28, 14, 0, 195, 205, 3, 
		    34, 17, 0, 196, 205, 3, 36, 18, 0, 197, 205, 3, 42, 21, 0, 198, 205, 
		    3, 48, 24, 0, 199, 205, 5, 41, 0, 0, 200, 205, 5, 42, 0, 0, 201, 205, 
		    3, 54, 27, 0, 202, 205, 3, 56, 28, 0, 203, 205, 3, 24, 12, 0, 204, 
		    191, 1, 0, 0, 0, 204, 192, 1, 0, 0, 0, 204, 193, 1, 0, 0, 0, 204, 
		    194, 1, 0, 0, 0, 204, 195, 1, 0, 0, 0, 204, 196, 1, 0, 0, 0, 204, 
		    197, 1, 0, 0, 0, 204, 198, 1, 0, 0, 0, 204, 199, 1, 0, 0, 0, 204, 
		    200, 1, 0, 0, 0, 204, 201, 1, 0, 0, 0, 204, 202, 1, 0, 0, 0, 204, 
		    203, 1, 0, 0, 0, 205, 27, 1, 0, 0, 0, 206, 207, 3, 30, 15, 0, 207, 
		    208, 3, 32, 16, 0, 208, 209, 3, 58, 29, 0, 209, 29, 1, 0, 0, 0, 210, 
		    223, 5, 59, 0, 0, 211, 216, 5, 59, 0, 0, 212, 213, 5, 7, 0, 0, 213, 
		    214, 3, 58, 29, 0, 214, 215, 5, 8, 0, 0, 215, 217, 1, 0, 0, 0, 216, 
		    212, 1, 0, 0, 0, 217, 218, 1, 0, 0, 0, 218, 216, 1, 0, 0, 0, 218, 
		    219, 1, 0, 0, 0, 219, 223, 1, 0, 0, 0, 220, 221, 5, 4, 0, 0, 221, 
		    223, 5, 59, 0, 0, 222, 210, 1, 0, 0, 0, 222, 211, 1, 0, 0, 0, 222, 
		    220, 1, 0, 0, 0, 223, 31, 1, 0, 0, 0, 224, 225, 7, 0, 0, 0, 225, 33, 
		    1, 0, 0, 0, 226, 227, 5, 59, 0, 0, 227, 231, 5, 15, 0, 0, 228, 229, 
		    5, 59, 0, 0, 229, 231, 5, 16, 0, 0, 230, 226, 1, 0, 0, 0, 230, 228, 
		    1, 0, 0, 0, 231, 35, 1, 0, 0, 0, 232, 233, 5, 35, 0, 0, 233, 234, 
		    3, 58, 29, 0, 234, 238, 3, 24, 12, 0, 235, 237, 3, 38, 19, 0, 236, 
		    235, 1, 0, 0, 0, 237, 240, 1, 0, 0, 0, 238, 236, 1, 0, 0, 0, 238, 
		    239, 1, 0, 0, 0, 239, 242, 1, 0, 0, 0, 240, 238, 1, 0, 0, 0, 241, 
		    243, 3, 40, 20, 0, 242, 241, 1, 0, 0, 0, 242, 243, 1, 0, 0, 0, 243, 
		    37, 1, 0, 0, 0, 244, 245, 5, 36, 0, 0, 245, 246, 5, 35, 0, 0, 246, 
		    247, 3, 58, 29, 0, 247, 248, 3, 24, 12, 0, 248, 39, 1, 0, 0, 0, 249, 
		    250, 5, 36, 0, 0, 250, 251, 3, 24, 12, 0, 251, 41, 1, 0, 0, 0, 252, 
		    253, 5, 37, 0, 0, 253, 254, 3, 58, 29, 0, 254, 258, 5, 9, 0, 0, 255, 
		    257, 3, 44, 22, 0, 256, 255, 1, 0, 0, 0, 257, 260, 1, 0, 0, 0, 258, 
		    256, 1, 0, 0, 0, 258, 259, 1, 0, 0, 0, 259, 262, 1, 0, 0, 0, 260, 
		    258, 1, 0, 0, 0, 261, 263, 3, 46, 23, 0, 262, 261, 1, 0, 0, 0, 262, 
		    263, 1, 0, 0, 0, 263, 264, 1, 0, 0, 0, 264, 265, 5, 10, 0, 0, 265, 
		    43, 1, 0, 0, 0, 266, 267, 5, 38, 0, 0, 267, 268, 3, 20, 10, 0, 268, 
		    272, 5, 17, 0, 0, 269, 271, 3, 26, 13, 0, 270, 269, 1, 0, 0, 0, 271, 
		    274, 1, 0, 0, 0, 272, 270, 1, 0, 0, 0, 272, 273, 1, 0, 0, 0, 273, 
		    45, 1, 0, 0, 0, 274, 272, 1, 0, 0, 0, 275, 276, 5, 39, 0, 0, 276, 
		    280, 5, 17, 0, 0, 277, 279, 3, 26, 13, 0, 278, 277, 1, 0, 0, 0, 279, 
		    282, 1, 0, 0, 0, 280, 278, 1, 0, 0, 0, 280, 281, 1, 0, 0, 0, 281, 
		    47, 1, 0, 0, 0, 282, 280, 1, 0, 0, 0, 283, 285, 5, 40, 0, 0, 284, 
		    286, 3, 50, 25, 0, 285, 284, 1, 0, 0, 0, 285, 286, 1, 0, 0, 0, 286, 
		    287, 1, 0, 0, 0, 287, 289, 5, 18, 0, 0, 288, 290, 3, 58, 29, 0, 289, 
		    288, 1, 0, 0, 0, 289, 290, 1, 0, 0, 0, 290, 291, 1, 0, 0, 0, 291, 
		    293, 5, 18, 0, 0, 292, 294, 3, 52, 26, 0, 293, 292, 1, 0, 0, 0, 293, 
		    294, 1, 0, 0, 0, 294, 295, 1, 0, 0, 0, 295, 303, 3, 24, 12, 0, 296, 
		    297, 5, 40, 0, 0, 297, 298, 3, 58, 29, 0, 298, 299, 3, 24, 12, 0, 
		    299, 303, 1, 0, 0, 0, 300, 301, 5, 40, 0, 0, 301, 303, 3, 24, 12, 
		    0, 302, 283, 1, 0, 0, 0, 302, 296, 1, 0, 0, 0, 302, 300, 1, 0, 0, 
		    0, 303, 49, 1, 0, 0, 0, 304, 308, 3, 16, 8, 0, 305, 308, 3, 28, 14, 
		    0, 306, 308, 3, 34, 17, 0, 307, 304, 1, 0, 0, 0, 307, 305, 1, 0, 0, 
		    0, 307, 306, 1, 0, 0, 0, 308, 51, 1, 0, 0, 0, 309, 312, 3, 28, 14, 
		    0, 310, 312, 3, 34, 17, 0, 311, 309, 1, 0, 0, 0, 311, 310, 1, 0, 0, 
		    0, 312, 53, 1, 0, 0, 0, 313, 315, 5, 43, 0, 0, 314, 316, 3, 20, 10, 
		    0, 315, 314, 1, 0, 0, 0, 315, 316, 1, 0, 0, 0, 316, 55, 1, 0, 0, 0, 
		    317, 318, 3, 58, 29, 0, 318, 57, 1, 0, 0, 0, 319, 320, 3, 60, 30, 
		    0, 320, 59, 1, 0, 0, 0, 321, 326, 3, 62, 31, 0, 322, 323, 5, 54, 0, 
		    0, 323, 325, 3, 62, 31, 0, 324, 322, 1, 0, 0, 0, 325, 328, 1, 0, 0, 
		    0, 326, 324, 1, 0, 0, 0, 326, 327, 1, 0, 0, 0, 327, 61, 1, 0, 0, 0, 
		    328, 326, 1, 0, 0, 0, 329, 334, 3, 64, 32, 0, 330, 331, 5, 53, 0, 
		    0, 331, 333, 3, 64, 32, 0, 332, 330, 1, 0, 0, 0, 333, 336, 1, 0, 0, 
		    0, 334, 332, 1, 0, 0, 0, 334, 335, 1, 0, 0, 0, 335, 63, 1, 0, 0, 0, 
		    336, 334, 1, 0, 0, 0, 337, 342, 3, 66, 33, 0, 338, 339, 7, 1, 0, 0, 
		    339, 341, 3, 66, 33, 0, 340, 338, 1, 0, 0, 0, 341, 344, 1, 0, 0, 0, 
		    342, 340, 1, 0, 0, 0, 342, 343, 1, 0, 0, 0, 343, 65, 1, 0, 0, 0, 344, 
		    342, 1, 0, 0, 0, 345, 350, 3, 68, 34, 0, 346, 347, 7, 2, 0, 0, 347, 
		    349, 3, 68, 34, 0, 348, 346, 1, 0, 0, 0, 349, 352, 1, 0, 0, 0, 350, 
		    348, 1, 0, 0, 0, 350, 351, 1, 0, 0, 0, 351, 67, 1, 0, 0, 0, 352, 350, 
		    1, 0, 0, 0, 353, 358, 3, 70, 35, 0, 354, 355, 7, 3, 0, 0, 355, 357, 
		    3, 70, 35, 0, 356, 354, 1, 0, 0, 0, 357, 360, 1, 0, 0, 0, 358, 356, 
		    1, 0, 0, 0, 358, 359, 1, 0, 0, 0, 359, 69, 1, 0, 0, 0, 360, 358, 1, 
		    0, 0, 0, 361, 366, 3, 72, 36, 0, 362, 363, 7, 4, 0, 0, 363, 365, 3, 
		    72, 36, 0, 364, 362, 1, 0, 0, 0, 365, 368, 1, 0, 0, 0, 366, 364, 1, 
		    0, 0, 0, 366, 367, 1, 0, 0, 0, 367, 71, 1, 0, 0, 0, 368, 366, 1, 0, 
		    0, 0, 369, 370, 5, 29, 0, 0, 370, 379, 3, 72, 36, 0, 371, 372, 5, 
		    26, 0, 0, 372, 379, 3, 72, 36, 0, 373, 374, 5, 30, 0, 0, 374, 379, 
		    5, 59, 0, 0, 375, 376, 5, 4, 0, 0, 376, 379, 5, 59, 0, 0, 377, 379, 
		    3, 74, 37, 0, 378, 369, 1, 0, 0, 0, 378, 371, 1, 0, 0, 0, 378, 373, 
		    1, 0, 0, 0, 378, 375, 1, 0, 0, 0, 378, 377, 1, 0, 0, 0, 379, 73, 1, 
		    0, 0, 0, 380, 417, 5, 55, 0, 0, 381, 417, 5, 56, 0, 0, 382, 417, 5, 
		    57, 0, 0, 383, 417, 5, 58, 0, 0, 384, 417, 5, 44, 0, 0, 385, 417, 
		    5, 45, 0, 0, 386, 417, 5, 46, 0, 0, 387, 388, 5, 59, 0, 0, 388, 389, 
		    5, 31, 0, 0, 389, 390, 5, 59, 0, 0, 390, 392, 5, 1, 0, 0, 391, 393, 
		    3, 82, 41, 0, 392, 391, 1, 0, 0, 0, 392, 393, 1, 0, 0, 0, 393, 394, 
		    1, 0, 0, 0, 394, 417, 5, 2, 0, 0, 395, 396, 5, 59, 0, 0, 396, 398, 
		    5, 1, 0, 0, 397, 399, 3, 82, 41, 0, 398, 397, 1, 0, 0, 0, 398, 399, 
		    1, 0, 0, 0, 399, 400, 1, 0, 0, 0, 400, 417, 5, 2, 0, 0, 401, 406, 
		    5, 59, 0, 0, 402, 403, 5, 7, 0, 0, 403, 404, 3, 58, 29, 0, 404, 405, 
		    5, 8, 0, 0, 405, 407, 1, 0, 0, 0, 406, 402, 1, 0, 0, 0, 407, 408, 
		    1, 0, 0, 0, 408, 406, 1, 0, 0, 0, 408, 409, 1, 0, 0, 0, 409, 417, 
		    1, 0, 0, 0, 410, 417, 5, 59, 0, 0, 411, 412, 5, 1, 0, 0, 412, 413, 
		    3, 58, 29, 0, 413, 414, 5, 2, 0, 0, 414, 417, 1, 0, 0, 0, 415, 417, 
		    3, 76, 38, 0, 416, 380, 1, 0, 0, 0, 416, 381, 1, 0, 0, 0, 416, 382, 
		    1, 0, 0, 0, 416, 383, 1, 0, 0, 0, 416, 384, 1, 0, 0, 0, 416, 385, 
		    1, 0, 0, 0, 416, 386, 1, 0, 0, 0, 416, 387, 1, 0, 0, 0, 416, 395, 
		    1, 0, 0, 0, 416, 401, 1, 0, 0, 0, 416, 410, 1, 0, 0, 0, 416, 411, 
		    1, 0, 0, 0, 416, 415, 1, 0, 0, 0, 417, 75, 1, 0, 0, 0, 418, 420, 3, 
		    22, 11, 0, 419, 418, 1, 0, 0, 0, 420, 421, 1, 0, 0, 0, 421, 419, 1, 
		    0, 0, 0, 421, 422, 1, 0, 0, 0, 422, 423, 1, 0, 0, 0, 423, 424, 3, 
		    86, 43, 0, 424, 426, 5, 9, 0, 0, 425, 427, 3, 78, 39, 0, 426, 425, 
		    1, 0, 0, 0, 426, 427, 1, 0, 0, 0, 427, 428, 1, 0, 0, 0, 428, 429, 
		    5, 10, 0, 0, 429, 77, 1, 0, 0, 0, 430, 435, 3, 58, 29, 0, 431, 432, 
		    5, 3, 0, 0, 432, 434, 3, 58, 29, 0, 433, 431, 1, 0, 0, 0, 434, 437, 
		    1, 0, 0, 0, 435, 433, 1, 0, 0, 0, 435, 436, 1, 0, 0, 0, 436, 439, 
		    1, 0, 0, 0, 437, 435, 1, 0, 0, 0, 438, 440, 5, 3, 0, 0, 439, 438, 
		    1, 0, 0, 0, 439, 440, 1, 0, 0, 0, 440, 453, 1, 0, 0, 0, 441, 446, 
		    3, 80, 40, 0, 442, 443, 5, 3, 0, 0, 443, 445, 3, 80, 40, 0, 444, 442, 
		    1, 0, 0, 0, 445, 448, 1, 0, 0, 0, 446, 444, 1, 0, 0, 0, 446, 447, 
		    1, 0, 0, 0, 447, 450, 1, 0, 0, 0, 448, 446, 1, 0, 0, 0, 449, 451, 
		    5, 3, 0, 0, 450, 449, 1, 0, 0, 0, 450, 451, 1, 0, 0, 0, 451, 453, 
		    1, 0, 0, 0, 452, 430, 1, 0, 0, 0, 452, 441, 1, 0, 0, 0, 453, 79, 1, 
		    0, 0, 0, 454, 455, 5, 9, 0, 0, 455, 460, 3, 58, 29, 0, 456, 457, 5, 
		    3, 0, 0, 457, 459, 3, 58, 29, 0, 458, 456, 1, 0, 0, 0, 459, 462, 1, 
		    0, 0, 0, 460, 458, 1, 0, 0, 0, 460, 461, 1, 0, 0, 0, 461, 464, 1, 
		    0, 0, 0, 462, 460, 1, 0, 0, 0, 463, 465, 5, 3, 0, 0, 464, 463, 1, 
		    0, 0, 0, 464, 465, 1, 0, 0, 0, 465, 466, 1, 0, 0, 0, 466, 467, 5, 
		    10, 0, 0, 467, 81, 1, 0, 0, 0, 468, 473, 3, 84, 42, 0, 469, 470, 5, 
		    3, 0, 0, 470, 472, 3, 84, 42, 0, 471, 469, 1, 0, 0, 0, 472, 475, 1, 
		    0, 0, 0, 473, 471, 1, 0, 0, 0, 473, 474, 1, 0, 0, 0, 474, 83, 1, 0, 
		    0, 0, 475, 473, 1, 0, 0, 0, 476, 480, 3, 58, 29, 0, 477, 478, 5, 30, 
		    0, 0, 478, 480, 5, 59, 0, 0, 479, 476, 1, 0, 0, 0, 479, 477, 1, 0, 
		    0, 0, 480, 85, 1, 0, 0, 0, 481, 497, 5, 47, 0, 0, 482, 497, 5, 48, 
		    0, 0, 483, 497, 5, 49, 0, 0, 484, 497, 5, 50, 0, 0, 485, 497, 5, 51, 
		    0, 0, 486, 497, 5, 52, 0, 0, 487, 489, 3, 22, 11, 0, 488, 487, 1, 
		    0, 0, 0, 489, 490, 1, 0, 0, 0, 490, 488, 1, 0, 0, 0, 490, 491, 1, 
		    0, 0, 0, 491, 492, 1, 0, 0, 0, 492, 493, 3, 86, 43, 0, 493, 497, 1, 
		    0, 0, 0, 494, 495, 5, 4, 0, 0, 495, 497, 3, 86, 43, 0, 496, 481, 1, 
		    0, 0, 0, 496, 482, 1, 0, 0, 0, 496, 483, 1, 0, 0, 0, 496, 484, 1, 
		    0, 0, 0, 496, 485, 1, 0, 0, 0, 496, 486, 1, 0, 0, 0, 496, 488, 1, 
		    0, 0, 0, 496, 494, 1, 0, 0, 0, 497, 87, 1, 0, 0, 0, 54, 91, 93, 102, 
		    106, 115, 120, 133, 137, 144, 150, 167, 175, 186, 204, 218, 222, 230, 
		    238, 242, 258, 262, 272, 280, 285, 289, 293, 302, 307, 311, 315, 326, 
		    334, 342, 350, 358, 366, 378, 392, 398, 408, 416, 421, 426, 435, 439, 
		    446, 450, 452, 460, 464, 473, 479, 490, 496];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Golampi.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(93);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 30064771072) !== 0)) {
		        	$this->setState(91);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::FUNC:
		        	    	$this->setState(88);
		        	    	$this->functionDeclaration();
		        	    	break;

		        	    case self::VAR:
		        	    	$this->setState(89);
		        	    	$this->varDeclaration();
		        	    	break;

		        	    case self::CONST:
		        	    	$this->setState(90);
		        	    	$this->constDeclaration();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(95);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(96);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionDeclaration(): Context\FunctionDeclarationContext
		{
		    $localContext = new Context\FunctionDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_functionDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(98);
		        $this->match(self::FUNC);
		        $this->setState(99);
		        $this->match(self::ID);
		        $this->setState(100);
		        $this->match(self::T__0);
		        $this->setState(102);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(101);
		        	$this->params();
		        }
		        $this->setState(104);
		        $this->match(self::T__1);
		        $this->setState(106);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8866461766385810) !== 0)) {
		        	$this->setState(105);
		        	$this->returnType();
		        }
		        $this->setState(108);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function params(): Context\ParamsContext
		{
		    $localContext = new Context\ParamsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_params);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(110);
		        $this->param();
		        $this->setState(115);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(111);
		        	$this->match(self::T__2);
		        	$this->setState(112);
		        	$this->param();
		        	$this->setState(117);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_param);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(118);
		        $this->match(self::ID);
		        $this->setState(120);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		            case 1:
		        	    $this->setState(119);
		        	    $this->pointerMark();
		        	break;
		        }
		        $this->setState(122);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pointerMark(): Context\PointerMarkContext
		{
		    $localContext = new Context\PointerMarkContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_pointerMark);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);
		        $this->match(self::T__3);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnType(): Context\ReturnTypeContext
		{
		    $localContext = new Context\ReturnTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_returnType);

		    try {
		        $this->setState(137);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__3:
		            case self::T__6:
		            case self::INT32_T:
		            case self::INT_T:
		            case self::FLOAT32_T:
		            case self::BOOL_T:
		            case self::RUNE_T:
		            case self::STRING_T:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(126);
		            	$this->type();
		            	break;

		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(127);
		            	$this->match(self::T__0);
		            	$this->setState(128);
		            	$this->type();
		            	$this->setState(131); 
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	do {
		            		$this->setState(129);
		            		$this->match(self::T__2);
		            		$this->setState(130);
		            		$this->type();
		            		$this->setState(133); 
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	} while ($_la === self::T__2);
		            	$this->setState(135);
		            	$this->match(self::T__1);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varDeclaration(): Context\VarDeclarationContext
		{
		    $localContext = new Context\VarDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_varDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(139);
		        $this->match(self::VAR);
		        $this->setState(140);
		        $this->idList();
		        $this->setState(144);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(141);
		        		$this->arrayDimension(); 
		        	}

		        	$this->setState(146);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);
		        }
		        $this->setState(147);
		        $this->type();
		        $this->setState(150);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__4) {
		        	$this->setState(148);
		        	$this->match(self::T__4);
		        	$this->setState(149);
		        	$this->exprList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constDeclaration(): Context\ConstDeclarationContext
		{
		    $localContext = new Context\ConstDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_constDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->match(self::CONST);
		        $this->setState(153);
		        $this->match(self::ID);
		        $this->setState(154);
		        $this->type();
		        $this->setState(155);
		        $this->match(self::T__4);
		        $this->setState(156);
		        $this->expr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function shortVarDecl(): Context\ShortVarDeclContext
		{
		    $localContext = new Context\ShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(158);
		        $this->idList();
		        $this->setState(159);
		        $this->match(self::T__5);
		        $this->setState(160);
		        $this->exprList();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(162);
		        $this->match(self::ID);
		        $this->setState(167);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(163);
		        	$this->match(self::T__2);
		        	$this->setState(164);
		        	$this->match(self::ID);
		        	$this->setState(169);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprList(): Context\ExprListContext
		{
		    $localContext = new Context\ExprListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_exprList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(170);
		        $this->expr();
		        $this->setState(175);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(171);
		        	$this->match(self::T__2);
		        	$this->setState(172);
		        	$this->expr();
		        	$this->setState(177);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayDimension(): Context\ArrayDimensionContext
		{
		    $localContext = new Context\ArrayDimensionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_arrayDimension);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(178);
		        $this->match(self::T__6);
		        $this->setState(179);
		        $this->expr();
		        $this->setState(180);
		        $this->match(self::T__7);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(182);
		        $this->match(self::T__8);
		        $this->setState(186);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117032531925926546) !== 0)) {
		        	$this->setState(183);
		        	$this->stmt();
		        	$this->setState(188);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(189);
		        $this->match(self::T__9);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function stmt(): Context\StmtContext
		{
		    $localContext = new Context\StmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_stmt);

		    try {
		        $this->setState(204);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(191);
		        	    $this->varDeclaration();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(192);
		        	    $this->constDeclaration();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(193);
		        	    $this->shortVarDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(194);
		        	    $this->assignStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(195);
		        	    $this->incDecStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(196);
		        	    $this->ifStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(197);
		        	    $this->switchStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(198);
		        	    $this->forStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(199);
		        	    $this->match(self::BREAK);
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(200);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(201);
		        	    $this->returnStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(202);
		        	    $this->exprStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(203);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignStmt(): Context\AssignStmtContext
		{
		    $localContext = new Context\AssignStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_assignStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(206);
		        $this->leftValue();
		        $this->setState(207);
		        $this->assignOp();
		        $this->setState(208);
		        $this->expr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function leftValue(): Context\LeftValueContext
		{
		    $localContext = new Context\LeftValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_leftValue);

		    try {
		        $this->setState(222);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LValueIdContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(210);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $localContext = new Context\LValueArrayContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(211);
		        	    $this->match(self::ID);
		        	    $this->setState(216); 
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    do {
		        	    	$this->setState(212);
		        	    	$this->match(self::T__6);
		        	    	$this->setState(213);
		        	    	$this->expr();
		        	    	$this->setState(214);
		        	    	$this->match(self::T__7);
		        	    	$this->setState(218); 
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    } while ($_la === self::T__6);
		        	break;

		        	case 3:
		        	    $localContext = new Context\LValuePointerContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(220);
		        	    $this->match(self::T__3);
		        	    $this->setState(221);
		        	    $this->match(self::ID);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignOp(): Context\AssignOpContext
		{
		    $localContext = new Context\AssignOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_assignOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(224);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 30752) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function incDecStmt(): Context\IncDecStmtContext
		{
		    $localContext = new Context\IncDecStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_incDecStmt);

		    try {
		        $this->setState(230);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\IncStmtContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(226);
		        	    $this->match(self::ID);
		        	    $this->setState(227);
		        	    $this->match(self::T__14);
		        	break;

		        	case 2:
		        	    $localContext = new Context\DecStmtContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(228);
		        	    $this->match(self::ID);
		        	    $this->setState(229);
		        	    $this->match(self::T__15);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(232);
		        $this->match(self::IF);
		        $this->setState(233);
		        $this->expr();
		        $this->setState(234);
		        $this->block();
		        $this->setState(238);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(235);
		        		$this->elseIfClause(); 
		        	}

		        	$this->setState(240);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);
		        }
		        $this->setState(242);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(241);
		        	$this->elseClause();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function elseIfClause(): Context\ElseIfClauseContext
		{
		    $localContext = new Context\ElseIfClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_elseIfClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(244);
		        $this->match(self::ELSE);
		        $this->setState(245);
		        $this->match(self::IF);
		        $this->setState(246);
		        $this->expr();
		        $this->setState(247);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function elseClause(): Context\ElseClauseContext
		{
		    $localContext = new Context\ElseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_elseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(249);
		        $this->match(self::ELSE);
		        $this->setState(250);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(252);
		        $this->match(self::SWITCH);
		        $this->setState(253);
		        $this->expr();
		        $this->setState(254);
		        $this->match(self::T__8);
		        $this->setState(258);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE) {
		        	$this->setState(255);
		        	$this->caseClause();
		        	$this->setState(260);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(262);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(261);
		        	$this->defaultClause();
		        }
		        $this->setState(264);
		        $this->match(self::T__9);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function caseClause(): Context\CaseClauseContext
		{
		    $localContext = new Context\CaseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_caseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(266);
		        $this->match(self::CASE);
		        $this->setState(267);
		        $this->exprList();
		        $this->setState(268);
		        $this->match(self::T__16);
		        $this->setState(272);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117032531925926546) !== 0)) {
		        	$this->setState(269);
		        	$this->stmt();
		        	$this->setState(274);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultClause(): Context\DefaultClauseContext
		{
		    $localContext = new Context\DefaultClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_defaultClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(275);
		        $this->match(self::DEFAULT);
		        $this->setState(276);
		        $this->match(self::T__16);
		        $this->setState(280);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117032531925926546) !== 0)) {
		        	$this->setState(277);
		        	$this->stmt();
		        	$this->setState(282);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt(): Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_forStmt);

		    try {
		        $this->setState(302);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ForClassicContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(283);
		        	    $this->match(self::FOR);
		        	    $this->setState(285);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(284);
		        	    	$this->forInit();
		        	    }
		        	    $this->setState(287);
		        	    $this->match(self::T__17);
		        	    $this->setState(289);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567915666) !== 0)) {
		        	    	$this->setState(288);
		        	    	$this->expr();
		        	    }
		        	    $this->setState(291);
		        	    $this->match(self::T__17);
		        	    $this->setState(293);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(292);
		        	    	$this->forPost();
		        	    }
		        	    $this->setState(295);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ForConditionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(296);
		        	    $this->match(self::FOR);
		        	    $this->setState(297);
		        	    $this->expr();
		        	    $this->setState(298);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ForForeverContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(300);
		        	    $this->match(self::FOR);
		        	    $this->setState(301);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forInit(): Context\ForInitContext
		{
		    $localContext = new Context\ForInitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_forInit);

		    try {
		        $this->setState(307);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(304);
		        	    $this->shortVarDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(305);
		        	    $this->assignStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(306);
		        	    $this->incDecStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forPost(): Context\ForPostContext
		{
		    $localContext = new Context\ForPostContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_forPost);

		    try {
		        $this->setState(311);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(309);
		        	    $this->assignStmt();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(310);
		        	    $this->incDecStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt(): Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(313);
		        $this->match(self::RETURN);
		        $this->setState(315);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
		            case 1:
		        	    $this->setState(314);
		        	    $this->exprList();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprStmt(): Context\ExprStmtContext
		{
		    $localContext = new Context\ExprStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_exprStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(317);
		        $this->expr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
		    $localContext = new Context\ExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_expr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(319);
		        $this->orExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function orExpr(): Context\OrExprContext
		{
		    $localContext = new Context\OrExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_orExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(321);
		        $this->andExpr();
		        $this->setState(326);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::OR) {
		        	$this->setState(322);
		        	$this->match(self::OR);
		        	$this->setState(323);
		        	$this->andExpr();
		        	$this->setState(328);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function andExpr(): Context\AndExprContext
		{
		    $localContext = new Context\AndExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_andExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(329);
		        $this->eqExpr();
		        $this->setState(334);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::AND) {
		        	$this->setState(330);
		        	$this->match(self::AND);
		        	$this->setState(331);
		        	$this->eqExpr();
		        	$this->setState(336);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function eqExpr(): Context\EqExprContext
		{
		    $localContext = new Context\EqExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_eqExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(337);
		        $this->relExpr();
		        $this->setState(342);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__18 || $_la === self::T__19) {
		        	$this->setState(338);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__18 || $_la === self::T__19)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(339);
		        	$this->relExpr();
		        	$this->setState(344);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relExpr(): Context\RelExprContext
		{
		    $localContext = new Context\RelExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_relExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(345);
		        $this->addExpr();
		        $this->setState(350);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 31457280) !== 0)) {
		        	$this->setState(346);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 31457280) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(347);
		        	$this->addExpr();
		        	$this->setState(352);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function addExpr(): Context\AddExprContext
		{
		    $localContext = new Context\AddExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_addExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(353);
		        $this->mulExpr();
		        $this->setState(358);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(354);

		        		$_la = $this->input->LA(1);

		        		if (!($_la === self::T__24 || $_la === self::T__25)) {
		        		$this->errorHandler->recoverInline($this);
		        		} else {
		        			if ($this->input->LA(1) === Token::EOF) {
		        			    $this->matchedEOF = true;
		        		    }

		        			$this->errorHandler->reportMatch($this);
		        			$this->consume();
		        		}
		        		$this->setState(355);
		        		$this->mulExpr(); 
		        	}

		        	$this->setState(360);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function mulExpr(): Context\MulExprContext
		{
		    $localContext = new Context\MulExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_mulExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(361);
		        $this->unaryExpr();
		        $this->setState(366);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(362);

		        		$_la = $this->input->LA(1);

		        		if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 402653200) !== 0))) {
		        		$this->errorHandler->recoverInline($this);
		        		} else {
		        			if ($this->input->LA(1) === Token::EOF) {
		        			    $this->matchedEOF = true;
		        		    }

		        			$this->errorHandler->reportMatch($this);
		        			$this->consume();
		        		}
		        		$this->setState(363);
		        		$this->unaryExpr(); 
		        	}

		        	$this->setState(368);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryExpr(): Context\UnaryExprContext
		{
		    $localContext = new Context\UnaryExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_unaryExpr);

		    try {
		        $this->setState(378);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__28:
		            	$localContext = new Context\NotExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(369);
		            	$this->match(self::T__28);
		            	$this->setState(370);
		            	$this->unaryExpr();
		            	break;

		            case self::T__25:
		            	$localContext = new Context\NegExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(371);
		            	$this->match(self::T__25);
		            	$this->setState(372);
		            	$this->unaryExpr();
		            	break;

		            case self::T__29:
		            	$localContext = new Context\AddrExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(373);
		            	$this->match(self::T__29);
		            	$this->setState(374);
		            	$this->match(self::ID);
		            	break;

		            case self::T__3:
		            	$localContext = new Context\DerefExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(375);
		            	$this->match(self::T__3);
		            	$this->setState(376);
		            	$this->match(self::ID);
		            	break;

		            case self::T__0:
		            case self::T__6:
		            case self::TRUE:
		            case self::FALSE:
		            case self::NIL:
		            case self::FLOAT_LIT:
		            case self::INT_LIT:
		            case self::RUNE_LIT:
		            case self::STRING_LIT:
		            case self::ID:
		            	$localContext = new Context\AtomExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(377);
		            	$this->atom();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function atom(): Context\AtomContext
		{
		    $localContext = new Context\AtomContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_atom);

		    try {
		        $this->setState(416);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 40, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FloatAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(380);
		        	    $this->match(self::FLOAT_LIT);
		        	break;

		        	case 2:
		        	    $localContext = new Context\IntAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(381);
		        	    $this->match(self::INT_LIT);
		        	break;

		        	case 3:
		        	    $localContext = new Context\RuneAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(382);
		        	    $this->match(self::RUNE_LIT);
		        	break;

		        	case 4:
		        	    $localContext = new Context\StringAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(383);
		        	    $this->match(self::STRING_LIT);
		        	break;

		        	case 5:
		        	    $localContext = new Context\TrueAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(384);
		        	    $this->match(self::TRUE);
		        	break;

		        	case 6:
		        	    $localContext = new Context\FalseAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(385);
		        	    $this->match(self::FALSE);
		        	break;

		        	case 7:
		        	    $localContext = new Context\NilAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(386);
		        	    $this->match(self::NIL);
		        	break;

		        	case 8:
		        	    $localContext = new Context\MethodAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(387);
		        	    $this->match(self::ID);
		        	    $this->setState(388);
		        	    $this->match(self::T__30);
		        	    $this->setState(389);
		        	    $this->match(self::ID);
		        	    $this->setState(390);
		        	    $this->match(self::T__0);
		        	    $this->setState(392);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567915666) !== 0)) {
		        	    	$this->setState(391);
		        	    	$this->argList();
		        	    }
		        	    $this->setState(394);
		        	    $this->match(self::T__1);
		        	break;

		        	case 9:
		        	    $localContext = new Context\CallAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(395);
		        	    $this->match(self::ID);
		        	    $this->setState(396);
		        	    $this->match(self::T__0);
		        	    $this->setState(398);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567915666) !== 0)) {
		        	    	$this->setState(397);
		        	    	$this->argList();
		        	    }
		        	    $this->setState(400);
		        	    $this->match(self::T__1);
		        	break;

		        	case 10:
		        	    $localContext = new Context\IndexAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(401);
		        	    $this->match(self::ID);
		        	    $this->setState(406); 
		        	    $this->errorHandler->sync($this);

		        	    $alt = 1;

		        	    do {
		        	    	switch ($alt) {
		        	    	case 1:
		        	    		$this->setState(402);
		        	    		$this->match(self::T__6);
		        	    		$this->setState(403);
		        	    		$this->expr();
		        	    		$this->setState(404);
		        	    		$this->match(self::T__7);
		        	    		break;
		        	    	default:
		        	    		throw new NoViableAltException($this);
		        	    	}

		        	    	$this->setState(408); 
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx);
		        	    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        	break;

		        	case 11:
		        	    $localContext = new Context\IdAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(410);
		        	    $this->match(self::ID);
		        	break;

		        	case 12:
		        	    $localContext = new Context\ParenAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(411);
		        	    $this->match(self::T__0);
		        	    $this->setState(412);
		        	    $this->expr();
		        	    $this->setState(413);
		        	    $this->match(self::T__1);
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArrayAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(415);
		        	    $this->arrayLiteral();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayLiteral(): Context\ArrayLiteralContext
		{
		    $localContext = new Context\ArrayLiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_arrayLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(419); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(418);
		        		$this->arrayDimension();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(421); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        $this->setState(423);
		        $this->type();
		        $this->setState(424);
		        $this->match(self::T__8);
		        $this->setState(426);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567916178) !== 0)) {
		        	$this->setState(425);
		        	$this->arrayInitList();
		        }
		        $this->setState(428);
		        $this->match(self::T__9);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayInitList(): Context\ArrayInitListContext
		{
		    $localContext = new Context\ArrayInitListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_arrayInitList);

		    try {
		        $this->setState(452);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__0:
		            case self::T__3:
		            case self::T__6:
		            case self::T__25:
		            case self::T__28:
		            case self::T__29:
		            case self::TRUE:
		            case self::FALSE:
		            case self::NIL:
		            case self::FLOAT_LIT:
		            case self::INT_LIT:
		            case self::RUNE_LIT:
		            case self::STRING_LIT:
		            case self::ID:
		            	$localContext = new Context\FlatInitContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(430);
		            	$this->expr();
		            	$this->setState(435);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 43, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(431);
		            			$this->match(self::T__2);
		            			$this->setState(432);
		            			$this->expr(); 
		            		}

		            		$this->setState(437);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 43, $this->ctx);
		            	}
		            	$this->setState(439);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__2) {
		            		$this->setState(438);
		            		$this->match(self::T__2);
		            	}
		            	break;

		            case self::T__8:
		            	$localContext = new Context\NestedInitListContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(441);
		            	$this->nestedInit();
		            	$this->setState(446);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(442);
		            			$this->match(self::T__2);
		            			$this->setState(443);
		            			$this->nestedInit(); 
		            		}

		            		$this->setState(448);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx);
		            	}
		            	$this->setState(450);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__2) {
		            		$this->setState(449);
		            		$this->match(self::T__2);
		            	}
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function nestedInit(): Context\NestedInitContext
		{
		    $localContext = new Context\NestedInitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_nestedInit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(454);
		        $this->match(self::T__8);
		        $this->setState(455);
		        $this->expr();
		        $this->setState(460);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 48, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(456);
		        		$this->match(self::T__2);
		        		$this->setState(457);
		        		$this->expr(); 
		        	}

		        	$this->setState(462);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 48, $this->ctx);
		        }
		        $this->setState(464);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__2) {
		        	$this->setState(463);
		        	$this->match(self::T__2);
		        }
		        $this->setState(466);
		        $this->match(self::T__9);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argList(): Context\ArgListContext
		{
		    $localContext = new Context\ArgListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_argList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(468);
		        $this->arg();
		        $this->setState(473);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(469);
		        	$this->match(self::T__2);
		        	$this->setState(470);
		        	$this->arg();
		        	$this->setState(475);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arg(): Context\ArgContext
		{
		    $localContext = new Context\ArgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_arg);

		    try {
		        $this->setState(479);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 51, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ValArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(476);
		        	    $this->expr();
		        	break;

		        	case 2:
		        	    $localContext = new Context\RefArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(477);
		        	    $this->match(self::T__29);
		        	    $this->setState(478);
		        	    $this->match(self::ID);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_type);

		    try {
		        $this->setState(496);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT32_T:
		            	$localContext = new Context\TInt32Context($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(481);
		            	$this->match(self::INT32_T);
		            	break;

		            case self::INT_T:
		            	$localContext = new Context\TIntContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(482);
		            	$this->match(self::INT_T);
		            	break;

		            case self::FLOAT32_T:
		            	$localContext = new Context\TFloat32Context($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(483);
		            	$this->match(self::FLOAT32_T);
		            	break;

		            case self::BOOL_T:
		            	$localContext = new Context\TBoolContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(484);
		            	$this->match(self::BOOL_T);
		            	break;

		            case self::RUNE_T:
		            	$localContext = new Context\TRuneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(485);
		            	$this->match(self::RUNE_T);
		            	break;

		            case self::STRING_T:
		            	$localContext = new Context\TStringContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(486);
		            	$this->match(self::STRING_T);
		            	break;

		            case self::T__6:
		            	$localContext = new Context\TArrayContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(488); 
		            	$this->errorHandler->sync($this);

		            	$alt = 1;

		            	do {
		            		switch ($alt) {
		            		case 1:
		            			$this->setState(487);
		            			$this->arrayDimension();
		            			break;
		            		default:
		            			throw new NoViableAltException($this);
		            		}

		            		$this->setState(490); 
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 52, $this->ctx);
		            	} while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		            	$this->setState(492);
		            	$this->type();
		            	break;

		            case self::T__3:
		            	$localContext = new Context\TPointerContext($localContext);
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(494);
		            	$this->match(self::T__3);
		            	$this->setState(495);
		            	$this->type();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GolampiParser;
	use GolampiVisitor;
	use GolampiListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

	    /**
	     * @return array<FunctionDeclarationContext>|FunctionDeclarationContext|null
	     */
	    public function functionDeclaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FunctionDeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(FunctionDeclarationContext::class, $index);
	    }

	    /**
	     * @return array<VarDeclarationContext>|VarDeclarationContext|null
	     */
	    public function varDeclaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(VarDeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(VarDeclarationContext::class, $index);
	    }

	    /**
	     * @return array<ConstDeclarationContext>|ConstDeclarationContext|null
	     */
	    public function constDeclaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ConstDeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(ConstDeclarationContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_functionDeclaration;
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function params(): ?ParamsContext
	    {
	    	return $this->getTypedRuleContext(ParamsContext::class, 0);
	    }

	    public function returnType(): ?ReturnTypeContext
	    {
	    	return $this->getTypedRuleContext(ReturnTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFunctionDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFunctionDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFunctionDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_params;
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParams($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParams($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParams($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_param;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function pointerMark(): ?PointerMarkContext
	    {
	    	return $this->getTypedRuleContext(PointerMarkContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParam($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParam($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParam($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PointerMarkContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_pointerMark;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPointerMark($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPointerMark($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPointerMark($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnType;
	    }

	    /**
	     * @return array<TypeContext>|TypeContext|null
	     */
	    public function type(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_varDeclaration;
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::VAR, 0);
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    /**
	     * @return array<ArrayDimensionContext>|ArrayDimensionContext|null
	     */
	    public function arrayDimension(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArrayDimensionContext::class);
	    	}

	        return $this->getTypedRuleContext(ArrayDimensionContext::class, $index);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterVarDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitVarDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitVarDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_constDeclaration;
	    }

	    public function CONST(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CONST, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterConstDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitConstDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitConstDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_shortVarDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterShortVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitShortVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitShortVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_idList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIdList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIdList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprList;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExprList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExprList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayDimensionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayDimension;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayDimension($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayDimension($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayDimension($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_block;
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_stmt;
	    }

	    public function varDeclaration(): ?VarDeclarationContext
	    {
	    	return $this->getTypedRuleContext(VarDeclarationContext::class, 0);
	    }

	    public function constDeclaration(): ?ConstDeclarationContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclarationContext::class, 0);
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

	    public function incDecStmt(): ?IncDecStmtContext
	    {
	    	return $this->getTypedRuleContext(IncDecStmtContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function forStmt(): ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function BREAK(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BREAK, 0);
	    }

	    public function CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CONTINUE, 0);
	    }

	    public function returnStmt(): ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function exprStmt(): ?ExprStmtContext
	    {
	    	return $this->getTypedRuleContext(ExprStmtContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignStmt;
	    }

	    public function leftValue(): ?LeftValueContext
	    {
	    	return $this->getTypedRuleContext(LeftValueContext::class, 0);
	    }

	    public function assignOp(): ?AssignOpContext
	    {
	    	return $this->getTypedRuleContext(AssignOpContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LeftValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_leftValue;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class LValuePointerContext extends LeftValueContext
	{
		public function __construct(LeftValueContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLValuePointer($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLValuePointer($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLValuePointer($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LValueArrayContext extends LeftValueContext
	{
		public function __construct(LeftValueContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLValueArray($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLValueArray($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLValueArray($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LValueIdContext extends LeftValueContext
	{
		public function __construct(LeftValueContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLValueId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLValueId($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLValueId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignOp;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignOp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncDecStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_incDecStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IncStmtContext extends IncDecStmtContext
	{
		public function __construct(IncDecStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIncStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIncStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIncStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DecStmtContext extends IncDecStmtContext
	{
		public function __construct(IncDecStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDecStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDecStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDecStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_ifStmt;
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::IF, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    /**
	     * @return array<ElseIfClauseContext>|ElseIfClauseContext|null
	     */
	    public function elseIfClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ElseIfClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(ElseIfClauseContext::class, $index);
	    }

	    public function elseClause(): ?ElseClauseContext
	    {
	    	return $this->getTypedRuleContext(ElseClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElseIfClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_elseIfClause;
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ELSE, 0);
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::IF, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterElseIfClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitElseIfClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitElseIfClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_elseClause;
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ELSE, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterElseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitElseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitElseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchStmt;
	    }

	    public function SWITCH(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::SWITCH, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    /**
	     * @return array<CaseClauseContext>|CaseClauseContext|null
	     */
	    public function caseClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CaseClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(CaseClauseContext::class, $index);
	    }

	    public function defaultClause(): ?DefaultClauseContext
	    {
	    	return $this->getTypedRuleContext(DefaultClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CaseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_caseClause;
	    }

	    public function CASE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CASE, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterCaseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitCaseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCaseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_defaultClause;
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DEFAULT, 0);
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDefaultClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDefaultClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDefaultClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ForForeverContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForForever($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForForever($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForForever($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForClassicContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function forInit(): ?ForInitContext
	    {
	    	return $this->getTypedRuleContext(ForInitContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function forPost(): ?ForPostContext
	    {
	    	return $this->getTypedRuleContext(ForPostContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForClassic($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForClassic($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForClassic($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForConditionContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForCondition($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForCondition($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForInitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forInit;
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

	    public function incDecStmt(): ?IncDecStmtContext
	    {
	    	return $this->getTypedRuleContext(IncDecStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForInit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForInit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForInit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForPostContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forPost;
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

	    public function incDecStmt(): ?IncDecStmtContext
	    {
	    	return $this->getTypedRuleContext(IncDecStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForPost($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForPost($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForPost($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnStmt;
	    }

	    public function RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RETURN, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprStmt;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExprStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExprStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expr;
	    }

	    public function orExpr(): ?OrExprContext
	    {
	    	return $this->getTypedRuleContext(OrExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OrExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_orExpr;
	    }

	    /**
	     * @return array<AndExprContext>|AndExprContext|null
	     */
	    public function andExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AndExprContext::class);
	    	}

	        return $this->getTypedRuleContext(AndExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function OR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::OR);
	    	}

	        return $this->getToken(GolampiParser::OR, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterOrExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitOrExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitOrExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AndExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_andExpr;
	    }

	    /**
	     * @return array<EqExprContext>|EqExprContext|null
	     */
	    public function eqExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EqExprContext::class);
	    	}

	        return $this->getTypedRuleContext(EqExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function AND(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::AND);
	    	}

	        return $this->getToken(GolampiParser::AND, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAndExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAndExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAndExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EqExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_eqExpr;
	    }

	    /**
	     * @return array<RelExprContext>|RelExprContext|null
	     */
	    public function relExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(RelExprContext::class);
	    	}

	        return $this->getTypedRuleContext(RelExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterEqExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitEqExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEqExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RelExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_relExpr;
	    }

	    /**
	     * @return array<AddExprContext>|AddExprContext|null
	     */
	    public function addExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AddExprContext::class);
	    	}

	        return $this->getTypedRuleContext(AddExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterRelExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRelExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRelExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AddExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_addExpr;
	    }

	    /**
	     * @return array<MulExprContext>|MulExprContext|null
	     */
	    public function mulExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MulExprContext::class);
	    	}

	        return $this->getTypedRuleContext(MulExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAddExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAddExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAddExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MulExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_mulExpr;
	    }

	    /**
	     * @return array<UnaryExprContext>|UnaryExprContext|null
	     */
	    public function unaryExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnaryExprContext::class);
	    	}

	        return $this->getTypedRuleContext(UnaryExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterMulExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitMulExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMulExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_unaryExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AddrExprContext extends UnaryExprContext
	{
		public function __construct(UnaryExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAddrExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAddrExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAddrExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DerefExprContext extends UnaryExprContext
	{
		public function __construct(UnaryExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDerefExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDerefExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDerefExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NegExprContext extends UnaryExprContext
	{
		public function __construct(UnaryExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function unaryExpr(): ?UnaryExprContext
	    {
	    	return $this->getTypedRuleContext(UnaryExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterNegExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitNegExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNegExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NotExprContext extends UnaryExprContext
	{
		public function __construct(UnaryExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function unaryExpr(): ?UnaryExprContext
	    {
	    	return $this->getTypedRuleContext(UnaryExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterNotExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitNotExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNotExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AtomExprContext extends UnaryExprContext
	{
		public function __construct(UnaryExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function atom(): ?AtomContext
	    {
	    	return $this->getTypedRuleContext(AtomContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAtomExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAtomExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAtomExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AtomContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_atom;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class TrueAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TRUE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::TRUE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTrueAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTrueAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTrueAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FalseAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FALSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFalseAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFalseAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFalseAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MethodAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

	    public function argList(): ?ArgListContext
	    {
	    	return $this->getTypedRuleContext(ArgListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterMethodAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitMethodAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMethodAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StringAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING_LIT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStringAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStringAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStringAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IndexAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIndexAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIndexAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIndexAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NilAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NIL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NIL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterNilAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitNilAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNilAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CallAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function argList(): ?ArgListContext
	    {
	    	return $this->getTypedRuleContext(ArgListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterCallAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitCallAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCallAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function arrayLiteral(): ?ArrayLiteralContext
	    {
	    	return $this->getTypedRuleContext(ArrayLiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RuneAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE_LIT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterRuneAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRuneAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRuneAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParenAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParenAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParenAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParenAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FloatAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT_LIT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFloatAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFloatAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFloatAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IntAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT_LIT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT_LIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIntAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIntAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIntAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdAtomContext extends AtomContext
	{
		public function __construct(AtomContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIdAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIdAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdAtom($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayLiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayLiteral;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    /**
	     * @return array<ArrayDimensionContext>|ArrayDimensionContext|null
	     */
	    public function arrayDimension(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArrayDimensionContext::class);
	    	}

	        return $this->getTypedRuleContext(ArrayDimensionContext::class, $index);
	    }

	    public function arrayInitList(): ?ArrayInitListContext
	    {
	    	return $this->getTypedRuleContext(ArrayInitListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayInitListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayInitList;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class FlatInitContext extends ArrayInitListContext
	{
		public function __construct(ArrayInitListContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFlatInit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFlatInit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFlatInit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NestedInitListContext extends ArrayInitListContext
	{
		public function __construct(ArrayInitListContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<NestedInitContext>|NestedInitContext|null
	     */
	    public function nestedInit(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(NestedInitContext::class);
	    	}

	        return $this->getTypedRuleContext(NestedInitContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterNestedInitList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitNestedInitList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNestedInitList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NestedInitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_nestedInit;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterNestedInit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitNestedInit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNestedInit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_argList;
	    }

	    /**
	     * @return array<ArgContext>|ArgContext|null
	     */
	    public function arg(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArgContext::class);
	    	}

	        return $this->getTypedRuleContext(ArgContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArgList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArgList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArgList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arg;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ValArgContext extends ArgContext
	{
		public function __construct(ArgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterValArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitValArg($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitValArg($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RefArgContext extends ArgContext
	{
		public function __construct(ArgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterRefArg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRefArg($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRefArg($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_type;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class TStringContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTString($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTString($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TBoolContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BOOL_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BOOL_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTBool($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTBool($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTBool($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TPointerContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTPointer($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTPointer($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTPointer($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TInt32Context extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT32_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT32_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTInt32($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTInt32($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTInt32($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TArrayContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    /**
	     * @return array<ArrayDimensionContext>|ArrayDimensionContext|null
	     */
	    public function arrayDimension(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArrayDimensionContext::class);
	    	}

	        return $this->getTypedRuleContext(ArrayDimensionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTArray($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTArray($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTArray($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TRuneContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTRune($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTRune($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTRune($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TFloat32Context extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT32_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT32_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTFloat32($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTFloat32($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTFloat32($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TIntContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTInt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTInt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTInt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}