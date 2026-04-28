# OLC2_Proyecto2_202103198

# Golampi Compiler

Compilador para el lenguaje **Golampi**, un lenguaje académico inspirado en la sintaxis de Golang. Desarrollado para el curso de **Organización de Lenguajes y Compiladores 2 — Universidad de San Carlos de Guatemala**.

A diferencia del Proyecto 1, este sistema realiza el flujo completo de compilación:

* Análisis léxico
* Análisis sintáctico
* Análisis semántico
* Generación de código ensamblador ARM64
* Ensamblaje del archivo generado
* Enlace del ejecutable
* Ejecución mediante QEMU

---

## Requisitos

* PHP 8.3.6 o superior
* Composer
* Node.js v20.19.4 o superior
* ANTLR 4.13.1
* Java JDK
* QEMU (`qemu-aarch64`)
* Toolchain ARM64:

  * `aarch64-linux-gnu-as`
  * `aarch64-linux-gnu-ld`

---

# Instalación

## Backend

```bash
cd backend
composer install
```

## Generar parser (solo si se modificó la gramática)

```bash
cd backend
antlr -Dlanguage=PHP -visitor Grammar/Golampi.g4
```

## Frontend

```bash
cd frontend
npm install
```

---

# Ejecución

Se necesitan dos terminales:

## Terminal 1 — Backend

```bash
cd backend
php -S localhost:8080
```

## Terminal 2 — Frontend

```bash
cd frontend
npm run dev
```

Abrir el navegador en:

```bash
http://localhost:5173
```

---

# Flujo de compilación

Cuando el usuario presiona el botón **Compilar**, el sistema ejecuta automáticamente:

1. Análisis léxico
2. Análisis sintáctico
3. Análisis semántico
4. Generación de código ARM64 (`.s`)
5. Ensamblaje (`.o`)
6. Enlace del ejecutable
7. Ejecución con QEMU

Comandos utilizados internamente:

```bash
aarch64-linux-gnu-as salida.s -o salida.o
aarch64-linux-gnu-ld salida.o -o salida
qemu-aarch64 ./salida
```

---

# Estructura del proyecto

```bash
Proyecto2-Golampi_Compiler/
├── backend/
│   ├── Grammar/                     # Gramática ANTLR4 y archivos generados
│   ├── src/
│   │   ├── Api/                     # Endpoints HTTP
│   │   ├── Errors/                  # Manejo de errores léxicos, sintácticos y semánticos
│   │   ├── Reports/                 # Generación de reportes
│   │   ├── Runtime/                 # Tabla de símbolos y entornos
│   │   ├── Semantic/                # Validaciones semánticas
│   │   └── Compiler/
│   │       ├── GolampiCompiler.php          # Clase principal (extiende GolampiBaseVisitor)
│   │       ├── AssemblyEmitter.php          # Acumula secciones .text y .data
│   │       ├── LabelGenerator.php           # Generación de etiquetas únicas
│   │       ├── StringPool.php               # Manejo de strings para .data
│   │       ├── TypeSizes.php                # Tamaños por tipo
│   │       └── Traits/
│   │           ├── CodeGenExpressionTrait.php
│   │           ├── CodeGenDeclarationTrait.php
│   │           ├── CodeGenStatementTrait.php
│   │           ├── CodeGenControlFlowTrait.php
│   │           ├── CodeGenBuiltinTrait.php
│   │           └── CodeGenFunctionTrait.php
│   ├── api.php
│   └── composer.json
│
├── frontend/
│   ├── src/
│   │   ├── App.jsx                  # Interfaz principal
│   │   └── index.css                # Estilos
│   ├── vite.config.js
│   └── package.json
│
└── Docs./
    ├── Manual_Tecnico.md
    └── Manual_Usuario.md
```

---

# Funcionalidades

## Compilador

* Análisis léxico con ANTLR4
* Análisis sintáctico con ANTLR4
* Análisis semántico
* Validación de tipos
* Validación de scopes
* Generación de tabla de símbolos
* Generación de reporte de errores
* Generación de código ARM64
* Generación de archivo `.s`
* Ensamblaje automático
* Ejecución con QEMU

---

## Características del lenguaje Golampi

* Tipos soportados:

  * int32
  * float32
  * bool
  * rune
  * string

* Variables (`var` y `:=`)

* Constantes

* Operadores aritméticos

* Operadores relacionales

* Operadores lógicos

* If / Else

* Switch / Case

* For

* Break / Continue / Return

* Funciones

* Múltiples retornos

* Recursividad

* Arreglos multidimensionales

* Punteros (`&` y `*`)

* Funciones embebidas:

  * `fmt.Println`
  * `len`
  * `now`
  * `substr`
  * `typeOf`

---

# Reportes generados

El sistema permite descargar:

* Reporte de errores
* Tabla de símbolos
* Código ARM64 generado (`.s`)

---

# Tecnologías

* **Lenguaje de implementación:** PHP 8.3
* **Parser Generator:** ANTLR4 (target PHP)
* **Frontend:** React + Vite + Tailwind CSS
* **Servidor:** PHP built-in server
* **Arquitectura objetivo:** ARM64
* **Emulador:** QEMU

---

# Resultado final

Este proyecto implementa un compilador completo que traduce programas escritos en Golampi hacia código ensamblador ARM64 real y permite su ejecución en un entorno emulado mediante QEMU.
