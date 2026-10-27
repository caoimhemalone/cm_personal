import { projects } from '../data/projects';
import ProjectCard from './ProjectCard';

function Projects() {
    return (
        <section id="projects" className="scroll-mt-8">
            <h2 className="text-2xl font-semibold tracking-tight">Selected work</h2>
            <div className="mt-6 grid gap-4 sm:grid-cols-2">
                {projects.map((project) => (
                    <ProjectCard key={project.title} project={project} />
                ))}
            </div>
        </section>
    )
}

export default Projects;