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

    /** Directorio temporal para archivos de compilación. */
    private string $tmpDir;

    public function __construct(string $sourceCode)
    {
        $this->sourceCode = $sourceCode;
        $this->tmpDir = sys_get_temp_dir() . '/golampi_' . uniqid();
    }

    /**
     * Compila código Golampi a ARM64.
     * Retorna el resultado con el assembly generado.
     */
    public function compile(): array
    {
        ErrorCollector::reset();
        $errors = ErrorCollector::getInstance();

        $assembly = '';

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

            $assembly = $this->compiler->getAssembly();

        } catch (\Exception $e) {
            $errors->addSemantic("Error fatal: " . $e->getMessage(), 0, 0);
        }

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

    /**
     * Compila, ensambla, enlaza y ejecuta en QEMU.
     * Retorna todo lo de compile() más la salida de ejecución.
     */
    public function compileAndRun(): array
    {
        // Primero compilar
        $result = $this->compile();

        // Si hubo errores de compilación o no hay assembly, no ejecutar
        if ($result['hasErrors'] || empty(trim($result['assembly']))) {
            $result['qemu'] = [
                'stdout'   => '',
                'stderr'   => 'No se puede ejecutar: errores de compilación.',
                'exitCode' => -1,
                'success'  => false,
            ];
            return $result;
        }

        // Crear directorio temporal
        if (!is_dir($this->tmpDir)) {
            mkdir($this->tmpDir, 0755, true);
        }

        $sFile  = $this->tmpDir . '/program.s';
        $oFile  = $this->tmpDir . '/program.o';
        $binFile = $this->tmpDir . '/program';

        // Guardar el .s
        file_put_contents($sFile, $result['assembly']);

        // Ensamblar
        $asResult = $this->runCommand(
            "aarch64-linux-gnu-as {$sFile} -o {$oFile} 2>&1"
        );

        if ($asResult['exitCode'] !== 0) {
            $result['qemu'] = [
                'stdout'   => '',
                'stderr'   => "Error de ensamblado:\n" . $asResult['output'],
                'exitCode' => $asResult['exitCode'],
                'success'  => false,
            ];
            $this->cleanup();
            return $result;
        }

        // Enlazar
        $ldResult = $this->runCommand(
            "aarch64-linux-gnu-ld {$oFile} -o {$binFile} 2>&1"
        );

        if ($ldResult['exitCode'] !== 0) {
            $result['qemu'] = [
                'stdout'   => '',
                'stderr'   => "Error de enlazado:\n" . $ldResult['output'],
                'exitCode' => $ldResult['exitCode'],
                'success'  => false,
            ];
            $this->cleanup();
            return $result;
        }

        // Ejecutar en QEMU con timeout de 5 segundos
        $qemuResult = $this->runCommand(
            "timeout 5 qemu-aarch64 {$binFile} 2>&1",
            true
        );

        $exitCode = $qemuResult['exitCode'];
        $stdout = $qemuResult['output'];
        $stderr = '';

        // timeout retorna 124 si se excedió el tiempo
        if ($exitCode === 124) {
            $stderr = "Ejecución terminada: se excedió el tiempo límite de 5 segundos (posible bucle infinito).";
        }

        $result['qemu'] = [
            'stdout'   => $stdout,
            'stderr'   => $stderr,
            'exitCode' => $exitCode,
            'success'  => ($exitCode === 0),
        ];

        $this->cleanup();

        return $result;
    }

    /**
     * Ejecuta un comando del sistema y retorna su salida y exit code.
     */
    private function runCommand(string $command, bool $separateStreams = false): array
    {
        $output = '';
        $exitCode = -1;

        if ($separateStreams) {
            // Separar stdout y stderr
            $descriptors = [
                0 => ['pipe', 'r'],
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w'],
            ];

            $process = proc_open($command, $descriptors, $pipes);

            if (is_resource($process)) {
                fclose($pipes[0]);
                $output = stream_get_contents($pipes[1]);
                $stderr = stream_get_contents($pipes[2]);
                fclose($pipes[1]);
                fclose($pipes[2]);
                $exitCode = proc_close($process);

                if (!empty($stderr)) {
                    $output .= $stderr;
                }
            }
        } else {
            exec($command, $outputLines, $exitCode);
            $output = implode("\n", $outputLines);
        }

        return [
            'output'   => $output,
            'exitCode' => $exitCode,
        ];
    }

    /**
     * Limpia el directorio temporal.
     */
    private function cleanup(): void
    {
        if (is_dir($this->tmpDir)) {
            $files = glob($this->tmpDir . '/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
            rmdir($this->tmpDir);
        }
    }
}