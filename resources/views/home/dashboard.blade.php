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

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  
<header @click.away="open = false" class=" h-24 pl-4 text-center bg- blue-900 rounded-sm shadow-md md: shadow-slate-600 bg-gradient-to-r from-red-300 to-red-400 mb-2 " x-data="{ open: false }">
    
    

    <div class="flex items-center justify-between px-4 ">

        <div class="flex items-center ">
            <!-- Logo -->
            <img class="object-cover w-auto h-auto py-3 ml-4 md:h-20 md:w-20 " src="/storage/img/sup.png"
                alt="Logo">
            {{-- <span class="gap-5 text-white">ESCa Biblio</span> --}}
            <!-- Icone -->

        </div>
        <button class="p-2 transition-colors duration-300 rounded-lg md:hidden hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <nav>
              <ul class="flex flex-col items-center gap-4 pr-6 text-lg font-semibold text-white md:flex-row md:gap-8">
                  <li>
                      <a href="#" class="transition duration-200 hover:text-black">About</a>
                  </li>
                  <li>
                      <a href="#" class="transition duration-200 hover:text-black">Contact</a>
                  </li>
              </ul>
          </nav>
      </div>
        <!-- Navigation -->



</header> 

<!-- Styles et media queries -->
{{-- <style>
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
</style> --}}


<body class="">

    {{-- <div class="h-screen bg-black mt-">
        <div class="flex items-center justify-between">
            <div class="w-3/4 p-10 pt-40 md:flex-row">
                <h1 class="pb-4 text-6xl font-bold text-yellow-500 md:text-7xl ">Welcome To Daylibris</h1>
                <span class="pt-16 pb-4 text-xl text-white">Le savoir, c'est le pouvoir</span>
                <p class="mt-5 text-lg text-white md:text-xl">Plongez dans un vaste éventail de ressources littéraires
                    <br>et scientifiques pour soutenir vos études <br>et enrichir vos recherches à travers notre
                    bibliothèque numérique.</p>

                <button class="px-6 py-3 mt-8 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700">
                    Découvrir
                </button>

                <a href="{{ route('pre-inscription') }}"
                    class="px-6 py-3 mt-12 font-semibold text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-700 ">Inscription</a>

            </div>
            <div class="w-3/4 pt-10 pr-10">
                <img src="/storage/img/desk.png" alt="Bibliothèque" class="object-cover w-full h-full">
            </div>
        </div>



        <div class="relative p-4 overflow-hidden text-yellow-500 rounded-lg marquee">

            <span
                class="inline-block pb-8 transition-opacity duration-500 opacity-0 marquee-content animate-marquee">Bienvenue
                à la bibliothèque numérique ! Apprenez, explorez, découvrez !
            </span>

        </div>
    </div> --}}

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
                    {{-- <button class="px-6 py-3 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Découvrir
                    </button> --}}
    
                    <a href="{{ route('regist') }}"
                        class="mt-4 md:mt-0 px-6 py-3 font-semibold text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-700">
                        Inscription
                    </a>
                    <a href="{{ route('pre-inscription') }}"
                        class="mt-4 md:mt-0 px-6 py-3 font-semibold text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-700">
                        Inscription
                    </a>
                </div>
                
            </div>
    
            <div class="w-full md:w-3/4 pt-10 pr-10">
                <img src="/storage/img/desk.png" alt="Bibliothèque" class="object-cover w-full h-full rounded-lg md:w-3/4">
            </div>
        </div>
    
        <div class="relative p-4 overflow-hidden text-yellow-300 rounded-lg marquee">
            <span class="inline-block pb-8 transition-opacity duration-500 opacity-0 marquee-content animate-marquee">Bienvenue
                à la bibliothèque numérique ! Apprenez, explorez, découvrez !
            </span>
        </div>
    </div>




        {{-- <div class="relative mx-auto mt-3 mb-3 overflow-hidden bg-gray-700 rounded-md shadow-lg">
        
  <div class="rounded-md">
      <div class="relative flex flex-col-reverse items-center justify-between px-8 mx-auto mb-10 md:flex-row py-14 max-w-7xl">
          <div class="w-full md:w-1/2 lg:w-2/5">
            <h2 class="mb-5 text-4xl font-bold text-white uppercase">Le savoir, c'est le pouvoir</h2>
            <p class="mb-6 text-sm text-white md:text-base">Plongez dans un vaste éventail de ressources littéraires et scientifiques pour soutenir vos études et enrichir vos recherches à travers notre bibliothèque universitaire.</p>
        </div>
        <img  src="/storage/img/lad.png" alt="Livre illustratif">
    </div>
</div> --}}

        {{-- <div class="flex flex-col items-start justify-start mt-8 mb-20 ml-4 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
            <a href="{{ route('regist') }}" class="text-white"> 
                <!-- Ajoutez le texte ou le contenu que vous souhaitez ici -->
            </a>
        </div>
    </div> --}}

        {{-- <div class="h">
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
    </div> --}}

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
    </script>



</body>

</html>
