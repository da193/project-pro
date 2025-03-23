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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div x-show="open" @click.outside="open = false"
                class="absolute right-4 mt-2 w-48 bg-yellow-400 rounded-md shadow-lg z-10">
                <ul class="flex flex-col items-center gap-4 py-4 text-lg font-semibold text-black">
                    <li>
                        <a href="{{ route('about') }}"
                            class="relative transition duration-200 hover:text-gray-800 after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:bottom-[-4px] after:scale-x-0 after:origin-center after:transition-transform after:duration-200 hover:after:scale-x-100"
                            @click="open = false">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Home') }}"
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
                    <a href="{{ route('Home') }}"
                        class="relative transition duration-200 hover:text-black after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:bottom-[-4px] after:scale-x-0 after:origin-center after:transition-transform after:duration-200 hover:after:scale-x-100">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>


<body class="">

    <div class="h-screen bg-slate-600">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="w-full md:w-3/4 p-10 pt-40">
                <h1 class="pb-4 text-5xl font-bold text-yellow-400 md:text-7xl">Welcome To Daylibris</h1>
                <span class="pt-4 pb-4 text-lg text-white md:text-xl">Le savoir, c'est le pouvoir</span>
                <p class="mt-5 text-base text-white md:text-lg">
                    Plongez dans un vaste éventail de ressources littéraires
                    <br>et scientifiques pour soutenir vos études <br>et enrichir vos recherches à travers notre
                    bibliothèque numérique.
                </p>

                <div class="flex flex-col md:flex-row mt-8 space-x-0 md:space-x-4">
                    
                    <a href="{{ route('register') }}"
                        class="mt-4 md:mt-0 px-6 py-3 font-semibold text-white bg-gradient-to-t from-red-600 to-red-400 mb-2  rounded cursor-pointer hover:bg-red-600 shadow-md shadow-red-800">
                        Register
                    </a>
                    <a href="{{ route('login') }}"
                        class="mt-4 md:mt-0 px-6 py-3 font-semibold text-white bg-gradient-to-t from-red-600 to-red-400 mb-2  rounded cursor-pointer hover:bg-red-600 shadow-md shadow-red-800 ">
                        Login
                    </a>
                </div>

            </div>

            <div class="w-full md:w-3/4 pt-10 pr-8">
                <img src="/storage/img/desk.png" alt="Bibliothèque"
                    class="object-cover w-full h-full rounded-lg md:w-3/4">
            </div>
        </div>

        <div class="relative p-4 overflow-hidden text-yellow-300 rounded-lg marquee">
            <div class="overflow-hidden w-full">
                <p class="marquee-text text-yellow-300  text-base md:text-lg whitespace-nowrap">
                    Plongez dans un vaste éventail de ressources littéraires et scientifiques pour soutenir vos études et enrichir vos recherches à travers notre bibliothèque numérique.
                </p>
            </div>
            <span
                class="inline-block pb-8 transition-opacity duration-500 opacity-0 marquee-content animate-marquee">Bienvenue
                à la bibliothèque numérique ! Apprenez, explorez, découvrez !
            </span>
        </div>

    </div>


    {{-- queries style for different screens --}}
    <style>
        @media (max-width: 768px) {
            section {
                flex-direction: column;
                align-items: center;
            }

            img {
                width: 100%;
                max-width: 300px;
                /* Ajuste la taille de l'image sur mobile */
            }
        }
    </style>
    {{-- queries style for different screens --}}

    <style>
        @media (max-width: 768px) {
            .h-screen {
                height: auto;
                /* Ajuste la hauteur sur mobile */
            }
        }
    </style>

    </div>

    {{-- style of the swaying word of the bords --}}
    {{-- <p class="mt-5 text-base text-white md:text-lg">
        Plongez dans un vaste éventail de ressources littéraires
        <br>et scientifiques pour soutenir vos études <br>et enrichir vos recherches à travers notre
        bibliothèque numérique.
    </p>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
                opacity: 1;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateX(-100%);
                opacity: 0;
            }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }

        @media (max-width: 9000px) {
            .animate-marquee {
                animation-duration: 25s;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 1000px) {
            .animate-marquee {
                animation-duration: 20s;
                font-size: 1rem;
            }
        }
    </style>
     

    <script>
        const marqueeContent = document.querySelector('.marquee-content');

        window.addEventListener('load', () => {
            marqueeContent.style.opacity = '1';
        });

        marqueeContent.addEventListener('animationiteration', () => {
            marqueeContent.style.animation = 'none';
            setTimeout(() => {
                marqueeContent.style.animation = '';
            }, 50);
        });
    </script> --}}
    
    
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    
        .marquee-text {
            animation: marquee 20s linear infinite;
            will-change: transform;
        }
    
        .marquee-text:hover {
            animation-play-state: paused;
        }
    
        @media (min-width: 768px) {
            .marquee-text {
                animation-duration: 18s;
            }
        }
    
        @media (max-width: 640px) {
            .marquee-text {
                animation-duration: 12s;
            }
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const marqueeText = document.querySelector('.marquee-text');
            
            marqueeText.addEventListener('animationiteration', () => {
                marqueeText.style.transition = 'none';
                marqueeText.style.transform = 'translateX(100%)';
                requestAnimationFrame(() => {
                    marqueeText.style.transition = '';
                });
            });
        });
    </script>
 


</body>

</html>
