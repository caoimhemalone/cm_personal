import { Outlet, Route, Routes } from 'react-router';
import Footer from './components/Footer';
import Header from './components/Header';
import Hero from './components/Hero';
import Projects from './components/Projects';


function SiteLayout() {
  return (
    <div className='min-h-screen bg-army-black text-tech-white'>
      <Header />

      <main className='mx-auto max-w-3xl px-6 py-12 sm:py-20'>
        <Outlet />
        <Footer />
      </main>
    </div>
  )
}

function HomePage() {
  return (
    <>
      <Hero />
      <Projects />
    </>
  )
}

function ExperiencePage() {
  return (
    <section>
      <h1 className='text-3xl font-semibold'>Experience</h1>
      <p className='mt-4 text-stone-600'>
        We'll add your work history here.
      </p>
    </section>
  )
}

function ContactPage() {
  return (
    <section>
      <h1 className='text-3xl font-semibold'>Contact</h1>
      <p className='mt-4 text-stone-600'>
        <a className='underline' href="">
          Email Me
        </a>
      </p>
    </section>
  )
}

function App() {
  if (import.meta.env.DEV && new URLSearchParams(window.location.search).has('crash')) {
    throw new Error('Test crash: error boundary is working')
  }

  return (
    <Routes>
      <Route element={<SiteLayout />}>
        <Route path="/" element={<HomePage />} />
        <Route path="/projects" element={<Projects />} />
        <Route path='/experience' element={<ExperiencePage />} />
        <Route path='/contact' element={<ContactPage />} />
      </Route>
    </Routes>
  )
}

export default App