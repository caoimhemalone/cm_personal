import { useEffect, useState } from 'react'
import {
  getProjects,
  type WordPressProject,
} from '../lib/wordpress'
import ProjectCard from './ProjectCard'

function Projects() {
  const [projects, setProjects] = useState<WordPressProject[]>([])
  const [error, setError] = useState<string | null>(null)

  useEffect(() => {
    getProjects()
    .then((data) => {
        console.log('WordPress projects:', data)
        setProjects(data)
      })
      .catch((error: unknown) => {
        setError(
          error instanceof Error ? error.message : 'Could not load projects',
        )
      })
  }, [])

  return (
    <section id="projects" className="scroll-mt-8">
      <h2 className="text-center text-2xl font-bold uppercase tracking-wide text-sky-400">
        Work Projects
      </h2>
      {error && <p role="alert">{error}</p>}

      <div className="mt-6 grid gap-4 sm:grid-cols-2">
        {projects.map((project) => (
          <ProjectCard key={project.id} project={project} />
        ))}
      </div>
    </section>
  )
}

export default Projects