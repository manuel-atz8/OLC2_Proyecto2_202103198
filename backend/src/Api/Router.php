<?php

namespace Golampi\Api;

class Router
{
    /**
     * Procesa la petición HTTP.
     */
    public static function handle(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');

        // Preflight CORS
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            self::respond(405, ['error' => 'Método no permitido. Use POST.']);
            return;
        }

        $body = json_decode(file_get_contents('php://input'), true);

        if ($body === null || !isset($body['action'])) {
            self::respond(400, ['error' => 'Cuerpo JSON inválido. Se requiere "action".']);
            return;
        }

        match ($body['action']) {
            'execute' => self::executeCode($body),
            'compile' => self::compileCode($body),
            default   => self::respond(400, ['error' => "Acción '{$body['action']}' no reconocida."]),
        };
    }

    /**
     * Ejecuta código Golampi.
     */
    private static function executeCode(array $body): void
    {
        if (!isset($body['code']) || trim($body['code']) === '') {
            self::respond(400, ['error' => 'No se recibió código fuente.']);
            return;
        }

        $interpreter = new Interpreter($body['code']);
        $result = $interpreter->run();

        self::respond(200, $result);
    }

    /**
     * Compila código Golampi a ensamblador ARM64.
     */
    private static function compileCode(array $body): void
    {
        if (!isset($body['code']) || trim($body['code']) === '') {
            self::respond(400, ['error' => 'No se recibió código fuente.']);
            return;
        }

        $compiler = new Compiler($body['code']);
        $result = $compiler->run();

        self::respond(200, $result);
    }

    /**
     * Envía respuesta JSON.
     */
    private static function respond(int $statusCode, array $data): void
    {
        http_response_code($statusCode);
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}