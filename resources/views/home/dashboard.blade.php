<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://heroicons.com">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<header class="h-24 pl-4 text-center rounded-sm shadow-md bg-blue-900 shadow-blue-900">

    
    <div class="flex items-center justify-between px-4 ">
        <div class="flex items-center">
            <!-- Logo -->
            <img class="object-cover w-auto h-auto py-3 ml-4 md:h-20 md:w-20" src="/storage/img/sup.png" alt="Logo">
            <span class="gap-5 text-white">ESCa Biblio</span>
            <!-- Icone -->
            
        </div>

        <!-- Navigation -->
        <nav>
            <ul class="flex flex-col items-center gap-4 pr-6 text-lg font-semibold text-white md:flex-row md:gap-8">
                <li>
                    <a href="#" class="transition duration-200 hover:text-gray-300">About</a>
                </li>
                <li>
                    <a href="#" class="transition duration-200 hover:text-gray-300">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

</header>

<!-- Styles et media queries -->
<style>
    @media (max-width: 768px) {
        header {
            padding: 1rem; /* Ajuste les espacements */
        }
        img {
            width: 64px; /* Réduit la taille du logo */
            height: 64px;
        }
        svg {
            display: none; /* Masque l'icône sur les petits écrans */
        }
        nav ul {
            text-align: center; /* Centrer la navigation sur petits écrans */
        }
    }

    @media (max-width: 640px) {
        header {
            height: auto; /* Permet une hauteur plus flexible */
        }
        nav ul {
            gap: 2rem; /* Ajuste l'espacement des liens pour petits écrans */
        }
    }

    @media (min-width: 769px) {
        nav ul {
            gap: 4vw; /* Espace dynamique basé sur la largeur de l'écran */
        }
    }
</style>


<body class="">
    <div class=" block mx-auto mt-3 mb-3 rounded-md shadow-lg bg bg-gray-700 -gradient-to-t from-gray-800 to-gray-600">

        <div class="w-full h-full bg-center bg-no-repeat  bg-cover rounded-md " >
    
            <div class="relative z-10 flex flex-col-reverse items-center justify-between px-8 mx-auto mb-10 md:flex-row py-14 max-w-7xl">
                <div class="w-full md:w-1/2 lg:w-2/5">
                    <h2 class="mb-5 text-4xl font-bold text-white uppercase">Le savoir, c'est le pouvoir</h2>
                    <p class="mb-6 text-sm text-white md:text-base">Plongez dans un vaste éventail de ressources littéraires et scientifiques pour soutenir vos études et enrichir vos recherches à travers notre bibliothèque universitaire.</p>
                </div>
    
                <img class="object-cover h-4/6 w-5/6 max-w-md  md:mr-12 lg:w-5/6" src="/storage/img/bo.png" alt="Livre illustratif">
            </div>
        </div>

        
    </div>
<div class="">
    <div class="relative p-4 overflow-hidden text-blue-900 rounded-lg marquee">
        <span
            class="inline-block pb-8 transition-opacity duration-500 opacity-0 marquee-content animate-marquee">Bienvenue
            à la bibliothèque numérique ! Apprenez, explorez, découvrez !
        </span>

    </div>

        <div class="flex flex-col items-start justify-start mt-8 ml-4 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
            <a href="{{ route('regist') }}"
                class="flex items-center justify-center h-12 px-6 font-bold text-center text-white transition-transform transform rounded-lg shadow-lg bg-gradient-to-r from-blue-600 to-blue-400 hover:scale-105 hover:shadow-xl hover:bg-blue-500">
                Admin
            </a>

            <a href="{{ route('pre-inscription') }}"
                class="flex items-center justify-center h-12 px-6 font-bold text-center text-white transition-transform transform rounded-lg shadow-lg bg-gradient-to-r from-green-600 to-green-400 hover:scale-105 hover:shadow-xl hover:bg-green-500">
                Étudiant
            </a>
        </div>
    </div>
    
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

        @media (max-width: 768px) {
            .animate-marquee {
                animation-duration: 25s;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .animate-marquee {
                animation-duration: 30s;
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
    </script>


</body>

</html>
