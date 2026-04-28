import { useState, useRef, useEffect } from 'react'

const API_URL = '/api.php'

function App() {
  const [code, setCode] = useState('')
  const [consoleOutput, setConsoleOutput] = useState('')
  const [loading, setLoading] = useState(false)
  const [running, setRunning] = useState(false)
  const [lastResult, setLastResult] = useState(null)
  const [qemuOutput, setQemuOutput] = useState(null)
  const editorRef = useRef(null)
  const lineNumbersRef = useRef(null)
  const fileInputRef = useRef(null)

  const lineCount = code.split('\n').length
  const lines = Array.from({ length: lineCount }, (_, i) => i + 1)

  useEffect(() => {
    const editor = editorRef.current
    const lineNums = lineNumbersRef.current
    if (!editor || !lineNums) return
    const handleScroll = () => { lineNums.scrollTop = editor.scrollTop }
    editor.addEventListener('scroll', handleScroll)
    return () => editor.removeEventListener('scroll', handleScroll)
  }, [])

  const handleKeyDown = (e) => {
    if (e.key === 'Tab') {
      e.preventDefault()
      const start = e.target.selectionStart
      const end = e.target.selectionEnd
      const newCode = code.substring(0, start) + '\t' + code.substring(end)
      setCode(newCode)
      setTimeout(() => { e.target.selectionStart = e.target.selectionEnd = start + 1 }, 0)
    }
  }

  const handleNew = () => {
    if (code.trim() !== '' && !confirm('¿Deseas limpiar el editor?')) return
    setCode('')
    setConsoleOutput('')
    setLastResult(null)
    setQemuOutput(null)
  }

  const handleOpen = () => fileInputRef.current?.click()
  const handleFileChange = (e) => {
    const file = e.target.files[0]
    if (!file) return
    const reader = new FileReader()
    reader.onload = (ev) => setCode(ev.target.result)
    reader.readAsText(file)
    e.target.value = ''
  }

  const handleSave = () => {
    if (code.trim() === '') return alert('No hay código para guardar.')
    downloadFile('programa.gol', code, 'text/plain')
  }

  // Compilar (solo genera .s)
  const handleCompile = async () => {
    if (code.trim() === '') {
      setConsoleOutput('No hay código para compilar.')
      return
    }

    setConsoleOutput('Compilando...\n')
    setLoading(true)
    setQemuOutput(null)

    try {
      const response = await fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ action: 'compile', code }),
      })
      if (!response.ok) throw new Error(`Error HTTP: ${response.status}`)

      const result = await response.json()
      setLastResult(result)

      if (result.hasErrors) {
        let text = '--- ERRORES DE COMPILACIÓN ---\n'
        result.errors.forEach((err) => {
          text += `[${err.type}] Línea ${err.line}:${err.column} - ${err.description}\n`
        })
        if (result.assembly) {
          text += '\n--- CÓDIGO ARM64 GENERADO (parcial) ---\n' + result.assembly
        }
        setConsoleOutput(text)
      } else {
        setConsoleOutput(result.assembly || 'Compilación finalizada sin salida.')
      }
    } catch (error) {
      setConsoleOutput('Error de conexión: ' + error.message + '\nVerifica que el servidor PHP esté activo.')
      setLastResult(null)
    }
    setLoading(false)
  }

  // Ejecutar en QEMU (compila + ensambla + enlaza + ejecuta)
  const handleRunQemu = async () => {
    if (code.trim() === '') {
      setQemuOutput('No hay código para ejecutar.')
      return
    }

    setRunning(true)
    setQemuOutput('Compilando y ejecutando en QEMU...')

    try {
      const response = await fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ action: 'run', code }),
      })
      if (!response.ok) throw new Error(`Error HTTP: ${response.status}`)

      const result = await response.json()
      setLastResult(result)

      // Mostrar el assembly en la consola principal
      if (result.assembly) {
        if (result.hasErrors) {
          let text = '--- ERRORES DE COMPILACIÓN ---\n'
          result.errors.forEach((err) => {
            text += `[${err.type}] Línea ${err.line}:${err.column} - ${err.description}\n`
          })
          text += '\n--- CÓDIGO ARM64 GENERADO (parcial) ---\n' + result.assembly
          setConsoleOutput(text)
        } else {
          setConsoleOutput(result.assembly)
        }
      }

      // Mostrar salida de QEMU
      if (result.qemu) {
        const q = result.qemu
        let qText = ''

        if (q.stderr) {
          //qText += '⚠️ ' + q.stderr + '\n'
          qText += q.stderr + '\n'
        }

        if (q.stdout) {
          qText += q.stdout
        }

        if (q.success) {
          qText += '\nEjecución exitosa (exit code: ' + q.exitCode + ')'
        } else if (q.exitCode === 124) {
          qText += '\nTimeout: el programa excedió el límite de 5 segundos.'
        } else if (q.exitCode >= 0) {
          qText += '\nEjecución terminada (exit code: ' + q.exitCode + ')'
        }

        setQemuOutput(qText || 'Sin salida.')
      } else {
        setQemuOutput('Sin resultado de ejecución.')
      }
    } catch (error) {
      setQemuOutput('Error de conexión: ' + error.message)
    }
    setRunning(false)
  }

  const downloadFile = (filename, content, mimeType) => {
    const blob = new Blob([content], { type: mimeType + ';charset=utf-8' })
    const url = URL.createObjectURL(blob)
    const a = document.createElement('a')
    a.href = url
    a.download = filename
    a.click()
    URL.revokeObjectURL(url)
  }

  const hasResult = lastResult !== null
  const hasAssembly = hasResult && lastResult.assembly && lastResult.assembly.trim() !== ''

  return (
    <div className="h-screen flex flex-col bg-[#0f0f1a] text-gray-200 overflow-hidden">

      {/* TOOLBAR */}
      <header className="flex items-center justify-between px-4 py-2 bg-[#1a1a2e] border-b border-[#2a2a4a]">
        <h1 className="text-lg font-bold text-cyan-400 tracking-wide">
          Golampi Compiler
        </h1>
        <div className="flex gap-2">
          <ToolbarButton onClick={handleNew} label="Nuevo" />
          <ToolbarButton onClick={handleOpen} label="Abrir" />
          <ToolbarButton onClick={handleSave} label="Guardar" />
          <button
            onClick={handleCompile}
            disabled={loading || running}
            className="px-4 py-1.5 rounded-md text-sm font-bold bg-cyan-500 text-[#0f0f1a] 
                       hover:bg-cyan-400 transition-colors disabled:opacity-50 cursor-pointer disabled:cursor-not-allowed"
          >
            {loading ? 'Compilando...' : 'Compilar'}
          </button>
          <button
            onClick={handleRunQemu}
            disabled={loading || running}
            className="px-4 py-1.5 rounded-md text-sm font-bold bg-amber-500 text-[#0f0f1a] 
                       hover:bg-amber-400 transition-colors disabled:opacity-50 cursor-pointer disabled:cursor-not-allowed"
          >
            {running ? 'Ejecutando...' : 'Ejecutar QEMU'}
          </button>
          <ToolbarButton onClick={() => { setConsoleOutput(''); setQemuOutput(null); }} label="Limpiar Consola" />
        </div>
      </header>

      {/* WORKSPACE */}
      <main className="grid grid-cols-2 flex-1 gap-2 p-2 overflow-hidden">

        {/* EDITOR */}
        <section className="h-full flex flex-col bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden">
          <PanelHeader title="Editor de Código — Golampi" />
          <div className="flex flex-1 overflow-hidden">
            <div
              ref={lineNumbersRef}
              className="bg-[#0a0a14] text-gray-600 text-right px-2 py-2.5 font-mono text-sm leading-6 
                         select-none overflow-hidden min-w-[40px]"
            >
              {lines.map((n) => <div key={n}>{n}</div>)}
            </div>
            <textarea
              ref={editorRef}
              value={code}
              onChange={(e) => setCode(e.target.value)}
              onKeyDown={handleKeyDown}
              spellCheck={false}
              placeholder="Escribe tu código Golampi aquí..."
              className="flex-1 bg-transparent text-gray-200 p-2.5 font-mono text-sm leading-6 
                         resize-none outline-none placeholder-gray-600 overflow-auto"
              style={{ tabSize: 4 }}
            />
          </div>
        </section>

        {/* LADO DERECHO */}
        <div className="h-full flex flex-col gap-2 overflow-hidden">

          {/* CONSOLA ARM64 */}
          <section className={`flex flex-col bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden ${qemuOutput !== null ? 'flex-1' : 'flex-1'}`}>
            <PanelHeader title="Consola — Código ARM64 Generado" />
            <pre className="flex-1 p-2.5 font-mono text-sm leading-6 text-cyan-400 bg-[#0a0a14]
                overflow-y-auto overflow-x-auto whitespace-pre-wrap break-words max-h-full">
              {consoleOutput}
            </pre>
          </section>

          {/* SALIDA QEMU */}
          {qemuOutput !== null && (
            <section className="bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden flex flex-col"style={{ minHeight: '150px', maxHeight: '35%' }}>
              <PanelHeader title="Salida — Ejecución QEMU" />
              <pre className="flex-1 p-2.5 font-mono text-sm leading-6 text-amber-400 bg-[#0a0a14]
                overflow-y-auto overflow-x-auto whitespace-pre-wrap break-words">
                {qemuOutput}
              </pre>
            </section>
          )}

          {/* REPORTES */}
          <section className="bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden">
            <PanelHeader title="Reportes" />
            <div className="flex flex-col gap-1.5 p-2.5">
              <ReportButton
                label="Descargar ARM64 (.s)"
                disabled={!hasAssembly}
                onClick={() => downloadFile('programa.s', lastResult.assembly, 'text/plain')}
              />
              <ReportButton
                label="Descargar Errores"
                disabled={!hasResult}
                onClick={() => downloadFile('errores.html', lastResult.errorsHtml, 'text/html')}
              />
              <ReportButton
                label="Descargar Tabla de Símbolos"
                disabled={!hasResult}
                onClick={() => downloadFile('tabla_simbolos.html', lastResult.symbolsHtml, 'text/html')}
              />
            </div>
          </section>
        </div>
      </main>

      <input ref={fileInputRef} type="file" accept=".gol,.txt,.go" onChange={handleFileChange} hidden />
    </div>
  )
}

function PanelHeader({ title }) {
  return (
    <div className="px-3 py-1.5 bg-[#2a2a4a] text-sm font-semibold text-cyan-400 border-b border-[#3a3a5a]">
      {title}
    </div>
  )
}

function ToolbarButton({ onClick, label }) {
  return (
    <button
      onClick={onClick}
      className="px-3 py-1.5 rounded-md text-sm bg-[#2a2a4a] border border-[#3a3a5a] 
                 hover:bg-[#3a3a5a] hover:border-cyan-400 transition-colors cursor-pointer"
    >
      {label}
    </button>
  )
}

function ReportButton({ label, disabled, onClick }) {
  return (
    <button
      onClick={onClick}
      disabled={disabled}
      className="w-full text-left px-3 py-2 rounded-md text-sm bg-[#2a2a4a] border border-[#3a3a5a]
                 hover:bg-[#3a3a5a] hover:border-cyan-400 transition-colors
                 disabled:opacity-30 disabled:cursor-not-allowed cursor-pointer"
    >
      {label}
    </button>
  )
}

export default App