export function installClientErrorLogging() {
    window.addEventListener('error', (event) => {
      console.error('Uncaught error:', event.error ?? event.message)
    })
  
    window.addEventListener('unhandledrejection', (event) => {
      console.error('Unhandled promise rejection:', event.reason)
    })
  }