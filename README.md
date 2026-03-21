# OLC2-B_1S26_202103198

# Golampi Interpreter

Intérprete para el lenguaje Golampi, un lenguaje académico inspirado en la sintaxis de Golang. Desarrollado para el curso de Organización de Lenguajes y Compiladores 2 — Universidad San Carlos de Guatemala.

## Requisitos

- PHP 8.3.6 o superior
- Composer
- Node.js v20.19.4 o superior
- ANTLR 4.13.1

## Instalación

### Backend
```bash
cd backend
composer install
```

### Generar parser (solo si se modificó la gramática)
```bash
cd backend
antlr -Dlanguage=PHP -visitor Grammar/Golampi.g4
```

### Frontend
```bash
cd frontend
npm install
```

## Ejecución

Se necesitan dos terminales:

**Terminal 1 — Backend:**
```bash
cd backend
php -S localhost:8080
```

**Terminal 2 — Frontend:**
```bash
cd frontend
npm run dev
```

Abrir el navegador en `http://localhost:5173`

## Estructura del proyecto
```
Proyecto1-Golampi_Interpreter/
├── backend/
│   ├── Grammar/            # Gramática ANTLR4 y archivos generados
│   ├── src/
│   │   ├── Api/            # Punto de entrada HTTP
│   │   ├── Errors/         # Manejo de errores (léxicos, sintácticos, semánticos)
│   │   ├── Interpreter/    # Visitor principal y traits
│   │   ├── Reports/        # Generación de reportes
│   │   ├── Runtime/        # Environment, tipos y tabla de símbolos
│   │   └── Semantic/       # Tablas de compatibilidad de tipos
│   ├── api.php
│   └── composer.json
├── frontend/
│   ├── src/
│   │   ├── App.jsx         # Componente principal
│   │   └── index.css       # Estilos con Tailwind
│   ├── vite.config.js
│   └── package.json
└── docs/
    ├── technical.md        # Documentación técnica
    └── user_manual.md      # Manual de usuario
```

## Funcionalidades

- Análisis léxico y sintáctico con ANTLR4
- Análisis semántico con validación de tipos
- Tipos soportados: int32, float32, bool, rune, string
- Variables (var y :=), constantes
- Operaciones aritméticas, relacionales y lógicas con cortocircuito
- Estructuras de control: if/else, switch/case, for (clásico, condición, infinito)
- Funciones con retorno simple y múltiple
- Recursión
- Arreglos unidimensionales y multidimensionales
- Punteros (paso por referencia con & y *)
- Funciones embebidas: fmt.Println, len, now, substr, typeOf
- Hoisting de funciones
- Scopes anidados
- Reporte de errores descargable
- Reporte de tabla de símbolos descargable

## Tecnologías

- **Lenguaje de implementación:** PHP 8.3
- **Generador de parser:** ANTLR4 (target PHP)
- **Frontend:** React + Vite + Tailwind CSS
- **Servidor:** PHP built-in server