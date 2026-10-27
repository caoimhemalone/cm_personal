import { Component, type ErrorInfo, type ReactNode } from 'react'

type Props = { children: ReactNode }
type State = { error: Error | null }

export class ErrorBoundary extends Component<Props, State> {
  state: State = { error: null }

  static getDerivedStateFromError(error: Error) {
    return { error }
  }

  componentDidCatch(error: Error, info: ErrorInfo) {
    console.error('React render error:', error, info.componentStack)
  }

  render() {
    if (!this.state.error) {
      return this.props.children
    }

    return (
      <main className="mx-auto max-w-3xl px-6 py-12">
        <p className="mb-2 text-sm font-medium text-red-800">App crashed while rendering</p>
        <h1 className="text-2xl font-semibold tracking-tight">Something went wrong</h1>
        <pre className="mt-6 overflow-auto rounded-2xl border border-red-200 bg-white p-4 text-sm leading-6 text-red-900">
          {this.state.error.stack ?? this.state.error.message}
        </pre>
      </main>
    )
  }
}

export function installClientErrorLogging() {
  window.addEventListener('error', (event) => {
    console.error('Uncaught error:', event.error ?? event.message)
  })

  window.addEventListener('unhandledrejection', (event) => {
    console.error('Unhandled promise rejection:', event.reason)
  })
}
