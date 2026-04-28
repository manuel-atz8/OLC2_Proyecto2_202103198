#!/bin/bash
# Uso: ./tests/compile_and_run.sh tests/test_if.gol

FILE="$1"
if [ -z "$FILE" ]; then
    echo "Uso: $0 archivo.gol"
    exit 1
fi

# Compilar
RESPONSE=$(python3 -c "
import json, sys, urllib.request
code = open('$FILE').read()
data = json.dumps({'action':'compile','code':code}).encode()
req = urllib.request.Request('http://localhost:8080/api.php', data=data, headers={'Content-Type':'application/json'})
resp = urllib.request.urlopen(req)
result = json.loads(resp.read())
if result.get('hasErrors'):
    for e in result.get('errors',[]):
        print(f\"[{e['type']}] Linea {e['line']}:{e['column']} - {e['description']}\", file=sys.stderr)
print(result.get('assembly',''))
")

echo "$RESPONSE" > /tmp/golampi_out.s

# Ensamblar, enlazar, ejecutar
aarch64-linux-gnu-as /tmp/golampi_out.s -o /tmp/golampi_out.o 2>&1
if [ $? -ne 0 ]; then
    echo "Error en ensamblado"
    exit 1
fi

aarch64-linux-gnu-ld /tmp/golampi_out.o -o /tmp/golampi_out 2>&1
if [ $? -ne 0 ]; then
    echo "Error en enlazado"
    exit 1
fi

echo "--- Salida ---"
qemu-aarch64 /tmp/golampi_out
echo "--- Exit code: $? ---"
