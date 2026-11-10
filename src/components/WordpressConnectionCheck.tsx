import { useEffect, useState } from 'react'
import {
  getPosts,
  type WordPressPost,
} from '../lib/wordpress'

function WordPressConnectionCheck() {
  const [posts, setPosts] = useState<WordPressPost[] | null>(null)
  const [error, setError] = useState<string | null>(null)

  useEffect(() => {
    getPosts().then(setPosts).catch((reason: unknown) => {
      setError(
        reason instanceof Error
          ? reason.message
          : 'Could not load WordPress posts.',
      )
    })
  }, [])

  if (error) {
    return <p role="alert">WordPress connection failed: {error}</p>
  }

  if (posts === null) {
    return <p>Loading WordPress posts…</p>
  }

  if (posts.length === 0) {
    return <p>Connected, but there are no published posts yet.</p>
  }

  return (
    <section className="my-8 rounded-lg border border-white/10 p-4">
      <h2 className="mb-3 font-semibold">WordPress connection check</h2>

      <ul className="list-inside list-disc">
        {posts.map((post) => (
          <li key={post.id}>{post.title.rendered}</li>
        ))}
      </ul>
    </section>
  )
}

export default WordPressConnectionCheck