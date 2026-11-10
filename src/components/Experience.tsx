import { experience } from '../data/experience'

function Experience() {
  return (
    <section id="experience" className="scroll-mt-24 py-12">
      <h2 className="text-center text-2xl font-bold uppercase tracking-wide text-sky-400">
        Experience
      </h2>

      <div className="mt-8 space-y-7">
        {experience.map((entry) => (
          <article
            key={`${entry.company}-${entry.role}`}
            className="grid grid-cols-[2.5rem_minmax(0,1fr)] gap-x-4"
          >
            <div
              aria-hidden="true"
              className="grid size-9 place-items-center rounded-full bg-white/10 font-semibold text-white"
            >
              {entry.company.charAt(0).toUpperCase()}
            </div>

            <div className="min-w-0">
              <div className="flex flex-col gap-1 sm:flex-row sm:items-baseline sm:justify-between">
                <h3 className="font-semibold text-white">
                  {entry.role}{' '}
                  <span className="font-normal text-neutral-stone">
                    at {entry.company}
                  </span>
                </h3>

                <p className="text-xs text-neutral-stone sm:whitespace-nowrap">
                  {entry.period}
                </p>
              </div>

              <p className="mt-2 text-sm leading-6 text-neutral-stone">
                {entry.description}
              </p>
            </div>
          </article>
        ))}
      </div>
    </section>
  )
}

export default Experience