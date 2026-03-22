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
		RULE_exprStmt = 28, RULE_expr = 29, RULE_orExpr = 30, RULE_andExpr = 31, 
		RULE_eqExpr = 32, RULE_relExpr = 33, RULE_addExpr = 34, RULE_mulExpr = 35, 
		RULE_unaryExpr = 36, RULE_atom = 37, RULE_arrayLiteral = 38, RULE_arrayInitList = 39, 
		RULE_nestedInit = 40, RULE_argList = 41, RULE_arg = 42, RULE_type = 43;
	private static String[] makeRuleNames() {
		return new String[] {
			"program", "functionDeclaration", "params", "param", "pointerMark", "returnType", 
			"varDeclaration", "constDeclaration", "shortVarDecl", "idList", "exprList", 
			"arrayDimension", "block", "stmt", "assignStmt", "leftValue", "assignOp", 
			"incDecStmt", "ifStmt", "elseIfClause", "elseClause", "switchStmt", "caseClause", 
			"defaultClause", "forStmt", "forInit", "forPost", "returnStmt", "exprStmt", 
			"expr", "orExpr", "andExpr", "eqExpr", "relExpr", "addExpr", "mulExpr", 
			"unaryExpr", "atom", "arrayLiteral", "arrayInitList", "nestedInit", "argList", 
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
			setState(93);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 30064771072L) != 0)) {
				{
				setState(91);
				_errHandler.sync(this);
				switch (_input.LA(1)) {
				case FUNC:
					{
					setState(88);
					functionDeclaration();
					}
					break;
				case VAR:
					{
					setState(89);
					varDeclaration();
					}
					break;
				case CONST:
					{
					setState(90);
					constDeclaration();
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				}
				setState(95);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(96);
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
			setState(98);
			match(FUNC);
			setState(99);
			match(ID);
			setState(100);
			match(T__0);
			setState(102);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(101);
				params();
				}
			}

			setState(104);
			match(T__1);
			setState(106);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 8866461766385810L) != 0)) {
				{
				setState(105);
				returnType();
				}
			}

			setState(108);
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
			setState(110);
			param();
			setState(115);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(111);
				match(T__2);
				setState(112);
				param();
				}
				}
				setState(117);
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
			setState(118);
			match(ID);
			setState(120);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
			case 1:
				{
				setState(119);
				pointerMark();
				}
				break;
			}
			setState(122);
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
			setState(124);
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
			setState(137);
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
				setState(126);
				type();
				}
				break;
			case T__0:
				enterOuterAlt(_localctx, 2);
				{
				setState(127);
				match(T__0);
				setState(128);
				type();
				setState(131); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(129);
					match(T__2);
					setState(130);
					type();
					}
					}
					setState(133); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==T__2 );
				setState(135);
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
			setState(157);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,10,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(139);
				match(VAR);
				setState(140);
				idList();
				setState(144);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,8,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(141);
						arrayDimension();
						}
						} 
					}
					setState(146);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,8,_ctx);
				}
				setState(147);
				type();
				setState(150);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__4) {
					{
					setState(148);
					match(T__4);
					setState(149);
					exprList();
					}
				}

				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(152);
				match(VAR);
				setState(153);
				idList();
				setState(154);
				match(T__4);
				setState(155);
				exprList();
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
			setState(159);
			match(CONST);
			setState(160);
			match(ID);
			setState(161);
			type();
			setState(162);
			match(T__4);
			setState(163);
			expr();
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
			setState(165);
			idList();
			setState(166);
			match(T__5);
			setState(167);
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
			setState(169);
			match(ID);
			setState(174);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(170);
				match(T__2);
				setState(171);
				match(ID);
				}
				}
				setState(176);
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
			setState(177);
			expr();
			setState(182);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(178);
				match(T__2);
				setState(179);
				expr();
				}
				}
				setState(184);
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
			setState(185);
			match(T__6);
			setState(186);
			expr();
			setState(187);
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
			setState(189);
			match(T__8);
			setState(193);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125898993692312210L) != 0)) {
				{
				{
				setState(190);
				stmt();
				}
				}
				setState(195);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(196);
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
			setState(211);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(198);
				varDeclaration();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(199);
				constDeclaration();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(200);
				shortVarDecl();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(201);
				assignStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(202);
				incDecStmt();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(203);
				ifStmt();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(204);
				switchStmt();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(205);
				forStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(206);
				match(BREAK);
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(207);
				match(CONTINUE);
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(208);
				returnStmt();
				}
				break;
			case 12:
				enterOuterAlt(_localctx, 12);
				{
				setState(209);
				exprStmt();
				}
				break;
			case 13:
				enterOuterAlt(_localctx, 13);
				{
				setState(210);
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
			setState(213);
			leftValue();
			setState(214);
			assignOp();
			setState(215);
			expr();
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
			setState(229);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,16,_ctx) ) {
			case 1:
				_localctx = new LValueIdContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(217);
				match(ID);
				}
				break;
			case 2:
				_localctx = new LValueArrayContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(218);
				match(ID);
				setState(223); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(219);
					match(T__6);
					setState(220);
					expr();
					setState(221);
					match(T__7);
					}
					}
					setState(225); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==T__6 );
				}
				break;
			case 3:
				_localctx = new LValuePointerContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(227);
				match(T__3);
				setState(228);
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
			setState(231);
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
			setState(237);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,17,_ctx) ) {
			case 1:
				_localctx = new IncStmtContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(233);
				match(ID);
				setState(234);
				match(T__14);
				}
				break;
			case 2:
				_localctx = new DecStmtContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(235);
				match(ID);
				setState(236);
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
			setState(239);
			match(IF);
			setState(240);
			expr();
			setState(241);
			block();
			setState(245);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,18,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(242);
					elseIfClause();
					}
					} 
				}
				setState(247);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,18,_ctx);
			}
			setState(249);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(248);
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
			setState(251);
			match(ELSE);
			setState(252);
			match(IF);
			setState(253);
			expr();
			setState(254);
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
			setState(256);
			match(ELSE);
			setState(257);
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
			setState(259);
			match(SWITCH);
			setState(260);
			expr();
			setState(261);
			match(T__8);
			setState(265);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==CASE) {
				{
				{
				setState(262);
				caseClause();
				}
				}
				setState(267);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(269);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(268);
				defaultClause();
				}
			}

			setState(271);
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
			setState(273);
			match(CASE);
			setState(274);
			exprList();
			setState(275);
			match(T__16);
			setState(279);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125898993692312210L) != 0)) {
				{
				{
				setState(276);
				stmt();
				}
				}
				setState(281);
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
			setState(282);
			match(DEFAULT);
			setState(283);
			match(T__16);
			setState(287);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125898993692312210L) != 0)) {
				{
				{
				setState(284);
				stmt();
				}
				}
				setState(289);
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
			setState(309);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,27,_ctx) ) {
			case 1:
				_localctx = new ForClassicContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(290);
				match(FOR);
				setState(292);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__3 || _la==ID) {
					{
					setState(291);
					forInit();
					}
				}

				setState(294);
				match(T__17);
				setState(296);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125882316334301330L) != 0)) {
					{
					setState(295);
					expr();
					}
				}

				setState(298);
				match(T__17);
				setState(300);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__3 || _la==ID) {
					{
					setState(299);
					forPost();
					}
				}

				setState(302);
				block();
				}
				break;
			case 2:
				_localctx = new ForConditionContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(303);
				match(FOR);
				setState(304);
				expr();
				setState(305);
				block();
				}
				break;
			case 3:
				_localctx = new ForForeverContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(307);
				match(FOR);
				setState(308);
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
			setState(314);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,28,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(311);
				shortVarDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(312);
				assignStmt();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(313);
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
			setState(318);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,29,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(316);
				assignStmt();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(317);
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
			setState(320);
			match(RETURN);
			setState(322);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,30,_ctx) ) {
			case 1:
				{
				setState(321);
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
			setState(324);
			expr();
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
		public OrExprContext orExpr() {
			return getRuleContext(OrExprContext.class,0);
		}
		public ExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expr; }
	}

	public final ExprContext expr() throws RecognitionException {
		ExprContext _localctx = new ExprContext(_ctx, getState());
		enterRule(_localctx, 58, RULE_expr);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(326);
			orExpr();
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
	public static class OrExprContext extends ParserRuleContext {
		public List<AndExprContext> andExpr() {
			return getRuleContexts(AndExprContext.class);
		}
		public AndExprContext andExpr(int i) {
			return getRuleContext(AndExprContext.class,i);
		}
		public List<TerminalNode> OR() { return getTokens(GolampiParser.OR); }
		public TerminalNode OR(int i) {
			return getToken(GolampiParser.OR, i);
		}
		public OrExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_orExpr; }
	}

	public final OrExprContext orExpr() throws RecognitionException {
		OrExprContext _localctx = new OrExprContext(_ctx, getState());
		enterRule(_localctx, 60, RULE_orExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(328);
			andExpr();
			setState(333);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==OR) {
				{
				{
				setState(329);
				match(OR);
				setState(330);
				andExpr();
				}
				}
				setState(335);
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
	public static class AndExprContext extends ParserRuleContext {
		public List<EqExprContext> eqExpr() {
			return getRuleContexts(EqExprContext.class);
		}
		public EqExprContext eqExpr(int i) {
			return getRuleContext(EqExprContext.class,i);
		}
		public List<TerminalNode> AND() { return getTokens(GolampiParser.AND); }
		public TerminalNode AND(int i) {
			return getToken(GolampiParser.AND, i);
		}
		public AndExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_andExpr; }
	}

	public final AndExprContext andExpr() throws RecognitionException {
		AndExprContext _localctx = new AndExprContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_andExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(336);
			eqExpr();
			setState(341);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==AND) {
				{
				{
				setState(337);
				match(AND);
				setState(338);
				eqExpr();
				}
				}
				setState(343);
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
	public static class EqExprContext extends ParserRuleContext {
		public List<RelExprContext> relExpr() {
			return getRuleContexts(RelExprContext.class);
		}
		public RelExprContext relExpr(int i) {
			return getRuleContext(RelExprContext.class,i);
		}
		public EqExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_eqExpr; }
	}

	public final EqExprContext eqExpr() throws RecognitionException {
		EqExprContext _localctx = new EqExprContext(_ctx, getState());
		enterRule(_localctx, 64, RULE_eqExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(344);
			relExpr();
			setState(349);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__18 || _la==T__19) {
				{
				{
				setState(345);
				_la = _input.LA(1);
				if ( !(_la==T__18 || _la==T__19) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(346);
				relExpr();
				}
				}
				setState(351);
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
	public static class RelExprContext extends ParserRuleContext {
		public List<AddExprContext> addExpr() {
			return getRuleContexts(AddExprContext.class);
		}
		public AddExprContext addExpr(int i) {
			return getRuleContext(AddExprContext.class,i);
		}
		public RelExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_relExpr; }
	}

	public final RelExprContext relExpr() throws RecognitionException {
		RelExprContext _localctx = new RelExprContext(_ctx, getState());
		enterRule(_localctx, 66, RULE_relExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(352);
			addExpr();
			setState(357);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 31457280L) != 0)) {
				{
				{
				setState(353);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 31457280L) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(354);
				addExpr();
				}
				}
				setState(359);
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
	public static class AddExprContext extends ParserRuleContext {
		public List<MulExprContext> mulExpr() {
			return getRuleContexts(MulExprContext.class);
		}
		public MulExprContext mulExpr(int i) {
			return getRuleContext(MulExprContext.class,i);
		}
		public AddExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_addExpr; }
	}

	public final AddExprContext addExpr() throws RecognitionException {
		AddExprContext _localctx = new AddExprContext(_ctx, getState());
		enterRule(_localctx, 68, RULE_addExpr);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(360);
			mulExpr();
			setState(365);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,35,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(361);
					_la = _input.LA(1);
					if ( !(_la==T__24 || _la==T__25) ) {
					_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(362);
					mulExpr();
					}
					} 
				}
				setState(367);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,35,_ctx);
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
	public static class MulExprContext extends ParserRuleContext {
		public List<UnaryExprContext> unaryExpr() {
			return getRuleContexts(UnaryExprContext.class);
		}
		public UnaryExprContext unaryExpr(int i) {
			return getRuleContext(UnaryExprContext.class,i);
		}
		public MulExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_mulExpr; }
	}

	public final MulExprContext mulExpr() throws RecognitionException {
		MulExprContext _localctx = new MulExprContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_mulExpr);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(368);
			unaryExpr();
			setState(373);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,36,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(369);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 402653200L) != 0)) ) {
					_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(370);
					unaryExpr();
					}
					} 
				}
				setState(375);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,36,_ctx);
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
	public static class UnaryExprContext extends ParserRuleContext {
		public UnaryExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_unaryExpr; }
	 
		public UnaryExprContext() { }
		public void copyFrom(UnaryExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddrExprContext extends UnaryExprContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public AddrExprContext(UnaryExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DerefExprContext extends UnaryExprContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public DerefExprContext(UnaryExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NegExprContext extends UnaryExprContext {
		public UnaryExprContext unaryExpr() {
			return getRuleContext(UnaryExprContext.class,0);
		}
		public NegExprContext(UnaryExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NotExprContext extends UnaryExprContext {
		public UnaryExprContext unaryExpr() {
			return getRuleContext(UnaryExprContext.class,0);
		}
		public NotExprContext(UnaryExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AtomExprContext extends UnaryExprContext {
		public AtomContext atom() {
			return getRuleContext(AtomContext.class,0);
		}
		public AtomExprContext(UnaryExprContext ctx) { copyFrom(ctx); }
	}

	public final UnaryExprContext unaryExpr() throws RecognitionException {
		UnaryExprContext _localctx = new UnaryExprContext(_ctx, getState());
		enterRule(_localctx, 72, RULE_unaryExpr);
		try {
			setState(385);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__28:
				_localctx = new NotExprContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(376);
				match(T__28);
				setState(377);
				unaryExpr();
				}
				break;
			case T__25:
				_localctx = new NegExprContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(378);
				match(T__25);
				setState(379);
				unaryExpr();
				}
				break;
			case T__29:
				_localctx = new AddrExprContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(380);
				match(T__29);
				setState(381);
				match(ID);
				}
				break;
			case T__3:
				_localctx = new DerefExprContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(382);
				match(T__3);
				setState(383);
				match(ID);
				}
				break;
			case T__0:
			case T__6:
			case TRUE:
			case FALSE:
			case NIL:
			case INT32_T:
			case INT_T:
			case FLOAT32_T:
			case BOOL_T:
			case RUNE_T:
			case STRING_T:
			case FLOAT_LIT:
			case INT_LIT:
			case RUNE_LIT:
			case STRING_LIT:
			case ID:
				_localctx = new AtomExprContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(384);
				atom();
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
	public static class CastAtomContext extends AtomContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public TerminalNode INT32_T() { return getToken(GolampiParser.INT32_T, 0); }
		public TerminalNode INT_T() { return getToken(GolampiParser.INT_T, 0); }
		public TerminalNode FLOAT32_T() { return getToken(GolampiParser.FLOAT32_T, 0); }
		public TerminalNode BOOL_T() { return getToken(GolampiParser.BOOL_T, 0); }
		public TerminalNode RUNE_T() { return getToken(GolampiParser.RUNE_T, 0); }
		public TerminalNode STRING_T() { return getToken(GolampiParser.STRING_T, 0); }
		public CastAtomContext(AtomContext ctx) { copyFrom(ctx); }
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
		enterRule(_localctx, 74, RULE_atom);
		int _la;
		try {
			int _alt;
			setState(428);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,41,_ctx) ) {
			case 1:
				_localctx = new FloatAtomContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(387);
				match(FLOAT_LIT);
				}
				break;
			case 2:
				_localctx = new IntAtomContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(388);
				match(INT_LIT);
				}
				break;
			case 3:
				_localctx = new RuneAtomContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(389);
				match(RUNE_LIT);
				}
				break;
			case 4:
				_localctx = new StringAtomContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(390);
				match(STRING_LIT);
				}
				break;
			case 5:
				_localctx = new TrueAtomContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(391);
				match(TRUE);
				}
				break;
			case 6:
				_localctx = new FalseAtomContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(392);
				match(FALSE);
				}
				break;
			case 7:
				_localctx = new NilAtomContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(393);
				match(NIL);
				}
				break;
			case 8:
				_localctx = new CastAtomContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(394);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 8866461766385664L) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(395);
				match(T__0);
				setState(396);
				expr();
				setState(397);
				match(T__1);
				}
				break;
			case 9:
				_localctx = new MethodAtomContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(399);
				match(ID);
				setState(400);
				match(T__30);
				setState(401);
				match(ID);
				setState(402);
				match(T__0);
				setState(404);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125882316334301330L) != 0)) {
					{
					setState(403);
					argList();
					}
				}

				setState(406);
				match(T__1);
				}
				break;
			case 10:
				_localctx = new CallAtomContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(407);
				match(ID);
				setState(408);
				match(T__0);
				setState(410);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125882316334301330L) != 0)) {
					{
					setState(409);
					argList();
					}
				}

				setState(412);
				match(T__1);
				}
				break;
			case 11:
				_localctx = new IndexAtomContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(413);
				match(ID);
				setState(418); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(414);
						match(T__6);
						setState(415);
						expr();
						setState(416);
						match(T__7);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(420); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,40,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 12:
				_localctx = new IdAtomContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(422);
				match(ID);
				}
				break;
			case 13:
				_localctx = new ParenAtomContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(423);
				match(T__0);
				setState(424);
				expr();
				setState(425);
				match(T__1);
				}
				break;
			case 14:
				_localctx = new ArrayAtomContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(427);
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
		enterRule(_localctx, 76, RULE_arrayLiteral);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(431); 
			_errHandler.sync(this);
			_alt = 1;
			do {
				switch (_alt) {
				case 1:
					{
					{
					setState(430);
					arrayDimension();
					}
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(433); 
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,42,_ctx);
			} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
			setState(435);
			type();
			setState(436);
			match(T__8);
			setState(438);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125882316334301842L) != 0)) {
				{
				setState(437);
				arrayInitList();
				}
			}

			setState(440);
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
		enterRule(_localctx, 78, RULE_arrayInitList);
		int _la;
		try {
			int _alt;
			setState(464);
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
			case INT32_T:
			case INT_T:
			case FLOAT32_T:
			case BOOL_T:
			case RUNE_T:
			case STRING_T:
			case FLOAT_LIT:
			case INT_LIT:
			case RUNE_LIT:
			case STRING_LIT:
			case ID:
				_localctx = new FlatInitContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(442);
				expr();
				setState(447);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,44,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(443);
						match(T__2);
						setState(444);
						expr();
						}
						} 
					}
					setState(449);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,44,_ctx);
				}
				setState(451);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__2) {
					{
					setState(450);
					match(T__2);
					}
				}

				}
				break;
			case T__8:
				_localctx = new NestedInitListContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(453);
				nestedInit();
				setState(458);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,46,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(454);
						match(T__2);
						setState(455);
						nestedInit();
						}
						} 
					}
					setState(460);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,46,_ctx);
				}
				setState(462);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__2) {
					{
					setState(461);
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
		public List<NestedInitContext> nestedInit() {
			return getRuleContexts(NestedInitContext.class);
		}
		public NestedInitContext nestedInit(int i) {
			return getRuleContext(NestedInitContext.class,i);
		}
		public NestedInitContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_nestedInit; }
	}

	public final NestedInitContext nestedInit() throws RecognitionException {
		NestedInitContext _localctx = new NestedInitContext(_ctx, getState());
		enterRule(_localctx, 80, RULE_nestedInit);
		int _la;
		try {
			int _alt;
			setState(494);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,53,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(466);
				match(T__8);
				setState(467);
				expr();
				setState(472);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,49,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(468);
						match(T__2);
						setState(469);
						expr();
						}
						} 
					}
					setState(474);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,49,_ctx);
				}
				setState(476);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__2) {
					{
					setState(475);
					match(T__2);
					}
				}

				setState(478);
				match(T__9);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(480);
				match(T__8);
				setState(481);
				nestedInit();
				setState(486);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,51,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(482);
						match(T__2);
						setState(483);
						nestedInit();
						}
						} 
					}
					setState(488);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,51,_ctx);
				}
				setState(490);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__2) {
					{
					setState(489);
					match(T__2);
					}
				}

				setState(492);
				match(T__9);
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
		enterRule(_localctx, 82, RULE_argList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(496);
			arg();
			setState(501);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(497);
				match(T__2);
				setState(498);
				arg();
				}
				}
				setState(503);
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
		enterRule(_localctx, 84, RULE_arg);
		try {
			setState(507);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,55,_ctx) ) {
			case 1:
				_localctx = new ValArgContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(504);
				expr();
				}
				break;
			case 2:
				_localctx = new RefArgContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(505);
				match(T__29);
				setState(506);
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
		enterRule(_localctx, 86, RULE_type);
		try {
			int _alt;
			setState(524);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case INT32_T:
				_localctx = new TInt32Context(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(509);
				match(INT32_T);
				}
				break;
			case INT_T:
				_localctx = new TIntContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(510);
				match(INT_T);
				}
				break;
			case FLOAT32_T:
				_localctx = new TFloat32Context(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(511);
				match(FLOAT32_T);
				}
				break;
			case BOOL_T:
				_localctx = new TBoolContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(512);
				match(BOOL_T);
				}
				break;
			case RUNE_T:
				_localctx = new TRuneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(513);
				match(RUNE_T);
				}
				break;
			case STRING_T:
				_localctx = new TStringContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(514);
				match(STRING_T);
				}
				break;
			case T__6:
				_localctx = new TArrayContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(516); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(515);
						arrayDimension();
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(518); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,56,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				setState(520);
				type();
				}
				break;
			case T__3:
				_localctx = new TPointerContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(522);
				match(T__3);
				setState(523);
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

	public static final String _serializedATN =
		"\u0004\u0001>\u020f\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
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
		"#\u0007#\u0002$\u0007$\u0002%\u0007%\u0002&\u0007&\u0002\'\u0007\'\u0002"+
		"(\u0007(\u0002)\u0007)\u0002*\u0007*\u0002+\u0007+\u0001\u0000\u0001\u0000"+
		"\u0001\u0000\u0005\u0000\\\b\u0000\n\u0000\f\u0000_\t\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001"+
		"g\b\u0001\u0001\u0001\u0001\u0001\u0003\u0001k\b\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0005\u0002r\b\u0002\n\u0002"+
		"\f\u0002u\t\u0002\u0001\u0003\u0001\u0003\u0003\u0003y\b\u0003\u0001\u0003"+
		"\u0001\u0003\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005\u0001\u0005"+
		"\u0001\u0005\u0001\u0005\u0004\u0005\u0084\b\u0005\u000b\u0005\f\u0005"+
		"\u0085\u0001\u0005\u0001\u0005\u0003\u0005\u008a\b\u0005\u0001\u0006\u0001"+
		"\u0006\u0001\u0006\u0005\u0006\u008f\b\u0006\n\u0006\f\u0006\u0092\t\u0006"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0003\u0006\u0097\b\u0006\u0001\u0006"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0003\u0006\u009e\b\u0006"+
		"\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007"+
		"\u0001\b\u0001\b\u0001\b\u0001\b\u0001\t\u0001\t\u0001\t\u0005\t\u00ad"+
		"\b\t\n\t\f\t\u00b0\t\t\u0001\n\u0001\n\u0001\n\u0005\n\u00b5\b\n\n\n\f"+
		"\n\u00b8\t\n\u0001\u000b\u0001\u000b\u0001\u000b\u0001\u000b\u0001\f\u0001"+
		"\f\u0005\f\u00c0\b\f\n\f\f\f\u00c3\t\f\u0001\f\u0001\f\u0001\r\u0001\r"+
		"\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0003\r\u00d4\b\r\u0001\u000e\u0001\u000e\u0001\u000e"+
		"\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0004\u000f\u00e0\b\u000f\u000b\u000f\f\u000f\u00e1\u0001"+
		"\u000f\u0001\u000f\u0003\u000f\u00e6\b\u000f\u0001\u0010\u0001\u0010\u0001"+
		"\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0003\u0011\u00ee\b\u0011\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0005\u0012\u00f4\b\u0012\n"+
		"\u0012\f\u0012\u00f7\t\u0012\u0001\u0012\u0003\u0012\u00fa\b\u0012\u0001"+
		"\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0014\u0001"+
		"\u0014\u0001\u0014\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0005"+
		"\u0015\u0108\b\u0015\n\u0015\f\u0015\u010b\t\u0015\u0001\u0015\u0003\u0015"+
		"\u010e\b\u0015\u0001\u0015\u0001\u0015\u0001\u0016\u0001\u0016\u0001\u0016"+
		"\u0001\u0016\u0005\u0016\u0116\b\u0016\n\u0016\f\u0016\u0119\t\u0016\u0001"+
		"\u0017\u0001\u0017\u0001\u0017\u0005\u0017\u011e\b\u0017\n\u0017\f\u0017"+
		"\u0121\t\u0017\u0001\u0018\u0001\u0018\u0003\u0018\u0125\b\u0018\u0001"+
		"\u0018\u0001\u0018\u0003\u0018\u0129\b\u0018\u0001\u0018\u0001\u0018\u0003"+
		"\u0018\u012d\b\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0018\u0003\u0018\u0136\b\u0018\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0003\u0019\u013b\b\u0019\u0001\u001a\u0001\u001a\u0003"+
		"\u001a\u013f\b\u001a\u0001\u001b\u0001\u001b\u0003\u001b\u0143\b\u001b"+
		"\u0001\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001\u001e\u0001\u001e"+
		"\u0001\u001e\u0005\u001e\u014c\b\u001e\n\u001e\f\u001e\u014f\t\u001e\u0001"+
		"\u001f\u0001\u001f\u0001\u001f\u0005\u001f\u0154\b\u001f\n\u001f\f\u001f"+
		"\u0157\t\u001f\u0001 \u0001 \u0001 \u0005 \u015c\b \n \f \u015f\t \u0001"+
		"!\u0001!\u0001!\u0005!\u0164\b!\n!\f!\u0167\t!\u0001\"\u0001\"\u0001\""+
		"\u0005\"\u016c\b\"\n\"\f\"\u016f\t\"\u0001#\u0001#\u0001#\u0005#\u0174"+
		"\b#\n#\f#\u0177\t#\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001"+
		"$\u0001$\u0003$\u0182\b$\u0001%\u0001%\u0001%\u0001%\u0001%\u0001%\u0001"+
		"%\u0001%\u0001%\u0001%\u0001%\u0001%\u0001%\u0001%\u0001%\u0001%\u0001"+
		"%\u0003%\u0195\b%\u0001%\u0001%\u0001%\u0001%\u0003%\u019b\b%\u0001%\u0001"+
		"%\u0001%\u0001%\u0001%\u0001%\u0004%\u01a3\b%\u000b%\f%\u01a4\u0001%\u0001"+
		"%\u0001%\u0001%\u0001%\u0001%\u0003%\u01ad\b%\u0001&\u0004&\u01b0\b&\u000b"+
		"&\f&\u01b1\u0001&\u0001&\u0001&\u0003&\u01b7\b&\u0001&\u0001&\u0001\'"+
		"\u0001\'\u0001\'\u0005\'\u01be\b\'\n\'\f\'\u01c1\t\'\u0001\'\u0003\'\u01c4"+
		"\b\'\u0001\'\u0001\'\u0001\'\u0005\'\u01c9\b\'\n\'\f\'\u01cc\t\'\u0001"+
		"\'\u0003\'\u01cf\b\'\u0003\'\u01d1\b\'\u0001(\u0001(\u0001(\u0001(\u0005"+
		"(\u01d7\b(\n(\f(\u01da\t(\u0001(\u0003(\u01dd\b(\u0001(\u0001(\u0001("+
		"\u0001(\u0001(\u0001(\u0005(\u01e5\b(\n(\f(\u01e8\t(\u0001(\u0003(\u01eb"+
		"\b(\u0001(\u0001(\u0003(\u01ef\b(\u0001)\u0001)\u0001)\u0005)\u01f4\b"+
		")\n)\f)\u01f7\t)\u0001*\u0001*\u0001*\u0003*\u01fc\b*\u0001+\u0001+\u0001"+
		"+\u0001+\u0001+\u0001+\u0001+\u0004+\u0205\b+\u000b+\f+\u0206\u0001+\u0001"+
		"+\u0001+\u0001+\u0003+\u020d\b+\u0001+\u0000\u0000,\u0000\u0002\u0004"+
		"\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018\u001a\u001c\u001e \""+
		"$&(*,.02468:<>@BDFHJLNPRTV\u0000\u0006\u0002\u0000\u0005\u0005\u000b\u000e"+
		"\u0001\u0000\u0013\u0014\u0001\u0000\u0015\u0018\u0001\u0000\u0019\u001a"+
		"\u0002\u0000\u0004\u0004\u001b\u001c\u0001\u0000/4\u0240\u0000]\u0001"+
		"\u0000\u0000\u0000\u0002b\u0001\u0000\u0000\u0000\u0004n\u0001\u0000\u0000"+
		"\u0000\u0006v\u0001\u0000\u0000\u0000\b|\u0001\u0000\u0000\u0000\n\u0089"+
		"\u0001\u0000\u0000\u0000\f\u009d\u0001\u0000\u0000\u0000\u000e\u009f\u0001"+
		"\u0000\u0000\u0000\u0010\u00a5\u0001\u0000\u0000\u0000\u0012\u00a9\u0001"+
		"\u0000\u0000\u0000\u0014\u00b1\u0001\u0000\u0000\u0000\u0016\u00b9\u0001"+
		"\u0000\u0000\u0000\u0018\u00bd\u0001\u0000\u0000\u0000\u001a\u00d3\u0001"+
		"\u0000\u0000\u0000\u001c\u00d5\u0001\u0000\u0000\u0000\u001e\u00e5\u0001"+
		"\u0000\u0000\u0000 \u00e7\u0001\u0000\u0000\u0000\"\u00ed\u0001\u0000"+
		"\u0000\u0000$\u00ef\u0001\u0000\u0000\u0000&\u00fb\u0001\u0000\u0000\u0000"+
		"(\u0100\u0001\u0000\u0000\u0000*\u0103\u0001\u0000\u0000\u0000,\u0111"+
		"\u0001\u0000\u0000\u0000.\u011a\u0001\u0000\u0000\u00000\u0135\u0001\u0000"+
		"\u0000\u00002\u013a\u0001\u0000\u0000\u00004\u013e\u0001\u0000\u0000\u0000"+
		"6\u0140\u0001\u0000\u0000\u00008\u0144\u0001\u0000\u0000\u0000:\u0146"+
		"\u0001\u0000\u0000\u0000<\u0148\u0001\u0000\u0000\u0000>\u0150\u0001\u0000"+
		"\u0000\u0000@\u0158\u0001\u0000\u0000\u0000B\u0160\u0001\u0000\u0000\u0000"+
		"D\u0168\u0001\u0000\u0000\u0000F\u0170\u0001\u0000\u0000\u0000H\u0181"+
		"\u0001\u0000\u0000\u0000J\u01ac\u0001\u0000\u0000\u0000L\u01af\u0001\u0000"+
		"\u0000\u0000N\u01d0\u0001\u0000\u0000\u0000P\u01ee\u0001\u0000\u0000\u0000"+
		"R\u01f0\u0001\u0000\u0000\u0000T\u01fb\u0001\u0000\u0000\u0000V\u020c"+
		"\u0001\u0000\u0000\u0000X\\\u0003\u0002\u0001\u0000Y\\\u0003\f\u0006\u0000"+
		"Z\\\u0003\u000e\u0007\u0000[X\u0001\u0000\u0000\u0000[Y\u0001\u0000\u0000"+
		"\u0000[Z\u0001\u0000\u0000\u0000\\_\u0001\u0000\u0000\u0000][\u0001\u0000"+
		"\u0000\u0000]^\u0001\u0000\u0000\u0000^`\u0001\u0000\u0000\u0000_]\u0001"+
		"\u0000\u0000\u0000`a\u0005\u0000\u0000\u0001a\u0001\u0001\u0000\u0000"+
		"\u0000bc\u0005\"\u0000\u0000cd\u0005;\u0000\u0000df\u0005\u0001\u0000"+
		"\u0000eg\u0003\u0004\u0002\u0000fe\u0001\u0000\u0000\u0000fg\u0001\u0000"+
		"\u0000\u0000gh\u0001\u0000\u0000\u0000hj\u0005\u0002\u0000\u0000ik\u0003"+
		"\n\u0005\u0000ji\u0001\u0000\u0000\u0000jk\u0001\u0000\u0000\u0000kl\u0001"+
		"\u0000\u0000\u0000lm\u0003\u0018\f\u0000m\u0003\u0001\u0000\u0000\u0000"+
		"ns\u0003\u0006\u0003\u0000op\u0005\u0003\u0000\u0000pr\u0003\u0006\u0003"+
		"\u0000qo\u0001\u0000\u0000\u0000ru\u0001\u0000\u0000\u0000sq\u0001\u0000"+
		"\u0000\u0000st\u0001\u0000\u0000\u0000t\u0005\u0001\u0000\u0000\u0000"+
		"us\u0001\u0000\u0000\u0000vx\u0005;\u0000\u0000wy\u0003\b\u0004\u0000"+
		"xw\u0001\u0000\u0000\u0000xy\u0001\u0000\u0000\u0000yz\u0001\u0000\u0000"+
		"\u0000z{\u0003V+\u0000{\u0007\u0001\u0000\u0000\u0000|}\u0005\u0004\u0000"+
		"\u0000}\t\u0001\u0000\u0000\u0000~\u008a\u0003V+\u0000\u007f\u0080\u0005"+
		"\u0001\u0000\u0000\u0080\u0083\u0003V+\u0000\u0081\u0082\u0005\u0003\u0000"+
		"\u0000\u0082\u0084\u0003V+\u0000\u0083\u0081\u0001\u0000\u0000\u0000\u0084"+
		"\u0085\u0001\u0000\u0000\u0000\u0085\u0083\u0001\u0000\u0000\u0000\u0085"+
		"\u0086\u0001\u0000\u0000\u0000\u0086\u0087\u0001\u0000\u0000\u0000\u0087"+
		"\u0088\u0005\u0002\u0000\u0000\u0088\u008a\u0001\u0000\u0000\u0000\u0089"+
		"~\u0001\u0000\u0000\u0000\u0089\u007f\u0001\u0000\u0000\u0000\u008a\u000b"+
		"\u0001\u0000\u0000\u0000\u008b\u008c\u0005 \u0000\u0000\u008c\u0090\u0003"+
		"\u0012\t\u0000\u008d\u008f\u0003\u0016\u000b\u0000\u008e\u008d\u0001\u0000"+
		"\u0000\u0000\u008f\u0092\u0001\u0000\u0000\u0000\u0090\u008e\u0001\u0000"+
		"\u0000\u0000\u0090\u0091\u0001\u0000\u0000\u0000\u0091\u0093\u0001\u0000"+
		"\u0000\u0000\u0092\u0090\u0001\u0000\u0000\u0000\u0093\u0096\u0003V+\u0000"+
		"\u0094\u0095\u0005\u0005\u0000\u0000\u0095\u0097\u0003\u0014\n\u0000\u0096"+
		"\u0094\u0001\u0000\u0000\u0000\u0096\u0097\u0001\u0000\u0000\u0000\u0097"+
		"\u009e\u0001\u0000\u0000\u0000\u0098\u0099\u0005 \u0000\u0000\u0099\u009a"+
		"\u0003\u0012\t\u0000\u009a\u009b\u0005\u0005\u0000\u0000\u009b\u009c\u0003"+
		"\u0014\n\u0000\u009c\u009e\u0001\u0000\u0000\u0000\u009d\u008b\u0001\u0000"+
		"\u0000\u0000\u009d\u0098\u0001\u0000\u0000\u0000\u009e\r\u0001\u0000\u0000"+
		"\u0000\u009f\u00a0\u0005!\u0000\u0000\u00a0\u00a1\u0005;\u0000\u0000\u00a1"+
		"\u00a2\u0003V+\u0000\u00a2\u00a3\u0005\u0005\u0000\u0000\u00a3\u00a4\u0003"+
		":\u001d\u0000\u00a4\u000f\u0001\u0000\u0000\u0000\u00a5\u00a6\u0003\u0012"+
		"\t\u0000\u00a6\u00a7\u0005\u0006\u0000\u0000\u00a7\u00a8\u0003\u0014\n"+
		"\u0000\u00a8\u0011\u0001\u0000\u0000\u0000\u00a9\u00ae\u0005;\u0000\u0000"+
		"\u00aa\u00ab\u0005\u0003\u0000\u0000\u00ab\u00ad\u0005;\u0000\u0000\u00ac"+
		"\u00aa\u0001\u0000\u0000\u0000\u00ad\u00b0\u0001\u0000\u0000\u0000\u00ae"+
		"\u00ac\u0001\u0000\u0000\u0000\u00ae\u00af\u0001\u0000\u0000\u0000\u00af"+
		"\u0013\u0001\u0000\u0000\u0000\u00b0\u00ae\u0001\u0000\u0000\u0000\u00b1"+
		"\u00b6\u0003:\u001d\u0000\u00b2\u00b3\u0005\u0003\u0000\u0000\u00b3\u00b5"+
		"\u0003:\u001d\u0000\u00b4\u00b2\u0001\u0000\u0000\u0000\u00b5\u00b8\u0001"+
		"\u0000\u0000\u0000\u00b6\u00b4\u0001\u0000\u0000\u0000\u00b6\u00b7\u0001"+
		"\u0000\u0000\u0000\u00b7\u0015\u0001\u0000\u0000\u0000\u00b8\u00b6\u0001"+
		"\u0000\u0000\u0000\u00b9\u00ba\u0005\u0007\u0000\u0000\u00ba\u00bb\u0003"+
		":\u001d\u0000\u00bb\u00bc\u0005\b\u0000\u0000\u00bc\u0017\u0001\u0000"+
		"\u0000\u0000\u00bd\u00c1\u0005\t\u0000\u0000\u00be\u00c0\u0003\u001a\r"+
		"\u0000\u00bf\u00be\u0001\u0000\u0000\u0000\u00c0\u00c3\u0001\u0000\u0000"+
		"\u0000\u00c1\u00bf\u0001\u0000\u0000\u0000\u00c1\u00c2\u0001\u0000\u0000"+
		"\u0000\u00c2\u00c4\u0001\u0000\u0000\u0000\u00c3\u00c1\u0001\u0000\u0000"+
		"\u0000\u00c4\u00c5\u0005\n\u0000\u0000\u00c5\u0019\u0001\u0000\u0000\u0000"+
		"\u00c6\u00d4\u0003\f\u0006\u0000\u00c7\u00d4\u0003\u000e\u0007\u0000\u00c8"+
		"\u00d4\u0003\u0010\b\u0000\u00c9\u00d4\u0003\u001c\u000e\u0000\u00ca\u00d4"+
		"\u0003\"\u0011\u0000\u00cb\u00d4\u0003$\u0012\u0000\u00cc\u00d4\u0003"+
		"*\u0015\u0000\u00cd\u00d4\u00030\u0018\u0000\u00ce\u00d4\u0005)\u0000"+
		"\u0000\u00cf\u00d4\u0005*\u0000\u0000\u00d0\u00d4\u00036\u001b\u0000\u00d1"+
		"\u00d4\u00038\u001c\u0000\u00d2\u00d4\u0003\u0018\f\u0000\u00d3\u00c6"+
		"\u0001\u0000\u0000\u0000\u00d3\u00c7\u0001\u0000\u0000\u0000\u00d3\u00c8"+
		"\u0001\u0000\u0000\u0000\u00d3\u00c9\u0001\u0000\u0000\u0000\u00d3\u00ca"+
		"\u0001\u0000\u0000\u0000\u00d3\u00cb\u0001\u0000\u0000\u0000\u00d3\u00cc"+
		"\u0001\u0000\u0000\u0000\u00d3\u00cd\u0001\u0000\u0000\u0000\u00d3\u00ce"+
		"\u0001\u0000\u0000\u0000\u00d3\u00cf\u0001\u0000\u0000\u0000\u00d3\u00d0"+
		"\u0001\u0000\u0000\u0000\u00d3\u00d1\u0001\u0000\u0000\u0000\u00d3\u00d2"+
		"\u0001\u0000\u0000\u0000\u00d4\u001b\u0001\u0000\u0000\u0000\u00d5\u00d6"+
		"\u0003\u001e\u000f\u0000\u00d6\u00d7\u0003 \u0010\u0000\u00d7\u00d8\u0003"+
		":\u001d\u0000\u00d8\u001d\u0001\u0000\u0000\u0000\u00d9\u00e6\u0005;\u0000"+
		"\u0000\u00da\u00df\u0005;\u0000\u0000\u00db\u00dc\u0005\u0007\u0000\u0000"+
		"\u00dc\u00dd\u0003:\u001d\u0000\u00dd\u00de\u0005\b\u0000\u0000\u00de"+
		"\u00e0\u0001\u0000\u0000\u0000\u00df\u00db\u0001\u0000\u0000\u0000\u00e0"+
		"\u00e1\u0001\u0000\u0000\u0000\u00e1\u00df\u0001\u0000\u0000\u0000\u00e1"+
		"\u00e2\u0001\u0000\u0000\u0000\u00e2\u00e6\u0001\u0000\u0000\u0000\u00e3"+
		"\u00e4\u0005\u0004\u0000\u0000\u00e4\u00e6\u0005;\u0000\u0000\u00e5\u00d9"+
		"\u0001\u0000\u0000\u0000\u00e5\u00da\u0001\u0000\u0000\u0000\u00e5\u00e3"+
		"\u0001\u0000\u0000\u0000\u00e6\u001f\u0001\u0000\u0000\u0000\u00e7\u00e8"+
		"\u0007\u0000\u0000\u0000\u00e8!\u0001\u0000\u0000\u0000\u00e9\u00ea\u0005"+
		";\u0000\u0000\u00ea\u00ee\u0005\u000f\u0000\u0000\u00eb\u00ec\u0005;\u0000"+
		"\u0000\u00ec\u00ee\u0005\u0010\u0000\u0000\u00ed\u00e9\u0001\u0000\u0000"+
		"\u0000\u00ed\u00eb\u0001\u0000\u0000\u0000\u00ee#\u0001\u0000\u0000\u0000"+
		"\u00ef\u00f0\u0005#\u0000\u0000\u00f0\u00f1\u0003:\u001d\u0000\u00f1\u00f5"+
		"\u0003\u0018\f\u0000\u00f2\u00f4\u0003&\u0013\u0000\u00f3\u00f2\u0001"+
		"\u0000\u0000\u0000\u00f4\u00f7\u0001\u0000\u0000\u0000\u00f5\u00f3\u0001"+
		"\u0000\u0000\u0000\u00f5\u00f6\u0001\u0000\u0000\u0000\u00f6\u00f9\u0001"+
		"\u0000\u0000\u0000\u00f7\u00f5\u0001\u0000\u0000\u0000\u00f8\u00fa\u0003"+
		"(\u0014\u0000\u00f9\u00f8\u0001\u0000\u0000\u0000\u00f9\u00fa\u0001\u0000"+
		"\u0000\u0000\u00fa%\u0001\u0000\u0000\u0000\u00fb\u00fc\u0005$\u0000\u0000"+
		"\u00fc\u00fd\u0005#\u0000\u0000\u00fd\u00fe\u0003:\u001d\u0000\u00fe\u00ff"+
		"\u0003\u0018\f\u0000\u00ff\'\u0001\u0000\u0000\u0000\u0100\u0101\u0005"+
		"$\u0000\u0000\u0101\u0102\u0003\u0018\f\u0000\u0102)\u0001\u0000\u0000"+
		"\u0000\u0103\u0104\u0005%\u0000\u0000\u0104\u0105\u0003:\u001d\u0000\u0105"+
		"\u0109\u0005\t\u0000\u0000\u0106\u0108\u0003,\u0016\u0000\u0107\u0106"+
		"\u0001\u0000\u0000\u0000\u0108\u010b\u0001\u0000\u0000\u0000\u0109\u0107"+
		"\u0001\u0000\u0000\u0000\u0109\u010a\u0001\u0000\u0000\u0000\u010a\u010d"+
		"\u0001\u0000\u0000\u0000\u010b\u0109\u0001\u0000\u0000\u0000\u010c\u010e"+
		"\u0003.\u0017\u0000\u010d\u010c\u0001\u0000\u0000\u0000\u010d\u010e\u0001"+
		"\u0000\u0000\u0000\u010e\u010f\u0001\u0000\u0000\u0000\u010f\u0110\u0005"+
		"\n\u0000\u0000\u0110+\u0001\u0000\u0000\u0000\u0111\u0112\u0005&\u0000"+
		"\u0000\u0112\u0113\u0003\u0014\n\u0000\u0113\u0117\u0005\u0011\u0000\u0000"+
		"\u0114\u0116\u0003\u001a\r\u0000\u0115\u0114\u0001\u0000\u0000\u0000\u0116"+
		"\u0119\u0001\u0000\u0000\u0000\u0117\u0115\u0001\u0000\u0000\u0000\u0117"+
		"\u0118\u0001\u0000\u0000\u0000\u0118-\u0001\u0000\u0000\u0000\u0119\u0117"+
		"\u0001\u0000\u0000\u0000\u011a\u011b\u0005\'\u0000\u0000\u011b\u011f\u0005"+
		"\u0011\u0000\u0000\u011c\u011e\u0003\u001a\r\u0000\u011d\u011c\u0001\u0000"+
		"\u0000\u0000\u011e\u0121\u0001\u0000\u0000\u0000\u011f\u011d\u0001\u0000"+
		"\u0000\u0000\u011f\u0120\u0001\u0000\u0000\u0000\u0120/\u0001\u0000\u0000"+
		"\u0000\u0121\u011f\u0001\u0000\u0000\u0000\u0122\u0124\u0005(\u0000\u0000"+
		"\u0123\u0125\u00032\u0019\u0000\u0124\u0123\u0001\u0000\u0000\u0000\u0124"+
		"\u0125\u0001\u0000\u0000\u0000\u0125\u0126\u0001\u0000\u0000\u0000\u0126"+
		"\u0128\u0005\u0012\u0000\u0000\u0127\u0129\u0003:\u001d\u0000\u0128\u0127"+
		"\u0001\u0000\u0000\u0000\u0128\u0129\u0001\u0000\u0000\u0000\u0129\u012a"+
		"\u0001\u0000\u0000\u0000\u012a\u012c\u0005\u0012\u0000\u0000\u012b\u012d"+
		"\u00034\u001a\u0000\u012c\u012b\u0001\u0000\u0000\u0000\u012c\u012d\u0001"+
		"\u0000\u0000\u0000\u012d\u012e\u0001\u0000\u0000\u0000\u012e\u0136\u0003"+
		"\u0018\f\u0000\u012f\u0130\u0005(\u0000\u0000\u0130\u0131\u0003:\u001d"+
		"\u0000\u0131\u0132\u0003\u0018\f\u0000\u0132\u0136\u0001\u0000\u0000\u0000"+
		"\u0133\u0134\u0005(\u0000\u0000\u0134\u0136\u0003\u0018\f\u0000\u0135"+
		"\u0122\u0001\u0000\u0000\u0000\u0135\u012f\u0001\u0000\u0000\u0000\u0135"+
		"\u0133\u0001\u0000\u0000\u0000\u01361\u0001\u0000\u0000\u0000\u0137\u013b"+
		"\u0003\u0010\b\u0000\u0138\u013b\u0003\u001c\u000e\u0000\u0139\u013b\u0003"+
		"\"\u0011\u0000\u013a\u0137\u0001\u0000\u0000\u0000\u013a\u0138\u0001\u0000"+
		"\u0000\u0000\u013a\u0139\u0001\u0000\u0000\u0000\u013b3\u0001\u0000\u0000"+
		"\u0000\u013c\u013f\u0003\u001c\u000e\u0000\u013d\u013f\u0003\"\u0011\u0000"+
		"\u013e\u013c\u0001\u0000\u0000\u0000\u013e\u013d\u0001\u0000\u0000\u0000"+
		"\u013f5\u0001\u0000\u0000\u0000\u0140\u0142\u0005+\u0000\u0000\u0141\u0143"+
		"\u0003\u0014\n\u0000\u0142\u0141\u0001\u0000\u0000\u0000\u0142\u0143\u0001"+
		"\u0000\u0000\u0000\u01437\u0001\u0000\u0000\u0000\u0144\u0145\u0003:\u001d"+
		"\u0000\u01459\u0001\u0000\u0000\u0000\u0146\u0147\u0003<\u001e\u0000\u0147"+
		";\u0001\u0000\u0000\u0000\u0148\u014d\u0003>\u001f\u0000\u0149\u014a\u0005"+
		"6\u0000\u0000\u014a\u014c\u0003>\u001f\u0000\u014b\u0149\u0001\u0000\u0000"+
		"\u0000\u014c\u014f\u0001\u0000\u0000\u0000\u014d\u014b\u0001\u0000\u0000"+
		"\u0000\u014d\u014e\u0001\u0000\u0000\u0000\u014e=\u0001\u0000\u0000\u0000"+
		"\u014f\u014d\u0001\u0000\u0000\u0000\u0150\u0155\u0003@ \u0000\u0151\u0152"+
		"\u00055\u0000\u0000\u0152\u0154\u0003@ \u0000\u0153\u0151\u0001\u0000"+
		"\u0000\u0000\u0154\u0157\u0001\u0000\u0000\u0000\u0155\u0153\u0001\u0000"+
		"\u0000\u0000\u0155\u0156\u0001\u0000\u0000\u0000\u0156?\u0001\u0000\u0000"+
		"\u0000\u0157\u0155\u0001\u0000\u0000\u0000\u0158\u015d\u0003B!\u0000\u0159"+
		"\u015a\u0007\u0001\u0000\u0000\u015a\u015c\u0003B!\u0000\u015b\u0159\u0001"+
		"\u0000\u0000\u0000\u015c\u015f\u0001\u0000\u0000\u0000\u015d\u015b\u0001"+
		"\u0000\u0000\u0000\u015d\u015e\u0001\u0000\u0000\u0000\u015eA\u0001\u0000"+
		"\u0000\u0000\u015f\u015d\u0001\u0000\u0000\u0000\u0160\u0165\u0003D\""+
		"\u0000\u0161\u0162\u0007\u0002\u0000\u0000\u0162\u0164\u0003D\"\u0000"+
		"\u0163\u0161\u0001\u0000\u0000\u0000\u0164\u0167\u0001\u0000\u0000\u0000"+
		"\u0165\u0163\u0001\u0000\u0000\u0000\u0165\u0166\u0001\u0000\u0000\u0000"+
		"\u0166C\u0001\u0000\u0000\u0000\u0167\u0165\u0001\u0000\u0000\u0000\u0168"+
		"\u016d\u0003F#\u0000\u0169\u016a\u0007\u0003\u0000\u0000\u016a\u016c\u0003"+
		"F#\u0000\u016b\u0169\u0001\u0000\u0000\u0000\u016c\u016f\u0001\u0000\u0000"+
		"\u0000\u016d\u016b\u0001\u0000\u0000\u0000\u016d\u016e\u0001\u0000\u0000"+
		"\u0000\u016eE\u0001\u0000\u0000\u0000\u016f\u016d\u0001\u0000\u0000\u0000"+
		"\u0170\u0175\u0003H$\u0000\u0171\u0172\u0007\u0004\u0000\u0000\u0172\u0174"+
		"\u0003H$\u0000\u0173\u0171\u0001\u0000\u0000\u0000\u0174\u0177\u0001\u0000"+
		"\u0000\u0000\u0175\u0173\u0001\u0000\u0000\u0000\u0175\u0176\u0001\u0000"+
		"\u0000\u0000\u0176G\u0001\u0000\u0000\u0000\u0177\u0175\u0001\u0000\u0000"+
		"\u0000\u0178\u0179\u0005\u001d\u0000\u0000\u0179\u0182\u0003H$\u0000\u017a"+
		"\u017b\u0005\u001a\u0000\u0000\u017b\u0182\u0003H$\u0000\u017c\u017d\u0005"+
		"\u001e\u0000\u0000\u017d\u0182\u0005;\u0000\u0000\u017e\u017f\u0005\u0004"+
		"\u0000\u0000\u017f\u0182\u0005;\u0000\u0000\u0180\u0182\u0003J%\u0000"+
		"\u0181\u0178\u0001\u0000\u0000\u0000\u0181\u017a\u0001\u0000\u0000\u0000"+
		"\u0181\u017c\u0001\u0000\u0000\u0000\u0181\u017e\u0001\u0000\u0000\u0000"+
		"\u0181\u0180\u0001\u0000\u0000\u0000\u0182I\u0001\u0000\u0000\u0000\u0183"+
		"\u01ad\u00057\u0000\u0000\u0184\u01ad\u00058\u0000\u0000\u0185\u01ad\u0005"+
		"9\u0000\u0000\u0186\u01ad\u0005:\u0000\u0000\u0187\u01ad\u0005,\u0000"+
		"\u0000\u0188\u01ad\u0005-\u0000\u0000\u0189\u01ad\u0005.\u0000\u0000\u018a"+
		"\u018b\u0007\u0005\u0000\u0000\u018b\u018c\u0005\u0001\u0000\u0000\u018c"+
		"\u018d\u0003:\u001d\u0000\u018d\u018e\u0005\u0002\u0000\u0000\u018e\u01ad"+
		"\u0001\u0000\u0000\u0000\u018f\u0190\u0005;\u0000\u0000\u0190\u0191\u0005"+
		"\u001f\u0000\u0000\u0191\u0192\u0005;\u0000\u0000\u0192\u0194\u0005\u0001"+
		"\u0000\u0000\u0193\u0195\u0003R)\u0000\u0194\u0193\u0001\u0000\u0000\u0000"+
		"\u0194\u0195\u0001\u0000\u0000\u0000\u0195\u0196\u0001\u0000\u0000\u0000"+
		"\u0196\u01ad\u0005\u0002\u0000\u0000\u0197\u0198\u0005;\u0000\u0000\u0198"+
		"\u019a\u0005\u0001\u0000\u0000\u0199\u019b\u0003R)\u0000\u019a\u0199\u0001"+
		"\u0000\u0000\u0000\u019a\u019b\u0001\u0000\u0000\u0000\u019b\u019c\u0001"+
		"\u0000\u0000\u0000\u019c\u01ad\u0005\u0002\u0000\u0000\u019d\u01a2\u0005"+
		";\u0000\u0000\u019e\u019f\u0005\u0007\u0000\u0000\u019f\u01a0\u0003:\u001d"+
		"\u0000\u01a0\u01a1\u0005\b\u0000\u0000\u01a1\u01a3\u0001\u0000\u0000\u0000"+
		"\u01a2\u019e\u0001\u0000\u0000\u0000\u01a3\u01a4\u0001\u0000\u0000\u0000"+
		"\u01a4\u01a2\u0001\u0000\u0000\u0000\u01a4\u01a5\u0001\u0000\u0000\u0000"+
		"\u01a5\u01ad\u0001\u0000\u0000\u0000\u01a6\u01ad\u0005;\u0000\u0000\u01a7"+
		"\u01a8\u0005\u0001\u0000\u0000\u01a8\u01a9\u0003:\u001d\u0000\u01a9\u01aa"+
		"\u0005\u0002\u0000\u0000\u01aa\u01ad\u0001\u0000\u0000\u0000\u01ab\u01ad"+
		"\u0003L&\u0000\u01ac\u0183\u0001\u0000\u0000\u0000\u01ac\u0184\u0001\u0000"+
		"\u0000\u0000\u01ac\u0185\u0001\u0000\u0000\u0000\u01ac\u0186\u0001\u0000"+
		"\u0000\u0000\u01ac\u0187\u0001\u0000\u0000\u0000\u01ac\u0188\u0001\u0000"+
		"\u0000\u0000\u01ac\u0189\u0001\u0000\u0000\u0000\u01ac\u018a\u0001\u0000"+
		"\u0000\u0000\u01ac\u018f\u0001\u0000\u0000\u0000\u01ac\u0197\u0001\u0000"+
		"\u0000\u0000\u01ac\u019d\u0001\u0000\u0000\u0000\u01ac\u01a6\u0001\u0000"+
		"\u0000\u0000\u01ac\u01a7\u0001\u0000\u0000\u0000\u01ac\u01ab\u0001\u0000"+
		"\u0000\u0000\u01adK\u0001\u0000\u0000\u0000\u01ae\u01b0\u0003\u0016\u000b"+
		"\u0000\u01af\u01ae\u0001\u0000\u0000\u0000\u01b0\u01b1\u0001\u0000\u0000"+
		"\u0000\u01b1\u01af\u0001\u0000\u0000\u0000\u01b1\u01b2\u0001\u0000\u0000"+
		"\u0000\u01b2\u01b3\u0001\u0000\u0000\u0000\u01b3\u01b4\u0003V+\u0000\u01b4"+
		"\u01b6\u0005\t\u0000\u0000\u01b5\u01b7\u0003N\'\u0000\u01b6\u01b5\u0001"+
		"\u0000\u0000\u0000\u01b6\u01b7\u0001\u0000\u0000\u0000\u01b7\u01b8\u0001"+
		"\u0000\u0000\u0000\u01b8\u01b9\u0005\n\u0000\u0000\u01b9M\u0001\u0000"+
		"\u0000\u0000\u01ba\u01bf\u0003:\u001d\u0000\u01bb\u01bc\u0005\u0003\u0000"+
		"\u0000\u01bc\u01be\u0003:\u001d\u0000\u01bd\u01bb\u0001\u0000\u0000\u0000"+
		"\u01be\u01c1\u0001\u0000\u0000\u0000\u01bf\u01bd\u0001\u0000\u0000\u0000"+
		"\u01bf\u01c0\u0001\u0000\u0000\u0000\u01c0\u01c3\u0001\u0000\u0000\u0000"+
		"\u01c1\u01bf\u0001\u0000\u0000\u0000\u01c2\u01c4\u0005\u0003\u0000\u0000"+
		"\u01c3\u01c2\u0001\u0000\u0000\u0000\u01c3\u01c4\u0001\u0000\u0000\u0000"+
		"\u01c4\u01d1\u0001\u0000\u0000\u0000\u01c5\u01ca\u0003P(\u0000\u01c6\u01c7"+
		"\u0005\u0003\u0000\u0000\u01c7\u01c9\u0003P(\u0000\u01c8\u01c6\u0001\u0000"+
		"\u0000\u0000\u01c9\u01cc\u0001\u0000\u0000\u0000\u01ca\u01c8\u0001\u0000"+
		"\u0000\u0000\u01ca\u01cb\u0001\u0000\u0000\u0000\u01cb\u01ce\u0001\u0000"+
		"\u0000\u0000\u01cc\u01ca\u0001\u0000\u0000\u0000\u01cd\u01cf\u0005\u0003"+
		"\u0000\u0000\u01ce\u01cd\u0001\u0000\u0000\u0000\u01ce\u01cf\u0001\u0000"+
		"\u0000\u0000\u01cf\u01d1\u0001\u0000\u0000\u0000\u01d0\u01ba\u0001\u0000"+
		"\u0000\u0000\u01d0\u01c5\u0001\u0000\u0000\u0000\u01d1O\u0001\u0000\u0000"+
		"\u0000\u01d2\u01d3\u0005\t\u0000\u0000\u01d3\u01d8\u0003:\u001d\u0000"+
		"\u01d4\u01d5\u0005\u0003\u0000\u0000\u01d5\u01d7\u0003:\u001d\u0000\u01d6"+
		"\u01d4\u0001\u0000\u0000\u0000\u01d7\u01da\u0001\u0000\u0000\u0000\u01d8"+
		"\u01d6\u0001\u0000\u0000\u0000\u01d8\u01d9\u0001\u0000\u0000\u0000\u01d9"+
		"\u01dc\u0001\u0000\u0000\u0000\u01da\u01d8\u0001\u0000\u0000\u0000\u01db"+
		"\u01dd\u0005\u0003\u0000\u0000\u01dc\u01db\u0001\u0000\u0000\u0000\u01dc"+
		"\u01dd\u0001\u0000\u0000\u0000\u01dd\u01de\u0001\u0000\u0000\u0000\u01de"+
		"\u01df\u0005\n\u0000\u0000\u01df\u01ef\u0001\u0000\u0000\u0000\u01e0\u01e1"+
		"\u0005\t\u0000\u0000\u01e1\u01e6\u0003P(\u0000\u01e2\u01e3\u0005\u0003"+
		"\u0000\u0000\u01e3\u01e5\u0003P(\u0000\u01e4\u01e2\u0001\u0000\u0000\u0000"+
		"\u01e5\u01e8\u0001\u0000\u0000\u0000\u01e6\u01e4\u0001\u0000\u0000\u0000"+
		"\u01e6\u01e7\u0001\u0000\u0000\u0000\u01e7\u01ea\u0001\u0000\u0000\u0000"+
		"\u01e8\u01e6\u0001\u0000\u0000\u0000\u01e9\u01eb\u0005\u0003\u0000\u0000"+
		"\u01ea\u01e9\u0001\u0000\u0000\u0000\u01ea\u01eb\u0001\u0000\u0000\u0000"+
		"\u01eb\u01ec\u0001\u0000\u0000\u0000\u01ec\u01ed\u0005\n\u0000\u0000\u01ed"+
		"\u01ef\u0001\u0000\u0000\u0000\u01ee\u01d2\u0001\u0000\u0000\u0000\u01ee"+
		"\u01e0\u0001\u0000\u0000\u0000\u01efQ\u0001\u0000\u0000\u0000\u01f0\u01f5"+
		"\u0003T*\u0000\u01f1\u01f2\u0005\u0003\u0000\u0000\u01f2\u01f4\u0003T"+
		"*\u0000\u01f3\u01f1\u0001\u0000\u0000\u0000\u01f4\u01f7\u0001\u0000\u0000"+
		"\u0000\u01f5\u01f3\u0001\u0000\u0000\u0000\u01f5\u01f6\u0001\u0000\u0000"+
		"\u0000\u01f6S\u0001\u0000\u0000\u0000\u01f7\u01f5\u0001\u0000\u0000\u0000"+
		"\u01f8\u01fc\u0003:\u001d\u0000\u01f9\u01fa\u0005\u001e\u0000\u0000\u01fa"+
		"\u01fc\u0005;\u0000\u0000\u01fb\u01f8\u0001\u0000\u0000\u0000\u01fb\u01f9"+
		"\u0001\u0000\u0000\u0000\u01fcU\u0001\u0000\u0000\u0000\u01fd\u020d\u0005"+
		"/\u0000\u0000\u01fe\u020d\u00050\u0000\u0000\u01ff\u020d\u00051\u0000"+
		"\u0000\u0200\u020d\u00052\u0000\u0000\u0201\u020d\u00053\u0000\u0000\u0202"+
		"\u020d\u00054\u0000\u0000\u0203\u0205\u0003\u0016\u000b\u0000\u0204\u0203"+
		"\u0001\u0000\u0000\u0000\u0205\u0206\u0001\u0000\u0000\u0000\u0206\u0204"+
		"\u0001\u0000\u0000\u0000\u0206\u0207\u0001\u0000\u0000\u0000\u0207\u0208"+
		"\u0001\u0000\u0000\u0000\u0208\u0209\u0003V+\u0000\u0209\u020d\u0001\u0000"+
		"\u0000\u0000\u020a\u020b\u0005\u0004\u0000\u0000\u020b\u020d\u0003V+\u0000"+
		"\u020c\u01fd\u0001\u0000\u0000\u0000\u020c\u01fe\u0001\u0000\u0000\u0000"+
		"\u020c\u01ff\u0001\u0000\u0000\u0000\u020c\u0200\u0001\u0000\u0000\u0000"+
		"\u020c\u0201\u0001\u0000\u0000\u0000\u020c\u0202\u0001\u0000\u0000\u0000"+
		"\u020c\u0204\u0001\u0000\u0000\u0000\u020c\u020a\u0001\u0000\u0000\u0000"+
		"\u020dW\u0001\u0000\u0000\u0000:[]fjsx\u0085\u0089\u0090\u0096\u009d\u00ae"+
		"\u00b6\u00c1\u00d3\u00e1\u00e5\u00ed\u00f5\u00f9\u0109\u010d\u0117\u011f"+
		"\u0124\u0128\u012c\u0135\u013a\u013e\u0142\u014d\u0155\u015d\u0165\u016d"+
		"\u0175\u0181\u0194\u019a\u01a4\u01ac\u01b1\u01b6\u01bf\u01c3\u01ca\u01ce"+
		"\u01d0\u01d8\u01dc\u01e6\u01ea\u01ee\u01f5\u01fb\u0206\u020c";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}