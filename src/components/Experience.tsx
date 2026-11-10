import { useEffect, useState } from 'react'
import {
  getExperience,
  getMediaUrl,
  type WordPressExperience,
} from '../lib/wordpress'

type EmployerLogoProps = {
  mediaId: number
  employer: string
}

function EmployerLogo({ mediaId, employer }: EmployerLogoProps) {
  const [imageUrl, setImageUrl] = useState<string | null>(null)

  useEffect(() => {
    getMediaUrl(mediaId)
      .then(setImageUrl)
      .catch((error: unknown) => {
        console.error('Could not load employer logo:', error)
      })
  }, [mediaId])

  if (!imageUrl) return null

  return (
    <img
      src={imageUrl}
      alt={`${employer} logo`}
      className="size-9 rounded-full object-cover"
    />
  )
}
function Experience() {
  const [experiences, setExperiences] = useState<WordPressExperience[]>([])
  const [error, setError] = useState<string | null>(null)

  useEffect(() => {
    getExperience()
      .then(setExperiences)
      .catch((error: unknown) => {
        setError(
          error instanceof Error ? error.message : 'Could not load experience',
        )
      })
  }, [])

  if (error) {
    return <div>Error: {error}</div>
  }

  if (!experiences.length) {
    return <div>Loading...</div>
  }
  return (
    <section id="experience" className="scroll-mt-24 py-12">
      <h2 className="text-center text-2xl font-bold uppercase tracking-wide text-sky-400">
        Experience
      </h2>

      <div className="mt-8 space-y-7">
        {[...experiences]
        .sort((a, b) => b.acf.end_date.localeCompare(a.acf.end_date))
        .slice(0, 3)
        .map((entry) => (
          <article
            key={entry.id}
            className="grid grid-cols-[2.5rem_minmax(0,1fr)] gap-x-4"
          >
            <div
              aria-hidden="true"
              className="grid size-9 place-items-center rounded-full"
            >
              <EmployerLogo
                mediaId={entry.acf.employer_logo}
                employer={entry.acf.employer}
              />
            </div>

            <div className="min-w-0">
              <div className="flex flex-col gap-1 sm:flex-row sm:items-baseline sm:justify-between">
                <h3 className="font-semibold text-white">
                  {entry.acf.job_title}{' '}
                  <span className="font-normal text-neutral-stone">
                    at {entry.acf.employer}
                  </span>
                </h3>

                <p className="text-xs text-neutral-stone sm:whitespace-nowrap">
                  From {formatMonthYear(entry.acf.start_date)} to {formatMonthYear(entry.acf.end_date)}
                </p>
              </div>

              <p className="mt-2 text-sm leading-6 text-neutral-stone">
                {entry.acf.description}
              </p>
            </div>
          </article>
        ))}
      </div>
    </section>
  )
}

function formatMonthYear(date: string): string {
  const year = Number(date.slice(0, 4))
  const month = Number(date.slice(4, 6))

  return new Intl.DateTimeFormat('en-IE', {
    month: 'short',
    year: 'numeric',
    timeZone: 'UTC',
  }).format(new Date(Date.UTC(year, month - 1, 1)))
}

export default Experience