import { useState, useEffect } from 'react';
import { getMediaUrl } from '../lib/wordpress';
import type { WordPressProject } from '../lib/wordpress';

type ProjectCardProps = {
    project: WordPressProject
}

function formatProjectDuration(startDate: string, endDate: string): string {
  const startYear = Number(startDate.slice(0, 4))
  const startMonth = Number(startDate.slice(4, 6))
  const endYear = Number(endDate.slice(0, 4))
  const endMonth = Number(endDate.slice(4, 6))

  const totalMonths =
    (endYear - startYear) * 12 + (endMonth - startMonth)

  if (!Number.isFinite(totalMonths) || totalMonths < 0) {
    return 'Duration unavailable'
  }

  const years = Math.floor(totalMonths / 12)
  const months = totalMonths % 12

  if (years === 0) return `${months} month${months === 1 ? '' : 's'}`
  if (months === 0) return `${years} year${years === 1 ? '' : 's'}`

  return `${years} year${years === 1 ? '' : 's'}, ${months} month${months === 1 ? '' : 's'}`
}

function ProjectCard({ project }: ProjectCardProps) {
  const [thumbnailUrl, setThumbnailUrl] = useState<string | null>(null)
  const duration = formatProjectDuration(
    project.acf.start_date, 
    project.acf.end_date
  )
  useEffect(() => {
    const mediaId = project.acf.project_thumbnail

    if (!mediaId) {
      setThumbnailUrl(null)
      return
    }

    getMediaUrl(mediaId)
      .then(setThumbnailUrl)
      .catch((error: unknown) => {
        console.error('Could not load project thumbnail:', error)
        setThumbnailUrl(null)
      })
  }, [project.acf.project_thumbnail])

    return (
        <article
            className="rounded-2xl border border-retro-black bg-retro-black text-stone-900 pb-2 flex h-full flex-col">
                {thumbnailUrl && (
                  <img
                    src={thumbnailUrl}
                    alt={`${project.title.rendered} project thumbnail`}
                    className="w-full h-48 object-cover rounded-lg mb-4"
                  />
                )}
                <h3 className="text-lg font-semibold px-6 text-stone-100">{project.title.rendered}</h3>
                <ul className="mt-4 flex flex-wrap gap-2 px-6">
                  {project.acf.technologies.split(',').map((item) => (
                    <li
                    key={item.trim()}
                    className="rounded-full bg-stone-100 px-3 py-1 text-xs text-stone-700">
                      {item.trim()}
                    </li>
                  ))}
                </ul>

              <div className='mt-auto'>
              <a
              className="mt-5 inline-block text-sm font-medium text-stone-100 hover:underline p-6"
              href={project.acf.project_url}
              target="_blank"
              rel="noreferrer"
              >
                View project
              </a>
              <p className="text-xs text-stone-100 px-6">Worked on for: {duration}</p>
              </div>
            </article>
    )
}

export default ProjectCard;