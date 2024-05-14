import { Link } from "react-router-dom";
import Banniere from "../../img/banniere-site.png";
import Revolution_ia from "../../img/revolution_ia.png";
import video_recente from "../../img/video_recente_accueil.png";
import article_recent from "../../img/article_recent_accueil.png";
import evenement_a_venir from "../../img/evenement_a_venir.png";

function Accueil() {
    let defaultTransform = 0;
    let next = document.getElementById("next");
    let prev = document.getElementById("prev");
    let slider = document.getElementById("slider");
    function goNext() {
        defaultTransform = defaultTransform - 398;
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    function goPrev() {
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 398;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    if (next || prev) {
        prev.addEventListener("click", goPrev);
        next.addEventListener("click", goNext);
    }

    return (
        <div class="bg-slate-900">
            <div className="h-96 bg-cover bg-no-repeat flex justify-center bg-cyan-800">
                <div className="w-96 h-96 text-center" style={{ backgroundImage: `url(${Banniere})` }}></div>
            </div>
            {/* <ul className="flex justify-around p-5 flex-wrap text-lg uppercase">
                <li>
                    <Link to="/" className="block py-2 mx-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-4 border-b-2 border-green-600">Ecologie</Link>
                </li>
                <li>
                    <Link to="/" className="block py-2 mx-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-4 border-b-2 border-yellow-400">Social</Link>
                </li>
                <li>
                    <Link to="/" className="block py-2 mx-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-4 border-b-2 border-red-600">Consommation</Link>
                </li>
                <li>
                    <Link to="/" className="block py-2 mx-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-4 border-b-2 border-blue-800">Innovation</Link>
                </li>
                <li>
                    <Link to="/" className="block py-2 mx-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-4 border-b-2 border-purple-800">Initiative</Link>
                </li>
                <li>
                    <Link to="/" className="block py-2 mx-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-4 border-b-2 border-blue-300 ">Santé</Link>
                </li>
            </ul> */}
            <div className="w-screen flex justify-center -mt-8">
                <div className="w-2/3 bg-cover bg-no-repeat border-4 border-white" style={{ backgroundImage: `url(${Revolution_ia})`, height: "900px" }} ></div>
            </div>
            <div className="w-full p-12 h-auto">
                <div className="flex justify-around items-center">
                    <div className="w-24 h-28 bg-cover bg-no-repeat" style={{ backgroundImage: `url(${video_recente})` }}></div>
                    <p className="">Vidéos à venir</p>
                    <div className="w-24 h-28 bg-cover bg-no-repeat" style={{ backgroundImage: `url(${video_recente})` }}></div>
                </div>
            </div>


            <h2 class="p-20 text-4xl font-medium uppercase text-white text-center">Quel type de contenu tu préfères ?</h2>

            <div class="p-4 w-full flex justify-center">
                <div class="flex items-center justify-center w-9/12 h-auto px-4">
                    <div class="w-full h-96 relative flex items-center justify-center">
                        <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none cursor-pointer" id="prev">
                            <svg class="text-white" width="16" height="28" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="w-2/3 h-full mx-auto overflow-x-hidden overflow-y-hidden">
                            <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                                <div class="flex flex-shrink-0 relative w-full hover:scale-105 transition ease-in-out delay-50 sm:w-auto">
                                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                                </div>
                                <div class="flex flex-shrink-0 relative w-full hover:scale-105 transition ease-in-out delay-50 sm:w-auto">
                                    <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area" class="object-cover object-center w-full" />
                                </div>
                                <div class="flex flex-shrink-0 relative w-full hover:scale-105 transition ease-in-out delay-50 sm:w-auto">
                                    <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area" class="object-cover object-center w-full" />
                                </div>
                            </div>
                        </div>
                        <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none" id="next">
                            <svg class="text-white" width="16" height="28" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <h2 class="p-20 text-4xl font-medium uppercase text-white text-center">Quel type de contenu tu préfères ?</h2>


            <div class="w-full flex justify-center flex-wrap">
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-60 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 bg-cover bg-no-repeat bg-center">
                    <div class="flex flex-col items-center pb-10">
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Titre</h5>
                        <div class="flex mt-4 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="w-80 h-60 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pb-10">
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Titre</h5>
                        <div class="flex mt-4 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="w-80 h-60 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pb-10">
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Titre</h5>
                        <div class="flex mt-4 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voir</a>
                        </div>
                    </div>
                </div>
                <div class="w-80 h-60 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pb-10">
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Titre</h5>
                        <div class="flex mt-4 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voir</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="pt-20 pb-2 text-4xl font-medium uppercase text-white text-center">Un coup de coeur ?</h2>
            <h5 class="text-xl font-medium text-white text-center">Retrouvez nos intervenant.e.s</h5>

            <div class="w-full flex justify-center flex-wrap">
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
                <div style={{ backgroundImage: `url(${Banniere})` }} className="w-80 h-80 m-6 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-100 bg-cover bg-no-repeat bg-center"></div>
            </div>

        </div>
    );
}

export default Accueil;
