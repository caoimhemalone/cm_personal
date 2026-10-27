import { Link } from 'react-router'

function Hero() {
  return (
    <section className="flex flex-col items-center px-4 pb-10 pt-12 text-center sm:pb-14 sm:pt-16">
      {/* Temporary avatar; swap this for an image when you have one */}
      <div
        role="img"
        aria-label="Developer avatar"
        className="mb-6 grid size-24 place-items-center rounded-full bg-gradient-to-br from-orange-400 via-pink-500 to-purple-600 text-5xl"
      >
        👩🏻‍💻
      </div>

      <h1 className="max-w-2xl text-balance text-3xl font-bold leading-tight sm:text-4xl">
        I’m a software engineer/full stack developer
        <br />
        based in{' '}
        <span className="bg-gradient-to-r from-orange-400 to-fuchsia-500 bg-clip-text text-transparent">
          Dublin, Ireland.
        </span>
      </h1>

      <p className="mt-5 max-w-lg text-sm leading-6 text-stone-300">
        I’m interested in building helpful products and thoughtful web
        experiences.
      </p>

      <div className="mt-7 flex flex-wrap justify-center gap-3">
        <Link
          to="/contact"
          className="rounded-full bg-white px-5 py-3 text-sm font-semibold text-stone-900 hover:bg-stone-200"
        >
          Get in touch
        </Link>

        <a
          href="/cv.pdf"
          download
          className="rounded-full border border-white px-5 py-3 text-sm font-semibold text-white hover:bg-white/10"
        >
          Download CV
        </a>
      </div>
    </section>
  )
}

export default Hero