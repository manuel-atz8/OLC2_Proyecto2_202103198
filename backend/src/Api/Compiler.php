<?php

namespace Golampi\Api;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Golampi\Errors\ErrorCollector;
use Golampi\Errors\GolampiLexerErrorListener;
use Golampi\Errors\GolampiParserErrorListener;
use Golampi\Compiler\GolampiCompiler;
use Golampi\Reports\ErrorReport;
use Golampi\Reports\SymbolTableReport;

class Compiler
{
    private string $sourceCode;
    private ?GolampiCompiler $compiler = null;

    public function __construct(string $sourceCode)
    {
        $this->sourceCode = $sourceCode;
    }

    public function run(): array
    {
        ErrorCollector::reset();
        $errors = ErrorCollector::getInstance();

        try {
            $input = InputStream::fromString($this->sourceCode);
            $lexer = new \GolampiLexer($input);
            $lexer->removeErrorListeners();
            $lexer->addErrorListener(new GolampiLexerErrorListener());

            $tokens = new CommonTokenStream($lexer);
            $parser = new \GolampiParser($tokens);
            $parser->removeErrorListeners();
            $parser->addErrorListener(new GolampiParserErrorListener());

            $tree = $parser->program();

            $this->compiler = new GolampiCompiler();
            $this->compiler->visit($tree);

        } catch (\Exception $e) {
            $errors->addSemantic("Error fatal: " . $e->getMessage(), 0, 0);
        }

        $assembly    = $this->compiler ? $this->compiler->getAssembly() : '';
        $symbolTable = $this->compiler ? $this->compiler->symbolTable : null;
        $symbolReport = $symbolTable ? new SymbolTableReport($symbolTable) : null;

        return [
            'assembly'    => $assembly,
            'errors'      => ErrorReport::toArray(),
            'symbols'     => $symbolReport ? $symbolReport->toArray() : [],
            'hasErrors'   => $errors->hasErrors(),
            'errorsHtml'  => ErrorReport::toHtml(),
            'symbolsHtml' => $symbolReport ? $symbolReport->toHtml() : '',
        ];
    }
}