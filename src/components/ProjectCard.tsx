import type { Project } from '../data/projects';

type ProjectCardProps = {
    project: Project
}

function ProjectCard({ project }: ProjectCardProps) {
    return (
        <article
            key={project.title}
            className="rounded-2xl border border-stone-200 bg-white p-6 text-stone-900">
              <h3 className="text-lg font-semibold">{project.title}</h3>
              <p className="mt-6 max-w-xl text-lg leading-8 text-neutral-stone">
                {project.description}
              </p>
              <ul className="mt-4 flex flex-wrap gap-2">
                {project.stack.map((item) => (
                  <li
                  key={item}
                  className="rounded-full bg-stone-100 px-3 py-1 text-xs text-stone-700">
                    {item}
                  </li>
                ))}
              </ul>
              <a
              className="mt-5 inline-block text-sm font-medium text-emerald-800 hover:underline"
              href={project.link}
              target="_blank"
              rel="noreferrer"
              >
                View project
              </a>
            </article>
    )
}

export default ProjectCard;