import { Link } from "react-router-dom";

function Erreur() {
    return (
        <div class="h-screen w-full flex flex-col justify-center items-center bg-[#1A2238]">
            <h1 class="text-9xl font-extrabold text-white tracking-widest">404</h1>
            <div class="bg-blue-600 px-2 text-sm rounded rotate-12 absolute">
                Page introuvable !
            </div>
            <button class="mt-5">
                <a class="relative inline-block text-sm font-medium text-blue-600 group active:text-orange-500 focus:outline-none focus:ring">
                    <span class="relative block px-8 py-3 bg-[#1A2238] border border-current hover:scale-110 transition ease-in-out delay-100">
                        <Link to="/">Accueil</Link>
                    </span>
                </a>
            </button>
        </div>
    );
}

export default Erreur;
