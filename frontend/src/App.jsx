import { useState, useRef, useEffect } from 'react'

const API_URL = '/api.php'

function App() {
  const [code, setCode] = useState('')
  const [output, setOutput] = useState('')
  const [loading, setLoading] = useState(false)
  const [lastResult, setLastResult] = useState(null)
  const editorRef = useRef(null)
  const lineNumbersRef = useRef(null)
  const fileInputRef = useRef(null)

  // Calcular líneas
  const lineCount = code.split('\n').length
  const lines = Array.from({ length: lineCount }, (_, i) => i + 1)

  // Sincronizar scroll de líneas con editor
  useEffect(() => {
    const editor = editorRef.current
    const lineNums = lineNumbersRef.current
    if (!editor || !lineNums) return

    const handleScroll = () => {
      lineNums.scrollTop = editor.scrollTop
    }
    editor.addEventListener('scroll', handleScroll)
    return () => editor.removeEventListener('scroll', handleScroll)
  }, [])

  // Tab en editor
  const handleKeyDown = (e) => {
    if (e.key === 'Tab') {
      e.preventDefault()
      const start = e.target.selectionStart
      const end = e.target.selectionEnd
      const newCode = code.substring(0, start) + '\t' + code.substring(end)
      setCode(newCode)
      setTimeout(() => {
        e.target.selectionStart = e.target.selectionEnd = start + 1
      }, 0)
    }
  }

  // Nuevo
  const handleNew = () => {
    if (code.trim() !== '' && !confirm('¿Deseas limpiar el editor?')) return
    setCode('')
    setOutput('')
    setLastResult(null)
  }

  // Abrir archivo
  const handleOpen = () => fileInputRef.current?.click()

  const handleFileChange = (e) => {
    const file = e.target.files[0]
    if (!file) return
    const reader = new FileReader()
    reader.onload = (ev) => setCode(ev.target.result)
    reader.readAsText(file)
    e.target.value = ''
  }

  // Guardar código
  const handleSave = () => {
    if (code.trim() === '') return alert('No hay código para guardar.')
    downloadFile('programa.gol', code, 'text/plain')
  }

  // Ejecutar
  const handleRun = async () => {
    if (code.trim() === '') {
      setOutput('No hay código para ejecutar.')
      return
    }

    setOutput('Ejecutando...\n')
    setLoading(true)

    try {
      const response = await fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ action: 'execute', code }),
      })

      if (!response.ok) throw new Error(`Error HTTP: ${response.status}`)

      const result = await response.json()
      setLastResult(result)

      let text = result.output || ''

      if (result.hasErrors) {
        text += '\n--- ERRORES ---\n'
        result.errors.forEach((err) => {
          text += `[${err.type}] Línea ${err.line}:${err.column} - ${err.description}\n`
        })
      }

      setOutput(text || 'Ejecución finalizada sin salida.')
    } catch (error) {
      setOutput('Error de conexión: ' + error.message + '\nVerifica que el servidor PHP esté activo.')
      setLastResult(null)
    }

    setLoading(false)
  }

  // Descargas
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

  return (
    <div className="h-screen flex flex-col bg-[#0f0f1a] text-gray-200 overflow-hidden">

      {/* TOOLBAR */}
      <header className="flex items-center justify-between px-4 py-2 bg-[#1a1a2e] border-b border-[#2a2a4a]">
        <h1 className="text-lg font-bold text-blue-400 tracking-wide">
          Golampi Interpreter
        </h1>
        <div className="flex gap-2">
          <ToolbarButton onClick={handleNew} label="Nuevo" />
          <ToolbarButton onClick={handleOpen} label="Abrir" />
          <ToolbarButton onClick={handleSave} label="Guardar" />
          <button
            onClick={handleRun}
            disabled={loading}
            className="px-4 py-1.5 rounded-md text-sm font-bold bg-emerald-500 text-[#0f0f1a] 
                       hover:bg-emerald-400 transition-colors disabled:opacity-50 cursor-pointer disabled:cursor-not-allowed"
          >
            {loading ? 'Ejecutando...' : 'Ejecutar'}
          </button>
          <ToolbarButton onClick={() => setOutput('')} label="Limpiar Consola" />
        </div>
      </header>

      {/* WORKSPACE */}
      <main className="flex flex-1 gap-1 p-2 overflow-hidden">

        {/* EDITOR */}
        <section className="flex-1 flex flex-col bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden">
          <PanelHeader title="Editor de Código" />
          <div className="flex flex-1 overflow-hidden">
            <div
              ref={lineNumbersRef}
              className="bg-[#0a0a14] text-gray-600 text-right px-2 py-2.5 font-mono text-sm leading-6 
                         select-none overflow-hidden min-w-[40px]"
            >
              {lines.map((n) => (
                <div key={n}>{n}</div>
              ))}
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
        <div className="flex flex-col w-[38%] gap-1">

          {/* CONSOLA */}
          <section className="flex-1 flex flex-col bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden">
            <PanelHeader title="Consola de Salida" />
            <pre className="flex-1 p-2.5 font-mono text-sm leading-6 text-emerald-400 bg-[#0a0a14] 
                            overflow-auto whitespace-pre-wrap break-words">
              {output}
            </pre>
          </section>

          {/* REPORTES */}
          <section className="bg-[#1a1a2e] border border-[#2a2a4a] rounded-lg overflow-hidden">
            <PanelHeader title="Reportes" />
            <div className="flex flex-col gap-1.5 p-2.5">
              <ReportButton
                label="Descargar Resultado"
                disabled={!hasResult}
                onClick={() => downloadFile('resultado.txt', lastResult.output, 'text/plain')}
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

      {/* INPUT OCULTO */}
      <input
        ref={fileInputRef}
        type="file"
        accept=".gol,.txt,.go"
        onChange={handleFileChange}
        hidden
      />
    </div>
  )
}

// ==================== COMPONENTES PEQUEÑOS ====================

function PanelHeader({ title }) {
  return (
    <div className="px-3 py-1.5 bg-[#2a2a4a] text-sm font-semibold text-blue-400 border-b border-[#3a3a5a]">
      {title}
    </div>
  )
}

function ToolbarButton({ onClick, label }) {
  return (
    <button
      onClick={onClick}
      className="px-3 py-1.5 rounded-md text-sm bg-[#2a2a4a] border border-[#3a3a5a] 
                 hover:bg-[#3a3a5a] hover:border-blue-400 transition-colors cursor-pointer"
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
                 hover:bg-[#3a3a5a] hover:border-blue-400 transition-colors
                 disabled:opacity-30 disabled:cursor-not-allowed cursor-pointer"
    >
      {label}
    </button>
  )
}

export default App