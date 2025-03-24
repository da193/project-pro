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


    <div class="h-screen bg-slate-600">
        <div class="flex  md:flex-row items-center justify-between">
            <div class="w-full md:w-3/4 p-10 ml-32 pt-15 sm:text-center">
                <h1 class="pb-4 text-5xl font-bold text-yellow-400 md:text-7xl text-center">Contact us </h1>

                <p class="mt-5 text-base text-white md:text-lg text-center justify-center ">
                    Contactez nous via nos médias pour avoir plus d'information sur le CFPC et la Bibliothèque Daylibris
                    <br>Rejoignez le CFPC et commencez a construire une carrière recherchée disponible aujourd'hui.
                </p>

            </div>


        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4 pt-5 pb-2 md:grid-cols-1 ml-10 sm:justify-center">
            <div
                class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md w-72 ml-8 border-b-4 border-red-500 border- border-r-[px]">

                <div class="flex items-center text-center justify-center py-5 h-28">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>

                </div>

                <div class="flex-1 p-4 flex flex-col justify-between text-center">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 uppercase">Heures D'ouverture</h4>

                    </div>

                    <div class="mt-2">
                        <p>Lundi-Vendredi: 8h00-17h</p>
                        <p>Samedi: 8h00-14h00</p>

                        <a href=""
                            class="inline-block px-4 py-2 text-sm text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 transition hover:text-red-600 font-bold shadow-red-700 w-full text-center">Plus
                            de détails</a>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md w-72 ml-8 border-b-4 border-red-500 border- border-r-[px]">

                <div class="flex items-center text-center justify-center py-5 h-28">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>

                </div>

                <div class="flex-1 p-4 flex flex-col justify-between text-center">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 uppercase">Heures D'ouverture</h4>

                    </div>

                    <div class="mt-2">
                        <p>Lundi-Vendredi: 8h00-17h</p>
                        <p>Samedi: 8h00-14h00</p>

                        <a href=""
                            class="inline-block px-4 py-2 text-sm text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 transition hover:text-red-600 font-bold shadow-red-700 w-full text-center">Plus
                            de détails</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
</body>

</html>
