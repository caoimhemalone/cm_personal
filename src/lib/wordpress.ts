const wordpressBaseUrl = import.meta.env.VITE_WORDPRESS_URL

export type WordPressExperience = {
  id: number
  slug: string
  title: {
    rendered: string
  }
  acf: {
    employer: string
    job_title: string
    start_date: string
    end_date: string
    description: string
    employer_logo: number
  }
}

export type WordPressMedia = {
  source_url: string
}

export type WordPressPost = {
  id: number
  slug: string
  link: string
  date: string
  title: {
    rendered: string
  }
}

export type WordPressProject = {
    id: number
    slug: string
    link: string
    date: string
    title: {
      rendered: string
    }
    excerpt: {
      rendered: string
    }
    acf: {
      project_url: string
      technologies: string
      start_date: string
      end_date: string
      project_thumbnail: number
    }
}

export async function getExperience(): Promise<WordPressExperience[]> {
  if (!wordpressBaseUrl) {
    throw new Error('Missing VITE_WORDPRESS_URL in .env.local')
  }

  const url = new URL('/wp-json/wp/v2/experience', wordpressBaseUrl)
  url.searchParams.set('per_page', '20')
  url.searchParams.set('_fields', 'id,slug,title,acf')

  const response = await fetch(url)

  if (!response.ok) {
    throw new Error(`WordPress request failed: ${response.status}`)
  }

  return (await response.json()) as WordPressExperience[]
}

export async function getMediaUrl(mediaId: number): Promise<string> {
  if (!wordpressBaseUrl) {
    throw new Error('Missing VITE_WORDPRESS_URL in .env.local')
  }

  const response = await fetch(
    new URL(`/wp-json/wp/v2/media/${mediaId}`, wordpressBaseUrl),
  )

  if (!response.ok) {
    throw new Error(`WordPress media request failed: ${response.status}`)
  }

  const media = (await response.json()) as WordPressMedia
  return media.source_url
}

export async function getPosts(): Promise<WordPressPost[]> {
  if (!wordpressBaseUrl) {
    throw new Error('Missing VITE_WORDPRESS_URL in .env.local')
  }

  const url = new URL('/wp-json/wp/v2/posts', wordpressBaseUrl)
  url.searchParams.set('per_page', '5')
  url.searchParams.set('_fields', 'id,slug,link,date,title')

  const response = await fetch(url)

  if (!response.ok) {
    throw new Error(`WordPress request failed: ${response.status}`)
  }

  return (await response.json()) as WordPressPost[]
}

export async function getProjects(): Promise<WordPressProject[]> {
    if (!wordpressBaseUrl) {
      throw new Error('Missing VITE_WORDPRESS_URL in .env.local')
    }
  
    const url = new URL('/wp-json/wp/v2/project', wordpressBaseUrl)
    url.searchParams.set('per_page', '20')
    url.searchParams.set(
      '_fields',
      'id,slug,link,date,title,excerpt,acf',
    )
  
    const response = await fetch(url)
  
    if (!response.ok) {
      throw new Error(`WordPress request failed: ${response.status}`)
    }
  
    return (await response.json()) as WordPressProject[]
}
