<?php

/*
 * Generated from Grammar/Golampi.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GolampiParser}.
 */
interface GolampiListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GolampiParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::functionDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionDeclaration(Context\FunctionDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::functionDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionDeclaration(Context\FunctionDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::params()}.
	 * @param $context The parse tree.
	 */
	public function enterParams(Context\ParamsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::params()}.
	 * @param $context The parse tree.
	 */
	public function exitParams(Context\ParamsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::param()}.
	 * @param $context The parse tree.
	 */
	public function enterParam(Context\ParamContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::param()}.
	 * @param $context The parse tree.
	 */
	public function exitParam(Context\ParamContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::pointerMark()}.
	 * @param $context The parse tree.
	 */
	public function enterPointerMark(Context\PointerMarkContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::pointerMark()}.
	 * @param $context The parse tree.
	 */
	public function exitPointerMark(Context\PointerMarkContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::returnType()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnType(Context\ReturnTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::returnType()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnType(Context\ReturnTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::varDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function enterVarDeclaration(Context\VarDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::varDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function exitVarDeclaration(Context\VarDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::constDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function enterConstDeclaration(Context\ConstDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::constDeclaration()}.
	 * @param $context The parse tree.
	 */
	public function exitConstDeclaration(Context\ConstDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterShortVarDecl(Context\ShortVarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitShortVarDecl(Context\ShortVarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function enterIdList(Context\IdListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function exitIdList(Context\IdListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::exprList()}.
	 * @param $context The parse tree.
	 */
	public function enterExprList(Context\ExprListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::exprList()}.
	 * @param $context The parse tree.
	 */
	public function exitExprList(Context\ExprListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayDimension()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayDimension(Context\ArrayDimensionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayDimension()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayDimension(Context\ArrayDimensionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterStmt(Context\StmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitStmt(Context\StmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::assignStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignStmt(Context\AssignStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::assignStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignStmt(Context\AssignStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `LValueId`
	 * labeled alternative in {@see GolampiParser::leftValue()}.
	 * @param $context The parse tree.
	 */
	public function enterLValueId(Context\LValueIdContext $context): void;
	/**
	 * Exit a parse tree produced by the `LValueId` labeled alternative
	 * in {@see GolampiParser::leftValue()}.
	 * @param $context The parse tree.
	 */
	public function exitLValueId(Context\LValueIdContext $context): void;
	/**
	 * Enter a parse tree produced by the `LValueArray`
	 * labeled alternative in {@see GolampiParser::leftValue()}.
	 * @param $context The parse tree.
	 */
	public function enterLValueArray(Context\LValueArrayContext $context): void;
	/**
	 * Exit a parse tree produced by the `LValueArray` labeled alternative
	 * in {@see GolampiParser::leftValue()}.
	 * @param $context The parse tree.
	 */
	public function exitLValueArray(Context\LValueArrayContext $context): void;
	/**
	 * Enter a parse tree produced by the `LValuePointer`
	 * labeled alternative in {@see GolampiParser::leftValue()}.
	 * @param $context The parse tree.
	 */
	public function enterLValuePointer(Context\LValuePointerContext $context): void;
	/**
	 * Exit a parse tree produced by the `LValuePointer` labeled alternative
	 * in {@see GolampiParser::leftValue()}.
	 * @param $context The parse tree.
	 */
	public function exitLValuePointer(Context\LValuePointerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::assignOp()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignOp(Context\AssignOpContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::assignOp()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignOp(Context\AssignOpContext $context): void;
	/**
	 * Enter a parse tree produced by the `IncStmt`
	 * labeled alternative in {@see GolampiParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIncStmt(Context\IncStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `IncStmt` labeled alternative
	 * in {@see GolampiParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIncStmt(Context\IncStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `DecStmt`
	 * labeled alternative in {@see GolampiParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDecStmt(Context\DecStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `DecStmt` labeled alternative
	 * in {@see GolampiParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDecStmt(Context\DecStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::elseIfClause()}.
	 * @param $context The parse tree.
	 */
	public function enterElseIfClause(Context\ElseIfClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::elseIfClause()}.
	 * @param $context The parse tree.
	 */
	public function exitElseIfClause(Context\ElseIfClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::elseClause()}.
	 * @param $context The parse tree.
	 */
	public function enterElseClause(Context\ElseClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::elseClause()}.
	 * @param $context The parse tree.
	 */
	public function exitElseClause(Context\ElseClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::caseClause()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseClause(Context\CaseClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::caseClause()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseClause(Context\CaseClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::defaultClause()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultClause(Context\DefaultClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::defaultClause()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultClause(Context\DefaultClauseContext $context): void;
	/**
	 * Enter a parse tree produced by the `ForClassic`
	 * labeled alternative in {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForClassic(Context\ForClassicContext $context): void;
	/**
	 * Exit a parse tree produced by the `ForClassic` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForClassic(Context\ForClassicContext $context): void;
	/**
	 * Enter a parse tree produced by the `ForCondition`
	 * labeled alternative in {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForCondition(Context\ForConditionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ForCondition` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForCondition(Context\ForConditionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ForForever`
	 * labeled alternative in {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForForever(Context\ForForeverContext $context): void;
	/**
	 * Exit a parse tree produced by the `ForForever` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForForever(Context\ForForeverContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forInit()}.
	 * @param $context The parse tree.
	 */
	public function enterForInit(Context\ForInitContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forInit()}.
	 * @param $context The parse tree.
	 */
	public function exitForInit(Context\ForInitContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forPost()}.
	 * @param $context The parse tree.
	 */
	public function enterForPost(Context\ForPostContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forPost()}.
	 * @param $context The parse tree.
	 */
	public function exitForPost(Context\ForPostContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::exprStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterExprStmt(Context\ExprStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::exprStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitExprStmt(Context\ExprStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `AndExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAndExpr(Context\AndExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `AndExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAndExpr(Context\AndExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `MulExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterMulExpr(Context\MulExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `MulExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitMulExpr(Context\MulExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `AddrExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAddrExpr(Context\AddrExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `AddrExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAddrExpr(Context\AddrExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `EqualExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterEqualExpr(Context\EqualExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `EqualExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitEqualExpr(Context\EqualExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `DerefExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterDerefExpr(Context\DerefExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `DerefExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitDerefExpr(Context\DerefExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `RelExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterRelExpr(Context\RelExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `RelExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitRelExpr(Context\RelExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `NegExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterNegExpr(Context\NegExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `NegExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitNegExpr(Context\NegExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `AddExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAddExpr(Context\AddExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `AddExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAddExpr(Context\AddExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `NotExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterNotExpr(Context\NotExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `NotExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitNotExpr(Context\NotExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `AtomExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAtomExpr(Context\AtomExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `AtomExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAtomExpr(Context\AtomExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `OrExpr`
	 * labeled alternative in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterOrExpr(Context\OrExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `OrExpr` labeled alternative
	 * in {@see GolampiParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitOrExpr(Context\OrExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `FloatAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterFloatAtom(Context\FloatAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `FloatAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitFloatAtom(Context\FloatAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `IntAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterIntAtom(Context\IntAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `IntAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitIntAtom(Context\IntAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `RuneAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterRuneAtom(Context\RuneAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `RuneAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitRuneAtom(Context\RuneAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `StringAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterStringAtom(Context\StringAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `StringAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitStringAtom(Context\StringAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `TrueAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterTrueAtom(Context\TrueAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `TrueAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitTrueAtom(Context\TrueAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `FalseAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterFalseAtom(Context\FalseAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `FalseAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitFalseAtom(Context\FalseAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `NilAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterNilAtom(Context\NilAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `NilAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitNilAtom(Context\NilAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `MethodAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodAtom(Context\MethodAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `MethodAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodAtom(Context\MethodAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `CallAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterCallAtom(Context\CallAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `CallAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitCallAtom(Context\CallAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `IndexAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterIndexAtom(Context\IndexAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `IndexAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitIndexAtom(Context\IndexAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `IdAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterIdAtom(Context\IdAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `IdAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitIdAtom(Context\IdAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `ParenAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterParenAtom(Context\ParenAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `ParenAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitParenAtom(Context\ParenAtomContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArrayAtom`
	 * labeled alternative in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAtom(Context\ArrayAtomContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArrayAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAtom(Context\ArrayAtomContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayLiteral()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayLiteral(Context\ArrayLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayLiteral()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayLiteral(Context\ArrayLiteralContext $context): void;
	/**
	 * Enter a parse tree produced by the `FlatInit`
	 * labeled alternative in {@see GolampiParser::arrayInitList()}.
	 * @param $context The parse tree.
	 */
	public function enterFlatInit(Context\FlatInitContext $context): void;
	/**
	 * Exit a parse tree produced by the `FlatInit` labeled alternative
	 * in {@see GolampiParser::arrayInitList()}.
	 * @param $context The parse tree.
	 */
	public function exitFlatInit(Context\FlatInitContext $context): void;
	/**
	 * Enter a parse tree produced by the `NestedInitList`
	 * labeled alternative in {@see GolampiParser::arrayInitList()}.
	 * @param $context The parse tree.
	 */
	public function enterNestedInitList(Context\NestedInitListContext $context): void;
	/**
	 * Exit a parse tree produced by the `NestedInitList` labeled alternative
	 * in {@see GolampiParser::arrayInitList()}.
	 * @param $context The parse tree.
	 */
	public function exitNestedInitList(Context\NestedInitListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::nestedInit()}.
	 * @param $context The parse tree.
	 */
	public function enterNestedInit(Context\NestedInitContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::nestedInit()}.
	 * @param $context The parse tree.
	 */
	public function exitNestedInit(Context\NestedInitContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::argList()}.
	 * @param $context The parse tree.
	 */
	public function enterArgList(Context\ArgListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::argList()}.
	 * @param $context The parse tree.
	 */
	public function exitArgList(Context\ArgListContext $context): void;
	/**
	 * Enter a parse tree produced by the `ValArg`
	 * labeled alternative in {@see GolampiParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function enterValArg(Context\ValArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `ValArg` labeled alternative
	 * in {@see GolampiParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function exitValArg(Context\ValArgContext $context): void;
	/**
	 * Enter a parse tree produced by the `RefArg`
	 * labeled alternative in {@see GolampiParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function enterRefArg(Context\RefArgContext $context): void;
	/**
	 * Exit a parse tree produced by the `RefArg` labeled alternative
	 * in {@see GolampiParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function exitRefArg(Context\RefArgContext $context): void;
	/**
	 * Enter a parse tree produced by the `TInt32`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTInt32(Context\TInt32Context $context): void;
	/**
	 * Exit a parse tree produced by the `TInt32` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTInt32(Context\TInt32Context $context): void;
	/**
	 * Enter a parse tree produced by the `TInt`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTInt(Context\TIntContext $context): void;
	/**
	 * Exit a parse tree produced by the `TInt` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTInt(Context\TIntContext $context): void;
	/**
	 * Enter a parse tree produced by the `TFloat32`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTFloat32(Context\TFloat32Context $context): void;
	/**
	 * Exit a parse tree produced by the `TFloat32` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTFloat32(Context\TFloat32Context $context): void;
	/**
	 * Enter a parse tree produced by the `TBool`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTBool(Context\TBoolContext $context): void;
	/**
	 * Exit a parse tree produced by the `TBool` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTBool(Context\TBoolContext $context): void;
	/**
	 * Enter a parse tree produced by the `TRune`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTRune(Context\TRuneContext $context): void;
	/**
	 * Exit a parse tree produced by the `TRune` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTRune(Context\TRuneContext $context): void;
	/**
	 * Enter a parse tree produced by the `TString`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTString(Context\TStringContext $context): void;
	/**
	 * Exit a parse tree produced by the `TString` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTString(Context\TStringContext $context): void;
	/**
	 * Enter a parse tree produced by the `TArray`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTArray(Context\TArrayContext $context): void;
	/**
	 * Exit a parse tree produced by the `TArray` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTArray(Context\TArrayContext $context): void;
	/**
	 * Enter a parse tree produced by the `TPointer`
	 * labeled alternative in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterTPointer(Context\TPointerContext $context): void;
	/**
	 * Exit a parse tree produced by the `TPointer` labeled alternative
	 * in {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitTPointer(Context\TPointerContext $context): void;
}