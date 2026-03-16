<?php

/*
 * Generated from Grammar/Golampi.g4 by ANTLR 4.13.1
 */


use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

/**
 * This class provides an empty implementation of {@see GolampiListener},
 * which can be extended to create a listener which only needs to handle a subset
 * of the available methods.
 */
class GolampiBaseListener implements GolampiListener
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterProgram(Context\ProgramContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitProgram(Context\ProgramContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFunctionDeclaration(Context\FunctionDeclarationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFunctionDeclaration(Context\FunctionDeclarationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterParams(Context\ParamsContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitParams(Context\ParamsContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterParam(Context\ParamContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitParam(Context\ParamContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterPointerMark(Context\PointerMarkContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitPointerMark(Context\PointerMarkContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterReturnType(Context\ReturnTypeContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitReturnType(Context\ReturnTypeContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterVarDeclaration(Context\VarDeclarationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitVarDeclaration(Context\VarDeclarationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterConstDeclaration(Context\ConstDeclarationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitConstDeclaration(Context\ConstDeclarationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterShortVarDecl(Context\ShortVarDeclContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitShortVarDecl(Context\ShortVarDeclContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIdList(Context\IdListContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIdList(Context\IdListContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExprList(Context\ExprListContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExprList(Context\ExprListContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayDimension(Context\ArrayDimensionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayDimension(Context\ArrayDimensionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBlock(Context\BlockContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBlock(Context\BlockContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterStmt(Context\StmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitStmt(Context\StmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAssignStmt(Context\AssignStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAssignStmt(Context\AssignStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLValueId(Context\LValueIdContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLValueId(Context\LValueIdContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLValueArray(Context\LValueArrayContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLValueArray(Context\LValueArrayContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLValuePointer(Context\LValuePointerContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLValuePointer(Context\LValuePointerContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAssignOp(Context\AssignOpContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAssignOp(Context\AssignOpContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIncStmt(Context\IncStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIncStmt(Context\IncStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDecStmt(Context\DecStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDecStmt(Context\DecStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIfStmt(Context\IfStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIfStmt(Context\IfStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterElseIfClause(Context\ElseIfClauseContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitElseIfClause(Context\ElseIfClauseContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterElseClause(Context\ElseClauseContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitElseClause(Context\ElseClauseContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSwitchStmt(Context\SwitchStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSwitchStmt(Context\SwitchStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterCaseClause(Context\CaseClauseContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitCaseClause(Context\CaseClauseContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDefaultClause(Context\DefaultClauseContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDefaultClause(Context\DefaultClauseContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForClassic(Context\ForClassicContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForClassic(Context\ForClassicContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForCondition(Context\ForConditionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForCondition(Context\ForConditionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForForever(Context\ForForeverContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForForever(Context\ForForeverContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForInit(Context\ForInitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForInit(Context\ForInitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForPost(Context\ForPostContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForPost(Context\ForPostContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterReturnStmt(Context\ReturnStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitReturnStmt(Context\ReturnStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExprStmt(Context\ExprStmtContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExprStmt(Context\ExprStmtContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExpr(Context\ExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExpr(Context\ExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterOrExpr(Context\OrExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitOrExpr(Context\OrExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAndExpr(Context\AndExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAndExpr(Context\AndExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEqExpr(Context\EqExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEqExpr(Context\EqExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterRelExpr(Context\RelExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitRelExpr(Context\RelExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAddExpr(Context\AddExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAddExpr(Context\AddExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterMulExpr(Context\MulExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitMulExpr(Context\MulExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNotExpr(Context\NotExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNotExpr(Context\NotExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNegExpr(Context\NegExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNegExpr(Context\NegExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAddrExpr(Context\AddrExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAddrExpr(Context\AddrExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDerefExpr(Context\DerefExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDerefExpr(Context\DerefExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAtomExpr(Context\AtomExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAtomExpr(Context\AtomExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFloatAtom(Context\FloatAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFloatAtom(Context\FloatAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIntAtom(Context\IntAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIntAtom(Context\IntAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterRuneAtom(Context\RuneAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitRuneAtom(Context\RuneAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterStringAtom(Context\StringAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitStringAtom(Context\StringAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTrueAtom(Context\TrueAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTrueAtom(Context\TrueAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFalseAtom(Context\FalseAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFalseAtom(Context\FalseAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNilAtom(Context\NilAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNilAtom(Context\NilAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterMethodAtom(Context\MethodAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitMethodAtom(Context\MethodAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterCallAtom(Context\CallAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitCallAtom(Context\CallAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIndexAtom(Context\IndexAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIndexAtom(Context\IndexAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIdAtom(Context\IdAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIdAtom(Context\IdAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterParenAtom(Context\ParenAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitParenAtom(Context\ParenAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayAtom(Context\ArrayAtomContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayAtom(Context\ArrayAtomContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayLiteral(Context\ArrayLiteralContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayLiteral(Context\ArrayLiteralContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFlatInit(Context\FlatInitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFlatInit(Context\FlatInitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNestedInitList(Context\NestedInitListContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNestedInitList(Context\NestedInitListContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNestedInit(Context\NestedInitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNestedInit(Context\NestedInitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArgList(Context\ArgListContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArgList(Context\ArgListContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterValArg(Context\ValArgContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitValArg(Context\ValArgContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterRefArg(Context\RefArgContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitRefArg(Context\RefArgContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTInt32(Context\TInt32Context $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTInt32(Context\TInt32Context $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTInt(Context\TIntContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTInt(Context\TIntContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTFloat32(Context\TFloat32Context $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTFloat32(Context\TFloat32Context $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTBool(Context\TBoolContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTBool(Context\TBoolContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTRune(Context\TRuneContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTRune(Context\TRuneContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTString(Context\TStringContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTString(Context\TStringContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTArray(Context\TArrayContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTArray(Context\TArrayContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTPointer(Context\TPointerContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTPointer(Context\TPointerContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitTerminal(TerminalNode $node): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitErrorNode(ErrorNode $node): void {}
}