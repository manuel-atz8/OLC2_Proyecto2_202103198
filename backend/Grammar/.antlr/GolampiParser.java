// Generated from /home/mnl/Documentos/1011/OLC2/Lab_OLC2/Proyecto1-Golampi_Interpreter/backend/Grammar/Golampi.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GolampiParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, T__12=13, T__13=14, T__14=15, T__15=16, T__16=17, 
		T__17=18, T__18=19, T__19=20, T__20=21, T__21=22, T__22=23, T__23=24, 
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, T__30=31, 
		VAR=32, CONST=33, FUNC=34, IF=35, ELSE=36, SWITCH=37, CASE=38, DEFAULT=39, 
		FOR=40, BREAK=41, CONTINUE=42, RETURN=43, TRUE=44, FALSE=45, NIL=46, INT32_T=47, 
		INT_T=48, FLOAT32_T=49, BOOL_T=50, RUNE_T=51, STRING_T=52, AND=53, OR=54, 
		FLOAT_LIT=55, INT_LIT=56, RUNE_LIT=57, STRING_LIT=58, ID=59, LINE_COMMENT=60, 
		BLOCK_COMMENT=61, WS=62;
	public static final int
		RULE_program = 0, RULE_functionDeclaration = 1, RULE_params = 2, RULE_param = 3, 
		RULE_pointerMark = 4, RULE_returnType = 5, RULE_varDeclaration = 6, RULE_constDeclaration = 7, 
		RULE_shortVarDecl = 8, RULE_idList = 9, RULE_exprList = 10, RULE_arrayDimension = 11, 
		RULE_block = 12, RULE_stmt = 13, RULE_assignStmt = 14, RULE_leftValue = 15, 
		RULE_assignOp = 16, RULE_incDecStmt = 17, RULE_ifStmt = 18, RULE_elseIfClause = 19, 
		RULE_elseClause = 20, RULE_switchStmt = 21, RULE_caseClause = 22, RULE_defaultClause = 23, 
		RULE_forStmt = 24, RULE_forInit = 25, RULE_forPost = 26, RULE_returnStmt = 27, 
		RULE_exprStmt = 28, RULE_expr = 29, RULE_atom = 30, RULE_arrayLiteral = 31, 
		RULE_arrayInitList = 32, RULE_nestedInit = 33, RULE_argList = 34, RULE_arg = 35, 
		RULE_type = 36;
	private static String[] makeRuleNames() {
		return new String[] {
			"program", "functionDeclaration", "params", "param", "pointerMark", "returnType", 
			"varDeclaration", "constDeclaration", "shortVarDecl", "idList", "exprList", 
			"arrayDimension", "block", "stmt", "assignStmt", "leftValue", "assignOp", 
			"incDecStmt", "ifStmt", "elseIfClause", "elseClause", "switchStmt", "caseClause", 
			"defaultClause", "forStmt", "forInit", "forPost", "returnStmt", "exprStmt", 
			"expr", "atom", "arrayLiteral", "arrayInitList", "nestedInit", "argList", 
			"arg", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "','", "'*'", "'='", "':='", "'['", "']'", "'{'", 
			"'}'", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", "':'", "';'", 
			"'=='", "'!='", "'>'", "'>='", "'<'", "'<='", "'+'", "'-'", "'/'", "'%'", 
			"'!'", "'&'", "'.'", "'var'", "'const'", "'func'", "'if'", "'else'", 
			"'switch'", "'case'", "'default'", "'for'", "'break'", "'continue'", 
			"'return'", "'true'", "'false'", "'nil'", "'int32'", "'int'", "'float32'", 
			"'bool'", "'rune'", "'string'", "'&&'", "'||'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, "VAR", "CONST", "FUNC", 
			"IF", "ELSE", "SWITCH", "CASE", "DEFAULT", "FOR", "BREAK", "CONTINUE", 
			"RETURN", "TRUE", "FALSE", "NIL", "INT32_T", "INT_T", "FLOAT32_T", "BOOL_T", 
			"RUNE_T", "STRING_T", "AND", "OR", "FLOAT_LIT", "INT_LIT", "RUNE_LIT", 
			"STRING_LIT", "ID", "LINE_COMMENT", "BLOCK_COMMENT", "WS"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Golampi.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GolampiParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ProgramContext extends ParserRuleContext {
		public TerminalNode EOF() { return getToken(GolampiParser.EOF, 0); }
		public List<FunctionDeclarationContext> functionDeclaration() {
			return getRuleContexts(FunctionDeclarationContext.class);
		}
		public FunctionDeclarationContext functionDeclaration(int i) {
			return getRuleContext(FunctionDeclarationContext.class,i);
		}
		public List<VarDeclarationContext> varDeclaration() {
			return getRuleContexts(VarDeclarationContext.class);
		}
		public VarDeclarationContext varDeclaration(int i) {
			return getRuleContext(VarDeclarationContext.class,i);
		}
		public List<ConstDeclarationContext> constDeclaration() {
			return getRuleContexts(ConstDeclarationContext.class);
		}
		public ConstDeclarationContext constDeclaration(int i) {
			return getRuleContext(ConstDeclarationContext.class,i);
		}
		public ProgramContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_program; }
	}

	public final ProgramContext program() throws RecognitionException {
		ProgramContext _localctx = new ProgramContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_program);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(79);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 30064771072L) != 0)) {
				{
				setState(77);
				_errHandler.sync(this);
				switch (_input.LA(1)) {
				case FUNC:
					{
					setState(74);
					functionDeclaration();
					}
					break;
				case VAR:
					{
					setState(75);
					varDeclaration();
					}
					break;
				case CONST:
					{
					setState(76);
					constDeclaration();
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				}
				setState(81);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(82);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FunctionDeclarationContext extends ParserRuleContext {
		public TerminalNode FUNC() { return getToken(GolampiParser.FUNC, 0); }
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamsContext params() {
			return getRuleContext(ParamsContext.class,0);
		}
		public ReturnTypeContext returnType() {
			return getRuleContext(ReturnTypeContext.class,0);
		}
		public FunctionDeclarationContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_functionDeclaration; }
	}

	public final FunctionDeclarationContext functionDeclaration() throws RecognitionException {
		FunctionDeclarationContext _localctx = new FunctionDeclarationContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_functionDeclaration);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(84);
			match(FUNC);
			setState(85);
			match(ID);
			setState(86);
			match(T__0);
			setState(88);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(87);
				params();
				}
			}

			setState(90);
			match(T__1);
			setState(92);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 8866461766385810L) != 0)) {
				{
				setState(91);
				returnType();
				}
			}

			setState(94);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamsContext extends ParserRuleContext {
		public List<ParamContext> param() {
			return getRuleContexts(ParamContext.class);
		}
		public ParamContext param(int i) {
			return getRuleContext(ParamContext.class,i);
		}
		public ParamsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_params; }
	}

	public final ParamsContext params() throws RecognitionException {
		ParamsContext _localctx = new ParamsContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_params);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(96);
			param();
			setState(101);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(97);
				match(T__2);
				setState(98);
				param();
				}
				}
				setState(103);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public PointerMarkContext pointerMark() {
			return getRuleContext(PointerMarkContext.class,0);
		}
		public ParamContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_param; }
	}

	public final ParamContext param() throws RecognitionException {
		ParamContext _localctx = new ParamContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_param);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(104);
			match(ID);
			setState(106);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
			case 1:
				{
				setState(105);
				pointerMark();
				}
				break;
			}
			setState(108);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PointerMarkContext extends ParserRuleContext {
		public PointerMarkContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_pointerMark; }
	}

	public final PointerMarkContext pointerMark() throws RecognitionException {
		PointerMarkContext _localctx = new PointerMarkContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_pointerMark);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(110);
			match(T__3);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnTypeContext extends ParserRuleContext {
		public List<TypeContext> type() {
			return getRuleContexts(TypeContext.class);
		}
		public TypeContext type(int i) {
			return getRuleContext(TypeContext.class,i);
		}
		public ReturnTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnType; }
	}

	public final ReturnTypeContext returnType() throws RecognitionException {
		ReturnTypeContext _localctx = new ReturnTypeContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_returnType);
		int _la;
		try {
			setState(123);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__3:
			case T__6:
			case INT32_T:
			case INT_T:
			case FLOAT32_T:
			case BOOL_T:
			case RUNE_T:
			case STRING_T:
				enterOuterAlt(_localctx, 1);
				{
				setState(112);
				type();
				}
				break;
			case T__0:
				enterOuterAlt(_localctx, 2);
				{
				setState(113);
				match(T__0);
				setState(114);
				type();
				setState(117); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(115);
					match(T__2);
					setState(116);
					type();
					}
					}
					setState(119); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==T__2 );
				setState(121);
				match(T__1);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class VarDeclarationContext extends ParserRuleContext {
		public TerminalNode VAR() { return getToken(GolampiParser.VAR, 0); }
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public List<ArrayDimensionContext> arrayDimension() {
			return getRuleContexts(ArrayDimensionContext.class);
		}
		public ArrayDimensionContext arrayDimension(int i) {
			return getRuleContext(ArrayDimensionContext.class,i);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public VarDeclarationContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_varDeclaration; }
	}

	public final VarDeclarationContext varDeclaration() throws RecognitionException {
		VarDeclarationContext _localctx = new VarDeclarationContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_varDeclaration);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(125);
			match(VAR);
			setState(126);
			idList();
			setState(130);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,8,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(127);
					arrayDimension();
					}
					} 
				}
				setState(132);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,8,_ctx);
			}
			setState(133);
			type();
			setState(136);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__4) {
				{
				setState(134);
				match(T__4);
				setState(135);
				exprList();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclarationContext extends ParserRuleContext {
		public TerminalNode CONST() { return getToken(GolampiParser.CONST, 0); }
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ConstDeclarationContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_constDeclaration; }
	}

	public final ConstDeclarationContext constDeclaration() throws RecognitionException {
		ConstDeclarationContext _localctx = new ConstDeclarationContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_constDeclaration);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(138);
			match(CONST);
			setState(139);
			match(ID);
			setState(140);
			type();
			setState(141);
			match(T__4);
			setState(142);
			expr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ShortVarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public ShortVarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_shortVarDecl; }
	}

	public final ShortVarDeclContext shortVarDecl() throws RecognitionException {
		ShortVarDeclContext _localctx = new ShortVarDeclContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_shortVarDecl);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(144);
			idList();
			setState(145);
			match(T__5);
			setState(146);
			exprList();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IdListContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GolampiParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GolampiParser.ID, i);
		}
		public IdListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_idList; }
	}

	public final IdListContext idList() throws RecognitionException {
		IdListContext _localctx = new IdListContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_idList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(148);
			match(ID);
			setState(153);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(149);
				match(T__2);
				setState(150);
				match(ID);
				}
				}
				setState(155);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprListContext extends ParserRuleContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public ExprListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_exprList; }
	}

	public final ExprListContext exprList() throws RecognitionException {
		ExprListContext _localctx = new ExprListContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_exprList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(156);
			expr(0);
			setState(161);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(157);
				match(T__2);
				setState(158);
				expr(0);
				}
				}
				setState(163);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayDimensionContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ArrayDimensionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayDimension; }
	}

	public final ArrayDimensionContext arrayDimension() throws RecognitionException {
		ArrayDimensionContext _localctx = new ArrayDimensionContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_arrayDimension);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(164);
			match(T__6);
			setState(165);
			expr(0);
			setState(166);
			match(T__7);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BlockContext extends ParserRuleContext {
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public BlockContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_block; }
	}

	public final BlockContext block() throws RecognitionException {
		BlockContext _localctx = new BlockContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(168);
			match(T__8);
			setState(172);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117032531925926546L) != 0)) {
				{
				{
				setState(169);
				stmt();
				}
				}
				setState(174);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(175);
			match(T__9);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class StmtContext extends ParserRuleContext {
		public VarDeclarationContext varDeclaration() {
			return getRuleContext(VarDeclarationContext.class,0);
		}
		public ConstDeclarationContext constDeclaration() {
			return getRuleContext(ConstDeclarationContext.class,0);
		}
		public ShortVarDeclContext shortVarDecl() {
			return getRuleContext(ShortVarDeclContext.class,0);
		}
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public IncDecStmtContext incDecStmt() {
			return getRuleContext(IncDecStmtContext.class,0);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public SwitchStmtContext switchStmt() {
			return getRuleContext(SwitchStmtContext.class,0);
		}
		public ForStmtContext forStmt() {
			return getRuleContext(ForStmtContext.class,0);
		}
		public TerminalNode BREAK() { return getToken(GolampiParser.BREAK, 0); }
		public TerminalNode CONTINUE() { return getToken(GolampiParser.CONTINUE, 0); }
		public ReturnStmtContext returnStmt() {
			return getRuleContext(ReturnStmtContext.class,0);
		}
		public ExprStmtContext exprStmt() {
			return getRuleContext(ExprStmtContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public StmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_stmt; }
	}

	public final StmtContext stmt() throws RecognitionException {
		StmtContext _localctx = new StmtContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_stmt);
		try {
			setState(190);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(177);
				varDeclaration();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(178);
				constDeclaration();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(179);
				shortVarDecl();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(180);
				assignStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(181);
				incDecStmt();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(182);
				ifStmt();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(183);
				switchStmt();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(184);
				forStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(185);
				match(BREAK);
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(186);
				match(CONTINUE);
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(187);
				returnStmt();
				}
				break;
			case 12:
				enterOuterAlt(_localctx, 12);
				{
				setState(188);
				exprStmt();
				}
				break;
			case 13:
				enterOuterAlt(_localctx, 13);
				{
				setState(189);
				block();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignStmtContext extends ParserRuleContext {
		public LeftValueContext leftValue() {
			return getRuleContext(LeftValueContext.class,0);
		}
		public AssignOpContext assignOp() {
			return getRuleContext(AssignOpContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public AssignStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignStmt; }
	}

	public final AssignStmtContext assignStmt() throws RecognitionException {
		AssignStmtContext _localctx = new AssignStmtContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_assignStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(192);
			leftValue();
			setState(193);
			assignOp();
			setState(194);
			expr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LeftValueContext extends ParserRuleContext {
		public LeftValueContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_leftValue; }
	 
		public LeftValueContext() { }
		public void copyFrom(LeftValueContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LValuePointerContext extends LeftValueContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public LValuePointerContext(LeftValueContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LValueArrayContext extends LeftValueContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public LValueArrayContext(LeftValueContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LValueIdContext extends LeftValueContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public LValueIdContext(LeftValueContext ctx) { copyFrom(ctx); }
	}

	public final LeftValueContext leftValue() throws RecognitionException {
		LeftValueContext _localctx = new LeftValueContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_leftValue);
		int _la;
		try {
			setState(208);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,15,_ctx) ) {
			case 1:
				_localctx = new LValueIdContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(196);
				match(ID);
				}
				break;
			case 2:
				_localctx = new LValueArrayContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(197);
				match(ID);
				setState(202); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(198);
					match(T__6);
					setState(199);
					expr(0);
					setState(200);
					match(T__7);
					}
					}
					setState(204); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==T__6 );
				}
				break;
			case 3:
				_localctx = new LValuePointerContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(206);
				match(T__3);
				setState(207);
				match(ID);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignOpContext extends ParserRuleContext {
		public AssignOpContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignOp; }
	}

	public final AssignOpContext assignOp() throws RecognitionException {
		AssignOpContext _localctx = new AssignOpContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_assignOp);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(210);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 30752L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IncDecStmtContext extends ParserRuleContext {
		public IncDecStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_incDecStmt; }
	 
		public IncDecStmtContext() { }
		public void copyFrom(IncDecStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IncStmtContext extends IncDecStmtContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public IncStmtContext(IncDecStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DecStmtContext extends IncDecStmtContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public DecStmtContext(IncDecStmtContext ctx) { copyFrom(ctx); }
	}

	public final IncDecStmtContext incDecStmt() throws RecognitionException {
		IncDecStmtContext _localctx = new IncDecStmtContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_incDecStmt);
		try {
			setState(216);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,16,_ctx) ) {
			case 1:
				_localctx = new IncStmtContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(212);
				match(ID);
				setState(213);
				match(T__14);
				}
				break;
			case 2:
				_localctx = new DecStmtContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(214);
				match(ID);
				setState(215);
				match(T__15);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IfStmtContext extends ParserRuleContext {
		public TerminalNode IF() { return getToken(GolampiParser.IF, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public List<ElseIfClauseContext> elseIfClause() {
			return getRuleContexts(ElseIfClauseContext.class);
		}
		public ElseIfClauseContext elseIfClause(int i) {
			return getRuleContext(ElseIfClauseContext.class,i);
		}
		public ElseClauseContext elseClause() {
			return getRuleContext(ElseClauseContext.class,0);
		}
		public IfStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_ifStmt; }
	}

	public final IfStmtContext ifStmt() throws RecognitionException {
		IfStmtContext _localctx = new IfStmtContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_ifStmt);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(218);
			match(IF);
			setState(219);
			expr(0);
			setState(220);
			block();
			setState(224);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,17,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(221);
					elseIfClause();
					}
					} 
				}
				setState(226);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,17,_ctx);
			}
			setState(228);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(227);
				elseClause();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ElseIfClauseContext extends ParserRuleContext {
		public TerminalNode ELSE() { return getToken(GolampiParser.ELSE, 0); }
		public TerminalNode IF() { return getToken(GolampiParser.IF, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ElseIfClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_elseIfClause; }
	}

	public final ElseIfClauseContext elseIfClause() throws RecognitionException {
		ElseIfClauseContext _localctx = new ElseIfClauseContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_elseIfClause);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(230);
			match(ELSE);
			setState(231);
			match(IF);
			setState(232);
			expr(0);
			setState(233);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ElseClauseContext extends ParserRuleContext {
		public TerminalNode ELSE() { return getToken(GolampiParser.ELSE, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ElseClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_elseClause; }
	}

	public final ElseClauseContext elseClause() throws RecognitionException {
		ElseClauseContext _localctx = new ElseClauseContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_elseClause);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(235);
			match(ELSE);
			setState(236);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStmtContext extends ParserRuleContext {
		public TerminalNode SWITCH() { return getToken(GolampiParser.SWITCH, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public List<CaseClauseContext> caseClause() {
			return getRuleContexts(CaseClauseContext.class);
		}
		public CaseClauseContext caseClause(int i) {
			return getRuleContext(CaseClauseContext.class,i);
		}
		public DefaultClauseContext defaultClause() {
			return getRuleContext(DefaultClauseContext.class,0);
		}
		public SwitchStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchStmt; }
	}

	public final SwitchStmtContext switchStmt() throws RecognitionException {
		SwitchStmtContext _localctx = new SwitchStmtContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_switchStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(238);
			match(SWITCH);
			setState(239);
			expr(0);
			setState(240);
			match(T__8);
			setState(244);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==CASE) {
				{
				{
				setState(241);
				caseClause();
				}
				}
				setState(246);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(248);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(247);
				defaultClause();
				}
			}

			setState(250);
			match(T__9);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class CaseClauseContext extends ParserRuleContext {
		public TerminalNode CASE() { return getToken(GolampiParser.CASE, 0); }
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public CaseClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_caseClause; }
	}

	public final CaseClauseContext caseClause() throws RecognitionException {
		CaseClauseContext _localctx = new CaseClauseContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_caseClause);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(252);
			match(CASE);
			setState(253);
			exprList();
			setState(254);
			match(T__16);
			setState(258);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117032531925926546L) != 0)) {
				{
				{
				setState(255);
				stmt();
				}
				}
				setState(260);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DefaultClauseContext extends ParserRuleContext {
		public TerminalNode DEFAULT() { return getToken(GolampiParser.DEFAULT, 0); }
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public DefaultClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_defaultClause; }
	}

	public final DefaultClauseContext defaultClause() throws RecognitionException {
		DefaultClauseContext _localctx = new DefaultClauseContext(_ctx, getState());
		enterRule(_localctx, 46, RULE_defaultClause);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(261);
			match(DEFAULT);
			setState(262);
			match(T__16);
			setState(266);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117032531925926546L) != 0)) {
				{
				{
				setState(263);
				stmt();
				}
				}
				setState(268);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForStmtContext extends ParserRuleContext {
		public ForStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forStmt; }
	 
		public ForStmtContext() { }
		public void copyFrom(ForStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForForeverContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GolampiParser.FOR, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForForeverContext(ForStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForClassicContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GolampiParser.FOR, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForInitContext forInit() {
			return getRuleContext(ForInitContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ForPostContext forPost() {
			return getRuleContext(ForPostContext.class,0);
		}
		public ForClassicContext(ForStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForConditionContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GolampiParser.FOR, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForConditionContext(ForStmtContext ctx) { copyFrom(ctx); }
	}

	public final ForStmtContext forStmt() throws RecognitionException {
		ForStmtContext _localctx = new ForStmtContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_forStmt);
		int _la;
		try {
			setState(288);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,26,_ctx) ) {
			case 1:
				_localctx = new ForClassicContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(269);
				match(FOR);
				setState(271);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__3 || _la==ID) {
					{
					setState(270);
					forInit();
					}
				}

				setState(273);
				match(T__17);
				setState(275);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117015854567915666L) != 0)) {
					{
					setState(274);
					expr(0);
					}
				}

				setState(277);
				match(T__17);
				setState(279);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__3 || _la==ID) {
					{
					setState(278);
					forPost();
					}
				}

				setState(281);
				block();
				}
				break;
			case 2:
				_localctx = new ForConditionContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(282);
				match(FOR);
				setState(283);
				expr(0);
				setState(284);
				block();
				}
				break;
			case 3:
				_localctx = new ForForeverContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(286);
				match(FOR);
				setState(287);
				block();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForInitContext extends ParserRuleContext {
		public ShortVarDeclContext shortVarDecl() {
			return getRuleContext(ShortVarDeclContext.class,0);
		}
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public IncDecStmtContext incDecStmt() {
			return getRuleContext(IncDecStmtContext.class,0);
		}
		public ForInitContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forInit; }
	}

	public final ForInitContext forInit() throws RecognitionException {
		ForInitContext _localctx = new ForInitContext(_ctx, getState());
		enterRule(_localctx, 50, RULE_forInit);
		try {
			setState(293);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,27,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(290);
				shortVarDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(291);
				assignStmt();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(292);
				incDecStmt();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForPostContext extends ParserRuleContext {
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public IncDecStmtContext incDecStmt() {
			return getRuleContext(IncDecStmtContext.class,0);
		}
		public ForPostContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forPost; }
	}

	public final ForPostContext forPost() throws RecognitionException {
		ForPostContext _localctx = new ForPostContext(_ctx, getState());
		enterRule(_localctx, 52, RULE_forPost);
		try {
			setState(297);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,28,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(295);
				assignStmt();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(296);
				incDecStmt();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnStmtContext extends ParserRuleContext {
		public TerminalNode RETURN() { return getToken(GolampiParser.RETURN, 0); }
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public ReturnStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnStmt; }
	}

	public final ReturnStmtContext returnStmt() throws RecognitionException {
		ReturnStmtContext _localctx = new ReturnStmtContext(_ctx, getState());
		enterRule(_localctx, 54, RULE_returnStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(299);
			match(RETURN);
			setState(301);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,29,_ctx) ) {
			case 1:
				{
				setState(300);
				exprList();
				}
				break;
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprStmtContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ExprStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_exprStmt; }
	}

	public final ExprStmtContext exprStmt() throws RecognitionException {
		ExprStmtContext _localctx = new ExprStmtContext(_ctx, getState());
		enterRule(_localctx, 56, RULE_exprStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(303);
			expr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprContext extends ParserRuleContext {
		public ExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expr; }
	 
		public ExprContext() { }
		public void copyFrom(ExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AndExprContext extends ExprContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public TerminalNode AND() { return getToken(GolampiParser.AND, 0); }
		public AndExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MulExprContext extends ExprContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public MulExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddrExprContext extends ExprContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public AddrExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class EqualExprContext extends ExprContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public EqualExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DerefExprContext extends ExprContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public DerefExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RelExprContext extends ExprContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public RelExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NegExprContext extends ExprContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public NegExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddExprContext extends ExprContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public AddExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NotExprContext extends ExprContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public NotExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AtomExprContext extends ExprContext {
		public AtomContext atom() {
			return getRuleContext(AtomContext.class,0);
		}
		public AtomExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class OrExprContext extends ExprContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public TerminalNode OR() { return getToken(GolampiParser.OR, 0); }
		public OrExprContext(ExprContext ctx) { copyFrom(ctx); }
	}

	public final ExprContext expr() throws RecognitionException {
		return expr(0);
	}

	private ExprContext expr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ExprContext _localctx = new ExprContext(_ctx, _parentState);
		ExprContext _prevctx = _localctx;
		int _startState = 58;
		enterRecursionRule(_localctx, 58, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(315);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__28:
				{
				_localctx = new NotExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(306);
				match(T__28);
				setState(307);
				expr(5);
				}
				break;
			case T__25:
				{
				_localctx = new NegExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(308);
				match(T__25);
				setState(309);
				expr(4);
				}
				break;
			case T__29:
				{
				_localctx = new AddrExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(310);
				match(T__29);
				setState(311);
				match(ID);
				}
				break;
			case T__3:
				{
				_localctx = new DerefExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(312);
				match(T__3);
				setState(313);
				expr(2);
				}
				break;
			case T__0:
			case T__6:
			case TRUE:
			case FALSE:
			case NIL:
			case FLOAT_LIT:
			case INT_LIT:
			case RUNE_LIT:
			case STRING_LIT:
			case ID:
				{
				_localctx = new AtomExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(314);
				atom();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			_ctx.stop = _input.LT(-1);
			setState(337);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(335);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,31,_ctx) ) {
					case 1:
						{
						_localctx = new OrExprContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(317);
						if (!(precpred(_ctx, 11))) throw new FailedPredicateException(this, "precpred(_ctx, 11)");
						setState(318);
						match(OR);
						setState(319);
						expr(12);
						}
						break;
					case 2:
						{
						_localctx = new AndExprContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(320);
						if (!(precpred(_ctx, 10))) throw new FailedPredicateException(this, "precpred(_ctx, 10)");
						setState(321);
						match(AND);
						setState(322);
						expr(11);
						}
						break;
					case 3:
						{
						_localctx = new EqualExprContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(323);
						if (!(precpred(_ctx, 9))) throw new FailedPredicateException(this, "precpred(_ctx, 9)");
						setState(324);
						_la = _input.LA(1);
						if ( !(_la==T__18 || _la==T__19) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(325);
						expr(10);
						}
						break;
					case 4:
						{
						_localctx = new RelExprContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(326);
						if (!(precpred(_ctx, 8))) throw new FailedPredicateException(this, "precpred(_ctx, 8)");
						setState(327);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 31457280L) != 0)) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(328);
						expr(9);
						}
						break;
					case 5:
						{
						_localctx = new AddExprContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(329);
						if (!(precpred(_ctx, 7))) throw new FailedPredicateException(this, "precpred(_ctx, 7)");
						setState(330);
						_la = _input.LA(1);
						if ( !(_la==T__24 || _la==T__25) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(331);
						expr(8);
						}
						break;
					case 6:
						{
						_localctx = new MulExprContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(332);
						if (!(precpred(_ctx, 6))) throw new FailedPredicateException(this, "precpred(_ctx, 6)");
						setState(333);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 402653200L) != 0)) ) {
						_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(334);
						expr(7);
						}
						break;
					}
					} 
				}
				setState(339);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AtomContext extends ParserRuleContext {
		public AtomContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_atom; }
	 
		public AtomContext() { }
		public void copyFrom(AtomContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TrueAtomContext extends AtomContext {
		public TerminalNode TRUE() { return getToken(GolampiParser.TRUE, 0); }
		public TrueAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FalseAtomContext extends AtomContext {
		public TerminalNode FALSE() { return getToken(GolampiParser.FALSE, 0); }
		public FalseAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MethodAtomContext extends AtomContext {
		public List<TerminalNode> ID() { return getTokens(GolampiParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GolampiParser.ID, i);
		}
		public ArgListContext argList() {
			return getRuleContext(ArgListContext.class,0);
		}
		public MethodAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StringAtomContext extends AtomContext {
		public TerminalNode STRING_LIT() { return getToken(GolampiParser.STRING_LIT, 0); }
		public StringAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IndexAtomContext extends AtomContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public IndexAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilAtomContext extends AtomContext {
		public TerminalNode NIL() { return getToken(GolampiParser.NIL, 0); }
		public NilAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class CallAtomContext extends AtomContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public ArgListContext argList() {
			return getRuleContext(ArgListContext.class,0);
		}
		public CallAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAtomContext extends AtomContext {
		public ArrayLiteralContext arrayLiteral() {
			return getRuleContext(ArrayLiteralContext.class,0);
		}
		public ArrayAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RuneAtomContext extends AtomContext {
		public TerminalNode RUNE_LIT() { return getToken(GolampiParser.RUNE_LIT, 0); }
		public RuneAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ParenAtomContext extends AtomContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ParenAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatAtomContext extends AtomContext {
		public TerminalNode FLOAT_LIT() { return getToken(GolampiParser.FLOAT_LIT, 0); }
		public FloatAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IntAtomContext extends AtomContext {
		public TerminalNode INT_LIT() { return getToken(GolampiParser.INT_LIT, 0); }
		public IntAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdAtomContext extends AtomContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public IdAtomContext(AtomContext ctx) { copyFrom(ctx); }
	}

	public final AtomContext atom() throws RecognitionException {
		AtomContext _localctx = new AtomContext(_ctx, getState());
		enterRule(_localctx, 60, RULE_atom);
		int _la;
		try {
			int _alt;
			setState(376);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,36,_ctx) ) {
			case 1:
				_localctx = new FloatAtomContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(340);
				match(FLOAT_LIT);
				}
				break;
			case 2:
				_localctx = new IntAtomContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(341);
				match(INT_LIT);
				}
				break;
			case 3:
				_localctx = new RuneAtomContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(342);
				match(RUNE_LIT);
				}
				break;
			case 4:
				_localctx = new StringAtomContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(343);
				match(STRING_LIT);
				}
				break;
			case 5:
				_localctx = new TrueAtomContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(344);
				match(TRUE);
				}
				break;
			case 6:
				_localctx = new FalseAtomContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(345);
				match(FALSE);
				}
				break;
			case 7:
				_localctx = new NilAtomContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(346);
				match(NIL);
				}
				break;
			case 8:
				_localctx = new MethodAtomContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(347);
				match(ID);
				setState(348);
				match(T__30);
				setState(349);
				match(ID);
				setState(350);
				match(T__0);
				setState(352);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117015854567915666L) != 0)) {
					{
					setState(351);
					argList();
					}
				}

				setState(354);
				match(T__1);
				}
				break;
			case 9:
				_localctx = new CallAtomContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(355);
				match(ID);
				setState(356);
				match(T__0);
				setState(358);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117015854567915666L) != 0)) {
					{
					setState(357);
					argList();
					}
				}

				setState(360);
				match(T__1);
				}
				break;
			case 10:
				_localctx = new IndexAtomContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(361);
				match(ID);
				setState(366); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(362);
						match(T__6);
						setState(363);
						expr(0);
						setState(364);
						match(T__7);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(368); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,35,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 11:
				_localctx = new IdAtomContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(370);
				match(ID);
				}
				break;
			case 12:
				_localctx = new ParenAtomContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(371);
				match(T__0);
				setState(372);
				expr(0);
				setState(373);
				match(T__1);
				}
				break;
			case 13:
				_localctx = new ArrayAtomContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(375);
				arrayLiteral();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayLiteralContext extends ParserRuleContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public List<ArrayDimensionContext> arrayDimension() {
			return getRuleContexts(ArrayDimensionContext.class);
		}
		public ArrayDimensionContext arrayDimension(int i) {
			return getRuleContext(ArrayDimensionContext.class,i);
		}
		public ArrayInitListContext arrayInitList() {
			return getRuleContext(ArrayInitListContext.class,0);
		}
		public ArrayLiteralContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayLiteral; }
	}

	public final ArrayLiteralContext arrayLiteral() throws RecognitionException {
		ArrayLiteralContext _localctx = new ArrayLiteralContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_arrayLiteral);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(379); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(378);
					arrayDimension();
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(381); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,37,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			setState(383);
			type();
			setState(384);
			match(T__8);
			setState(386);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117015854567916178L) != 0)) {
				{
				setState(385);
				arrayInitList();
				}
			}

			setState(388);
			match(T__9);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayInitListContext extends ParserRuleContext {
		public ArrayInitListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayInitList; }
	 
		public ArrayInitListContext() { }
		public void copyFrom(ArrayInitListContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FlatInitContext extends ArrayInitListContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public FlatInitContext(ArrayInitListContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NestedInitListContext extends ArrayInitListContext {
		public List<NestedInitContext> nestedInit() {
			return getRuleContexts(NestedInitContext.class);
		}
		public NestedInitContext nestedInit(int i) {
			return getRuleContext(NestedInitContext.class,i);
		}
		public NestedInitListContext(ArrayInitListContext ctx) { copyFrom(ctx); }
	}

	public final ArrayInitListContext arrayInitList() throws RecognitionException {
		ArrayInitListContext _localctx = new ArrayInitListContext(_ctx, getState());
		enterRule(_localctx, 64, RULE_arrayInitList);
		int _la;
		try {
			int _alt;
			setState(412);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
			case T__3:
			case T__6:
			case T__25:
			case T__28:
			case T__29:
			case TRUE:
			case FALSE:
			case NIL:
			case FLOAT_LIT:
			case INT_LIT:
			case RUNE_LIT:
			case STRING_LIT:
			case ID:
				_localctx = new FlatInitContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(390);
				expr(0);
				setState(395);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,39,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(391);
						match(T__2);
						setState(392);
						expr(0);
						}
						} 
					}
					setState(397);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,39,_ctx);
				}
				setState(399);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__2) {
					{
					setState(398);
					match(T__2);
					}
				}

				}
				break;
			case T__8:
				_localctx = new NestedInitListContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(401);
				nestedInit();
				setState(406);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,41,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(402);
						match(T__2);
						setState(403);
						nestedInit();
						}
						} 
					}
					setState(408);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,41,_ctx);
				}
				setState(410);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__2) {
					{
					setState(409);
					match(T__2);
					}
				}

				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class NestedInitContext extends ParserRuleContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public NestedInitContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_nestedInit; }
	}

	public final NestedInitContext nestedInit() throws RecognitionException {
		NestedInitContext _localctx = new NestedInitContext(_ctx, getState());
		enterRule(_localctx, 66, RULE_nestedInit);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(414);
			match(T__8);
			setState(415);
			expr(0);
			setState(420);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,44,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(416);
					match(T__2);
					setState(417);
					expr(0);
					}
					} 
				}
				setState(422);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,44,_ctx);
			}
			setState(424);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__2) {
				{
				setState(423);
				match(T__2);
				}
			}

			setState(426);
			match(T__9);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArgListContext extends ParserRuleContext {
		public List<ArgContext> arg() {
			return getRuleContexts(ArgContext.class);
		}
		public ArgContext arg(int i) {
			return getRuleContext(ArgContext.class,i);
		}
		public ArgListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_argList; }
	}

	public final ArgListContext argList() throws RecognitionException {
		ArgListContext _localctx = new ArgListContext(_ctx, getState());
		enterRule(_localctx, 68, RULE_argList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(428);
			arg();
			setState(433);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(429);
				match(T__2);
				setState(430);
				arg();
				}
				}
				setState(435);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArgContext extends ParserRuleContext {
		public ArgContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arg; }
	 
		public ArgContext() { }
		public void copyFrom(ArgContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ValArgContext extends ArgContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ValArgContext(ArgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RefArgContext extends ArgContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public RefArgContext(ArgContext ctx) { copyFrom(ctx); }
	}

	public final ArgContext arg() throws RecognitionException {
		ArgContext _localctx = new ArgContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_arg);
		try {
			setState(439);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,47,_ctx) ) {
			case 1:
				_localctx = new ValArgContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(436);
				expr(0);
				}
				break;
			case 2:
				_localctx = new RefArgContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(437);
				match(T__29);
				setState(438);
				match(ID);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeContext extends ParserRuleContext {
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	 
		public TypeContext() { }
		public void copyFrom(TypeContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TStringContext extends TypeContext {
		public TerminalNode STRING_T() { return getToken(GolampiParser.STRING_T, 0); }
		public TStringContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TBoolContext extends TypeContext {
		public TerminalNode BOOL_T() { return getToken(GolampiParser.BOOL_T, 0); }
		public TBoolContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TPointerContext extends TypeContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public TPointerContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TInt32Context extends TypeContext {
		public TerminalNode INT32_T() { return getToken(GolampiParser.INT32_T, 0); }
		public TInt32Context(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TArrayContext extends TypeContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public List<ArrayDimensionContext> arrayDimension() {
			return getRuleContexts(ArrayDimensionContext.class);
		}
		public ArrayDimensionContext arrayDimension(int i) {
			return getRuleContext(ArrayDimensionContext.class,i);
		}
		public TArrayContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TRuneContext extends TypeContext {
		public TerminalNode RUNE_T() { return getToken(GolampiParser.RUNE_T, 0); }
		public TRuneContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TFloat32Context extends TypeContext {
		public TerminalNode FLOAT32_T() { return getToken(GolampiParser.FLOAT32_T, 0); }
		public TFloat32Context(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TIntContext extends TypeContext {
		public TerminalNode INT_T() { return getToken(GolampiParser.INT_T, 0); }
		public TIntContext(TypeContext ctx) { copyFrom(ctx); }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 72, RULE_type);
		try {
			int _alt;
			setState(456);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case INT32_T:
				_localctx = new TInt32Context(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(441);
				match(INT32_T);
				}
				break;
			case INT_T:
				_localctx = new TIntContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(442);
				match(INT_T);
				}
				break;
			case FLOAT32_T:
				_localctx = new TFloat32Context(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(443);
				match(FLOAT32_T);
				}
				break;
			case BOOL_T:
				_localctx = new TBoolContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(444);
				match(BOOL_T);
				}
				break;
			case RUNE_T:
				_localctx = new TRuneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(445);
				match(RUNE_T);
				}
				break;
			case STRING_T:
				_localctx = new TStringContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(446);
				match(STRING_T);
				}
				break;
			case T__6:
				_localctx = new TArrayContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(448); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(447);
						arrayDimension();
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(450); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,48,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				setState(452);
				type();
				}
				break;
			case T__3:
				_localctx = new TPointerContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(454);
				match(T__3);
				setState(455);
				type();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public boolean sempred(RuleContext _localctx, int ruleIndex, int predIndex) {
		switch (ruleIndex) {
		case 29:
			return expr_sempred((ExprContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expr_sempred(ExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 11);
		case 1:
			return precpred(_ctx, 10);
		case 2:
			return precpred(_ctx, 9);
		case 3:
			return precpred(_ctx, 8);
		case 4:
			return precpred(_ctx, 7);
		case 5:
			return precpred(_ctx, 6);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u0001>\u01cb\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0002\u001b\u0007\u001b"+
		"\u0002\u001c\u0007\u001c\u0002\u001d\u0007\u001d\u0002\u001e\u0007\u001e"+
		"\u0002\u001f\u0007\u001f\u0002 \u0007 \u0002!\u0007!\u0002\"\u0007\"\u0002"+
		"#\u0007#\u0002$\u0007$\u0001\u0000\u0001\u0000\u0001\u0000\u0005\u0000"+
		"N\b\u0000\n\u0000\f\u0000Q\t\u0000\u0001\u0000\u0001\u0000\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001Y\b\u0001\u0001\u0001"+
		"\u0001\u0001\u0003\u0001]\b\u0001\u0001\u0001\u0001\u0001\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0005\u0002d\b\u0002\n\u0002\f\u0002g\t\u0002"+
		"\u0001\u0003\u0001\u0003\u0003\u0003k\b\u0003\u0001\u0003\u0001\u0003"+
		"\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005"+
		"\u0001\u0005\u0004\u0005v\b\u0005\u000b\u0005\f\u0005w\u0001\u0005\u0001"+
		"\u0005\u0003\u0005|\b\u0005\u0001\u0006\u0001\u0006\u0001\u0006\u0005"+
		"\u0006\u0081\b\u0006\n\u0006\f\u0006\u0084\t\u0006\u0001\u0006\u0001\u0006"+
		"\u0001\u0006\u0003\u0006\u0089\b\u0006\u0001\u0007\u0001\u0007\u0001\u0007"+
		"\u0001\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\t\u0001\t\u0001\t\u0005\t\u0098\b\t\n\t\f\t\u009b\t\t\u0001\n\u0001\n"+
		"\u0001\n\u0005\n\u00a0\b\n\n\n\f\n\u00a3\t\n\u0001\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\u000b\u0001\f\u0001\f\u0005\f\u00ab\b\f\n\f\f\f\u00ae\t\f"+
		"\u0001\f\u0001\f\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0003\r\u00bf\b\r\u0001"+
		"\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000f\u0001\u000f\u0001"+
		"\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0004\u000f\u00cb\b\u000f\u000b"+
		"\u000f\f\u000f\u00cc\u0001\u000f\u0001\u000f\u0003\u000f\u00d1\b\u000f"+
		"\u0001\u0010\u0001\u0010\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011"+
		"\u0003\u0011\u00d9\b\u0011\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012"+
		"\u0005\u0012\u00df\b\u0012\n\u0012\f\u0012\u00e2\t\u0012\u0001\u0012\u0003"+
		"\u0012\u00e5\b\u0012\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001"+
		"\u0013\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0015\u0001\u0015\u0001"+
		"\u0015\u0001\u0015\u0005\u0015\u00f3\b\u0015\n\u0015\f\u0015\u00f6\t\u0015"+
		"\u0001\u0015\u0003\u0015\u00f9\b\u0015\u0001\u0015\u0001\u0015\u0001\u0016"+
		"\u0001\u0016\u0001\u0016\u0001\u0016\u0005\u0016\u0101\b\u0016\n\u0016"+
		"\f\u0016\u0104\t\u0016\u0001\u0017\u0001\u0017\u0001\u0017\u0005\u0017"+
		"\u0109\b\u0017\n\u0017\f\u0017\u010c\t\u0017\u0001\u0018\u0001\u0018\u0003"+
		"\u0018\u0110\b\u0018\u0001\u0018\u0001\u0018\u0003\u0018\u0114\b\u0018"+
		"\u0001\u0018\u0001\u0018\u0003\u0018\u0118\b\u0018\u0001\u0018\u0001\u0018"+
		"\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0003\u0018"+
		"\u0121\b\u0018\u0001\u0019\u0001\u0019\u0001\u0019\u0003\u0019\u0126\b"+
		"\u0019\u0001\u001a\u0001\u001a\u0003\u001a\u012a\b\u001a\u0001\u001b\u0001"+
		"\u001b\u0003\u001b\u012e\b\u001b\u0001\u001c\u0001\u001c\u0001\u001d\u0001"+
		"\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001"+
		"\u001d\u0001\u001d\u0001\u001d\u0003\u001d\u013c\b\u001d\u0001\u001d\u0001"+
		"\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001"+
		"\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001"+
		"\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001d\u0005\u001d\u0150"+
		"\b\u001d\n\u001d\f\u001d\u0153\t\u001d\u0001\u001e\u0001\u001e\u0001\u001e"+
		"\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e"+
		"\u0001\u001e\u0001\u001e\u0001\u001e\u0003\u001e\u0161\b\u001e\u0001\u001e"+
		"\u0001\u001e\u0001\u001e\u0001\u001e\u0003\u001e\u0167\b\u001e\u0001\u001e"+
		"\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0004\u001e"+
		"\u016f\b\u001e\u000b\u001e\f\u001e\u0170\u0001\u001e\u0001\u001e\u0001"+
		"\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0003\u001e\u0179\b\u001e\u0001"+
		"\u001f\u0004\u001f\u017c\b\u001f\u000b\u001f\f\u001f\u017d\u0001\u001f"+
		"\u0001\u001f\u0001\u001f\u0003\u001f\u0183\b\u001f\u0001\u001f\u0001\u001f"+
		"\u0001 \u0001 \u0001 \u0005 \u018a\b \n \f \u018d\t \u0001 \u0003 \u0190"+
		"\b \u0001 \u0001 \u0001 \u0005 \u0195\b \n \f \u0198\t \u0001 \u0003 "+
		"\u019b\b \u0003 \u019d\b \u0001!\u0001!\u0001!\u0001!\u0005!\u01a3\b!"+
		"\n!\f!\u01a6\t!\u0001!\u0003!\u01a9\b!\u0001!\u0001!\u0001\"\u0001\"\u0001"+
		"\"\u0005\"\u01b0\b\"\n\"\f\"\u01b3\t\"\u0001#\u0001#\u0001#\u0003#\u01b8"+
		"\b#\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0004$\u01c1\b$\u000b"+
		"$\f$\u01c2\u0001$\u0001$\u0001$\u0001$\u0003$\u01c9\b$\u0001$\u0000\u0001"+
		":%\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018\u001a"+
		"\u001c\u001e \"$&(*,.02468:<>@BDFH\u0000\u0005\u0002\u0000\u0005\u0005"+
		"\u000b\u000e\u0001\u0000\u0013\u0014\u0001\u0000\u0015\u0018\u0001\u0000"+
		"\u0019\u001a\u0002\u0000\u0004\u0004\u001b\u001c\u01fe\u0000O\u0001\u0000"+
		"\u0000\u0000\u0002T\u0001\u0000\u0000\u0000\u0004`\u0001\u0000\u0000\u0000"+
		"\u0006h\u0001\u0000\u0000\u0000\bn\u0001\u0000\u0000\u0000\n{\u0001\u0000"+
		"\u0000\u0000\f}\u0001\u0000\u0000\u0000\u000e\u008a\u0001\u0000\u0000"+
		"\u0000\u0010\u0090\u0001\u0000\u0000\u0000\u0012\u0094\u0001\u0000\u0000"+
		"\u0000\u0014\u009c\u0001\u0000\u0000\u0000\u0016\u00a4\u0001\u0000\u0000"+
		"\u0000\u0018\u00a8\u0001\u0000\u0000\u0000\u001a\u00be\u0001\u0000\u0000"+
		"\u0000\u001c\u00c0\u0001\u0000\u0000\u0000\u001e\u00d0\u0001\u0000\u0000"+
		"\u0000 \u00d2\u0001\u0000\u0000\u0000\"\u00d8\u0001\u0000\u0000\u0000"+
		"$\u00da\u0001\u0000\u0000\u0000&\u00e6\u0001\u0000\u0000\u0000(\u00eb"+
		"\u0001\u0000\u0000\u0000*\u00ee\u0001\u0000\u0000\u0000,\u00fc\u0001\u0000"+
		"\u0000\u0000.\u0105\u0001\u0000\u0000\u00000\u0120\u0001\u0000\u0000\u0000"+
		"2\u0125\u0001\u0000\u0000\u00004\u0129\u0001\u0000\u0000\u00006\u012b"+
		"\u0001\u0000\u0000\u00008\u012f\u0001\u0000\u0000\u0000:\u013b\u0001\u0000"+
		"\u0000\u0000<\u0178\u0001\u0000\u0000\u0000>\u017b\u0001\u0000\u0000\u0000"+
		"@\u019c\u0001\u0000\u0000\u0000B\u019e\u0001\u0000\u0000\u0000D\u01ac"+
		"\u0001\u0000\u0000\u0000F\u01b7\u0001\u0000\u0000\u0000H\u01c8\u0001\u0000"+
		"\u0000\u0000JN\u0003\u0002\u0001\u0000KN\u0003\f\u0006\u0000LN\u0003\u000e"+
		"\u0007\u0000MJ\u0001\u0000\u0000\u0000MK\u0001\u0000\u0000\u0000ML\u0001"+
		"\u0000\u0000\u0000NQ\u0001\u0000\u0000\u0000OM\u0001\u0000\u0000\u0000"+
		"OP\u0001\u0000\u0000\u0000PR\u0001\u0000\u0000\u0000QO\u0001\u0000\u0000"+
		"\u0000RS\u0005\u0000\u0000\u0001S\u0001\u0001\u0000\u0000\u0000TU\u0005"+
		"\"\u0000\u0000UV\u0005;\u0000\u0000VX\u0005\u0001\u0000\u0000WY\u0003"+
		"\u0004\u0002\u0000XW\u0001\u0000\u0000\u0000XY\u0001\u0000\u0000\u0000"+
		"YZ\u0001\u0000\u0000\u0000Z\\\u0005\u0002\u0000\u0000[]\u0003\n\u0005"+
		"\u0000\\[\u0001\u0000\u0000\u0000\\]\u0001\u0000\u0000\u0000]^\u0001\u0000"+
		"\u0000\u0000^_\u0003\u0018\f\u0000_\u0003\u0001\u0000\u0000\u0000`e\u0003"+
		"\u0006\u0003\u0000ab\u0005\u0003\u0000\u0000bd\u0003\u0006\u0003\u0000"+
		"ca\u0001\u0000\u0000\u0000dg\u0001\u0000\u0000\u0000ec\u0001\u0000\u0000"+
		"\u0000ef\u0001\u0000\u0000\u0000f\u0005\u0001\u0000\u0000\u0000ge\u0001"+
		"\u0000\u0000\u0000hj\u0005;\u0000\u0000ik\u0003\b\u0004\u0000ji\u0001"+
		"\u0000\u0000\u0000jk\u0001\u0000\u0000\u0000kl\u0001\u0000\u0000\u0000"+
		"lm\u0003H$\u0000m\u0007\u0001\u0000\u0000\u0000no\u0005\u0004\u0000\u0000"+
		"o\t\u0001\u0000\u0000\u0000p|\u0003H$\u0000qr\u0005\u0001\u0000\u0000"+
		"ru\u0003H$\u0000st\u0005\u0003\u0000\u0000tv\u0003H$\u0000us\u0001\u0000"+
		"\u0000\u0000vw\u0001\u0000\u0000\u0000wu\u0001\u0000\u0000\u0000wx\u0001"+
		"\u0000\u0000\u0000xy\u0001\u0000\u0000\u0000yz\u0005\u0002\u0000\u0000"+
		"z|\u0001\u0000\u0000\u0000{p\u0001\u0000\u0000\u0000{q\u0001\u0000\u0000"+
		"\u0000|\u000b\u0001\u0000\u0000\u0000}~\u0005 \u0000\u0000~\u0082\u0003"+
		"\u0012\t\u0000\u007f\u0081\u0003\u0016\u000b\u0000\u0080\u007f\u0001\u0000"+
		"\u0000\u0000\u0081\u0084\u0001\u0000\u0000\u0000\u0082\u0080\u0001\u0000"+
		"\u0000\u0000\u0082\u0083\u0001\u0000\u0000\u0000\u0083\u0085\u0001\u0000"+
		"\u0000\u0000\u0084\u0082\u0001\u0000\u0000\u0000\u0085\u0088\u0003H$\u0000"+
		"\u0086\u0087\u0005\u0005\u0000\u0000\u0087\u0089\u0003\u0014\n\u0000\u0088"+
		"\u0086\u0001\u0000\u0000\u0000\u0088\u0089\u0001\u0000\u0000\u0000\u0089"+
		"\r\u0001\u0000\u0000\u0000\u008a\u008b\u0005!\u0000\u0000\u008b\u008c"+
		"\u0005;\u0000\u0000\u008c\u008d\u0003H$\u0000\u008d\u008e\u0005\u0005"+
		"\u0000\u0000\u008e\u008f\u0003:\u001d\u0000\u008f\u000f\u0001\u0000\u0000"+
		"\u0000\u0090\u0091\u0003\u0012\t\u0000\u0091\u0092\u0005\u0006\u0000\u0000"+
		"\u0092\u0093\u0003\u0014\n\u0000\u0093\u0011\u0001\u0000\u0000\u0000\u0094"+
		"\u0099\u0005;\u0000\u0000\u0095\u0096\u0005\u0003\u0000\u0000\u0096\u0098"+
		"\u0005;\u0000\u0000\u0097\u0095\u0001\u0000\u0000\u0000\u0098\u009b\u0001"+
		"\u0000\u0000\u0000\u0099\u0097\u0001\u0000\u0000\u0000\u0099\u009a\u0001"+
		"\u0000\u0000\u0000\u009a\u0013\u0001\u0000\u0000\u0000\u009b\u0099\u0001"+
		"\u0000\u0000\u0000\u009c\u00a1\u0003:\u001d\u0000\u009d\u009e\u0005\u0003"+
		"\u0000\u0000\u009e\u00a0\u0003:\u001d\u0000\u009f\u009d\u0001\u0000\u0000"+
		"\u0000\u00a0\u00a3\u0001\u0000\u0000\u0000\u00a1\u009f\u0001\u0000\u0000"+
		"\u0000\u00a1\u00a2\u0001\u0000\u0000\u0000\u00a2\u0015\u0001\u0000\u0000"+
		"\u0000\u00a3\u00a1\u0001\u0000\u0000\u0000\u00a4\u00a5\u0005\u0007\u0000"+
		"\u0000\u00a5\u00a6\u0003:\u001d\u0000\u00a6\u00a7\u0005\b\u0000\u0000"+
		"\u00a7\u0017\u0001\u0000\u0000\u0000\u00a8\u00ac\u0005\t\u0000\u0000\u00a9"+
		"\u00ab\u0003\u001a\r\u0000\u00aa\u00a9\u0001\u0000\u0000\u0000\u00ab\u00ae"+
		"\u0001\u0000\u0000\u0000\u00ac\u00aa\u0001\u0000\u0000\u0000\u00ac\u00ad"+
		"\u0001\u0000\u0000\u0000\u00ad\u00af\u0001\u0000\u0000\u0000\u00ae\u00ac"+
		"\u0001\u0000\u0000\u0000\u00af\u00b0\u0005\n\u0000\u0000\u00b0\u0019\u0001"+
		"\u0000\u0000\u0000\u00b1\u00bf\u0003\f\u0006\u0000\u00b2\u00bf\u0003\u000e"+
		"\u0007\u0000\u00b3\u00bf\u0003\u0010\b\u0000\u00b4\u00bf\u0003\u001c\u000e"+
		"\u0000\u00b5\u00bf\u0003\"\u0011\u0000\u00b6\u00bf\u0003$\u0012\u0000"+
		"\u00b7\u00bf\u0003*\u0015\u0000\u00b8\u00bf\u00030\u0018\u0000\u00b9\u00bf"+
		"\u0005)\u0000\u0000\u00ba\u00bf\u0005*\u0000\u0000\u00bb\u00bf\u00036"+
		"\u001b\u0000\u00bc\u00bf\u00038\u001c\u0000\u00bd\u00bf\u0003\u0018\f"+
		"\u0000\u00be\u00b1\u0001\u0000\u0000\u0000\u00be\u00b2\u0001\u0000\u0000"+
		"\u0000\u00be\u00b3\u0001\u0000\u0000\u0000\u00be\u00b4\u0001\u0000\u0000"+
		"\u0000\u00be\u00b5\u0001\u0000\u0000\u0000\u00be\u00b6\u0001\u0000\u0000"+
		"\u0000\u00be\u00b7\u0001\u0000\u0000\u0000\u00be\u00b8\u0001\u0000\u0000"+
		"\u0000\u00be\u00b9\u0001\u0000\u0000\u0000\u00be\u00ba\u0001\u0000\u0000"+
		"\u0000\u00be\u00bb\u0001\u0000\u0000\u0000\u00be\u00bc\u0001\u0000\u0000"+
		"\u0000\u00be\u00bd\u0001\u0000\u0000\u0000\u00bf\u001b\u0001\u0000\u0000"+
		"\u0000\u00c0\u00c1\u0003\u001e\u000f\u0000\u00c1\u00c2\u0003 \u0010\u0000"+
		"\u00c2\u00c3\u0003:\u001d\u0000\u00c3\u001d\u0001\u0000\u0000\u0000\u00c4"+
		"\u00d1\u0005;\u0000\u0000\u00c5\u00ca\u0005;\u0000\u0000\u00c6\u00c7\u0005"+
		"\u0007\u0000\u0000\u00c7\u00c8\u0003:\u001d\u0000\u00c8\u00c9\u0005\b"+
		"\u0000\u0000\u00c9\u00cb\u0001\u0000\u0000\u0000\u00ca\u00c6\u0001\u0000"+
		"\u0000\u0000\u00cb\u00cc\u0001\u0000\u0000\u0000\u00cc\u00ca\u0001\u0000"+
		"\u0000\u0000\u00cc\u00cd\u0001\u0000\u0000\u0000\u00cd\u00d1\u0001\u0000"+
		"\u0000\u0000\u00ce\u00cf\u0005\u0004\u0000\u0000\u00cf\u00d1\u0005;\u0000"+
		"\u0000\u00d0\u00c4\u0001\u0000\u0000\u0000\u00d0\u00c5\u0001\u0000\u0000"+
		"\u0000\u00d0\u00ce\u0001\u0000\u0000\u0000\u00d1\u001f\u0001\u0000\u0000"+
		"\u0000\u00d2\u00d3\u0007\u0000\u0000\u0000\u00d3!\u0001\u0000\u0000\u0000"+
		"\u00d4\u00d5\u0005;\u0000\u0000\u00d5\u00d9\u0005\u000f\u0000\u0000\u00d6"+
		"\u00d7\u0005;\u0000\u0000\u00d7\u00d9\u0005\u0010\u0000\u0000\u00d8\u00d4"+
		"\u0001\u0000\u0000\u0000\u00d8\u00d6\u0001\u0000\u0000\u0000\u00d9#\u0001"+
		"\u0000\u0000\u0000\u00da\u00db\u0005#\u0000\u0000\u00db\u00dc\u0003:\u001d"+
		"\u0000\u00dc\u00e0\u0003\u0018\f\u0000\u00dd\u00df\u0003&\u0013\u0000"+
		"\u00de\u00dd\u0001\u0000\u0000\u0000\u00df\u00e2\u0001\u0000\u0000\u0000"+
		"\u00e0\u00de\u0001\u0000\u0000\u0000\u00e0\u00e1\u0001\u0000\u0000\u0000"+
		"\u00e1\u00e4\u0001\u0000\u0000\u0000\u00e2\u00e0\u0001\u0000\u0000\u0000"+
		"\u00e3\u00e5\u0003(\u0014\u0000\u00e4\u00e3\u0001\u0000\u0000\u0000\u00e4"+
		"\u00e5\u0001\u0000\u0000\u0000\u00e5%\u0001\u0000\u0000\u0000\u00e6\u00e7"+
		"\u0005$\u0000\u0000\u00e7\u00e8\u0005#\u0000\u0000\u00e8\u00e9\u0003:"+
		"\u001d\u0000\u00e9\u00ea\u0003\u0018\f\u0000\u00ea\'\u0001\u0000\u0000"+
		"\u0000\u00eb\u00ec\u0005$\u0000\u0000\u00ec\u00ed\u0003\u0018\f\u0000"+
		"\u00ed)\u0001\u0000\u0000\u0000\u00ee\u00ef\u0005%\u0000\u0000\u00ef\u00f0"+
		"\u0003:\u001d\u0000\u00f0\u00f4\u0005\t\u0000\u0000\u00f1\u00f3\u0003"+
		",\u0016\u0000\u00f2\u00f1\u0001\u0000\u0000\u0000\u00f3\u00f6\u0001\u0000"+
		"\u0000\u0000\u00f4\u00f2\u0001\u0000\u0000\u0000\u00f4\u00f5\u0001\u0000"+
		"\u0000\u0000\u00f5\u00f8\u0001\u0000\u0000\u0000\u00f6\u00f4\u0001\u0000"+
		"\u0000\u0000\u00f7\u00f9\u0003.\u0017\u0000\u00f8\u00f7\u0001\u0000\u0000"+
		"\u0000\u00f8\u00f9\u0001\u0000\u0000\u0000\u00f9\u00fa\u0001\u0000\u0000"+
		"\u0000\u00fa\u00fb\u0005\n\u0000\u0000\u00fb+\u0001\u0000\u0000\u0000"+
		"\u00fc\u00fd\u0005&\u0000\u0000\u00fd\u00fe\u0003\u0014\n\u0000\u00fe"+
		"\u0102\u0005\u0011\u0000\u0000\u00ff\u0101\u0003\u001a\r\u0000\u0100\u00ff"+
		"\u0001\u0000\u0000\u0000\u0101\u0104\u0001\u0000\u0000\u0000\u0102\u0100"+
		"\u0001\u0000\u0000\u0000\u0102\u0103\u0001\u0000\u0000\u0000\u0103-\u0001"+
		"\u0000\u0000\u0000\u0104\u0102\u0001\u0000\u0000\u0000\u0105\u0106\u0005"+
		"\'\u0000\u0000\u0106\u010a\u0005\u0011\u0000\u0000\u0107\u0109\u0003\u001a"+
		"\r\u0000\u0108\u0107\u0001\u0000\u0000\u0000\u0109\u010c\u0001\u0000\u0000"+
		"\u0000\u010a\u0108\u0001\u0000\u0000\u0000\u010a\u010b\u0001\u0000\u0000"+
		"\u0000\u010b/\u0001\u0000\u0000\u0000\u010c\u010a\u0001\u0000\u0000\u0000"+
		"\u010d\u010f\u0005(\u0000\u0000\u010e\u0110\u00032\u0019\u0000\u010f\u010e"+
		"\u0001\u0000\u0000\u0000\u010f\u0110\u0001\u0000\u0000\u0000\u0110\u0111"+
		"\u0001\u0000\u0000\u0000\u0111\u0113\u0005\u0012\u0000\u0000\u0112\u0114"+
		"\u0003:\u001d\u0000\u0113\u0112\u0001\u0000\u0000\u0000\u0113\u0114\u0001"+
		"\u0000\u0000\u0000\u0114\u0115\u0001\u0000\u0000\u0000\u0115\u0117\u0005"+
		"\u0012\u0000\u0000\u0116\u0118\u00034\u001a\u0000\u0117\u0116\u0001\u0000"+
		"\u0000\u0000\u0117\u0118\u0001\u0000\u0000\u0000\u0118\u0119\u0001\u0000"+
		"\u0000\u0000\u0119\u0121\u0003\u0018\f\u0000\u011a\u011b\u0005(\u0000"+
		"\u0000\u011b\u011c\u0003:\u001d\u0000\u011c\u011d\u0003\u0018\f\u0000"+
		"\u011d\u0121\u0001\u0000\u0000\u0000\u011e\u011f\u0005(\u0000\u0000\u011f"+
		"\u0121\u0003\u0018\f\u0000\u0120\u010d\u0001\u0000\u0000\u0000\u0120\u011a"+
		"\u0001\u0000\u0000\u0000\u0120\u011e\u0001\u0000\u0000\u0000\u01211\u0001"+
		"\u0000\u0000\u0000\u0122\u0126\u0003\u0010\b\u0000\u0123\u0126\u0003\u001c"+
		"\u000e\u0000\u0124\u0126\u0003\"\u0011\u0000\u0125\u0122\u0001\u0000\u0000"+
		"\u0000\u0125\u0123\u0001\u0000\u0000\u0000\u0125\u0124\u0001\u0000\u0000"+
		"\u0000\u01263\u0001\u0000\u0000\u0000\u0127\u012a\u0003\u001c\u000e\u0000"+
		"\u0128\u012a\u0003\"\u0011\u0000\u0129\u0127\u0001\u0000\u0000\u0000\u0129"+
		"\u0128\u0001\u0000\u0000\u0000\u012a5\u0001\u0000\u0000\u0000\u012b\u012d"+
		"\u0005+\u0000\u0000\u012c\u012e\u0003\u0014\n\u0000\u012d\u012c\u0001"+
		"\u0000\u0000\u0000\u012d\u012e\u0001\u0000\u0000\u0000\u012e7\u0001\u0000"+
		"\u0000\u0000\u012f\u0130\u0003:\u001d\u0000\u01309\u0001\u0000\u0000\u0000"+
		"\u0131\u0132\u0006\u001d\uffff\uffff\u0000\u0132\u0133\u0005\u001d\u0000"+
		"\u0000\u0133\u013c\u0003:\u001d\u0005\u0134\u0135\u0005\u001a\u0000\u0000"+
		"\u0135\u013c\u0003:\u001d\u0004\u0136\u0137\u0005\u001e\u0000\u0000\u0137"+
		"\u013c\u0005;\u0000\u0000\u0138\u0139\u0005\u0004\u0000\u0000\u0139\u013c"+
		"\u0003:\u001d\u0002\u013a\u013c\u0003<\u001e\u0000\u013b\u0131\u0001\u0000"+
		"\u0000\u0000\u013b\u0134\u0001\u0000\u0000\u0000\u013b\u0136\u0001\u0000"+
		"\u0000\u0000\u013b\u0138\u0001\u0000\u0000\u0000\u013b\u013a\u0001\u0000"+
		"\u0000\u0000\u013c\u0151\u0001\u0000\u0000\u0000\u013d\u013e\n\u000b\u0000"+
		"\u0000\u013e\u013f\u00056\u0000\u0000\u013f\u0150\u0003:\u001d\f\u0140"+
		"\u0141\n\n\u0000\u0000\u0141\u0142\u00055\u0000\u0000\u0142\u0150\u0003"+
		":\u001d\u000b\u0143\u0144\n\t\u0000\u0000\u0144\u0145\u0007\u0001\u0000"+
		"\u0000\u0145\u0150\u0003:\u001d\n\u0146\u0147\n\b\u0000\u0000\u0147\u0148"+
		"\u0007\u0002\u0000\u0000\u0148\u0150\u0003:\u001d\t\u0149\u014a\n\u0007"+
		"\u0000\u0000\u014a\u014b\u0007\u0003\u0000\u0000\u014b\u0150\u0003:\u001d"+
		"\b\u014c\u014d\n\u0006\u0000\u0000\u014d\u014e\u0007\u0004\u0000\u0000"+
		"\u014e\u0150\u0003:\u001d\u0007\u014f\u013d\u0001\u0000\u0000\u0000\u014f"+
		"\u0140\u0001\u0000\u0000\u0000\u014f\u0143\u0001\u0000\u0000\u0000\u014f"+
		"\u0146\u0001\u0000\u0000\u0000\u014f\u0149\u0001\u0000\u0000\u0000\u014f"+
		"\u014c\u0001\u0000\u0000\u0000\u0150\u0153\u0001\u0000\u0000\u0000\u0151"+
		"\u014f\u0001\u0000\u0000\u0000\u0151\u0152\u0001\u0000\u0000\u0000\u0152"+
		";\u0001\u0000\u0000\u0000\u0153\u0151\u0001\u0000\u0000\u0000\u0154\u0179"+
		"\u00057\u0000\u0000\u0155\u0179\u00058\u0000\u0000\u0156\u0179\u00059"+
		"\u0000\u0000\u0157\u0179\u0005:\u0000\u0000\u0158\u0179\u0005,\u0000\u0000"+
		"\u0159\u0179\u0005-\u0000\u0000\u015a\u0179\u0005.\u0000\u0000\u015b\u015c"+
		"\u0005;\u0000\u0000\u015c\u015d\u0005\u001f\u0000\u0000\u015d\u015e\u0005"+
		";\u0000\u0000\u015e\u0160\u0005\u0001\u0000\u0000\u015f\u0161\u0003D\""+
		"\u0000\u0160\u015f\u0001\u0000\u0000\u0000\u0160\u0161\u0001\u0000\u0000"+
		"\u0000\u0161\u0162\u0001\u0000\u0000\u0000\u0162\u0179\u0005\u0002\u0000"+
		"\u0000\u0163\u0164\u0005;\u0000\u0000\u0164\u0166\u0005\u0001\u0000\u0000"+
		"\u0165\u0167\u0003D\"\u0000\u0166\u0165\u0001\u0000\u0000\u0000\u0166"+
		"\u0167\u0001\u0000\u0000\u0000\u0167\u0168\u0001\u0000\u0000\u0000\u0168"+
		"\u0179\u0005\u0002\u0000\u0000\u0169\u016e\u0005;\u0000\u0000\u016a\u016b"+
		"\u0005\u0007\u0000\u0000\u016b\u016c\u0003:\u001d\u0000\u016c\u016d\u0005"+
		"\b\u0000\u0000\u016d\u016f\u0001\u0000\u0000\u0000\u016e\u016a\u0001\u0000"+
		"\u0000\u0000\u016f\u0170\u0001\u0000\u0000\u0000\u0170\u016e\u0001\u0000"+
		"\u0000\u0000\u0170\u0171\u0001\u0000\u0000\u0000\u0171\u0179\u0001\u0000"+
		"\u0000\u0000\u0172\u0179\u0005;\u0000\u0000\u0173\u0174\u0005\u0001\u0000"+
		"\u0000\u0174\u0175\u0003:\u001d\u0000\u0175\u0176\u0005\u0002\u0000\u0000"+
		"\u0176\u0179\u0001\u0000\u0000\u0000\u0177\u0179\u0003>\u001f\u0000\u0178"+
		"\u0154\u0001\u0000\u0000\u0000\u0178\u0155\u0001\u0000\u0000\u0000\u0178"+
		"\u0156\u0001\u0000\u0000\u0000\u0178\u0157\u0001\u0000\u0000\u0000\u0178"+
		"\u0158\u0001\u0000\u0000\u0000\u0178\u0159\u0001\u0000\u0000\u0000\u0178"+
		"\u015a\u0001\u0000\u0000\u0000\u0178\u015b\u0001\u0000\u0000\u0000\u0178"+
		"\u0163\u0001\u0000\u0000\u0000\u0178\u0169\u0001\u0000\u0000\u0000\u0178"+
		"\u0172\u0001\u0000\u0000\u0000\u0178\u0173\u0001\u0000\u0000\u0000\u0178"+
		"\u0177\u0001\u0000\u0000\u0000\u0179=\u0001\u0000\u0000\u0000\u017a\u017c"+
		"\u0003\u0016\u000b\u0000\u017b\u017a\u0001\u0000\u0000\u0000\u017c\u017d"+
		"\u0001\u0000\u0000\u0000\u017d\u017b\u0001\u0000\u0000\u0000\u017d\u017e"+
		"\u0001\u0000\u0000\u0000\u017e\u017f\u0001\u0000\u0000\u0000\u017f\u0180"+
		"\u0003H$\u0000\u0180\u0182\u0005\t\u0000\u0000\u0181\u0183\u0003@ \u0000"+
		"\u0182\u0181\u0001\u0000\u0000\u0000\u0182\u0183\u0001\u0000\u0000\u0000"+
		"\u0183\u0184\u0001\u0000\u0000\u0000\u0184\u0185\u0005\n\u0000\u0000\u0185"+
		"?\u0001\u0000\u0000\u0000\u0186\u018b\u0003:\u001d\u0000\u0187\u0188\u0005"+
		"\u0003\u0000\u0000\u0188\u018a\u0003:\u001d\u0000\u0189\u0187\u0001\u0000"+
		"\u0000\u0000\u018a\u018d\u0001\u0000\u0000\u0000\u018b\u0189\u0001\u0000"+
		"\u0000\u0000\u018b\u018c\u0001\u0000\u0000\u0000\u018c\u018f\u0001\u0000"+
		"\u0000\u0000\u018d\u018b\u0001\u0000\u0000\u0000\u018e\u0190\u0005\u0003"+
		"\u0000\u0000\u018f\u018e\u0001\u0000\u0000\u0000\u018f\u0190\u0001\u0000"+
		"\u0000\u0000\u0190\u019d\u0001\u0000\u0000\u0000\u0191\u0196\u0003B!\u0000"+
		"\u0192\u0193\u0005\u0003\u0000\u0000\u0193\u0195\u0003B!\u0000\u0194\u0192"+
		"\u0001\u0000\u0000\u0000\u0195\u0198\u0001\u0000\u0000\u0000\u0196\u0194"+
		"\u0001\u0000\u0000\u0000\u0196\u0197\u0001\u0000\u0000\u0000\u0197\u019a"+
		"\u0001\u0000\u0000\u0000\u0198\u0196\u0001\u0000\u0000\u0000\u0199\u019b"+
		"\u0005\u0003\u0000\u0000\u019a\u0199\u0001\u0000\u0000\u0000\u019a\u019b"+
		"\u0001\u0000\u0000\u0000\u019b\u019d\u0001\u0000\u0000\u0000\u019c\u0186"+
		"\u0001\u0000\u0000\u0000\u019c\u0191\u0001\u0000\u0000\u0000\u019dA\u0001"+
		"\u0000\u0000\u0000\u019e\u019f\u0005\t\u0000\u0000\u019f\u01a4\u0003:"+
		"\u001d\u0000\u01a0\u01a1\u0005\u0003\u0000\u0000\u01a1\u01a3\u0003:\u001d"+
		"\u0000\u01a2\u01a0\u0001\u0000\u0000\u0000\u01a3\u01a6\u0001\u0000\u0000"+
		"\u0000\u01a4\u01a2\u0001\u0000\u0000\u0000\u01a4\u01a5\u0001\u0000\u0000"+
		"\u0000\u01a5\u01a8\u0001\u0000\u0000\u0000\u01a6\u01a4\u0001\u0000\u0000"+
		"\u0000\u01a7\u01a9\u0005\u0003\u0000\u0000\u01a8\u01a7\u0001\u0000\u0000"+
		"\u0000\u01a8\u01a9\u0001\u0000\u0000\u0000\u01a9\u01aa\u0001\u0000\u0000"+
		"\u0000\u01aa\u01ab\u0005\n\u0000\u0000\u01abC\u0001\u0000\u0000\u0000"+
		"\u01ac\u01b1\u0003F#\u0000\u01ad\u01ae\u0005\u0003\u0000\u0000\u01ae\u01b0"+
		"\u0003F#\u0000\u01af\u01ad\u0001\u0000\u0000\u0000\u01b0\u01b3\u0001\u0000"+
		"\u0000\u0000\u01b1\u01af\u0001\u0000\u0000\u0000\u01b1\u01b2\u0001\u0000"+
		"\u0000\u0000\u01b2E\u0001\u0000\u0000\u0000\u01b3\u01b1\u0001\u0000\u0000"+
		"\u0000\u01b4\u01b8\u0003:\u001d\u0000\u01b5\u01b6\u0005\u001e\u0000\u0000"+
		"\u01b6\u01b8\u0005;\u0000\u0000\u01b7\u01b4\u0001\u0000\u0000\u0000\u01b7"+
		"\u01b5\u0001\u0000\u0000\u0000\u01b8G\u0001\u0000\u0000\u0000\u01b9\u01c9"+
		"\u0005/\u0000\u0000\u01ba\u01c9\u00050\u0000\u0000\u01bb\u01c9\u00051"+
		"\u0000\u0000\u01bc\u01c9\u00052\u0000\u0000\u01bd\u01c9\u00053\u0000\u0000"+
		"\u01be\u01c9\u00054\u0000\u0000\u01bf\u01c1\u0003\u0016\u000b\u0000\u01c0"+
		"\u01bf\u0001\u0000\u0000\u0000\u01c1\u01c2\u0001\u0000\u0000\u0000\u01c2"+
		"\u01c0\u0001\u0000\u0000\u0000\u01c2\u01c3\u0001\u0000\u0000\u0000\u01c3"+
		"\u01c4\u0001\u0000\u0000\u0000\u01c4\u01c5\u0003H$\u0000\u01c5\u01c9\u0001"+
		"\u0000\u0000\u0000\u01c6\u01c7\u0005\u0004\u0000\u0000\u01c7\u01c9\u0003"+
		"H$\u0000\u01c8\u01b9\u0001\u0000\u0000\u0000\u01c8\u01ba\u0001\u0000\u0000"+
		"\u0000\u01c8\u01bb\u0001\u0000\u0000\u0000\u01c8\u01bc\u0001\u0000\u0000"+
		"\u0000\u01c8\u01bd\u0001\u0000\u0000\u0000\u01c8\u01be\u0001\u0000\u0000"+
		"\u0000\u01c8\u01c0\u0001\u0000\u0000\u0000\u01c8\u01c6\u0001\u0000\u0000"+
		"\u0000\u01c9I\u0001\u0000\u0000\u00002MOX\\ejw{\u0082\u0088\u0099\u00a1"+
		"\u00ac\u00be\u00cc\u00d0\u00d8\u00e0\u00e4\u00f4\u00f8\u0102\u010a\u010f"+
		"\u0113\u0117\u0120\u0125\u0129\u012d\u013b\u014f\u0151\u0160\u0166\u0170"+
		"\u0178\u017d\u0182\u018b\u018f\u0196\u019a\u019c\u01a4\u01a8\u01b1\u01b7"+
		"\u01c2\u01c8";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}