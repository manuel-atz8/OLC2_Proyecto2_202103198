# Manual de Usuario — Golampi Interpreter

## 1. Requisitos del Sistema

- Sistema operativo: Linux (Ubuntu 24.04 recomendado), macOS o Windows con WSL
- PHP 8.3 o superior
- Composer
- Node.js v20 o superior
- ANTLR 4.13.1
- Navegador web moderno (Chrome, Firefox, Edge)

## 2. Instalación

### 2.1 Clonar el repositorio
```bash
git clone 
cd Proyecto1-Golampi_Interpreter
```

### 2.2 Instalar dependencias del backend
```bash
cd backend
composer install
```

### 2.3 Generar el parser (solo si es la primera vez o se modificó la gramática)
```bash
cd backend
antlr -Dlanguage=PHP -visitor Grammar/Golampi.g4
```

### 2.4 Instalar dependencias del frontend
```bash
cd frontend
npm install
```

## 3. Ejecución

Se necesitan dos terminales abiertas simultáneamente.

### Terminal 1 — Servidor backend
```bash
cd backend
php -S localhost:8080
```

Debe aparecer el mensaje: `PHP 8.3.6 Development Server (http://localhost:8080) started`

### Terminal 2 — Servidor frontend
```bash
cd frontend
npm run dev
```

Debe aparecer: `VITE ready` con la URL `http://localhost:5173/`

### 3.1 Acceder a la aplicación

Abrir el navegador en `http://localhost:5173`

Se mostrará la interfaz inicial del intérprete:

![Interfaz inicial](./img_mu/1.png)

La interfaz se divide en tres zonas principales: el editor de código a la izquierda, la consola de salida arriba a la derecha, y el panel de reportes abajo a la derecha.

## 4. Uso de la Interfaz

### 4.1 Barra de acciones

La barra superior contiene los botones principales:

| Botón | Función |
|-------|---------|
| Nuevo | Limpia el editor y la consola para iniciar un nuevo programa |
| Abrir | Abre un archivo .go o .gol desde el sistema de archivos |
| Guardar | Descarga el contenido del editor como archivo .gol |
| Ejecutar | Envía el código al backend para análisis y ejecución |
| Limpiar Consola | Borra el contenido de la consola de salida |

### 4.2 Escribir código

Escribir o pegar código Golampi directamente en el editor. El editor soporta números de línea, tabulación con Tab y scroll sincronizado.

![Código en el editor](./img_mu/2.png)

### 4.3 Abrir un archivo

Al presionar el botón "Abrir", se muestra el diálogo del sistema para seleccionar un archivo. Se aceptan archivos con extensión `.go`, `.gol` y `.txt`.

![Diálogo abrir archivo](./img_mu/4.png)

Seleccionar el archivo deseado y su contenido se cargará automáticamente en el editor.

### 4.4 Ejecutar código

Presionar el botón "Ejecutar" (verde). El código se envía al servidor PHP donde pasa por las fases de análisis léxico, sintáctico y semántico. El resultado aparece en la consola de salida.

![Resultado de ejecución](./img_mu/3.png)

Si hay errores, se muestran al final de la consola con el formato:
```
[Tipo] Línea X:Y - Descripción del error
```

### 4.5 Guardar código

Presionar "Guardar" descarga el contenido actual del editor como un archivo `programa.gol`.

### 4.6 Limpiar consola

Presionar "Limpiar Consola" borra todo el contenido de la consola de salida sin afectar el editor.

## 5. Reportes

Después de ejecutar código, se habilitan tres botones de descarga en el panel de Reportes.

### 5.1 Descargar Resultado

Descarga un archivo `resultado.txt` con la salida completa de la consola.

### 5.2 Descargar Errores

Descarga un archivo `errores.html` con una tabla de todos los errores detectados durante el análisis. La tabla incluye: número, tipo de error (Léxico, Sintáctico o Semántico), descripción, línea y columna.

![Reporte de errores](./img_mu/6.png)

Los errores se clasifican por colores:
- **Rojo**: Errores léxicos (símbolos no reconocidos)
- **Naranja**: Errores sintácticos (estructura inválida)
- **Morado**: Errores semánticos (tipos incompatibles, variables no declaradas, etc.)

### 5.3 Descargar Tabla de Símbolos

Descarga un archivo `tabla_simbolos.html` con una tabla de todos los identificadores registrados durante la ejecución. La tabla incluye: número, identificador, tipo, ámbito, categoría, valor, línea y columna.

