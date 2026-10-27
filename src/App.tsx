import Footer from './components/Footer';
import Header from './components/Header';
import Hero from './components/Hero';
import Projects from './components/Projects';

function App() {
  if (import.meta.env.DEV && new URLSearchParams(window.location.search).has('crash')) {
    throw new Error('Test crash: error boundary is working')
  }

  return (
    <main className="mx-auto max-w-3xl px-6 py-12 sm:py-20">
      <Header />
      <Hero />
      <Projects />

      <Footer />
    </main>
  )
}

export default App;