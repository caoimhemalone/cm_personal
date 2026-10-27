import { NavLink } from 'react-router';

const links = [
    { label: 'Home', to: '/' },
    { label: 'Projects', to: '/projects' },
    { label: 'Experience', to: '/experience' },
    { label: 'Contact', to: '/contact' },
  ]

function Header() {
    return (
        <header className="bg-retro-black text-white">
            <div className="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
                <NavLink to="/" className="font-semibold tracking-tight">
                    CK
                </NavLink>

                <nav aria-label="Main navigation" className="flex gap-5 text-lg font-medium">
                    {links.map((link) => (
                        <NavLink
                        key={link.to}
                        to={link.to}
                        className={({ isActive }) =>
                        isActive
                        ? 'font-semibold text-white'
                        : 'text-stone-400 hover:text-white'
                        }
                    >
                        {link.label}
                    </NavLink>
                    ))}
                </nav>
            </div>
        </header>
    )
}

export default Header;