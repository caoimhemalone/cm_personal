import type { IconType } from 'react-icons'
import {
  SiLaravel,
  SiPhp,
  SiReact,
  SiTailwindcss,
  SiWordpress,
} from 'react-icons/si'

type Technology = {
  name: string
  icon: IconType
}

const technologies: Technology[] = [
  { name: 'React', icon: SiReact },
  { name: 'Laravel', icon: SiLaravel },
  { name: 'PHP', icon: SiPhp },
  { name: 'Tailwind CSS', icon: SiTailwindcss },
  { name: 'WordPress', icon: SiWordpress },
]

function ExperienceWith() {
  return (
    <section aria-labelledby="experience-with-heading" className="pb-14 pt-2 text-center">
      <h2
        id="experience-with-heading"
        className="text-xs font-semibold uppercase tracking-[0.25em] text-stone-300"
      >
        Experience with
      </h2>

      <ul className="mt-6 flex flex-wrap items-center justify-center gap-x-8 gap-y-5">
        {technologies.map(({ name, icon: Icon }) => (
          <li key={name} title={name}>
            <Icon
              aria-hidden="true"
              className="h-8 w-8 text-stone-300 transition-colors hover:text-white"
            />
            <span className="sr-only">{name}</span>
          </li>
        ))}
      </ul>
    </section>
  )
}

export default ExperienceWith