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
               AND = 53, OR = 54, PIPE = 55, FLOAT_LIT = 56, INT_LIT = 57, 
               RUNE_LIT = 58, STRING_LIT = 59, ID = 60, LINE_COMMENT = 61, 
               BLOCK_COMMENT = 62, WS = 63;

		public const RULE_program = 0, RULE_functionDeclaration = 1, RULE_params = 2, 
               RULE_param = 3, RULE_pointerMark = 4, RULE_returnType = 5, 
               RULE_varDeclaration = 6, RULE_constDeclaration = 7, RULE_shortVarDecl = 8, 
               RULE_idList = 9, RULE_exprList = 10, RULE_arrayDimension = 11, 
               RULE_block = 12, RULE_stmt = 13, RULE_assignStmt = 14, RULE_leftValue = 15, 
               RULE_assignOp = 16, RULE_incDecStmt = 17, RULE_ifStmt = 18, 
               RULE_elseIfClause = 19, RULE_elseClause = 20, RULE_switchStmt = 21, 
               RULE_caseClause = 22, RULE_defaultClause = 23, RULE_forStmt = 24, 
               RULE_forInit = 25, RULE_forPost = 26, RULE_returnStmt = 27, 
               RULE_exprStmt = 28, RULE_expr = 29, RULE_composeExpr = 30, 
               RULE_orExpr = 31, RULE_andExpr = 32, RULE_eqExpr = 33, RULE_relExpr = 34, 
               RULE_addExpr = 35, RULE_mulExpr = 36, RULE_unaryExpr = 37, 
               RULE_atom = 38, RULE_arrayLiteral = 39, RULE_arrayInitList = 40, 
               RULE_nestedInit = 41, RULE_argList = 42, RULE_arg = 43, RULE_type = 44;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDeclaration', 'params', 'param', 'pointerMark', 'returnType', 
			'varDeclaration', 'constDeclaration', 'shortVarDecl', 'idList', 'exprList', 
			'arrayDimension', 'block', 'stmt', 'assignStmt', 'leftValue', 'assignOp', 
			'incDecStmt', 'ifStmt', 'elseIfClause', 'elseClause', 'switchStmt', 'caseClause', 
			'defaultClause', 'forStmt', 'forInit', 'forPost', 'returnStmt', 'exprStmt', 
			'expr', 'composeExpr', 'orExpr', 'andExpr', 'eqExpr', 'relExpr', 'addExpr', 
			'mulExpr', 'unaryExpr', 'atom', 'arrayLiteral', 'arrayInitList', 'nestedInit', 
			'argList', 'arg', 'type'
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
		    "'bool'", "'rune'", "'string'", "'&&'", "'||'", "'|>'"
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
		    "PIPE", "FLOAT_LIT", "INT_LIT", "RUNE_LIT", "STRING_LIT", "ID", "LINE_COMMENT", 
		    "BLOCK_COMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 63, 537, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 1, 0, 1, 0, 1, 0, 5, 0, 94, 8, 0, 10, 0, 
		    12, 0, 97, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 105, 8, 
		    1, 1, 1, 1, 1, 3, 1, 109, 8, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 5, 2, 
		    116, 8, 2, 10, 2, 12, 2, 119, 9, 2, 1, 3, 1, 3, 3, 3, 123, 8, 3, 1, 
		    3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 4, 5, 134, 8, 5, 
		    11, 5, 12, 5, 135, 1, 5, 1, 5, 3, 5, 140, 8, 5, 1, 6, 1, 6, 1, 6, 
		    5, 6, 145, 8, 6, 10, 6, 12, 6, 148, 9, 6, 1, 6, 1, 6, 1, 6, 3, 6, 
		    153, 8, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 160, 8, 6, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 
		    9, 5, 9, 175, 8, 9, 10, 9, 12, 9, 178, 9, 9, 1, 10, 1, 10, 1, 10, 
		    5, 10, 183, 8, 10, 10, 10, 12, 10, 186, 9, 10, 1, 11, 1, 11, 1, 11, 
		    1, 11, 1, 12, 1, 12, 5, 12, 194, 8, 12, 10, 12, 12, 12, 197, 9, 12, 
		    1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 3, 13, 214, 8, 13, 1, 14, 1, 
		    14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 4, 15, 
		    226, 8, 15, 11, 15, 12, 15, 227, 1, 15, 1, 15, 3, 15, 232, 8, 15, 
		    1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 3, 17, 240, 8, 17, 1, 18, 
		    1, 18, 1, 18, 1, 18, 5, 18, 246, 8, 18, 10, 18, 12, 18, 249, 9, 18, 
		    1, 18, 3, 18, 252, 8, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 20, 
		    1, 20, 1, 20, 1, 21, 1, 21, 1, 21, 1, 21, 5, 21, 266, 8, 21, 10, 21, 
		    12, 21, 269, 9, 21, 1, 21, 3, 21, 272, 8, 21, 1, 21, 1, 21, 1, 22, 
		    1, 22, 1, 22, 1, 22, 5, 22, 280, 8, 22, 10, 22, 12, 22, 283, 9, 22, 
		    1, 23, 1, 23, 1, 23, 5, 23, 288, 8, 23, 10, 23, 12, 23, 291, 9, 23, 
		    1, 24, 1, 24, 3, 24, 295, 8, 24, 1, 24, 1, 24, 3, 24, 299, 8, 24, 
		    1, 24, 1, 24, 3, 24, 303, 8, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 
		    1, 24, 1, 24, 3, 24, 312, 8, 24, 1, 25, 1, 25, 1, 25, 3, 25, 317, 
		    8, 25, 1, 26, 1, 26, 3, 26, 321, 8, 26, 1, 27, 1, 27, 3, 27, 325, 
		    8, 27, 1, 28, 1, 28, 1, 29, 1, 29, 1, 30, 1, 30, 1, 30, 5, 30, 334, 
		    8, 30, 10, 30, 12, 30, 337, 9, 30, 1, 31, 1, 31, 1, 31, 5, 31, 342, 
		    8, 31, 10, 31, 12, 31, 345, 9, 31, 1, 32, 1, 32, 1, 32, 5, 32, 350, 
		    8, 32, 10, 32, 12, 32, 353, 9, 32, 1, 33, 1, 33, 1, 33, 5, 33, 358, 
		    8, 33, 10, 33, 12, 33, 361, 9, 33, 1, 34, 1, 34, 1, 34, 5, 34, 366, 
		    8, 34, 10, 34, 12, 34, 369, 9, 34, 1, 35, 1, 35, 1, 35, 5, 35, 374, 
		    8, 35, 10, 35, 12, 35, 377, 9, 35, 1, 36, 1, 36, 1, 36, 5, 36, 382, 
		    8, 36, 10, 36, 12, 36, 385, 9, 36, 1, 37, 1, 37, 1, 37, 1, 37, 1, 
		    37, 1, 37, 1, 37, 1, 37, 1, 37, 3, 37, 396, 8, 37, 1, 38, 1, 38, 1, 
		    38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 
		    1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 3, 38, 415, 8, 38, 1, 38, 1, 38, 
		    1, 38, 1, 38, 3, 38, 421, 8, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 
		    1, 38, 4, 38, 429, 8, 38, 11, 38, 12, 38, 430, 1, 38, 1, 38, 1, 38, 
		    1, 38, 1, 38, 1, 38, 3, 38, 439, 8, 38, 1, 39, 4, 39, 442, 8, 39, 
		    11, 39, 12, 39, 443, 1, 39, 1, 39, 1, 39, 3, 39, 449, 8, 39, 1, 39, 
		    1, 39, 1, 40, 1, 40, 1, 40, 5, 40, 456, 8, 40, 10, 40, 12, 40, 459, 
		    9, 40, 1, 40, 3, 40, 462, 8, 40, 1, 40, 1, 40, 1, 40, 5, 40, 467, 
		    8, 40, 10, 40, 12, 40, 470, 9, 40, 1, 40, 3, 40, 473, 8, 40, 3, 40, 
		    475, 8, 40, 1, 41, 1, 41, 1, 41, 1, 41, 5, 41, 481, 8, 41, 10, 41, 
		    12, 41, 484, 9, 41, 1, 41, 3, 41, 487, 8, 41, 1, 41, 1, 41, 1, 41, 
		    1, 41, 1, 41, 1, 41, 5, 41, 495, 8, 41, 10, 41, 12, 41, 498, 9, 41, 
		    1, 41, 3, 41, 501, 8, 41, 1, 41, 1, 41, 3, 41, 505, 8, 41, 1, 42, 
		    1, 42, 1, 42, 5, 42, 510, 8, 42, 10, 42, 12, 42, 513, 9, 42, 1, 43, 
		    1, 43, 1, 43, 3, 43, 518, 8, 43, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 
		    1, 44, 1, 44, 4, 44, 527, 8, 44, 11, 44, 12, 44, 528, 1, 44, 1, 44, 
		    1, 44, 1, 44, 3, 44, 535, 8, 44, 1, 44, 0, 0, 45, 0, 2, 4, 6, 8, 10, 
		    12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 
		    46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 
		    80, 82, 84, 86, 88, 0, 6, 2, 0, 5, 5, 11, 14, 1, 0, 19, 20, 1, 0, 
		    21, 24, 1, 0, 25, 26, 2, 0, 4, 4, 27, 28, 1, 0, 47, 52, 586, 0, 95, 
		    1, 0, 0, 0, 2, 100, 1, 0, 0, 0, 4, 112, 1, 0, 0, 0, 6, 120, 1, 0, 
		    0, 0, 8, 126, 1, 0, 0, 0, 10, 139, 1, 0, 0, 0, 12, 159, 1, 0, 0, 0, 
		    14, 161, 1, 0, 0, 0, 16, 167, 1, 0, 0, 0, 18, 171, 1, 0, 0, 0, 20, 
		    179, 1, 0, 0, 0, 22, 187, 1, 0, 0, 0, 24, 191, 1, 0, 0, 0, 26, 213, 
		    1, 0, 0, 0, 28, 215, 1, 0, 0, 0, 30, 231, 1, 0, 0, 0, 32, 233, 1, 
		    0, 0, 0, 34, 239, 1, 0, 0, 0, 36, 241, 1, 0, 0, 0, 38, 253, 1, 0, 
		    0, 0, 40, 258, 1, 0, 0, 0, 42, 261, 1, 0, 0, 0, 44, 275, 1, 0, 0, 
		    0, 46, 284, 1, 0, 0, 0, 48, 311, 1, 0, 0, 0, 50, 316, 1, 0, 0, 0, 
		    52, 320, 1, 0, 0, 0, 54, 322, 1, 0, 0, 0, 56, 326, 1, 0, 0, 0, 58, 
		    328, 1, 0, 0, 0, 60, 330, 1, 0, 0, 0, 62, 338, 1, 0, 0, 0, 64, 346, 
		    1, 0, 0, 0, 66, 354, 1, 0, 0, 0, 68, 362, 1, 0, 0, 0, 70, 370, 1, 
		    0, 0, 0, 72, 378, 1, 0, 0, 0, 74, 395, 1, 0, 0, 0, 76, 438, 1, 0, 
		    0, 0, 78, 441, 1, 0, 0, 0, 80, 474, 1, 0, 0, 0, 82, 504, 1, 0, 0, 
		    0, 84, 506, 1, 0, 0, 0, 86, 517, 1, 0, 0, 0, 88, 534, 1, 0, 0, 0, 
		    90, 94, 3, 2, 1, 0, 91, 94, 3, 12, 6, 0, 92, 94, 3, 14, 7, 0, 93, 
		    90, 1, 0, 0, 0, 93, 91, 1, 0, 0, 0, 93, 92, 1, 0, 0, 0, 94, 97, 1, 
		    0, 0, 0, 95, 93, 1, 0, 0, 0, 95, 96, 1, 0, 0, 0, 96, 98, 1, 0, 0, 
		    0, 97, 95, 1, 0, 0, 0, 98, 99, 5, 0, 0, 1, 99, 1, 1, 0, 0, 0, 100, 
		    101, 5, 34, 0, 0, 101, 102, 5, 60, 0, 0, 102, 104, 5, 1, 0, 0, 103, 
		    105, 3, 4, 2, 0, 104, 103, 1, 0, 0, 0, 104, 105, 1, 0, 0, 0, 105, 
		    106, 1, 0, 0, 0, 106, 108, 5, 2, 0, 0, 107, 109, 3, 10, 5, 0, 108, 
		    107, 1, 0, 0, 0, 108, 109, 1, 0, 0, 0, 109, 110, 1, 0, 0, 0, 110, 
		    111, 3, 24, 12, 0, 111, 3, 1, 0, 0, 0, 112, 117, 3, 6, 3, 0, 113, 
		    114, 5, 3, 0, 0, 114, 116, 3, 6, 3, 0, 115, 113, 1, 0, 0, 0, 116, 
		    119, 1, 0, 0, 0, 117, 115, 1, 0, 0, 0, 117, 118, 1, 0, 0, 0, 118, 
		    5, 1, 0, 0, 0, 119, 117, 1, 0, 0, 0, 120, 122, 5, 60, 0, 0, 121, 123, 
		    3, 8, 4, 0, 122, 121, 1, 0, 0, 0, 122, 123, 1, 0, 0, 0, 123, 124, 
		    1, 0, 0, 0, 124, 125, 3, 88, 44, 0, 125, 7, 1, 0, 0, 0, 126, 127, 
		    5, 4, 0, 0, 127, 9, 1, 0, 0, 0, 128, 140, 3, 88, 44, 0, 129, 130, 
		    5, 1, 0, 0, 130, 133, 3, 88, 44, 0, 131, 132, 5, 3, 0, 0, 132, 134, 
		    3, 88, 44, 0, 133, 131, 1, 0, 0, 0, 134, 135, 1, 0, 0, 0, 135, 133, 
		    1, 0, 0, 0, 135, 136, 1, 0, 0, 0, 136, 137, 1, 0, 0, 0, 137, 138, 
		    5, 2, 0, 0, 138, 140, 1, 0, 0, 0, 139, 128, 1, 0, 0, 0, 139, 129, 
		    1, 0, 0, 0, 140, 11, 1, 0, 0, 0, 141, 142, 5, 32, 0, 0, 142, 146, 
		    3, 18, 9, 0, 143, 145, 3, 22, 11, 0, 144, 143, 1, 0, 0, 0, 145, 148, 
		    1, 0, 0, 0, 146, 144, 1, 0, 0, 0, 146, 147, 1, 0, 0, 0, 147, 149, 
		    1, 0, 0, 0, 148, 146, 1, 0, 0, 0, 149, 152, 3, 88, 44, 0, 150, 151, 
		    5, 5, 0, 0, 151, 153, 3, 20, 10, 0, 152, 150, 1, 0, 0, 0, 152, 153, 
		    1, 0, 0, 0, 153, 160, 1, 0, 0, 0, 154, 155, 5, 32, 0, 0, 155, 156, 
		    3, 18, 9, 0, 156, 157, 5, 5, 0, 0, 157, 158, 3, 20, 10, 0, 158, 160, 
		    1, 0, 0, 0, 159, 141, 1, 0, 0, 0, 159, 154, 1, 0, 0, 0, 160, 13, 1, 
		    0, 0, 0, 161, 162, 5, 33, 0, 0, 162, 163, 5, 60, 0, 0, 163, 164, 3, 
		    88, 44, 0, 164, 165, 5, 5, 0, 0, 165, 166, 3, 58, 29, 0, 166, 15, 
		    1, 0, 0, 0, 167, 168, 3, 18, 9, 0, 168, 169, 5, 6, 0, 0, 169, 170, 
		    3, 20, 10, 0, 170, 17, 1, 0, 0, 0, 171, 176, 5, 60, 0, 0, 172, 173, 
		    5, 3, 0, 0, 173, 175, 5, 60, 0, 0, 174, 172, 1, 0, 0, 0, 175, 178, 
		    1, 0, 0, 0, 176, 174, 1, 0, 0, 0, 176, 177, 1, 0, 0, 0, 177, 19, 1, 
		    0, 0, 0, 178, 176, 1, 0, 0, 0, 179, 184, 3, 58, 29, 0, 180, 181, 5, 
		    3, 0, 0, 181, 183, 3, 58, 29, 0, 182, 180, 1, 0, 0, 0, 183, 186, 1, 
		    0, 0, 0, 184, 182, 1, 0, 0, 0, 184, 185, 1, 0, 0, 0, 185, 21, 1, 0, 
		    0, 0, 186, 184, 1, 0, 0, 0, 187, 188, 5, 7, 0, 0, 188, 189, 3, 58, 
		    29, 0, 189, 190, 5, 8, 0, 0, 190, 23, 1, 0, 0, 0, 191, 195, 5, 9, 
		    0, 0, 192, 194, 3, 26, 13, 0, 193, 192, 1, 0, 0, 0, 194, 197, 1, 0, 
		    0, 0, 195, 193, 1, 0, 0, 0, 195, 196, 1, 0, 0, 0, 196, 198, 1, 0, 
		    0, 0, 197, 195, 1, 0, 0, 0, 198, 199, 5, 10, 0, 0, 199, 25, 1, 0, 
		    0, 0, 200, 214, 3, 12, 6, 0, 201, 214, 3, 14, 7, 0, 202, 214, 3, 16, 
		    8, 0, 203, 214, 3, 28, 14, 0, 204, 214, 3, 34, 17, 0, 205, 214, 3, 
		    36, 18, 0, 206, 214, 3, 42, 21, 0, 207, 214, 3, 48, 24, 0, 208, 214, 
		    5, 41, 0, 0, 209, 214, 5, 42, 0, 0, 210, 214, 3, 54, 27, 0, 211, 214, 
		    3, 56, 28, 0, 212, 214, 3, 24, 12, 0, 213, 200, 1, 0, 0, 0, 213, 201, 
		    1, 0, 0, 0, 213, 202, 1, 0, 0, 0, 213, 203, 1, 0, 0, 0, 213, 204, 
		    1, 0, 0, 0, 213, 205, 1, 0, 0, 0, 213, 206, 1, 0, 0, 0, 213, 207, 
		    1, 0, 0, 0, 213, 208, 1, 0, 0, 0, 213, 209, 1, 0, 0, 0, 213, 210, 
		    1, 0, 0, 0, 213, 211, 1, 0, 0, 0, 213, 212, 1, 0, 0, 0, 214, 27, 1, 
		    0, 0, 0, 215, 216, 3, 30, 15, 0, 216, 217, 3, 32, 16, 0, 217, 218, 
		    3, 58, 29, 0, 218, 29, 1, 0, 0, 0, 219, 232, 5, 60, 0, 0, 220, 225, 
		    5, 60, 0, 0, 221, 222, 5, 7, 0, 0, 222, 223, 3, 58, 29, 0, 223, 224, 
		    5, 8, 0, 0, 224, 226, 1, 0, 0, 0, 225, 221, 1, 0, 0, 0, 226, 227, 
		    1, 0, 0, 0, 227, 225, 1, 0, 0, 0, 227, 228, 1, 0, 0, 0, 228, 232, 
		    1, 0, 0, 0, 229, 230, 5, 4, 0, 0, 230, 232, 5, 60, 0, 0, 231, 219, 
		    1, 0, 0, 0, 231, 220, 1, 0, 0, 0, 231, 229, 1, 0, 0, 0, 232, 31, 1, 
		    0, 0, 0, 233, 234, 7, 0, 0, 0, 234, 33, 1, 0, 0, 0, 235, 236, 5, 60, 
		    0, 0, 236, 240, 5, 15, 0, 0, 237, 238, 5, 60, 0, 0, 238, 240, 5, 16, 
		    0, 0, 239, 235, 1, 0, 0, 0, 239, 237, 1, 0, 0, 0, 240, 35, 1, 0, 0, 
		    0, 241, 242, 5, 35, 0, 0, 242, 243, 3, 58, 29, 0, 243, 247, 3, 24, 
		    12, 0, 244, 246, 3, 38, 19, 0, 245, 244, 1, 0, 0, 0, 246, 249, 1, 
		    0, 0, 0, 247, 245, 1, 0, 0, 0, 247, 248, 1, 0, 0, 0, 248, 251, 1, 
		    0, 0, 0, 249, 247, 1, 0, 0, 0, 250, 252, 3, 40, 20, 0, 251, 250, 1, 
		    0, 0, 0, 251, 252, 1, 0, 0, 0, 252, 37, 1, 0, 0, 0, 253, 254, 5, 36, 
		    0, 0, 254, 255, 5, 35, 0, 0, 255, 256, 3, 58, 29, 0, 256, 257, 3, 
		    24, 12, 0, 257, 39, 1, 0, 0, 0, 258, 259, 5, 36, 0, 0, 259, 260, 3, 
		    24, 12, 0, 260, 41, 1, 0, 0, 0, 261, 262, 5, 37, 0, 0, 262, 263, 3, 
		    58, 29, 0, 263, 267, 5, 9, 0, 0, 264, 266, 3, 44, 22, 0, 265, 264, 
		    1, 0, 0, 0, 266, 269, 1, 0, 0, 0, 267, 265, 1, 0, 0, 0, 267, 268, 
		    1, 0, 0, 0, 268, 271, 1, 0, 0, 0, 269, 267, 1, 0, 0, 0, 270, 272, 
		    3, 46, 23, 0, 271, 270, 1, 0, 0, 0, 271, 272, 1, 0, 0, 0, 272, 273, 
		    1, 0, 0, 0, 273, 274, 5, 10, 0, 0, 274, 43, 1, 0, 0, 0, 275, 276, 
		    5, 38, 0, 0, 276, 277, 3, 20, 10, 0, 277, 281, 5, 17, 0, 0, 278, 280, 
		    3, 26, 13, 0, 279, 278, 1, 0, 0, 0, 280, 283, 1, 0, 0, 0, 281, 279, 
		    1, 0, 0, 0, 281, 282, 1, 0, 0, 0, 282, 45, 1, 0, 0, 0, 283, 281, 1, 
		    0, 0, 0, 284, 285, 5, 39, 0, 0, 285, 289, 5, 17, 0, 0, 286, 288, 3, 
		    26, 13, 0, 287, 286, 1, 0, 0, 0, 288, 291, 1, 0, 0, 0, 289, 287, 1, 
		    0, 0, 0, 289, 290, 1, 0, 0, 0, 290, 47, 1, 0, 0, 0, 291, 289, 1, 0, 
		    0, 0, 292, 294, 5, 40, 0, 0, 293, 295, 3, 50, 25, 0, 294, 293, 1, 
		    0, 0, 0, 294, 295, 1, 0, 0, 0, 295, 296, 1, 0, 0, 0, 296, 298, 5, 
		    18, 0, 0, 297, 299, 3, 58, 29, 0, 298, 297, 1, 0, 0, 0, 298, 299, 
		    1, 0, 0, 0, 299, 300, 1, 0, 0, 0, 300, 302, 5, 18, 0, 0, 301, 303, 
		    3, 52, 26, 0, 302, 301, 1, 0, 0, 0, 302, 303, 1, 0, 0, 0, 303, 304, 
		    1, 0, 0, 0, 304, 312, 3, 24, 12, 0, 305, 306, 5, 40, 0, 0, 306, 307, 
		    3, 58, 29, 0, 307, 308, 3, 24, 12, 0, 308, 312, 1, 0, 0, 0, 309, 310, 
		    5, 40, 0, 0, 310, 312, 3, 24, 12, 0, 311, 292, 1, 0, 0, 0, 311, 305, 
		    1, 0, 0, 0, 311, 309, 1, 0, 0, 0, 312, 49, 1, 0, 0, 0, 313, 317, 3, 
		    16, 8, 0, 314, 317, 3, 28, 14, 0, 315, 317, 3, 34, 17, 0, 316, 313, 
		    1, 0, 0, 0, 316, 314, 1, 0, 0, 0, 316, 315, 1, 0, 0, 0, 317, 51, 1, 
		    0, 0, 0, 318, 321, 3, 28, 14, 0, 319, 321, 3, 34, 17, 0, 320, 318, 
		    1, 0, 0, 0, 320, 319, 1, 0, 0, 0, 321, 53, 1, 0, 0, 0, 322, 324, 5, 
		    43, 0, 0, 323, 325, 3, 20, 10, 0, 324, 323, 1, 0, 0, 0, 324, 325, 
		    1, 0, 0, 0, 325, 55, 1, 0, 0, 0, 326, 327, 3, 58, 29, 0, 327, 57, 
		    1, 0, 0, 0, 328, 329, 3, 60, 30, 0, 329, 59, 1, 0, 0, 0, 330, 335, 
		    3, 62, 31, 0, 331, 332, 5, 55, 0, 0, 332, 334, 3, 62, 31, 0, 333, 
		    331, 1, 0, 0, 0, 334, 337, 1, 0, 0, 0, 335, 333, 1, 0, 0, 0, 335, 
		    336, 1, 0, 0, 0, 336, 61, 1, 0, 0, 0, 337, 335, 1, 0, 0, 0, 338, 343, 
		    3, 64, 32, 0, 339, 340, 5, 54, 0, 0, 340, 342, 3, 64, 32, 0, 341, 
		    339, 1, 0, 0, 0, 342, 345, 1, 0, 0, 0, 343, 341, 1, 0, 0, 0, 343, 
		    344, 1, 0, 0, 0, 344, 63, 1, 0, 0, 0, 345, 343, 1, 0, 0, 0, 346, 351, 
		    3, 66, 33, 0, 347, 348, 5, 53, 0, 0, 348, 350, 3, 66, 33, 0, 349, 
		    347, 1, 0, 0, 0, 350, 353, 1, 0, 0, 0, 351, 349, 1, 0, 0, 0, 351, 
		    352, 1, 0, 0, 0, 352, 65, 1, 0, 0, 0, 353, 351, 1, 0, 0, 0, 354, 359, 
		    3, 68, 34, 0, 355, 356, 7, 1, 0, 0, 356, 358, 3, 68, 34, 0, 357, 355, 
		    1, 0, 0, 0, 358, 361, 1, 0, 0, 0, 359, 357, 1, 0, 0, 0, 359, 360, 
		    1, 0, 0, 0, 360, 67, 1, 0, 0, 0, 361, 359, 1, 0, 0, 0, 362, 367, 3, 
		    70, 35, 0, 363, 364, 7, 2, 0, 0, 364, 366, 3, 70, 35, 0, 365, 363, 
		    1, 0, 0, 0, 366, 369, 1, 0, 0, 0, 367, 365, 1, 0, 0, 0, 367, 368, 
		    1, 0, 0, 0, 368, 69, 1, 0, 0, 0, 369, 367, 1, 0, 0, 0, 370, 375, 3, 
		    72, 36, 0, 371, 372, 7, 3, 0, 0, 372, 374, 3, 72, 36, 0, 373, 371, 
		    1, 0, 0, 0, 374, 377, 1, 0, 0, 0, 375, 373, 1, 0, 0, 0, 375, 376, 
		    1, 0, 0, 0, 376, 71, 1, 0, 0, 0, 377, 375, 1, 0, 0, 0, 378, 383, 3, 
		    74, 37, 0, 379, 380, 7, 4, 0, 0, 380, 382, 3, 74, 37, 0, 381, 379, 
		    1, 0, 0, 0, 382, 385, 1, 0, 0, 0, 383, 381, 1, 0, 0, 0, 383, 384, 
		    1, 0, 0, 0, 384, 73, 1, 0, 0, 0, 385, 383, 1, 0, 0, 0, 386, 387, 5, 
		    29, 0, 0, 387, 396, 3, 74, 37, 0, 388, 389, 5, 26, 0, 0, 389, 396, 
		    3, 74, 37, 0, 390, 391, 5, 30, 0, 0, 391, 396, 5, 60, 0, 0, 392, 393, 
		    5, 4, 0, 0, 393, 396, 5, 60, 0, 0, 394, 396, 3, 76, 38, 0, 395, 386, 
		    1, 0, 0, 0, 395, 388, 1, 0, 0, 0, 395, 390, 1, 0, 0, 0, 395, 392, 
		    1, 0, 0, 0, 395, 394, 1, 0, 0, 0, 396, 75, 1, 0, 0, 0, 397, 439, 5, 
		    56, 0, 0, 398, 439, 5, 57, 0, 0, 399, 439, 5, 58, 0, 0, 400, 439, 
		    5, 59, 0, 0, 401, 439, 5, 44, 0, 0, 402, 439, 5, 45, 0, 0, 403, 439, 
		    5, 46, 0, 0, 404, 405, 7, 5, 0, 0, 405, 406, 5, 1, 0, 0, 406, 407, 
		    3, 58, 29, 0, 407, 408, 5, 2, 0, 0, 408, 439, 1, 0, 0, 0, 409, 410, 
		    5, 60, 0, 0, 410, 411, 5, 31, 0, 0, 411, 412, 5, 60, 0, 0, 412, 414, 
		    5, 1, 0, 0, 413, 415, 3, 84, 42, 0, 414, 413, 1, 0, 0, 0, 414, 415, 
		    1, 0, 0, 0, 415, 416, 1, 0, 0, 0, 416, 439, 5, 2, 0, 0, 417, 418, 
		    5, 60, 0, 0, 418, 420, 5, 1, 0, 0, 419, 421, 3, 84, 42, 0, 420, 419, 
		    1, 0, 0, 0, 420, 421, 1, 0, 0, 0, 421, 422, 1, 0, 0, 0, 422, 439, 
		    5, 2, 0, 0, 423, 428, 5, 60, 0, 0, 424, 425, 5, 7, 0, 0, 425, 426, 
		    3, 58, 29, 0, 426, 427, 5, 8, 0, 0, 427, 429, 1, 0, 0, 0, 428, 424, 
		    1, 0, 0, 0, 429, 430, 1, 0, 0, 0, 430, 428, 1, 0, 0, 0, 430, 431, 
		    1, 0, 0, 0, 431, 439, 1, 0, 0, 0, 432, 439, 5, 60, 0, 0, 433, 434, 
		    5, 1, 0, 0, 434, 435, 3, 58, 29, 0, 435, 436, 5, 2, 0, 0, 436, 439, 
		    1, 0, 0, 0, 437, 439, 3, 78, 39, 0, 438, 397, 1, 0, 0, 0, 438, 398, 
		    1, 0, 0, 0, 438, 399, 1, 0, 0, 0, 438, 400, 1, 0, 0, 0, 438, 401, 
		    1, 0, 0, 0, 438, 402, 1, 0, 0, 0, 438, 403, 1, 0, 0, 0, 438, 404, 
		    1, 0, 0, 0, 438, 409, 1, 0, 0, 0, 438, 417, 1, 0, 0, 0, 438, 423, 
		    1, 0, 0, 0, 438, 432, 1, 0, 0, 0, 438, 433, 1, 0, 0, 0, 438, 437, 
		    1, 0, 0, 0, 439, 77, 1, 0, 0, 0, 440, 442, 3, 22, 11, 0, 441, 440, 
		    1, 0, 0, 0, 442, 443, 1, 0, 0, 0, 443, 441, 1, 0, 0, 0, 443, 444, 
		    1, 0, 0, 0, 444, 445, 1, 0, 0, 0, 445, 446, 3, 88, 44, 0, 446, 448, 
		    5, 9, 0, 0, 447, 449, 3, 80, 40, 0, 448, 447, 1, 0, 0, 0, 448, 449, 
		    1, 0, 0, 0, 449, 450, 1, 0, 0, 0, 450, 451, 5, 10, 0, 0, 451, 79, 
		    1, 0, 0, 0, 452, 457, 3, 58, 29, 0, 453, 454, 5, 3, 0, 0, 454, 456, 
		    3, 58, 29, 0, 455, 453, 1, 0, 0, 0, 456, 459, 1, 0, 0, 0, 457, 455, 
		    1, 0, 0, 0, 457, 458, 1, 0, 0, 0, 458, 461, 1, 0, 0, 0, 459, 457, 
		    1, 0, 0, 0, 460, 462, 5, 3, 0, 0, 461, 460, 1, 0, 0, 0, 461, 462, 
		    1, 0, 0, 0, 462, 475, 1, 0, 0, 0, 463, 468, 3, 82, 41, 0, 464, 465, 
		    5, 3, 0, 0, 465, 467, 3, 82, 41, 0, 466, 464, 1, 0, 0, 0, 467, 470, 
		    1, 0, 0, 0, 468, 466, 1, 0, 0, 0, 468, 469, 1, 0, 0, 0, 469, 472, 
		    1, 0, 0, 0, 470, 468, 1, 0, 0, 0, 471, 473, 5, 3, 0, 0, 472, 471, 
		    1, 0, 0, 0, 472, 473, 1, 0, 0, 0, 473, 475, 1, 0, 0, 0, 474, 452, 
		    1, 0, 0, 0, 474, 463, 1, 0, 0, 0, 475, 81, 1, 0, 0, 0, 476, 477, 5, 
		    9, 0, 0, 477, 482, 3, 58, 29, 0, 478, 479, 5, 3, 0, 0, 479, 481, 3, 
		    58, 29, 0, 480, 478, 1, 0, 0, 0, 481, 484, 1, 0, 0, 0, 482, 480, 1, 
		    0, 0, 0, 482, 483, 1, 0, 0, 0, 483, 486, 1, 0, 0, 0, 484, 482, 1, 
		    0, 0, 0, 485, 487, 5, 3, 0, 0, 486, 485, 1, 0, 0, 0, 486, 487, 1, 
		    0, 0, 0, 487, 488, 1, 0, 0, 0, 488, 489, 5, 10, 0, 0, 489, 505, 1, 
		    0, 0, 0, 490, 491, 5, 9, 0, 0, 491, 496, 3, 82, 41, 0, 492, 493, 5, 
		    3, 0, 0, 493, 495, 3, 82, 41, 0, 494, 492, 1, 0, 0, 0, 495, 498, 1, 
		    0, 0, 0, 496, 494, 1, 0, 0, 0, 496, 497, 1, 0, 0, 0, 497, 500, 1, 
		    0, 0, 0, 498, 496, 1, 0, 0, 0, 499, 501, 5, 3, 0, 0, 500, 499, 1, 
		    0, 0, 0, 500, 501, 1, 0, 0, 0, 501, 502, 1, 0, 0, 0, 502, 503, 5, 
		    10, 0, 0, 503, 505, 1, 0, 0, 0, 504, 476, 1, 0, 0, 0, 504, 490, 1, 
		    0, 0, 0, 505, 83, 1, 0, 0, 0, 506, 511, 3, 86, 43, 0, 507, 508, 5, 
		    3, 0, 0, 508, 510, 3, 86, 43, 0, 509, 507, 1, 0, 0, 0, 510, 513, 1, 
		    0, 0, 0, 511, 509, 1, 0, 0, 0, 511, 512, 1, 0, 0, 0, 512, 85, 1, 0, 
		    0, 0, 513, 511, 1, 0, 0, 0, 514, 518, 3, 58, 29, 0, 515, 516, 5, 30, 
		    0, 0, 516, 518, 5, 60, 0, 0, 517, 514, 1, 0, 0, 0, 517, 515, 1, 0, 
		    0, 0, 518, 87, 1, 0, 0, 0, 519, 535, 5, 47, 0, 0, 520, 535, 5, 48, 
		    0, 0, 521, 535, 5, 49, 0, 0, 522, 535, 5, 50, 0, 0, 523, 535, 5, 51, 
		    0, 0, 524, 535, 5, 52, 0, 0, 525, 527, 3, 22, 11, 0, 526, 525, 1, 
		    0, 0, 0, 527, 528, 1, 0, 0, 0, 528, 526, 1, 0, 0, 0, 528, 529, 1, 
		    0, 0, 0, 529, 530, 1, 0, 0, 0, 530, 531, 3, 88, 44, 0, 531, 535, 1, 
		    0, 0, 0, 532, 533, 5, 4, 0, 0, 533, 535, 3, 88, 44, 0, 534, 519, 1, 
		    0, 0, 0, 534, 520, 1, 0, 0, 0, 534, 521, 1, 0, 0, 0, 534, 522, 1, 
		    0, 0, 0, 534, 523, 1, 0, 0, 0, 534, 524, 1, 0, 0, 0, 534, 526, 1, 
		    0, 0, 0, 534, 532, 1, 0, 0, 0, 535, 89, 1, 0, 0, 0, 59, 93, 95, 104, 
		    108, 117, 122, 135, 139, 146, 152, 159, 176, 184, 195, 213, 227, 231, 
		    239, 247, 251, 267, 271, 281, 289, 294, 298, 302, 311, 316, 320, 324, 
		    335, 343, 351, 359, 367, 375, 383, 395, 414, 420, 430, 438, 443, 448, 
		    457, 461, 468, 472, 474, 482, 486, 496, 500, 504, 511, 517, 528, 534];
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
		        $this->setState(95);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 30064771072) !== 0)) {
		        	$this->setState(93);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::FUNC:
		        	    	$this->setState(90);
		        	    	$this->functionDeclaration();
		        	    	break;

		        	    case self::VAR:
		        	    	$this->setState(91);
		        	    	$this->varDeclaration();
		        	    	break;

		        	    case self::CONST:
		        	    	$this->setState(92);
		        	    	$this->constDeclaration();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(97);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(98);
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
		        $this->setState(100);
		        $this->match(self::FUNC);
		        $this->setState(101);
		        $this->match(self::ID);
		        $this->setState(102);
		        $this->match(self::T__0);
		        $this->setState(104);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(103);
		        	$this->params();
		        }
		        $this->setState(106);
		        $this->match(self::T__1);
		        $this->setState(108);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8866461766385810) !== 0)) {
		        	$this->setState(107);
		        	$this->returnType();
		        }
		        $this->setState(110);
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
		        $this->setState(112);
		        $this->param();
		        $this->setState(117);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(113);
		        	$this->match(self::T__2);
		        	$this->setState(114);
		        	$this->param();
		        	$this->setState(119);
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
		        $this->setState(120);
		        $this->match(self::ID);
		        $this->setState(122);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		            case 1:
		        	    $this->setState(121);
		        	    $this->pointerMark();
		        	break;
		        }
		        $this->setState(124);
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
		        $this->setState(126);
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
		        $this->setState(139);
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
		            	$this->setState(128);
		            	$this->type();
		            	break;

		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(129);
		            	$this->match(self::T__0);
		            	$this->setState(130);
		            	$this->type();
		            	$this->setState(133); 
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	do {
		            		$this->setState(131);
		            		$this->match(self::T__2);
		            		$this->setState(132);
		            		$this->type();
		            		$this->setState(135); 
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	} while ($_la === self::T__2);
		            	$this->setState(137);
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
		        $this->setState(159);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(141);
		        	    $this->match(self::VAR);
		        	    $this->setState(142);
		        	    $this->idList();
		        	    $this->setState(146);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(143);
		        	    		$this->arrayDimension(); 
		        	    	}

		        	    	$this->setState(148);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);
		        	    }
		        	    $this->setState(149);
		        	    $this->type();
		        	    $this->setState(152);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__4) {
		        	    	$this->setState(150);
		        	    	$this->match(self::T__4);
		        	    	$this->setState(151);
		        	    	$this->exprList();
		        	    }
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(154);
		        	    $this->match(self::VAR);
		        	    $this->setState(155);
		        	    $this->idList();
		        	    $this->setState(156);
		        	    $this->match(self::T__4);
		        	    $this->setState(157);
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
		public function constDeclaration(): Context\ConstDeclarationContext
		{
		    $localContext = new Context\ConstDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_constDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(161);
		        $this->match(self::CONST);
		        $this->setState(162);
		        $this->match(self::ID);
		        $this->setState(163);
		        $this->type();
		        $this->setState(164);
		        $this->match(self::T__4);
		        $this->setState(165);
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
		        $this->setState(167);
		        $this->idList();
		        $this->setState(168);
		        $this->match(self::T__5);
		        $this->setState(169);
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
		        $this->setState(171);
		        $this->match(self::ID);
		        $this->setState(176);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(172);
		        	$this->match(self::T__2);
		        	$this->setState(173);
		        	$this->match(self::ID);
		        	$this->setState(178);
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
		        $this->setState(179);
		        $this->expr();
		        $this->setState(184);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(180);
		        	$this->match(self::T__2);
		        	$this->setState(181);
		        	$this->expr();
		        	$this->setState(186);
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
		        $this->setState(187);
		        $this->match(self::T__6);
		        $this->setState(188);
		        $this->expr();
		        $this->setState(189);
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
		        $this->setState(191);
		        $this->match(self::T__8);
		        $this->setState(195);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242791701280195218) !== 0)) {
		        	$this->setState(192);
		        	$this->stmt();
		        	$this->setState(197);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(198);
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
		        $this->setState(213);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(200);
		        	    $this->varDeclaration();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(201);
		        	    $this->constDeclaration();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(202);
		        	    $this->shortVarDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(203);
		        	    $this->assignStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(204);
		        	    $this->incDecStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(205);
		        	    $this->ifStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(206);
		        	    $this->switchStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(207);
		        	    $this->forStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(208);
		        	    $this->match(self::BREAK);
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(209);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(210);
		        	    $this->returnStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(211);
		        	    $this->exprStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(212);
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
		        $this->setState(215);
		        $this->leftValue();
		        $this->setState(216);
		        $this->assignOp();
		        $this->setState(217);
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
		        $this->setState(231);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LValueIdContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(219);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $localContext = new Context\LValueArrayContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(220);
		        	    $this->match(self::ID);
		        	    $this->setState(225); 
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    do {
		        	    	$this->setState(221);
		        	    	$this->match(self::T__6);
		        	    	$this->setState(222);
		        	    	$this->expr();
		        	    	$this->setState(223);
		        	    	$this->match(self::T__7);
		        	    	$this->setState(227); 
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    } while ($_la === self::T__6);
		        	break;

		        	case 3:
		        	    $localContext = new Context\LValuePointerContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(229);
		        	    $this->match(self::T__3);
		        	    $this->setState(230);
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
		        $this->setState(233);

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
		        $this->setState(239);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\IncStmtContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(235);
		        	    $this->match(self::ID);
		        	    $this->setState(236);
		        	    $this->match(self::T__14);
		        	break;

		        	case 2:
		        	    $localContext = new Context\DecStmtContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(237);
		        	    $this->match(self::ID);
		        	    $this->setState(238);
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
		        $this->setState(241);
		        $this->match(self::IF);
		        $this->setState(242);
		        $this->expr();
		        $this->setState(243);
		        $this->block();
		        $this->setState(247);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(244);
		        		$this->elseIfClause(); 
		        	}

		        	$this->setState(249);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);
		        }
		        $this->setState(251);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(250);
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
		        $this->setState(253);
		        $this->match(self::ELSE);
		        $this->setState(254);
		        $this->match(self::IF);
		        $this->setState(255);
		        $this->expr();
		        $this->setState(256);
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
		        $this->setState(258);
		        $this->match(self::ELSE);
		        $this->setState(259);
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
		        $this->setState(261);
		        $this->match(self::SWITCH);
		        $this->setState(262);
		        $this->expr();
		        $this->setState(263);
		        $this->match(self::T__8);
		        $this->setState(267);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE) {
		        	$this->setState(264);
		        	$this->caseClause();
		        	$this->setState(269);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(271);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(270);
		        	$this->defaultClause();
		        }
		        $this->setState(273);
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
		        $this->setState(275);
		        $this->match(self::CASE);
		        $this->setState(276);
		        $this->exprList();
		        $this->setState(277);
		        $this->match(self::T__16);
		        $this->setState(281);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242791701280195218) !== 0)) {
		        	$this->setState(278);
		        	$this->stmt();
		        	$this->setState(283);
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
		        $this->setState(284);
		        $this->match(self::DEFAULT);
		        $this->setState(285);
		        $this->match(self::T__16);
		        $this->setState(289);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242791701280195218) !== 0)) {
		        	$this->setState(286);
		        	$this->stmt();
		        	$this->setState(291);
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
		        $this->setState(311);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ForClassicContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(292);
		        	    $this->match(self::FOR);
		        	    $this->setState(294);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(293);
		        	    	$this->forInit();
		        	    }
		        	    $this->setState(296);
		        	    $this->match(self::T__17);
		        	    $this->setState(298);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242775023922184338) !== 0)) {
		        	    	$this->setState(297);
		        	    	$this->expr();
		        	    }
		        	    $this->setState(300);
		        	    $this->match(self::T__17);
		        	    $this->setState(302);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(301);
		        	    	$this->forPost();
		        	    }
		        	    $this->setState(304);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ForConditionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(305);
		        	    $this->match(self::FOR);
		        	    $this->setState(306);
		        	    $this->expr();
		        	    $this->setState(307);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ForForeverContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(309);
		        	    $this->match(self::FOR);
		        	    $this->setState(310);
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
		        $this->setState(316);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(313);
		        	    $this->shortVarDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(314);
		        	    $this->assignStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(315);
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
		        $this->setState(320);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(318);
		        	    $this->assignStmt();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(319);
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
		        $this->setState(322);
		        $this->match(self::RETURN);
		        $this->setState(324);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
		            case 1:
		        	    $this->setState(323);
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
		        $this->setState(326);
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
		        $this->setState(328);
		        $this->composeExpr();
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
		public function composeExpr(): Context\ComposeExprContext
		{
		    $localContext = new Context\ComposeExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_composeExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(330);
		        $this->orExpr();
		        $this->setState(335);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::PIPE) {
		        	$this->setState(331);
		        	$this->match(self::PIPE);
		        	$this->setState(332);
		        	$this->orExpr();
		        	$this->setState(337);
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
		public function orExpr(): Context\OrExprContext
		{
		    $localContext = new Context\OrExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_orExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(338);
		        $this->andExpr();
		        $this->setState(343);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::OR) {
		        	$this->setState(339);
		        	$this->match(self::OR);
		        	$this->setState(340);
		        	$this->andExpr();
		        	$this->setState(345);
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

		    $this->enterRule($localContext, 64, self::RULE_andExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(346);
		        $this->eqExpr();
		        $this->setState(351);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::AND) {
		        	$this->setState(347);
		        	$this->match(self::AND);
		        	$this->setState(348);
		        	$this->eqExpr();
		        	$this->setState(353);
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

		    $this->enterRule($localContext, 66, self::RULE_eqExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(354);
		        $this->relExpr();
		        $this->setState(359);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__18 || $_la === self::T__19) {
		        	$this->setState(355);

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
		        	$this->setState(356);
		        	$this->relExpr();
		        	$this->setState(361);
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

		    $this->enterRule($localContext, 68, self::RULE_relExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(362);
		        $this->addExpr();
		        $this->setState(367);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 31457280) !== 0)) {
		        	$this->setState(363);

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
		        	$this->setState(364);
		        	$this->addExpr();
		        	$this->setState(369);
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

		    $this->enterRule($localContext, 70, self::RULE_addExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(370);
		        $this->mulExpr();
		        $this->setState(375);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 36, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(371);

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
		        		$this->setState(372);
		        		$this->mulExpr(); 
		        	}

		        	$this->setState(377);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 36, $this->ctx);
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

		    $this->enterRule($localContext, 72, self::RULE_mulExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(378);
		        $this->unaryExpr();
		        $this->setState(383);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 37, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(379);

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
		        		$this->setState(380);
		        		$this->unaryExpr(); 
		        	}

		        	$this->setState(385);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 37, $this->ctx);
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

		    $this->enterRule($localContext, 74, self::RULE_unaryExpr);

		    try {
		        $this->setState(395);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__28:
		            	$localContext = new Context\NotExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(386);
		            	$this->match(self::T__28);
		            	$this->setState(387);
		            	$this->unaryExpr();
		            	break;

		            case self::T__25:
		            	$localContext = new Context\NegExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(388);
		            	$this->match(self::T__25);
		            	$this->setState(389);
		            	$this->unaryExpr();
		            	break;

		            case self::T__29:
		            	$localContext = new Context\AddrExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(390);
		            	$this->match(self::T__29);
		            	$this->setState(391);
		            	$this->match(self::ID);
		            	break;

		            case self::T__3:
		            	$localContext = new Context\DerefExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(392);
		            	$this->match(self::T__3);
		            	$this->setState(393);
		            	$this->match(self::ID);
		            	break;

		            case self::T__0:
		            case self::T__6:
		            case self::TRUE:
		            case self::FALSE:
		            case self::NIL:
		            case self::INT32_T:
		            case self::INT_T:
		            case self::FLOAT32_T:
		            case self::BOOL_T:
		            case self::RUNE_T:
		            case self::STRING_T:
		            case self::FLOAT_LIT:
		            case self::INT_LIT:
		            case self::RUNE_LIT:
		            case self::STRING_LIT:
		            case self::ID:
		            	$localContext = new Context\AtomExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(394);
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

		    $this->enterRule($localContext, 76, self::RULE_atom);

		    try {
		        $this->setState(438);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 42, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FloatAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(397);
		        	    $this->match(self::FLOAT_LIT);
		        	break;

		        	case 2:
		        	    $localContext = new Context\IntAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(398);
		        	    $this->match(self::INT_LIT);
		        	break;

		        	case 3:
		        	    $localContext = new Context\RuneAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(399);
		        	    $this->match(self::RUNE_LIT);
		        	break;

		        	case 4:
		        	    $localContext = new Context\StringAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(400);
		        	    $this->match(self::STRING_LIT);
		        	break;

		        	case 5:
		        	    $localContext = new Context\TrueAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(401);
		        	    $this->match(self::TRUE);
		        	break;

		        	case 6:
		        	    $localContext = new Context\FalseAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(402);
		        	    $this->match(self::FALSE);
		        	break;

		        	case 7:
		        	    $localContext = new Context\NilAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(403);
		        	    $this->match(self::NIL);
		        	break;

		        	case 8:
		        	    $localContext = new Context\CastAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(404);

		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8866461766385664) !== 0))) {
		        	    $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(405);
		        	    $this->match(self::T__0);
		        	    $this->setState(406);
		        	    $this->expr();
		        	    $this->setState(407);
		        	    $this->match(self::T__1);
		        	break;

		        	case 9:
		        	    $localContext = new Context\MethodAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(409);
		        	    $this->match(self::ID);
		        	    $this->setState(410);
		        	    $this->match(self::T__30);
		        	    $this->setState(411);
		        	    $this->match(self::ID);
		        	    $this->setState(412);
		        	    $this->match(self::T__0);
		        	    $this->setState(414);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242775023922184338) !== 0)) {
		        	    	$this->setState(413);
		        	    	$this->argList();
		        	    }
		        	    $this->setState(416);
		        	    $this->match(self::T__1);
		        	break;

		        	case 10:
		        	    $localContext = new Context\CallAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(417);
		        	    $this->match(self::ID);
		        	    $this->setState(418);
		        	    $this->match(self::T__0);
		        	    $this->setState(420);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242775023922184338) !== 0)) {
		        	    	$this->setState(419);
		        	    	$this->argList();
		        	    }
		        	    $this->setState(422);
		        	    $this->match(self::T__1);
		        	break;

		        	case 11:
		        	    $localContext = new Context\IndexAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(423);
		        	    $this->match(self::ID);
		        	    $this->setState(428); 
		        	    $this->errorHandler->sync($this);

		        	    $alt = 1;

		        	    do {
		        	    	switch ($alt) {
		        	    	case 1:
		        	    		$this->setState(424);
		        	    		$this->match(self::T__6);
		        	    		$this->setState(425);
		        	    		$this->expr();
		        	    		$this->setState(426);
		        	    		$this->match(self::T__7);
		        	    		break;
		        	    	default:
		        	    		throw new NoViableAltException($this);
		        	    	}

		        	    	$this->setState(430); 
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);
		        	    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        	break;

		        	case 12:
		        	    $localContext = new Context\IdAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(432);
		        	    $this->match(self::ID);
		        	break;

		        	case 13:
		        	    $localContext = new Context\ParenAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(433);
		        	    $this->match(self::T__0);
		        	    $this->setState(434);
		        	    $this->expr();
		        	    $this->setState(435);
		        	    $this->match(self::T__1);
		        	break;

		        	case 14:
		        	    $localContext = new Context\ArrayAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(437);
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

		    $this->enterRule($localContext, 78, self::RULE_arrayLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(441); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(440);
		        		$this->arrayDimension();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(443); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 43, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        $this->setState(445);
		        $this->type();
		        $this->setState(446);
		        $this->match(self::T__8);
		        $this->setState(448);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2242775023922184850) !== 0)) {
		        	$this->setState(447);
		        	$this->arrayInitList();
		        }
		        $this->setState(450);
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

		    $this->enterRule($localContext, 80, self::RULE_arrayInitList);

		    try {
		        $this->setState(474);
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
		            case self::INT32_T:
		            case self::INT_T:
		            case self::FLOAT32_T:
		            case self::BOOL_T:
		            case self::RUNE_T:
		            case self::STRING_T:
		            case self::FLOAT_LIT:
		            case self::INT_LIT:
		            case self::RUNE_LIT:
		            case self::STRING_LIT:
		            case self::ID:
		            	$localContext = new Context\FlatInitContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(452);
		            	$this->expr();
		            	$this->setState(457);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(453);
		            			$this->match(self::T__2);
		            			$this->setState(454);
		            			$this->expr(); 
		            		}

		            		$this->setState(459);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx);
		            	}
		            	$this->setState(461);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__2) {
		            		$this->setState(460);
		            		$this->match(self::T__2);
		            	}
		            	break;

		            case self::T__8:
		            	$localContext = new Context\NestedInitListContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(463);
		            	$this->nestedInit();
		            	$this->setState(468);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 47, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(464);
		            			$this->match(self::T__2);
		            			$this->setState(465);
		            			$this->nestedInit(); 
		            		}

		            		$this->setState(470);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 47, $this->ctx);
		            	}
		            	$this->setState(472);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__2) {
		            		$this->setState(471);
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

		    $this->enterRule($localContext, 82, self::RULE_nestedInit);

		    try {
		        $this->setState(504);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 54, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(476);
		        	    $this->match(self::T__8);
		        	    $this->setState(477);
		        	    $this->expr();
		        	    $this->setState(482);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 50, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(478);
		        	    		$this->match(self::T__2);
		        	    		$this->setState(479);
		        	    		$this->expr(); 
		        	    	}

		        	    	$this->setState(484);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 50, $this->ctx);
		        	    }
		        	    $this->setState(486);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__2) {
		        	    	$this->setState(485);
		        	    	$this->match(self::T__2);
		        	    }
		        	    $this->setState(488);
		        	    $this->match(self::T__9);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(490);
		        	    $this->match(self::T__8);
		        	    $this->setState(491);
		        	    $this->nestedInit();
		        	    $this->setState(496);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 52, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(492);
		        	    		$this->match(self::T__2);
		        	    		$this->setState(493);
		        	    		$this->nestedInit(); 
		        	    	}

		        	    	$this->setState(498);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 52, $this->ctx);
		        	    }
		        	    $this->setState(500);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__2) {
		        	    	$this->setState(499);
		        	    	$this->match(self::T__2);
		        	    }
		        	    $this->setState(502);
		        	    $this->match(self::T__9);
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
		public function argList(): Context\ArgListContext
		{
		    $localContext = new Context\ArgListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_argList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(506);
		        $this->arg();
		        $this->setState(511);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(507);
		        	$this->match(self::T__2);
		        	$this->setState(508);
		        	$this->arg();
		        	$this->setState(513);
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

		    $this->enterRule($localContext, 86, self::RULE_arg);

		    try {
		        $this->setState(517);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 56, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ValArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(514);
		        	    $this->expr();
		        	break;

		        	case 2:
		        	    $localContext = new Context\RefArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(515);
		        	    $this->match(self::T__29);
		        	    $this->setState(516);
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

		    $this->enterRule($localContext, 88, self::RULE_type);

		    try {
		        $this->setState(534);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT32_T:
		            	$localContext = new Context\TInt32Context($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(519);
		            	$this->match(self::INT32_T);
		            	break;

		            case self::INT_T:
		            	$localContext = new Context\TIntContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(520);
		            	$this->match(self::INT_T);
		            	break;

		            case self::FLOAT32_T:
		            	$localContext = new Context\TFloat32Context($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(521);
		            	$this->match(self::FLOAT32_T);
		            	break;

		            case self::BOOL_T:
		            	$localContext = new Context\TBoolContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(522);
		            	$this->match(self::BOOL_T);
		            	break;

		            case self::RUNE_T:
		            	$localContext = new Context\TRuneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(523);
		            	$this->match(self::RUNE_T);
		            	break;

		            case self::STRING_T:
		            	$localContext = new Context\TStringContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(524);
		            	$this->match(self::STRING_T);
		            	break;

		            case self::T__6:
		            	$localContext = new Context\TArrayContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(526); 
		            	$this->errorHandler->sync($this);

		            	$alt = 1;

		            	do {
		            		switch ($alt) {
		            		case 1:
		            			$this->setState(525);
		            			$this->arrayDimension();
		            			break;
		            		default:
		            			throw new NoViableAltException($this);
		            		}

		            		$this->setState(528); 
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 57, $this->ctx);
		            	} while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		            	$this->setState(530);
		            	$this->type();
		            	break;

		            case self::T__3:
		            	$localContext = new Context\TPointerContext($localContext);
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(532);
		            	$this->match(self::T__3);
		            	$this->setState(533);
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

	    public function composeExpr(): ?ComposeExprContext
	    {
	    	return $this->getTypedRuleContext(ComposeExprContext::class, 0);
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

	class ComposeExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_composeExpr;
	    }

	    /**
	     * @return array<OrExprContext>|OrExprContext|null
	     */
	    public function orExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(OrExprContext::class);
	    	}

	        return $this->getTypedRuleContext(OrExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function PIPE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::PIPE);
	    	}

	        return $this->getToken(GolampiParser::PIPE, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterComposeExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitComposeExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitComposeExpr($this);
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

	class CastAtomContext extends AtomContext
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

	    public function INT32_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT32_T, 0);
	    }

	    public function INT_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT_T, 0);
	    }

	    public function FLOAT32_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT32_T, 0);
	    }

	    public function BOOL_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BOOL_T, 0);
	    }

	    public function RUNE_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE_T, 0);
	    }

	    public function STRING_T(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterCastAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitCastAtom($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCastAtom($this);
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