![Tabla de símbolos](./img_mu/5.png)

Las categorías de símbolos se identifican por color:
- **Azul**: Funciones
- **Verde**: Variables
- **Rojo**: Constantes
- **Morado**: Parámetros
- **Naranja**: Arreglos

## 6. Sintaxis del Lenguaje Golampi

### 6.1 Tipos de datos

| Tipo | Descripción | Valor por defecto |
|------|-------------|-------------------|
| int32 | Entero de 32 bits | 0 |
| float32 | Punto flotante de 32 bits | 0.0 |
| bool | Valor lógico | false |
| rune | Carácter Unicode | 0 |
| string | Cadena de texto | "" |

### 6.2 Variables
```go
// Declaración larga
var x int32 = 10
var nombre string = "Golampi"

// Declaración larga sin inicializar (usa valor por defecto)
var y float32

// Declaración corta (infiere el tipo)
z := 42
pi := 3.1416

// Declaración múltiple
var a, b int32 = 1, 2
c, d := "Hola", "Mundo"
```

### 6.3 Constantes
```go
const PI float32 = 3.14159
const NOMBRE string = "Golampi"
```

### 6.4 Operadores

Aritméticos: `+`, `-`, `*`, `/`, `%`
Relacionales: `==`, `!=`, `>`, `>=`, `<`, `<=`
Lógicos: `&&`, `||`, `!`
Asignación: `=`, `+=`, `-=`, `*=`, `/=`
Incremento/Decremento: `++`, `--`

### 6.5 Estructuras de control
```go
// If / else
if x > 5 {
    fmt.Println("Mayor")
} else {
    fmt.Println("Menor o igual")
}

// Switch
switch dia {
case 1:
    fmt.Println("Lunes")
case 2:
    fmt.Println("Martes")
default:
    fmt.Println("Otro día")
}

// For clásico
for i := 0; i < 10; i++ {
    fmt.Println(i)
}

// For condicional (while)
for x > 0 {
    x -= 1
}

// For infinito
for {
    fmt.Println("Infinito")
    break
}
```

### 6.6 Funciones
```go
// Función simple
func suma(a int32, b int32) int32 {
    return a + b
}

// Función con múltiples retornos
func dividir(a int32, b int32) (int32, bool) {
    if b == 0 {
        return 0, false
    }
    return a / b, true
}

// Función con punteros (paso por referencia)
func duplicar(x *int32) {
    x = x * 2
}

func main() {
    n := 10
    duplicar(&n)
    fmt.Println(n) // 20
}
```

### 6.7 Arreglos
```go
// Declaración
var nums [5]int32
var nombres [3]string = [3]string{"Ana", "Luis", "Carlos"}

// Acceso y modificación
nums[0] = 10
fmt.Println(nums[0])

// Arreglo multidimensional
var matriz [2][2]int32 = [2][2]int32{{1, 2}, {3, 4}}
fmt.Println(matriz[0][1]) // 2
```

### 6.8 Funciones embebidas

| Función | Descripción | Ejemplo |
|---------|-------------|---------|
| fmt.Println | Imprime valores con salto de línea | `fmt.Println("Hola", 42)` |
| len | Longitud de string o arreglo | `len("texto")` → 5 |
| now | Fecha y hora actual | `now()` → "2026-03-16 20:48:51" |
| substr | Extrae subcadena | `substr("Hola", 0, 2)` → "Ho" |
| typeOf | Retorna el tipo de una expresión | `typeOf(42)` → "int32" |

## 7. Ejemplo de Sesión de Uso

1. Abrir el navegador en `http://localhost:5173`
2. Escribir o cargar un programa Golampi
3. Presionar "Ejecutar"
4. Verificar la salida en la consola
5. Si hay errores, revisar los mensajes en la consola o descargar el reporte de errores
6. Descargar la tabla de símbolos para verificar las declaraciones
7. Usar "Nuevo" para limpiar y empezar otro programa

## 8. Solución de Problemas

| Problema | Solución |
|----------|----------|
| "Error de conexión: Failed to fetch" | Verificar que el servidor PHP esté corriendo en `localhost:8080` |
| "Error HTTP: 500" | Revisar la terminal de PHP para ver el error detallado |
| El frontend no carga | Verificar que `npm run dev` esté corriendo |
| Los archivos ANTLR no se encuentran | Ejecutar `antlr -Dlanguage=PHP -visitor Grammar/Golampi.g4` |
| Composer no encuentra clases | Ejecutar `composer dump-autoload -o` en la carpeta backend |
```
