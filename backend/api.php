<?php

require_once __DIR__ . '/vendor/autoload.php';

// Cargar archivos generados por ANTLR (ORDEN IMPORTA)
require_once __DIR__ . '/Grammar/GolampiLexer.php';
require_once __DIR__ . '/Grammar/GolampiParser.php';
require_once __DIR__ . '/Grammar/GolampiVisitor.php';      // Interfaz primero
require_once __DIR__ . '/Grammar/GolampiBaseVisitor.php';   // Base después

use Golampi\Api\Router;

Router::handle();