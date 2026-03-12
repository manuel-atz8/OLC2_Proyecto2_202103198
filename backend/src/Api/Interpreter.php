<?php

namespace Golampi\Api;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Golampi\Errors\ErrorCollector;
use Golampi\Errors\GolampiLexerErrorListener;
use Golampi\Errors\GolampiParserErrorListener;
use Golampi\Interpreter\GolampiVisitor;
use Golampi\Reports\ErrorReport;
use Golampi\Reports\SymbolTableReport;

class Interpreter
{
    private string $sourceCode;
    private ?GolampiVisitor $visitor = null;

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

            $this->visitor = new GolampiVisitor();
            $this->visitor->visit($tree);

        } catch (\Exception $e) {
            $errors->addSemantic("Error fatal: " . $e->getMessage(), 0, 0);
        }

        $output = $this->visitor ? $this->visitor->output : '';
        $symbolTable = $this->visitor ? $this->visitor->symbolTable : null;
        $symbolReport = $symbolTable ? new SymbolTableReport($symbolTable) : null;

        return [
            'output'       => $output,
            'errors'       => ErrorReport::toArray(),
            'symbols'      => $symbolReport ? $symbolReport->toArray() : [],
            'hasErrors'    => $errors->hasErrors(),
            'errorsHtml'   => ErrorReport::toHtml(),
            'symbolsHtml'  => $symbolReport ? $symbolReport->toHtml() : '',
        ];
    }
}