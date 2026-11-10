import { useState } from 'react';
import { NavLink } from 'react-router';

const links = [
    { label: 'Home', to: '/' },
    { label: 'Projects', to: '/projects' },
    { label: 'Experience', to: '/experience' },
    { label: 'Contact', to: '/contact' },
  ]

function Header() {
    const [menuOpen, setMenuOpen] = useState(false)
    return (
        <header className="bg-retro-black text-white sticky top-0 z-50">
            <div className="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
                <NavLink to="/" className="font-semibold tracking-tight">
                    CK
                </NavLink>

                <button
                    type="button"
                    className="md:hidden"
                    aria-label={menuOpen ? 'Close navigation menu' : 'Open navigation menu'}
                    aria-expanded={menuOpen}
                    aria-controls="site-navigation"
                    onClick={() => setMenuOpen((open) => !open)}
                    >
                    {menuOpen ? '✕' : '☰'}
                </button>

                <nav aria-label="Main navigation" className={`${menuOpen ? 'flex' : 'hidden'} absolute left-0 right-0 top-full flex-col gap-4 bg-retro-black p-4 md:static md:flex md:flex-row md:items-center md:gap-6 md:bg-transparent md:p-0`} id="site-navigation">
                    {links.map((link) => (
                        <NavLink
                        key={link.to}
                        to={link.to}
                        onClick={() => setMenuOpen(false)}
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
