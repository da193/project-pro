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

<header class="h-20 text-center pl-4 bg-gradient-to-t from-red-500 to-red-300 rounded-md shadow-md shadow-black ">

    
    <div class="flex items-center justify-between px-4 ">
        <div class="flex items-center">
            <!-- Logo -->
            <img class="object-cover h-auto w-auto md:h-20 md:w-20 ml-4 py-3" src="/storage/img/logo.jpg" alt="Logo">
            <span class="text-white gap-4">ESCa Biblio</span>
            <!-- Icone -->
            
        </div>

        <!-- Navigation -->
        <nav>
            <ul class="flex flex-col md:flex-row items-center md:gap-8 gap-4 pr-6 text-white text-lg font-semibold">
                <li>
                    <a href="#" class="hover:text-gray-300 transition duration-200">About</a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-300 transition duration-200">Contact</a>
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


<body class="overflow-hidde">

    <div
    
        class="relative block h-screen px-4 pt-8  mx- mt-3 mb-3 rounded-md  shadow-lg bg-gradient-to-t from-rose-400 to-red-200">

        <div class="bg-cover rounded-md bg-center bg-no-repeat h-full md:h-80 lg:h-96 w-full" style="background-image: url('/storage/img/2.jpg');">

        <div
            class="relative z-10 flex flex-col-reverse md:flex-row justify-between items-center px-8 py-14 max-w-7xl mx-auto mb-10">
            <div class="w-full md:w-1/2 lg:w-2/5">
                <h2 class="mb-5  text-4xl font-bold text-black uppercase">Le savoir, c'est le pouvoir</h2>
                <p class="mb-6 text-sm text-white md:text-base">Plongez dans un vaste éventail de ressources littéraires et scientifiques pour soutenir vos études et enrichir vos recherches à travers notre bibliothèque universitaire.</p>
            </div>

            {{-- <img class="object-cover h-auto max-w-sm mr-0 md:mr-12 lg:w-4/5" src="/storage/img/tt.jpg"
                alt="Livre illustratif"> --}}
        </div>


        <div class="marquee overflow-hidden text-red-900 p-4 rounded-lg  relative">
            <span
                class="marquee-content inline-block animate-marquee opacity-0 transition-opacity duration-500 pb-8">Bienvenue
                à la bibliothèque numérique ! Apprenez, explorez, découvrez !</span>
        </div>

        <div class="flex flex-col sm:flex-row items-start justify-start space-y-4 sm:space-y-0 sm:space-x-4 mt-8 ml-4">
            <a href="{{ route('regist') }}"
                class="flex items-center justify-center h-12 px-4 font-bold text-center text-white bg-gradient-to-t from-pink-700 to-pink-400 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                Admin
            </a>

            <a href="{{ route('pre-inscription') }}"
                class="flex items-center justify-center h-12 px-4 font-bold text-center text-white bg-gradient-to-t from-pink-700 to-pink-400 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                Étudiant
            </a>
        </div>




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
