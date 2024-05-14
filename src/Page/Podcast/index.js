import { Link } from "react-router-dom";
import Banniere from "../../img/banniere-site.png";

function Podcast() {
    return (
        <div>
            <div class="bg-slate-900 w-full text-center">
                <h2 class="p-20 text-4xl font-medium uppercase text-white text-center">Et si on discutait ?</h2>
                <div class="w-full flex justify-center flex-wrap">
                    <div style={{ backgroundImage: `url(${Banniere})` }} class="p-20 w-5/12 h-64 bg-gray-100 m-2 border-4 border-red-600 relative bg-cover bg-no-repeat bg-center">
                        <div class="absolute bottom-4 right-12 flex justify-center">
                            <a href="/" class="block py-1 px-6 m-2 text-black bg-red-500 rounded-xl md:border-0 hover:bg-red-400 hover:scale-105 transition ease-in-out">Regarder</a>
                            <a href="/" class="block py-1 px-6 m-2 text-black bg-gray-300 rounded-xl md:border-0 hover:bg-gray-200 hover:scale-105 transition ease-in-out">Ajouter à ma liste</a>
                        </div>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} class="p-20 w-5/12 h-64 bg-gray-100 m-2 border-4 border-red-600 relative bg-cover bg-no-repeat bg-center">
                        <div class="absolute bottom-4 right-12 flex justify-center">
                            <a href="/" class="block py-1 px-6 m-2 text-black bg-red-500 rounded-xl md:border-0 hover:bg-red-400 hover:scale-105 transition ease-in-out">Regarder</a>
                            <a href="/" class="block py-1 px-6 m-2 text-black bg-gray-300 rounded-xl md:border-0 hover:bg-gray-200 hover:scale-105 transition ease-in-out">Ajouter à ma liste</a>
                        </div>
                    </div>

                </div>
                <h2 class="p-20 text-4xl font-medium uppercase text-white text-center">Envie d'écouter d'autres épiosdes ?</h2>
                <input type="text" class="w-96 p-2 rounded-xl mb-10" placeholder="🔍 Tu cherches un sujet en particulier ?" />
                <ul className="flex justify-evenly text-lg p-5 flex-wrap uppercase">
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
                </ul>
                <div class="w-full flex justify-center flex-wrap">
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div style={{ backgroundImage: `url(${Banniere})` }} className="w-60 h-60 m-2 p-4 max-w-sm border flex justify-center items-center rounded-lg shadow dark:bg-gray-100 dark:border-gray-600 bg-cover bg-no-repeat bg-center">
                        <button class="inline-flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 transform rotate-180 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    );
}

export default Podcast;
