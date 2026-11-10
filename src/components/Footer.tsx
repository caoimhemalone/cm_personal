import type { IconType } from 'react-icons';
import { FaLinkedin } from 'react-icons/fa';
import { SiGithub, SiYoutube } from 'react-icons/si';


type SocialLink = {
    name: string
    icon: IconType
    href: string
}

const socialLinks: SocialLink[] = [
    {
        name: 'GitHub',
        icon: SiGithub,
        href: 'https://github.com/caoimhemalone',
    },
    {
        name: 'LinkedIn',
        icon: FaLinkedin,
        href: 'https://www.linkedin.com/in/caoimhemalone/',
    },
    {
        name: 'YouTube',
        icon: SiYoutube,
        href: 'https://www.youtube.com/channel/UC9QnUxf2Pctj2wyWa4GABCw',
    },
]

function Footer() {
    return (
        <footer className="mt-20 border-t border-stone-200 pt-6 text-sm text-stone-500 bg-retro-black">
            <div className="mx-auto flex max-w-3xl flex-col items-center justify-between gap-4 px-6 py-6 sm:flex-row">
                <p className="text-center">
                    &copy; {new Date().getFullYear()} Caoimhe Kearney. All rights reserved.
                </p>

                <nav aria-label="Social links">
                    <ul className="flex items-center gap-4">
                        {socialLinks.map(({ name, href, icon: Icon }) => (
                            <a
                                href={href}
                                target="_blank"
                                rel="noreferrer"
                                aria-label={name}
                                className="inline-flex rounded-full p-2 hover:bg-white/10 hover:text-tech-white focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white"
                            >
                                <Icon  aria-hidden="true" className="h-6 w-6" />
                                <span aria-hidden="true" className="sr-only">{name}</span>
                            </a>
                        ))}
                    </ul>
                </nav>
            </div>
        </footer>
    )
}

export default Footer;