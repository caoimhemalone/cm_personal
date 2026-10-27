export type Project = {
    title: string
    description: string
    stack: string[]
    link: string
  }
  
  export const projects: Project[] = [
    {
      title: 'Project 1',
      description: 'Description 1',
      stack: ['React', 'Tailwind', 'TypeScript'],
      link: 'https://www.google.com',
    },
    {
      title: 'Project 2',
      description: 'Description 2',
      stack: ['React', 'Tailwind', 'TypeScript'],
      link: 'https://www.google.com',
    },
  ]