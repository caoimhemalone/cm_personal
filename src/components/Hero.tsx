function Hero() {
    return (
        <section className="py-20 sm:py-28">
        <p className="mb-4 text-sm font-medium text-emerald-700">Hi, I'm Caoimhe.</p>
        <h1 className="max-w-2xl text-4xl font-semibold tracking-tight sm:text-6xl">
          I'm a software engineer based in Dublin, Ireland.
        </h1>
        <p className="mt-6 max-w-xl text-lg leading-8 text-stone-00">
          I'm a software engineer based in Dublin, Ireland.
        </p>
        <div className="mt-8 flex gap-4 text-sm font-medium">
          <a className="rounded-full bg-stone-900 px-5 py-3 text-white hover:bg-stone-700" href="#projects">View my work</a>
          <a className="rounded-full px-5 py-3 hover:bg-white" href="https://github.com/caoimhemalone" target="_blank">GitHub</a>
        </div>
      </section>

    )
}

export default Hero;