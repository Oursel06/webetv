import React from 'react';
import { Link, Outlet } from 'react-router-dom';
import Logo from "../../img/etv_logo.png";

function PageTemplate() {

    // Tableau des catégories pour le select
    const categories = [
        { label: "INTERVIEW", link: "/interview" },
        { label: "PODCAST", link: "/podcast" },
        { label: "ARTICLES", link: "/blog" }
    ];

    return (
        <div className="relative">
            <header>
                <nav className="bg-black fixed w-full z-10">
                    <div className="flex justify-between items-center mx-auto p-3">
                        <div className="flex items-center space-x-12 rtl:space-x-reverse">
                            <Link to="/">
                                <img src={Logo} className="h-14" alt="e-tv" />
                            </Link>
                            <Link to="/" className="text-white">E-TV</Link>
                            {/* Sélecteur de catégories */}
                            <select
                                className="block px-3 py-2 text-gray-900 bg-gray-100 md:bg-transparent md:p-0 dark:text-white rounded-md focus:outline-none focus:ring"
                                onChange={(e) => window.location.href = e.target.value}
                            >
                                {/* Option par défaut */}
                                <option value="" disabled selected hidden>CATEGORIES</option>
                                {/* Mapping sur le tableau des catégories */}
                                {categories.map((category, index) => (
                                    <option key={index} value={category.link}>{category.label}</option>
                                ))}
                            </select>
                            <Link to="/about" className="text-white">PARTENARIATS</Link>
                            <Link to="/contact" className="text-white">CONTACT</Link>
                        </div>
                        {/* Liens à droite */}
                        <div className="flex items-center space-x-4">
                            <Link to="/connexion" className="text-white">SE CONNECTER</Link>
                        </div>
                    </div>
                </nav>
            </header>

            <main>
                <div className="p-10"></div>
                <Outlet />
            </main>

            <footer>
                {/* Votre contenu de footer reste inchangé */}
            </footer>
        </div>
    );
}

export default PageTemplate;
