<?php

/*
 * Generated from Grammar/Golampi.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GolampiParser}.
 */
interface GolampiVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GolampiParser::program()}.
	 *
	 * @param Context\ProgramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProgram(Context\ProgramContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::functionDeclaration()}.
	 *
	 * @param Context\FunctionDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionDeclaration(Context\FunctionDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::params()}.
	 *
	 * @param Context\ParamsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParams(Context\ParamsContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::param()}.
	 *
	 * @param Context\ParamContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParam(Context\ParamContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::pointerMark()}.
	 *
	 * @param Context\PointerMarkContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPointerMark(Context\PointerMarkContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::returnType()}.
	 *
	 * @param Context\ReturnTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnType(Context\ReturnTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::varDeclaration()}.
	 *
	 * @param Context\VarDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarDeclaration(Context\VarDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::constDeclaration()}.
	 *
	 * @param Context\ConstDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstDeclaration(Context\ConstDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 *
	 * @param Context\ShortVarDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortVarDecl(Context\ShortVarDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::idList()}.
	 *
	 * @param Context\IdListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdList(Context\IdListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::exprList()}.
	 *
	 * @param Context\ExprListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprList(Context\ExprListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::arrayDimension()}.
	 *
	 * @param Context\ArrayDimensionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayDimension(Context\ArrayDimensionContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::block()}.
	 *
	 * @param Context\BlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlock(Context\BlockContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::stmt()}.
	 *
	 * @param Context\StmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmt(Context\StmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::assignStmt()}.
	 *
	 * @param Context\AssignStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignStmt(Context\AssignStmtContext $context);

	/**
	 * Visit a parse tree produced by the `LValueId` labeled alternative
	 * in {@see GolampiParser::leftValue()}.
	 *
	 * @param Context\LValueIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLValueId(Context\LValueIdContext $context);

	/**
	 * Visit a parse tree produced by the `LValueArray` labeled alternative
	 * in {@see GolampiParser::leftValue()}.
	 *
	 * @param Context\LValueArrayContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLValueArray(Context\LValueArrayContext $context);

	/**
	 * Visit a parse tree produced by the `LValuePointer` labeled alternative
	 * in {@see GolampiParser::leftValue()}.
	 *
	 * @param Context\LValuePointerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLValuePointer(Context\LValuePointerContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::assignOp()}.
	 *
	 * @param Context\AssignOpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignOp(Context\AssignOpContext $context);

	/**
	 * Visit a parse tree produced by the `IncStmt` labeled alternative
	 * in {@see GolampiParser::incDecStmt()}.
	 *
	 * @param Context\IncStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncStmt(Context\IncStmtContext $context);

	/**
	 * Visit a parse tree produced by the `DecStmt` labeled alternative
	 * in {@see GolampiParser::incDecStmt()}.
	 *
	 * @param Context\DecStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDecStmt(Context\DecStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::ifStmt()}.
	 *
	 * @param Context\IfStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStmt(Context\IfStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::elseIfClause()}.
	 *
	 * @param Context\ElseIfClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElseIfClause(Context\ElseIfClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::elseClause()}.
	 *
	 * @param Context\ElseClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElseClause(Context\ElseClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::switchStmt()}.
	 *
	 * @param Context\SwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStmt(Context\SwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::caseClause()}.
	 *
	 * @param Context\CaseClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCaseClause(Context\CaseClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::defaultClause()}.
	 *
	 * @param Context\DefaultClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefaultClause(Context\DefaultClauseContext $context);

	/**
	 * Visit a parse tree produced by the `ForClassic` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForClassicContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForClassic(Context\ForClassicContext $context);

	/**
	 * Visit a parse tree produced by the `ForCondition` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForConditionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForCondition(Context\ForConditionContext $context);

	/**
	 * Visit a parse tree produced by the `ForForever` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForForeverContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForForever(Context\ForForeverContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forInit()}.
	 *
	 * @param Context\ForInitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForInit(Context\ForInitContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::forPost()}.
	 *
	 * @param Context\ForPostContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForPost(Context\ForPostContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::repeatStmt()}.
	 *
	 * @param Context\RepeatStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRepeatStmt(Context\RepeatStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::returnStmt()}.
	 *
	 * @param Context\ReturnStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnStmt(Context\ReturnStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::exprStmt()}.
	 *
	 * @param Context\ExprStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprStmt(Context\ExprStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::expr()}.
	 *
	 * @param Context\ExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpr(Context\ExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::orExpr()}.
	 *
	 * @param Context\OrExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrExpr(Context\OrExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::andExpr()}.
	 *
	 * @param Context\AndExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndExpr(Context\AndExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::eqExpr()}.
	 *
	 * @param Context\EqExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEqExpr(Context\EqExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::relExpr()}.
	 *
	 * @param Context\RelExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelExpr(Context\RelExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::addExpr()}.
	 *
	 * @param Context\AddExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddExpr(Context\AddExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::mulExpr()}.
	 *
	 * @param Context\MulExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulExpr(Context\MulExprContext $context);

	/**
	 * Visit a parse tree produced by the `NotExpr` labeled alternative
	 * in {@see GolampiParser::unaryExpr()}.
	 *
	 * @param Context\NotExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNotExpr(Context\NotExprContext $context);

	/**
	 * Visit a parse tree produced by the `NegExpr` labeled alternative
	 * in {@see GolampiParser::unaryExpr()}.
	 *
	 * @param Context\NegExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNegExpr(Context\NegExprContext $context);

	/**
	 * Visit a parse tree produced by the `AddrExpr` labeled alternative
	 * in {@see GolampiParser::unaryExpr()}.
	 *
	 * @param Context\AddrExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddrExpr(Context\AddrExprContext $context);

	/**
	 * Visit a parse tree produced by the `DerefExpr` labeled alternative
	 * in {@see GolampiParser::unaryExpr()}.
	 *
	 * @param Context\DerefExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDerefExpr(Context\DerefExprContext $context);

	/**
	 * Visit a parse tree produced by the `AtomExpr` labeled alternative
	 * in {@see GolampiParser::unaryExpr()}.
	 *
	 * @param Context\AtomExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAtomExpr(Context\AtomExprContext $context);

	/**
	 * Visit a parse tree produced by the `FloatAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\FloatAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFloatAtom(Context\FloatAtomContext $context);

	/**
	 * Visit a parse tree produced by the `IntAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\IntAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntAtom(Context\IntAtomContext $context);

	/**
	 * Visit a parse tree produced by the `RuneAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\RuneAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRuneAtom(Context\RuneAtomContext $context);

	/**
	 * Visit a parse tree produced by the `StringAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\StringAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStringAtom(Context\StringAtomContext $context);

	/**
	 * Visit a parse tree produced by the `TrueAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\TrueAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrueAtom(Context\TrueAtomContext $context);

	/**
	 * Visit a parse tree produced by the `FalseAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\FalseAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFalseAtom(Context\FalseAtomContext $context);

	/**
	 * Visit a parse tree produced by the `NilAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\NilAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNilAtom(Context\NilAtomContext $context);

	/**
	 * Visit a parse tree produced by the `CastAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\CastAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCastAtom(Context\CastAtomContext $context);

	/**
	 * Visit a parse tree produced by the `MethodAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\MethodAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodAtom(Context\MethodAtomContext $context);

	/**
	 * Visit a parse tree produced by the `CallAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\CallAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCallAtom(Context\CallAtomContext $context);

	/**
	 * Visit a parse tree produced by the `IndexAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\IndexAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndexAtom(Context\IndexAtomContext $context);

	/**
	 * Visit a parse tree produced by the `IdAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\IdAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdAtom(Context\IdAtomContext $context);

	/**
	 * Visit a parse tree produced by the `ParenAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\ParenAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParenAtom(Context\ParenAtomContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAtom` labeled alternative
	 * in {@see GolampiParser::atom()}.
	 *
	 * @param Context\ArrayAtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAtom(Context\ArrayAtomContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::arrayLiteral()}.
	 *
	 * @param Context\ArrayLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayLiteral(Context\ArrayLiteralContext $context);

	/**
	 * Visit a parse tree produced by the `FlatInit` labeled alternative
	 * in {@see GolampiParser::arrayInitList()}.
	 *
	 * @param Context\FlatInitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFlatInit(Context\FlatInitContext $context);

	/**
	 * Visit a parse tree produced by the `NestedInitList` labeled alternative
	 * in {@see GolampiParser::arrayInitList()}.
	 *
	 * @param Context\NestedInitListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNestedInitList(Context\NestedInitListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::nestedInit()}.
	 *
	 * @param Context\NestedInitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNestedInit(Context\NestedInitContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::argList()}.
	 *
	 * @param Context\ArgListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArgList(Context\ArgListContext $context);

	/**
	 * Visit a parse tree produced by the `ValArg` labeled alternative
	 * in {@see GolampiParser::arg()}.
	 *
	 * @param Context\ValArgContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValArg(Context\ValArgContext $context);

	/**
	 * Visit a parse tree produced by the `RefArg` labeled alternative
	 * in {@see GolampiParser::arg()}.
	 *
	 * @param Context\RefArgContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRefArg(Context\RefArgContext $context);

	/**
	 * Visit a parse tree produced by the `TInt32` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TInt32Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTInt32(Context\TInt32Context $context);

	/**
	 * Visit a parse tree produced by the `TInt` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TIntContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTInt(Context\TIntContext $context);

	/**
	 * Visit a parse tree produced by the `TFloat32` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TFloat32Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTFloat32(Context\TFloat32Context $context);

	/**
	 * Visit a parse tree produced by the `TBool` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TBoolContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTBool(Context\TBoolContext $context);

	/**
	 * Visit a parse tree produced by the `TRune` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TRuneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTRune(Context\TRuneContext $context);

	/**
	 * Visit a parse tree produced by the `TString` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TStringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTString(Context\TStringContext $context);

	/**
	 * Visit a parse tree produced by the `TArray` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TArrayContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTArray(Context\TArrayContext $context);

	/**
	 * Visit a parse tree produced by the `TPointer` labeled alternative
	 * in {@see GolampiParser::type()}.
	 *
	 * @param Context\TPointerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTPointer(Context\TPointerContext $context);
}