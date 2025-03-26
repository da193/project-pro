<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📕 DAYLIBRIS</title>
    <link rel="stylesheet" href="https://heroicons.com">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<body>
    <header
        class="h-24 pl-4 bg-blue-900 rounded-sm shadow-md md:shadow-slate-600 bg-gradient-to-r from-red-300 to-red-400 mb-2">
        <div class="flex items-center justify-between px-4 h-full max-w-7xl mx-auto">
            <div class="flex items-center">
                <!-- Logo -->
                <img class="object-cover w-auto h-16 py-3 ml-2 md:ml-6 md:h-20 md:w-20" src="/storage/img/loog.png"
                    alt="Logo">
            </div>

            <!-- Hamburger menu button (visible only on small screens) -->
            <div x-data="{ open: false }" class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <!-- Hamburger icon -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div x-show="open" @click.outside="open = false"
                    class="absolute right-4 mt-2 w-48 bg-gradient-to-b from-red-200 to-red-300 rounded-md shadow-lg z-10">
                    <ul class="flex flex-col items-center gap-4 py-4 text-lg font-semibold text-white">
                        <li>
                            <a href="{{ route('about') }}"
                                class="relative transition duration-200 hover:text-gray-800 after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:bottom-[-4px] after:scale-x-0 after:origin-center after:transition-transform after:duration-200 hover:after:scale-x-100"
                                @click="open = false">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="relative transition duration-200 hover:text-gray-800 after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:bottom-[-4px] after:scale-x-0 after:origin-center after:transition-transform after:duration-200 hover:after:scale-x-100"
                                @click="open = false">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Desktop navigation (hidden on small screens) -->
            <nav class="hidden md:block pr-2 md:pr-6">
                <ul class="flex flex-row items-center gap-8 text-lg font-semibold text-white">
                    <li>
                        <a href="{{ route('about') }}"
                            class="relative transition duration-200 hover:text-black after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:bottom-[-4px] after:scale-x-0 after:origin-center after:transition-transform after:duration-200 hover:after:scale-x-100">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="relative transition duration-200 hover:text-black after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:bottom-[-4px] after:scale-x-0 after:origin-center after:transition-transform after:duration-200 hover:after:scale-x-100">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="min-h-screen bg-slate-600 py-10">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="flex md:flex-row items-center justify-between mb-12">
                <div class="w-full md:w-3/4 p-4 sm:p-10 text-center animate-fade-in-down">
                    <h1 class="pb-4 text-4xl sm:text-5xl md:text-7xl font-bold text-yellow-400 transform transition-all duration-300 hover:scale-105">
                        Contactez-nous
                    </h1>
                    <p class="mt-5 text-base md:text-lg text-white max-w-2xl mx-auto">
                        Nous sommes là pour vous accompagner dans votre parcours éducatif. Que vous ayez des questions
                        sur nos programmes de formation, nos ressources à la Bibliothèque Daylibris, ou que vous
                        souhaitiez rejoindre notre communauté dynamique, n’hésitez pas à nous contacter via nos
                        différents canaux. Votre avenir commence ici !
                    </p>
                </div>
            </div>
        
            <!-- Contact Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-12">
                <!-- Opening Hours -->
                <div class="group flex flex-col bg-white rounded-lg shadow-lg w-full border-b-4 border-red-500 overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-4 sm:p-4 flex items-center gap-2 sm:gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10 text-yellow-400 transition-transform duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1 text-left">
                            <h4 class="text-base sm:text-lg font-bold text-gray-800 uppercase mb-1 sm:mb-2">Horaires</h4>
                            <div class="text-gray-600 text-xs sm:text-sm">
                                <p>Lundi-Vendredi: 8h00-17h00</p>
                                <p>Samedi: 8h00-14h00</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Email -->
                <div class="group flex flex-col bg-white rounded-lg shadow-lg w-full border-b-4 border-red-500 overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-4 sm:p-4 flex items-center gap-2 sm:gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10 text-yellow-400 transition-transform duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <div class="flex-1 text-left">
                            <h4 class="text-base sm:text-lg font-bold text-gray-800 uppercase mb-1 sm:mb-2">Localisation</h4>
                            <div class="text-gray-600 text-xs sm:text-sm">
                                <p>Bafoussam Marché B</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
                <!-- Phone -->
                <div class="group flex flex-col bg-white rounded-lg shadow-lg w-full border-b-4 border-red-500 overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-4 sm:p-4 flex items-center gap-2 sm:gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 sm:h-10 sm:w-10 text-yellow-400 transition-transform duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="flex-1 text-left">
                            <h4 class="text-base sm:text-lg font-bold text-gray-800 uppercase mb-1 sm:mb-2">Téléphone</h4>
                            <div class="text-gray-600 text-xs sm:text-sm">
                                <p>+237 695 82 92 30</p>
                                <p>+237 671 33 78 29</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Social Media Icons Section -->
            <div class="max-w-4xl mx-auto mb-16">
                <h3 class="text-2xl font-bold text-yellow-400 text-center mb-8">Retrouvez-nous sur</h3>
                <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-6">
                    <a href="#" class="flex flex-col items-center text-yellow-400 hover:text-red-600 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                        <span class="mt-2 text-sm text-white">Facebook</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-yellow-400 hover:text-red-600 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.281.072-1.689.072-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                        <span class="mt-2 text-sm text-white">Instagram</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-yellow-400 hover:text-red-600 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.812 3.882 2.323 5.394l.02.022-3.663 1.34.693 2.355 2.702-.699z" />
                        </svg>
                        <span class="mt-2 text-sm text-white">WhatsApp</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-yellow-400 hover:text-red-600 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.294h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                        </svg>
                        <span class="mt-2 text-sm text-white">Twitter</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-yellow-400 hover:text-red-600 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                        </svg>
                        <span class="mt-2 text-sm text-white">YouTube</span>
                    </a>
                </div>
            </div>
        
            <!-- Footer -->
            <footer class="bg-gray-800 py-8">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                        <div>
                            <h5 class="text-lg font-bold text-yellow-400 mb-4">CFPC</h5>
                            <p class="text-white text-sm">Centre de Formation Professionnelle la Canadienne<br>Bafoussam Marché B</p>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-yellow-400 mb-4">Liens utiles</h5>
                            <ul class="text-white text-sm space-y-2">
                                <li><a href="{{ route('Home') }}" class="hover:text-red-600 transition-colors duration-300">Accueil</a></li>
                                <li><a href="#" class="hover:text-red-600 transition-colors duration-300">Programmes</a></li>
                                <li><a href="#" class="hover:text-red-600 transition-colors duration-300">Contact</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-lg font-bold text-yellow-400 mb-4">Contact</h5>
                            <p class="text-white text-sm">
                                Email: <a href="mailto:contact@cfpcanadienne.com" class="hover:text-red-600 transition-colors duration-300">contact@cfpcanadienne.com</a><br>
                                Tel: <a href="tel:+33123456789" class="hover:text-red-600 transition-colors duration-300">+237 695 82 92 30</a><br>
                                Tel: <a href="tel:+33123456789" class="hover:text-red-600 transition-colors duration-300">+237 671 33 78 29</a>
                            </p>
                        </div>
                    </div>
                    <div class="mt-8 text-center text-white text-sm">
                        <p>© 2025 CFPC. Tous droits réservés.</p>
                    </div>
                </div>
            </footer>
        </div>
        
        <!-- Custom CSS for animations -->
        <style>
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        
            .animate-fade-in-down {
                animation: fadeInDown 1s ease-out;
            }
        </style>

        <!-- Custom CSS for animations -->
        <style>
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in-down {
                animation: fadeInDown 1s ease-out;
            }
        </style>
    </div>
</body>

</html>
