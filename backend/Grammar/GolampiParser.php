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
               RULE_exprStmt = 28, RULE_expr = 29, RULE_atom = 30, RULE_arrayLiteral = 31, 
               RULE_arrayInitList = 32, RULE_nestedInit = 33, RULE_argList = 34, 
               RULE_arg = 35, RULE_type = 36;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'functionDeclaration', 'params', 'param', 'pointerMark', 'returnType', 
			'varDeclaration', 'constDeclaration', 'shortVarDecl', 'idList', 'exprList', 
			'arrayDimension', 'block', 'stmt', 'assignStmt', 'leftValue', 'assignOp', 
			'incDecStmt', 'ifStmt', 'elseIfClause', 'elseClause', 'switchStmt', 'caseClause', 
			'defaultClause', 'forStmt', 'forInit', 'forPost', 'returnStmt', 'exprStmt', 
			'expr', 'atom', 'arrayLiteral', 'arrayInitList', 'nestedInit', 'argList', 
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
			[4, 1, 62, 459, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 1, 0, 1, 0, 1, 0, 5, 
		    0, 78, 8, 0, 10, 0, 12, 0, 81, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 
		    1, 1, 3, 1, 89, 8, 1, 1, 1, 1, 1, 3, 1, 93, 8, 1, 1, 1, 1, 1, 1, 2, 
		    1, 2, 1, 2, 5, 2, 100, 8, 2, 10, 2, 12, 2, 103, 9, 2, 1, 3, 1, 3, 
		    3, 3, 107, 8, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 
		    5, 4, 5, 118, 8, 5, 11, 5, 12, 5, 119, 1, 5, 1, 5, 3, 5, 124, 8, 5, 
		    1, 6, 1, 6, 1, 6, 5, 6, 129, 8, 6, 10, 6, 12, 6, 132, 9, 6, 1, 6, 
		    1, 6, 1, 6, 3, 6, 137, 8, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 5, 9, 152, 8, 9, 10, 9, 12, 
		    9, 155, 9, 9, 1, 10, 1, 10, 1, 10, 5, 10, 160, 8, 10, 10, 10, 12, 
		    10, 163, 9, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 12, 1, 12, 5, 12, 171, 
		    8, 12, 10, 12, 12, 12, 174, 9, 12, 1, 12, 1, 12, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 3, 13, 191, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 4, 15, 203, 8, 15, 11, 15, 12, 15, 204, 
		    1, 15, 1, 15, 3, 15, 209, 8, 15, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 
		    1, 17, 3, 17, 217, 8, 17, 1, 18, 1, 18, 1, 18, 1, 18, 5, 18, 223, 
		    8, 18, 10, 18, 12, 18, 226, 9, 18, 1, 18, 3, 18, 229, 8, 18, 1, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 1, 20, 1, 20, 1, 20, 1, 21, 1, 21, 1, 
		    21, 1, 21, 5, 21, 243, 8, 21, 10, 21, 12, 21, 246, 9, 21, 1, 21, 3, 
		    21, 249, 8, 21, 1, 21, 1, 21, 1, 22, 1, 22, 1, 22, 1, 22, 5, 22, 257, 
		    8, 22, 10, 22, 12, 22, 260, 9, 22, 1, 23, 1, 23, 1, 23, 5, 23, 265, 
		    8, 23, 10, 23, 12, 23, 268, 9, 23, 1, 24, 1, 24, 3, 24, 272, 8, 24, 
		    1, 24, 1, 24, 3, 24, 276, 8, 24, 1, 24, 1, 24, 3, 24, 280, 8, 24, 
		    1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 3, 24, 289, 8, 24, 
		    1, 25, 1, 25, 1, 25, 3, 25, 294, 8, 25, 1, 26, 1, 26, 3, 26, 298, 
		    8, 26, 1, 27, 1, 27, 3, 27, 302, 8, 27, 1, 28, 1, 28, 1, 29, 1, 29, 
		    1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 3, 29, 316, 
		    8, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 
		    29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 
		    5, 29, 336, 8, 29, 10, 29, 12, 29, 339, 9, 29, 1, 30, 1, 30, 1, 30, 
		    1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 3, 
		    30, 353, 8, 30, 1, 30, 1, 30, 1, 30, 1, 30, 3, 30, 359, 8, 30, 1, 
		    30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 4, 30, 367, 8, 30, 11, 30, 
		    12, 30, 368, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 3, 30, 377, 
		    8, 30, 1, 31, 4, 31, 380, 8, 31, 11, 31, 12, 31, 381, 1, 31, 1, 31, 
		    1, 31, 3, 31, 387, 8, 31, 1, 31, 1, 31, 1, 32, 1, 32, 1, 32, 5, 32, 
		    394, 8, 32, 10, 32, 12, 32, 397, 9, 32, 1, 32, 3, 32, 400, 8, 32, 
		    1, 32, 1, 32, 1, 32, 5, 32, 405, 8, 32, 10, 32, 12, 32, 408, 9, 32, 
		    1, 32, 3, 32, 411, 8, 32, 3, 32, 413, 8, 32, 1, 33, 1, 33, 1, 33, 
		    1, 33, 5, 33, 419, 8, 33, 10, 33, 12, 33, 422, 9, 33, 1, 33, 3, 33, 
		    425, 8, 33, 1, 33, 1, 33, 1, 34, 1, 34, 1, 34, 5, 34, 432, 8, 34, 
		    10, 34, 12, 34, 435, 9, 34, 1, 35, 1, 35, 1, 35, 3, 35, 440, 8, 35, 
		    1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 4, 36, 449, 8, 36, 
		    11, 36, 12, 36, 450, 1, 36, 1, 36, 1, 36, 1, 36, 3, 36, 457, 8, 36, 
		    1, 36, 0, 1, 58, 37, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 
		    26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 
		    60, 62, 64, 66, 68, 70, 72, 0, 5, 2, 0, 5, 5, 11, 14, 1, 0, 19, 20, 
		    1, 0, 21, 24, 1, 0, 25, 26, 2, 0, 4, 4, 27, 28, 510, 0, 79, 1, 0, 
		    0, 0, 2, 84, 1, 0, 0, 0, 4, 96, 1, 0, 0, 0, 6, 104, 1, 0, 0, 0, 8, 
		    110, 1, 0, 0, 0, 10, 123, 1, 0, 0, 0, 12, 125, 1, 0, 0, 0, 14, 138, 
		    1, 0, 0, 0, 16, 144, 1, 0, 0, 0, 18, 148, 1, 0, 0, 0, 20, 156, 1, 
		    0, 0, 0, 22, 164, 1, 0, 0, 0, 24, 168, 1, 0, 0, 0, 26, 190, 1, 0, 
		    0, 0, 28, 192, 1, 0, 0, 0, 30, 208, 1, 0, 0, 0, 32, 210, 1, 0, 0, 
		    0, 34, 216, 1, 0, 0, 0, 36, 218, 1, 0, 0, 0, 38, 230, 1, 0, 0, 0, 
		    40, 235, 1, 0, 0, 0, 42, 238, 1, 0, 0, 0, 44, 252, 1, 0, 0, 0, 46, 
		    261, 1, 0, 0, 0, 48, 288, 1, 0, 0, 0, 50, 293, 1, 0, 0, 0, 52, 297, 
		    1, 0, 0, 0, 54, 299, 1, 0, 0, 0, 56, 303, 1, 0, 0, 0, 58, 315, 1, 
		    0, 0, 0, 60, 376, 1, 0, 0, 0, 62, 379, 1, 0, 0, 0, 64, 412, 1, 0, 
		    0, 0, 66, 414, 1, 0, 0, 0, 68, 428, 1, 0, 0, 0, 70, 439, 1, 0, 0, 
		    0, 72, 456, 1, 0, 0, 0, 74, 78, 3, 2, 1, 0, 75, 78, 3, 12, 6, 0, 76, 
		    78, 3, 14, 7, 0, 77, 74, 1, 0, 0, 0, 77, 75, 1, 0, 0, 0, 77, 76, 1, 
		    0, 0, 0, 78, 81, 1, 0, 0, 0, 79, 77, 1, 0, 0, 0, 79, 80, 1, 0, 0, 
		    0, 80, 82, 1, 0, 0, 0, 81, 79, 1, 0, 0, 0, 82, 83, 5, 0, 0, 1, 83, 
		    1, 1, 0, 0, 0, 84, 85, 5, 34, 0, 0, 85, 86, 5, 59, 0, 0, 86, 88, 5, 
		    1, 0, 0, 87, 89, 3, 4, 2, 0, 88, 87, 1, 0, 0, 0, 88, 89, 1, 0, 0, 
		    0, 89, 90, 1, 0, 0, 0, 90, 92, 5, 2, 0, 0, 91, 93, 3, 10, 5, 0, 92, 
		    91, 1, 0, 0, 0, 92, 93, 1, 0, 0, 0, 93, 94, 1, 0, 0, 0, 94, 95, 3, 
		    24, 12, 0, 95, 3, 1, 0, 0, 0, 96, 101, 3, 6, 3, 0, 97, 98, 5, 3, 0, 
		    0, 98, 100, 3, 6, 3, 0, 99, 97, 1, 0, 0, 0, 100, 103, 1, 0, 0, 0, 
		    101, 99, 1, 0, 0, 0, 101, 102, 1, 0, 0, 0, 102, 5, 1, 0, 0, 0, 103, 
		    101, 1, 0, 0, 0, 104, 106, 5, 59, 0, 0, 105, 107, 3, 8, 4, 0, 106, 
		    105, 1, 0, 0, 0, 106, 107, 1, 0, 0, 0, 107, 108, 1, 0, 0, 0, 108, 
		    109, 3, 72, 36, 0, 109, 7, 1, 0, 0, 0, 110, 111, 5, 4, 0, 0, 111, 
		    9, 1, 0, 0, 0, 112, 124, 3, 72, 36, 0, 113, 114, 5, 1, 0, 0, 114, 
		    117, 3, 72, 36, 0, 115, 116, 5, 3, 0, 0, 116, 118, 3, 72, 36, 0, 117, 
		    115, 1, 0, 0, 0, 118, 119, 1, 0, 0, 0, 119, 117, 1, 0, 0, 0, 119, 
		    120, 1, 0, 0, 0, 120, 121, 1, 0, 0, 0, 121, 122, 5, 2, 0, 0, 122, 
		    124, 1, 0, 0, 0, 123, 112, 1, 0, 0, 0, 123, 113, 1, 0, 0, 0, 124, 
		    11, 1, 0, 0, 0, 125, 126, 5, 32, 0, 0, 126, 130, 3, 18, 9, 0, 127, 
		    129, 3, 22, 11, 0, 128, 127, 1, 0, 0, 0, 129, 132, 1, 0, 0, 0, 130, 
		    128, 1, 0, 0, 0, 130, 131, 1, 0, 0, 0, 131, 133, 1, 0, 0, 0, 132, 
		    130, 1, 0, 0, 0, 133, 136, 3, 72, 36, 0, 134, 135, 5, 5, 0, 0, 135, 
		    137, 3, 20, 10, 0, 136, 134, 1, 0, 0, 0, 136, 137, 1, 0, 0, 0, 137, 
		    13, 1, 0, 0, 0, 138, 139, 5, 33, 0, 0, 139, 140, 5, 59, 0, 0, 140, 
		    141, 3, 72, 36, 0, 141, 142, 5, 5, 0, 0, 142, 143, 3, 58, 29, 0, 143, 
		    15, 1, 0, 0, 0, 144, 145, 3, 18, 9, 0, 145, 146, 5, 6, 0, 0, 146, 
		    147, 3, 20, 10, 0, 147, 17, 1, 0, 0, 0, 148, 153, 5, 59, 0, 0, 149, 
		    150, 5, 3, 0, 0, 150, 152, 5, 59, 0, 0, 151, 149, 1, 0, 0, 0, 152, 
		    155, 1, 0, 0, 0, 153, 151, 1, 0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 
		    19, 1, 0, 0, 0, 155, 153, 1, 0, 0, 0, 156, 161, 3, 58, 29, 0, 157, 
		    158, 5, 3, 0, 0, 158, 160, 3, 58, 29, 0, 159, 157, 1, 0, 0, 0, 160, 
		    163, 1, 0, 0, 0, 161, 159, 1, 0, 0, 0, 161, 162, 1, 0, 0, 0, 162, 
		    21, 1, 0, 0, 0, 163, 161, 1, 0, 0, 0, 164, 165, 5, 7, 0, 0, 165, 166, 
		    3, 58, 29, 0, 166, 167, 5, 8, 0, 0, 167, 23, 1, 0, 0, 0, 168, 172, 
		    5, 9, 0, 0, 169, 171, 3, 26, 13, 0, 170, 169, 1, 0, 0, 0, 171, 174, 
		    1, 0, 0, 0, 172, 170, 1, 0, 0, 0, 172, 173, 1, 0, 0, 0, 173, 175, 
		    1, 0, 0, 0, 174, 172, 1, 0, 0, 0, 175, 176, 5, 10, 0, 0, 176, 25, 
		    1, 0, 0, 0, 177, 191, 3, 12, 6, 0, 178, 191, 3, 14, 7, 0, 179, 191, 
		    3, 16, 8, 0, 180, 191, 3, 28, 14, 0, 181, 191, 3, 34, 17, 0, 182, 
		    191, 3, 36, 18, 0, 183, 191, 3, 42, 21, 0, 184, 191, 3, 48, 24, 0, 
		    185, 191, 5, 41, 0, 0, 186, 191, 5, 42, 0, 0, 187, 191, 3, 54, 27, 
		    0, 188, 191, 3, 56, 28, 0, 189, 191, 3, 24, 12, 0, 190, 177, 1, 0, 
		    0, 0, 190, 178, 1, 0, 0, 0, 190, 179, 1, 0, 0, 0, 190, 180, 1, 0, 
		    0, 0, 190, 181, 1, 0, 0, 0, 190, 182, 1, 0, 0, 0, 190, 183, 1, 0, 
		    0, 0, 190, 184, 1, 0, 0, 0, 190, 185, 1, 0, 0, 0, 190, 186, 1, 0, 
		    0, 0, 190, 187, 1, 0, 0, 0, 190, 188, 1, 0, 0, 0, 190, 189, 1, 0, 
		    0, 0, 191, 27, 1, 0, 0, 0, 192, 193, 3, 30, 15, 0, 193, 194, 3, 32, 
		    16, 0, 194, 195, 3, 58, 29, 0, 195, 29, 1, 0, 0, 0, 196, 209, 5, 59, 
		    0, 0, 197, 202, 5, 59, 0, 0, 198, 199, 5, 7, 0, 0, 199, 200, 3, 58, 
		    29, 0, 200, 201, 5, 8, 0, 0, 201, 203, 1, 0, 0, 0, 202, 198, 1, 0, 
		    0, 0, 203, 204, 1, 0, 0, 0, 204, 202, 1, 0, 0, 0, 204, 205, 1, 0, 
		    0, 0, 205, 209, 1, 0, 0, 0, 206, 207, 5, 4, 0, 0, 207, 209, 5, 59, 
		    0, 0, 208, 196, 1, 0, 0, 0, 208, 197, 1, 0, 0, 0, 208, 206, 1, 0, 
		    0, 0, 209, 31, 1, 0, 0, 0, 210, 211, 7, 0, 0, 0, 211, 33, 1, 0, 0, 
		    0, 212, 213, 5, 59, 0, 0, 213, 217, 5, 15, 0, 0, 214, 215, 5, 59, 
		    0, 0, 215, 217, 5, 16, 0, 0, 216, 212, 1, 0, 0, 0, 216, 214, 1, 0, 
		    0, 0, 217, 35, 1, 0, 0, 0, 218, 219, 5, 35, 0, 0, 219, 220, 3, 58, 
		    29, 0, 220, 224, 3, 24, 12, 0, 221, 223, 3, 38, 19, 0, 222, 221, 1, 
		    0, 0, 0, 223, 226, 1, 0, 0, 0, 224, 222, 1, 0, 0, 0, 224, 225, 1, 
		    0, 0, 0, 225, 228, 1, 0, 0, 0, 226, 224, 1, 0, 0, 0, 227, 229, 3, 
		    40, 20, 0, 228, 227, 1, 0, 0, 0, 228, 229, 1, 0, 0, 0, 229, 37, 1, 
		    0, 0, 0, 230, 231, 5, 36, 0, 0, 231, 232, 5, 35, 0, 0, 232, 233, 3, 
		    58, 29, 0, 233, 234, 3, 24, 12, 0, 234, 39, 1, 0, 0, 0, 235, 236, 
		    5, 36, 0, 0, 236, 237, 3, 24, 12, 0, 237, 41, 1, 0, 0, 0, 238, 239, 
		    5, 37, 0, 0, 239, 240, 3, 58, 29, 0, 240, 244, 5, 9, 0, 0, 241, 243, 
		    3, 44, 22, 0, 242, 241, 1, 0, 0, 0, 243, 246, 1, 0, 0, 0, 244, 242, 
		    1, 0, 0, 0, 244, 245, 1, 0, 0, 0, 245, 248, 1, 0, 0, 0, 246, 244, 
		    1, 0, 0, 0, 247, 249, 3, 46, 23, 0, 248, 247, 1, 0, 0, 0, 248, 249, 
		    1, 0, 0, 0, 249, 250, 1, 0, 0, 0, 250, 251, 5, 10, 0, 0, 251, 43, 
		    1, 0, 0, 0, 252, 253, 5, 38, 0, 0, 253, 254, 3, 20, 10, 0, 254, 258, 
		    5, 17, 0, 0, 255, 257, 3, 26, 13, 0, 256, 255, 1, 0, 0, 0, 257, 260, 
		    1, 0, 0, 0, 258, 256, 1, 0, 0, 0, 258, 259, 1, 0, 0, 0, 259, 45, 1, 
		    0, 0, 0, 260, 258, 1, 0, 0, 0, 261, 262, 5, 39, 0, 0, 262, 266, 5, 
		    17, 0, 0, 263, 265, 3, 26, 13, 0, 264, 263, 1, 0, 0, 0, 265, 268, 
		    1, 0, 0, 0, 266, 264, 1, 0, 0, 0, 266, 267, 1, 0, 0, 0, 267, 47, 1, 
		    0, 0, 0, 268, 266, 1, 0, 0, 0, 269, 271, 5, 40, 0, 0, 270, 272, 3, 
		    50, 25, 0, 271, 270, 1, 0, 0, 0, 271, 272, 1, 0, 0, 0, 272, 273, 1, 
		    0, 0, 0, 273, 275, 5, 18, 0, 0, 274, 276, 3, 58, 29, 0, 275, 274, 
		    1, 0, 0, 0, 275, 276, 1, 0, 0, 0, 276, 277, 1, 0, 0, 0, 277, 279, 
		    5, 18, 0, 0, 278, 280, 3, 52, 26, 0, 279, 278, 1, 0, 0, 0, 279, 280, 
		    1, 0, 0, 0, 280, 281, 1, 0, 0, 0, 281, 289, 3, 24, 12, 0, 282, 283, 
		    5, 40, 0, 0, 283, 284, 3, 58, 29, 0, 284, 285, 3, 24, 12, 0, 285, 
		    289, 1, 0, 0, 0, 286, 287, 5, 40, 0, 0, 287, 289, 3, 24, 12, 0, 288, 
		    269, 1, 0, 0, 0, 288, 282, 1, 0, 0, 0, 288, 286, 1, 0, 0, 0, 289, 
		    49, 1, 0, 0, 0, 290, 294, 3, 16, 8, 0, 291, 294, 3, 28, 14, 0, 292, 
		    294, 3, 34, 17, 0, 293, 290, 1, 0, 0, 0, 293, 291, 1, 0, 0, 0, 293, 
		    292, 1, 0, 0, 0, 294, 51, 1, 0, 0, 0, 295, 298, 3, 28, 14, 0, 296, 
		    298, 3, 34, 17, 0, 297, 295, 1, 0, 0, 0, 297, 296, 1, 0, 0, 0, 298, 
		    53, 1, 0, 0, 0, 299, 301, 5, 43, 0, 0, 300, 302, 3, 20, 10, 0, 301, 
		    300, 1, 0, 0, 0, 301, 302, 1, 0, 0, 0, 302, 55, 1, 0, 0, 0, 303, 304, 
		    3, 58, 29, 0, 304, 57, 1, 0, 0, 0, 305, 306, 6, 29, -1, 0, 306, 307, 
		    5, 29, 0, 0, 307, 316, 3, 58, 29, 5, 308, 309, 5, 26, 0, 0, 309, 316, 
		    3, 58, 29, 4, 310, 311, 5, 30, 0, 0, 311, 316, 5, 59, 0, 0, 312, 313, 
		    5, 4, 0, 0, 313, 316, 5, 59, 0, 0, 314, 316, 3, 60, 30, 0, 315, 305, 
		    1, 0, 0, 0, 315, 308, 1, 0, 0, 0, 315, 310, 1, 0, 0, 0, 315, 312, 
		    1, 0, 0, 0, 315, 314, 1, 0, 0, 0, 316, 337, 1, 0, 0, 0, 317, 318, 
		    10, 11, 0, 0, 318, 319, 5, 54, 0, 0, 319, 336, 3, 58, 29, 12, 320, 
		    321, 10, 10, 0, 0, 321, 322, 5, 53, 0, 0, 322, 336, 3, 58, 29, 11, 
		    323, 324, 10, 9, 0, 0, 324, 325, 7, 1, 0, 0, 325, 336, 3, 58, 29, 
		    10, 326, 327, 10, 8, 0, 0, 327, 328, 7, 2, 0, 0, 328, 336, 3, 58, 
		    29, 9, 329, 330, 10, 7, 0, 0, 330, 331, 7, 3, 0, 0, 331, 336, 3, 58, 
		    29, 8, 332, 333, 10, 6, 0, 0, 333, 334, 7, 4, 0, 0, 334, 336, 3, 58, 
		    29, 7, 335, 317, 1, 0, 0, 0, 335, 320, 1, 0, 0, 0, 335, 323, 1, 0, 
		    0, 0, 335, 326, 1, 0, 0, 0, 335, 329, 1, 0, 0, 0, 335, 332, 1, 0, 
		    0, 0, 336, 339, 1, 0, 0, 0, 337, 335, 1, 0, 0, 0, 337, 338, 1, 0, 
		    0, 0, 338, 59, 1, 0, 0, 0, 339, 337, 1, 0, 0, 0, 340, 377, 5, 55, 
		    0, 0, 341, 377, 5, 56, 0, 0, 342, 377, 5, 57, 0, 0, 343, 377, 5, 58, 
		    0, 0, 344, 377, 5, 44, 0, 0, 345, 377, 5, 45, 0, 0, 346, 377, 5, 46, 
		    0, 0, 347, 348, 5, 59, 0, 0, 348, 349, 5, 31, 0, 0, 349, 350, 5, 59, 
		    0, 0, 350, 352, 5, 1, 0, 0, 351, 353, 3, 68, 34, 0, 352, 351, 1, 0, 
		    0, 0, 352, 353, 1, 0, 0, 0, 353, 354, 1, 0, 0, 0, 354, 377, 5, 2, 
		    0, 0, 355, 356, 5, 59, 0, 0, 356, 358, 5, 1, 0, 0, 357, 359, 3, 68, 
		    34, 0, 358, 357, 1, 0, 0, 0, 358, 359, 1, 0, 0, 0, 359, 360, 1, 0, 
		    0, 0, 360, 377, 5, 2, 0, 0, 361, 366, 5, 59, 0, 0, 362, 363, 5, 7, 
		    0, 0, 363, 364, 3, 58, 29, 0, 364, 365, 5, 8, 0, 0, 365, 367, 1, 0, 
		    0, 0, 366, 362, 1, 0, 0, 0, 367, 368, 1, 0, 0, 0, 368, 366, 1, 0, 
		    0, 0, 368, 369, 1, 0, 0, 0, 369, 377, 1, 0, 0, 0, 370, 377, 5, 59, 
		    0, 0, 371, 372, 5, 1, 0, 0, 372, 373, 3, 58, 29, 0, 373, 374, 5, 2, 
		    0, 0, 374, 377, 1, 0, 0, 0, 375, 377, 3, 62, 31, 0, 376, 340, 1, 0, 
		    0, 0, 376, 341, 1, 0, 0, 0, 376, 342, 1, 0, 0, 0, 376, 343, 1, 0, 
		    0, 0, 376, 344, 1, 0, 0, 0, 376, 345, 1, 0, 0, 0, 376, 346, 1, 0, 
		    0, 0, 376, 347, 1, 0, 0, 0, 376, 355, 1, 0, 0, 0, 376, 361, 1, 0, 
		    0, 0, 376, 370, 1, 0, 0, 0, 376, 371, 1, 0, 0, 0, 376, 375, 1, 0, 
		    0, 0, 377, 61, 1, 0, 0, 0, 378, 380, 3, 22, 11, 0, 379, 378, 1, 0, 
		    0, 0, 380, 381, 1, 0, 0, 0, 381, 379, 1, 0, 0, 0, 381, 382, 1, 0, 
		    0, 0, 382, 383, 1, 0, 0, 0, 383, 384, 3, 72, 36, 0, 384, 386, 5, 9, 
		    0, 0, 385, 387, 3, 64, 32, 0, 386, 385, 1, 0, 0, 0, 386, 387, 1, 0, 
		    0, 0, 387, 388, 1, 0, 0, 0, 388, 389, 5, 10, 0, 0, 389, 63, 1, 0, 
		    0, 0, 390, 395, 3, 58, 29, 0, 391, 392, 5, 3, 0, 0, 392, 394, 3, 58, 
		    29, 0, 393, 391, 1, 0, 0, 0, 394, 397, 1, 0, 0, 0, 395, 393, 1, 0, 
		    0, 0, 395, 396, 1, 0, 0, 0, 396, 399, 1, 0, 0, 0, 397, 395, 1, 0, 
		    0, 0, 398, 400, 5, 3, 0, 0, 399, 398, 1, 0, 0, 0, 399, 400, 1, 0, 
		    0, 0, 400, 413, 1, 0, 0, 0, 401, 406, 3, 66, 33, 0, 402, 403, 5, 3, 
		    0, 0, 403, 405, 3, 66, 33, 0, 404, 402, 1, 0, 0, 0, 405, 408, 1, 0, 
		    0, 0, 406, 404, 1, 0, 0, 0, 406, 407, 1, 0, 0, 0, 407, 410, 1, 0, 
		    0, 0, 408, 406, 1, 0, 0, 0, 409, 411, 5, 3, 0, 0, 410, 409, 1, 0, 
		    0, 0, 410, 411, 1, 0, 0, 0, 411, 413, 1, 0, 0, 0, 412, 390, 1, 0, 
		    0, 0, 412, 401, 1, 0, 0, 0, 413, 65, 1, 0, 0, 0, 414, 415, 5, 9, 0, 
		    0, 415, 420, 3, 58, 29, 0, 416, 417, 5, 3, 0, 0, 417, 419, 3, 58, 
		    29, 0, 418, 416, 1, 0, 0, 0, 419, 422, 1, 0, 0, 0, 420, 418, 1, 0, 
		    0, 0, 420, 421, 1, 0, 0, 0, 421, 424, 1, 0, 0, 0, 422, 420, 1, 0, 
		    0, 0, 423, 425, 5, 3, 0, 0, 424, 423, 1, 0, 0, 0, 424, 425, 1, 0, 
		    0, 0, 425, 426, 1, 0, 0, 0, 426, 427, 5, 10, 0, 0, 427, 67, 1, 0, 
		    0, 0, 428, 433, 3, 70, 35, 0, 429, 430, 5, 3, 0, 0, 430, 432, 3, 70, 
		    35, 0, 431, 429, 1, 0, 0, 0, 432, 435, 1, 0, 0, 0, 433, 431, 1, 0, 
		    0, 0, 433, 434, 1, 0, 0, 0, 434, 69, 1, 0, 0, 0, 435, 433, 1, 0, 0, 
		    0, 436, 440, 3, 58, 29, 0, 437, 438, 5, 30, 0, 0, 438, 440, 5, 59, 
		    0, 0, 439, 436, 1, 0, 0, 0, 439, 437, 1, 0, 0, 0, 440, 71, 1, 0, 0, 
		    0, 441, 457, 5, 47, 0, 0, 442, 457, 5, 48, 0, 0, 443, 457, 5, 49, 
		    0, 0, 444, 457, 5, 50, 0, 0, 445, 457, 5, 51, 0, 0, 446, 457, 5, 52, 
		    0, 0, 447, 449, 3, 22, 11, 0, 448, 447, 1, 0, 0, 0, 449, 450, 1, 0, 
		    0, 0, 450, 448, 1, 0, 0, 0, 450, 451, 1, 0, 0, 0, 451, 452, 1, 0, 
		    0, 0, 452, 453, 3, 72, 36, 0, 453, 457, 1, 0, 0, 0, 454, 455, 5, 4, 
		    0, 0, 455, 457, 3, 72, 36, 0, 456, 441, 1, 0, 0, 0, 456, 442, 1, 0, 
		    0, 0, 456, 443, 1, 0, 0, 0, 456, 444, 1, 0, 0, 0, 456, 445, 1, 0, 
		    0, 0, 456, 446, 1, 0, 0, 0, 456, 448, 1, 0, 0, 0, 456, 454, 1, 0, 
		    0, 0, 457, 73, 1, 0, 0, 0, 50, 77, 79, 88, 92, 101, 106, 119, 123, 
		    130, 136, 153, 161, 172, 190, 204, 208, 216, 224, 228, 244, 248, 258, 
		    266, 271, 275, 279, 288, 293, 297, 301, 315, 335, 337, 352, 358, 368, 
		    376, 381, 386, 395, 399, 406, 410, 412, 420, 424, 433, 439, 450, 456];
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
		        $this->setState(79);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 30064771072) !== 0)) {
		        	$this->setState(77);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::FUNC:
		        	    	$this->setState(74);
		        	    	$this->functionDeclaration();
		        	    	break;

		        	    case self::VAR:
		        	    	$this->setState(75);
		        	    	$this->varDeclaration();
		        	    	break;

		        	    case self::CONST:
		        	    	$this->setState(76);
		        	    	$this->constDeclaration();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(81);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(82);
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
		        $this->setState(84);
		        $this->match(self::FUNC);
		        $this->setState(85);
		        $this->match(self::ID);
		        $this->setState(86);
		        $this->match(self::T__0);
		        $this->setState(88);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(87);
		        	$this->params();
		        }
		        $this->setState(90);
		        $this->match(self::T__1);
		        $this->setState(92);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8866461766385810) !== 0)) {
		        	$this->setState(91);
		        	$this->returnType();
		        }
		        $this->setState(94);
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
		        $this->setState(96);
		        $this->param();
		        $this->setState(101);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(97);
		        	$this->match(self::T__2);
		        	$this->setState(98);
		        	$this->param();
		        	$this->setState(103);
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
		        $this->setState(104);
		        $this->match(self::ID);
		        $this->setState(106);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		            case 1:
		        	    $this->setState(105);
		        	    $this->pointerMark();
		        	break;
		        }
		        $this->setState(108);
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
		        $this->setState(110);
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
		        $this->setState(123);
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
		            	$this->setState(112);
		            	$this->type();
		            	break;

		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(113);
		            	$this->match(self::T__0);
		            	$this->setState(114);
		            	$this->type();
		            	$this->setState(117); 
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	do {
		            		$this->setState(115);
		            		$this->match(self::T__2);
		            		$this->setState(116);
		            		$this->type();
		            		$this->setState(119); 
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	} while ($_la === self::T__2);
		            	$this->setState(121);
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
		        $this->setState(125);
		        $this->match(self::VAR);
		        $this->setState(126);
		        $this->idList();
		        $this->setState(130);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(127);
		        		$this->arrayDimension(); 
		        	}

		        	$this->setState(132);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);
		        }
		        $this->setState(133);
		        $this->type();
		        $this->setState(136);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__4) {
		        	$this->setState(134);
		        	$this->match(self::T__4);
		        	$this->setState(135);
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
		        $this->setState(138);
		        $this->match(self::CONST);
		        $this->setState(139);
		        $this->match(self::ID);
		        $this->setState(140);
		        $this->type();
		        $this->setState(141);
		        $this->match(self::T__4);
		        $this->setState(142);
		        $this->recursiveExpr(0);
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
		        $this->setState(144);
		        $this->idList();
		        $this->setState(145);
		        $this->match(self::T__5);
		        $this->setState(146);
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
		        $this->setState(148);
		        $this->match(self::ID);
		        $this->setState(153);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(149);
		        	$this->match(self::T__2);
		        	$this->setState(150);
		        	$this->match(self::ID);
		        	$this->setState(155);
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
		        $this->setState(156);
		        $this->recursiveExpr(0);
		        $this->setState(161);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(157);
		        	$this->match(self::T__2);
		        	$this->setState(158);
		        	$this->recursiveExpr(0);
		        	$this->setState(163);
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
		        $this->setState(164);
		        $this->match(self::T__6);
		        $this->setState(165);
		        $this->recursiveExpr(0);
		        $this->setState(166);
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
		        $this->setState(168);
		        $this->match(self::T__8);
		        $this->setState(172);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117032531925926546) !== 0)) {
		        	$this->setState(169);
		        	$this->stmt();
		        	$this->setState(174);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(175);
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
		        $this->setState(190);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(177);
		        	    $this->varDeclaration();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(178);
		        	    $this->constDeclaration();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(179);
		        	    $this->shortVarDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(180);
		        	    $this->assignStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(181);
		        	    $this->incDecStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(182);
		        	    $this->ifStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(183);
		        	    $this->switchStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(184);
		        	    $this->forStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(185);
		        	    $this->match(self::BREAK);
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(186);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(187);
		        	    $this->returnStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(188);
		        	    $this->exprStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(189);
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
		        $this->setState(192);
		        $this->leftValue();
		        $this->setState(193);
		        $this->assignOp();
		        $this->setState(194);
		        $this->recursiveExpr(0);
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
		        $this->setState(208);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LValueIdContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(196);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $localContext = new Context\LValueArrayContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(197);
		        	    $this->match(self::ID);
		        	    $this->setState(202); 
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    do {
		        	    	$this->setState(198);
		        	    	$this->match(self::T__6);
		        	    	$this->setState(199);
		        	    	$this->recursiveExpr(0);
		        	    	$this->setState(200);
		        	    	$this->match(self::T__7);
		        	    	$this->setState(204); 
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    } while ($_la === self::T__6);
		        	break;

		        	case 3:
		        	    $localContext = new Context\LValuePointerContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(206);
		        	    $this->match(self::T__3);
		        	    $this->setState(207);
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
		        $this->setState(210);

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
		        $this->setState(216);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\IncStmtContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(212);
		        	    $this->match(self::ID);
		        	    $this->setState(213);
		        	    $this->match(self::T__14);
		        	break;

		        	case 2:
		        	    $localContext = new Context\DecStmtContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(214);
		        	    $this->match(self::ID);
		        	    $this->setState(215);
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
		        $this->setState(218);
		        $this->match(self::IF);
		        $this->setState(219);
		        $this->recursiveExpr(0);
		        $this->setState(220);
		        $this->block();
		        $this->setState(224);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(221);
		        		$this->elseIfClause(); 
		        	}

		        	$this->setState(226);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);
		        }
		        $this->setState(228);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(227);
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
		        $this->setState(230);
		        $this->match(self::ELSE);
		        $this->setState(231);
		        $this->match(self::IF);
		        $this->setState(232);
		        $this->recursiveExpr(0);
		        $this->setState(233);
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
		        $this->setState(235);
		        $this->match(self::ELSE);
		        $this->setState(236);
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
		        $this->setState(238);
		        $this->match(self::SWITCH);
		        $this->setState(239);
		        $this->recursiveExpr(0);
		        $this->setState(240);
		        $this->match(self::T__8);
		        $this->setState(244);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE) {
		        	$this->setState(241);
		        	$this->caseClause();
		        	$this->setState(246);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(248);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(247);
		        	$this->defaultClause();
		        }
		        $this->setState(250);
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
		        $this->setState(252);
		        $this->match(self::CASE);
		        $this->setState(253);
		        $this->exprList();
		        $this->setState(254);
		        $this->match(self::T__16);
		        $this->setState(258);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117032531925926546) !== 0)) {
		        	$this->setState(255);
		        	$this->stmt();
		        	$this->setState(260);
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
		        $this->setState(261);
		        $this->match(self::DEFAULT);
		        $this->setState(262);
		        $this->match(self::T__16);
		        $this->setState(266);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117032531925926546) !== 0)) {
		        	$this->setState(263);
		        	$this->stmt();
		        	$this->setState(268);
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
		        $this->setState(288);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ForClassicContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(269);
		        	    $this->match(self::FOR);
		        	    $this->setState(271);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(270);
		        	    	$this->forInit();
		        	    }
		        	    $this->setState(273);
		        	    $this->match(self::T__17);
		        	    $this->setState(275);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567915666) !== 0)) {
		        	    	$this->setState(274);
		        	    	$this->recursiveExpr(0);
		        	    }
		        	    $this->setState(277);
		        	    $this->match(self::T__17);
		        	    $this->setState(279);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(278);
		        	    	$this->forPost();
		        	    }
		        	    $this->setState(281);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ForConditionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(282);
		        	    $this->match(self::FOR);
		        	    $this->setState(283);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(284);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ForForeverContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(286);
		        	    $this->match(self::FOR);
		        	    $this->setState(287);
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
		        $this->setState(293);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(290);
		        	    $this->shortVarDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(291);
		        	    $this->assignStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(292);
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
		        $this->setState(297);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(295);
		        	    $this->assignStmt();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(296);
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
		        $this->setState(299);
		        $this->match(self::RETURN);
		        $this->setState(301);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
		            case 1:
		        	    $this->setState(300);
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
		        $this->setState(303);
		        $this->recursiveExpr(0);
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
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 58;
			$this->enterRecursionRule($localContext, 58, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(315);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__28:
				    	$localContext = new Context\NotExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(306);
				    	$this->match(self::T__28);
				    	$this->setState(307);
				    	$this->recursiveExpr(5);
				    	break;

				    case self::T__25:
				    	$localContext = new Context\NegExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(308);
				    	$this->match(self::T__25);
				    	$this->setState(309);
				    	$this->recursiveExpr(4);
				    	break;

				    case self::T__29:
				    	$localContext = new Context\AddrExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(310);
				    	$this->match(self::T__29);
				    	$this->setState(311);
				    	$this->match(self::ID);
				    	break;

				    case self::T__3:
				    	$localContext = new Context\DerefExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(312);
				    	$this->match(self::T__3);
				    	$this->setState(313);
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
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(314);
				    	$this->atom();
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(337);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(335);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx)) {
							case 1:
							    $localContext = new Context\OrExprContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(317);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(318);
							    $this->match(self::OR);
							    $this->setState(319);
							    $this->recursiveExpr(12);
							break;

							case 2:
							    $localContext = new Context\AndExprContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(320);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(321);
							    $this->match(self::AND);
							    $this->setState(322);
							    $this->recursiveExpr(11);
							break;

							case 3:
							    $localContext = new Context\EqualExprContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(323);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(324);

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
							    $this->setState(325);
							    $this->recursiveExpr(10);
							break;

							case 4:
							    $localContext = new Context\RelExprContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(326);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(327);

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
							    $this->setState(328);
							    $this->recursiveExpr(9);
							break;

							case 5:
							    $localContext = new Context\AddExprContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(329);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(330);

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
							    $this->setState(331);
							    $this->recursiveExpr(8);
							break;

							case 6:
							    $localContext = new Context\MulExprContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(332);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(333);

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
							    $this->setState(334);
							    $this->recursiveExpr(7);
							break;
						} 
					}

					$this->setState(339);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function atom(): Context\AtomContext
		{
		    $localContext = new Context\AtomContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_atom);

		    try {
		        $this->setState(376);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 36, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FloatAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(340);
		        	    $this->match(self::FLOAT_LIT);
		        	break;

		        	case 2:
		        	    $localContext = new Context\IntAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(341);
		        	    $this->match(self::INT_LIT);
		        	break;

		        	case 3:
		        	    $localContext = new Context\RuneAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(342);
		        	    $this->match(self::RUNE_LIT);
		        	break;

		        	case 4:
		        	    $localContext = new Context\StringAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(343);
		        	    $this->match(self::STRING_LIT);
		        	break;

		        	case 5:
		        	    $localContext = new Context\TrueAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(344);
		        	    $this->match(self::TRUE);
		        	break;

		        	case 6:
		        	    $localContext = new Context\FalseAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(345);
		        	    $this->match(self::FALSE);
		        	break;

		        	case 7:
		        	    $localContext = new Context\NilAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(346);
		        	    $this->match(self::NIL);
		        	break;

		        	case 8:
		        	    $localContext = new Context\MethodAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(347);
		        	    $this->match(self::ID);
		        	    $this->setState(348);
		        	    $this->match(self::T__30);
		        	    $this->setState(349);
		        	    $this->match(self::ID);
		        	    $this->setState(350);
		        	    $this->match(self::T__0);
		        	    $this->setState(352);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567915666) !== 0)) {
		        	    	$this->setState(351);
		        	    	$this->argList();
		        	    }
		        	    $this->setState(354);
		        	    $this->match(self::T__1);
		        	break;

		        	case 9:
		        	    $localContext = new Context\CallAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(355);
		        	    $this->match(self::ID);
		        	    $this->setState(356);
		        	    $this->match(self::T__0);
		        	    $this->setState(358);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567915666) !== 0)) {
		        	    	$this->setState(357);
		        	    	$this->argList();
		        	    }
		        	    $this->setState(360);
		        	    $this->match(self::T__1);
		        	break;

		        	case 10:
		        	    $localContext = new Context\IndexAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(361);
		        	    $this->match(self::ID);
		        	    $this->setState(366); 
		        	    $this->errorHandler->sync($this);

		        	    $alt = 1;

		        	    do {
		        	    	switch ($alt) {
		        	    	case 1:
		        	    		$this->setState(362);
		        	    		$this->match(self::T__6);
		        	    		$this->setState(363);
		        	    		$this->recursiveExpr(0);
		        	    		$this->setState(364);
		        	    		$this->match(self::T__7);
		        	    		break;
		        	    	default:
		        	    		throw new NoViableAltException($this);
		        	    	}

		        	    	$this->setState(368); 
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx);
		        	    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        	break;

		        	case 11:
		        	    $localContext = new Context\IdAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(370);
		        	    $this->match(self::ID);
		        	break;

		        	case 12:
		        	    $localContext = new Context\ParenAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(371);
		        	    $this->match(self::T__0);
		        	    $this->setState(372);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(373);
		        	    $this->match(self::T__1);
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArrayAtomContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(375);
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

		    $this->enterRule($localContext, 62, self::RULE_arrayLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(379); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(378);
		        		$this->arrayDimension();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(381); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 37, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        $this->setState(383);
		        $this->type();
		        $this->setState(384);
		        $this->match(self::T__8);
		        $this->setState(386);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117015854567916178) !== 0)) {
		        	$this->setState(385);
		        	$this->arrayInitList();
		        }
		        $this->setState(388);
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

		    $this->enterRule($localContext, 64, self::RULE_arrayInitList);

		    try {
		        $this->setState(412);
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
		            	$this->setState(390);
		            	$this->recursiveExpr(0);
		            	$this->setState(395);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(391);
		            			$this->match(self::T__2);
		            			$this->setState(392);
		            			$this->recursiveExpr(0); 
		            		}

		            		$this->setState(397);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx);
		            	}
		            	$this->setState(399);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__2) {
		            		$this->setState(398);
		            		$this->match(self::T__2);
		            	}
		            	break;

		            case self::T__8:
		            	$localContext = new Context\NestedInitListContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(401);
		            	$this->nestedInit();
		            	$this->setState(406);
		            	$this->errorHandler->sync($this);

		            	$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);

		            	while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		            		if ($alt === 1) {
		            			$this->setState(402);
		            			$this->match(self::T__2);
		            			$this->setState(403);
		            			$this->nestedInit(); 
		            		}

		            		$this->setState(408);
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);
		            	}
		            	$this->setState(410);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__2) {
		            		$this->setState(409);
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

		    $this->enterRule($localContext, 66, self::RULE_nestedInit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(414);
		        $this->match(self::T__8);
		        $this->setState(415);
		        $this->recursiveExpr(0);
		        $this->setState(420);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 44, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(416);
		        		$this->match(self::T__2);
		        		$this->setState(417);
		        		$this->recursiveExpr(0); 
		        	}

		        	$this->setState(422);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 44, $this->ctx);
		        }
		        $this->setState(424);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__2) {
		        	$this->setState(423);
		        	$this->match(self::T__2);
		        }
		        $this->setState(426);
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

		    $this->enterRule($localContext, 68, self::RULE_argList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(428);
		        $this->arg();
		        $this->setState(433);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(429);
		        	$this->match(self::T__2);
		        	$this->setState(430);
		        	$this->arg();
		        	$this->setState(435);
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

		    $this->enterRule($localContext, 70, self::RULE_arg);

		    try {
		        $this->setState(439);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 47, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ValArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(436);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 2:
		        	    $localContext = new Context\RefArgContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(437);
		        	    $this->match(self::T__29);
		        	    $this->setState(438);
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

		    $this->enterRule($localContext, 72, self::RULE_type);

		    try {
		        $this->setState(456);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT32_T:
		            	$localContext = new Context\TInt32Context($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(441);
		            	$this->match(self::INT32_T);
		            	break;

		            case self::INT_T:
		            	$localContext = new Context\TIntContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(442);
		            	$this->match(self::INT_T);
		            	break;

		            case self::FLOAT32_T:
		            	$localContext = new Context\TFloat32Context($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(443);
		            	$this->match(self::FLOAT32_T);
		            	break;

		            case self::BOOL_T:
		            	$localContext = new Context\TBoolContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(444);
		            	$this->match(self::BOOL_T);
		            	break;

		            case self::RUNE_T:
		            	$localContext = new Context\TRuneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(445);
		            	$this->match(self::RUNE_T);
		            	break;

		            case self::STRING_T:
		            	$localContext = new Context\TStringContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(446);
		            	$this->match(self::STRING_T);
		            	break;

		            case self::T__6:
		            	$localContext = new Context\TArrayContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(448); 
		            	$this->errorHandler->sync($this);

		            	$alt = 1;

		            	do {
		            		switch ($alt) {
		            		case 1:
		            			$this->setState(447);
		            			$this->arrayDimension();
		            			break;
		            		default:
		            			throw new NoViableAltException($this);
		            		}

		            		$this->setState(450); 
		            		$this->errorHandler->sync($this);

		            		$alt = $this->getInterpreter()->adaptivePredict($this->input, 48, $this->ctx);
		            	} while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		            	$this->setState(452);
		            	$this->type();
		            	break;

		            case self::T__3:
		            	$localContext = new Context\TPointerContext($localContext);
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(454);
		            	$this->match(self::T__3);
		            	$this->setState(455);
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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 29:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 11);

			    case 1:
			        return $this->precpred($this->ctx, 10);

			    case 2:
			        return $this->precpred($this->ctx, 9);

			    case 3:
			        return $this->precpred($this->ctx, 8);

			    case 4:
			        return $this->precpred($this->ctx, 7);

			    case 5:
			        return $this->precpred($this->ctx, 6);
			}

			return true;
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
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AndExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::AND, 0);
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

	class MulExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class AddrExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class EqualExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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
			    $listener->enterEqualExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitEqualExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEqualExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DerefExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class RelExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class NegExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class AddExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class NotExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class AtomExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class OrExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::OR, 0);
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