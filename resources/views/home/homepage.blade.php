<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-center bg-amber-600">
        📕 DAYLIBRIS
    </title>

    <link rel="stylesheet" href="https://heroicons.com">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="bg-slate-600">

    {{-- abstract --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
    <div class="p">
        <div
            class="flex-col w-full md:flex md:flex-row md:min-h-screen bg-gradient-to-l bg-red-600 -z-30 bg-transparent">

            <div @click.away="open = false"
                class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark:text-gray-200 dark:bg-gray-800"
                x-data="{ open: false }">
                <div
                    class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 shadow-md bg-gray-50 dark:bg-gray-900">
                    <a href="#"
                        class="flex gap-2 pt-2 text-lg font-semibold tracking-widest text-gray-900 uppercase transition-colors duration-300 rounded-lg dark:text-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:shadow-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="flex justify-between size-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        User</a>
                    <button
                        class="p-2 transition-colors duration-300 rounded-lg md:hidden hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:shadow-outline"
                        @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>


                </div>
                <nav :class="{ 'block': open, 'hidden': !open }"
                    class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                    <a class="flex  gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-gray-200 rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="flex justify-between gap-4 size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Accueil</a>

                    <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('explore') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                        Livres</a>
                    <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('explore') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        Explorer</a>
                    <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('categories') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>

                        Categories</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('login') }}">Login</a>


                </nav>

            </div>



            {{-- before the header to personnalise again --}}
            <div class="flex-1">

                <div class=" bg-gradient-to-r from-red-300 to-red-400  py-5">
                    <form action="{{ route('search') }}" method="get"
                        class="flex items-center max-w-lg mx-auto space-x-4">
                        @csrf
                        <div class="relative flex-grow">
                            <input type="text" id="search-navbar" name="search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 transition-all duration-300 border border-gray-300 rounded-lg search-input bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Recherchez un livre
                    ">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">

                                <svg x-on:click="open = true" class="w-5 h-5 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35M15.65 10.65A4.5 4.5 0 1 0 7.5 15.65a4.5 4.5 0 0 0 8.15-5z" />
                                </svg>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-auto px-4 py-2 text-sm text-white transition-all duration-300 bg-yellow-400 border border-transparent rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                            Search
                        </button>
                    </form>

                </div>

                <!-- Main Content -->
                {{-- <header class=" flex items-center justify-between w-4/6 px-6 py-5 mt-1 ml-10 mr-6 overflow-hidden rounded-md bg-gradient-to-t from-sky-400 to-sky-100 text-sky-800">
                <form action="{{ route('search') }}" method="get" class="flex items-center max-w-lg mx-auto space-x-4">
                    @csrf
                    <div class="relative flex-grow">
                        <input type="text" id="search-navbar" name="search" class="block w-full p-2 pl-10 text-sm text-gray-900 transition-all duration-300 border border-gray-300 rounded-lg search-input bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Recherchez un livre
                        ">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg x-on:click="open = true" class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M15.65 10.65A4.5 4.5 0 1 0 7.5 15.65a4.5 4.5 0 0 0 8.15-5z"/>
                            </svg>
                        </div>
                    </div>
                    <button type="submit" class="w-auto px-4 py-2 text-sm text-white transition-all duration-300 bg-blue-500 border border-transparent rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        Search
                    </button>
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </header> --}}

                {{-- ***starting the carousel **** --}}
                <style>
                    .carousel {
                        height: 500px;
                        /* Hauteur augmentée */
                        /
                    }

                    .carousel-images {
                        transition: transform 0.5s ease;
                    }

                    .carousel-image {
                        min-width: 100%;
                        height: auto;
                        transition: transform 0.5s ease, opacity 0.5s ease;
                    }

                    .active {
                        transform: scale(1.2);
                        /* Image active plus grande */
                        opacity: 1;
                    }

                    .inactive {
                        transform: scale(0.8);
                        /* Images inactives plus petites */
                        opacity: 0.5;
                    }
                </style>

                <div class="bg-slate-400 mx-5 my-4 rounded-md ">
                    <div class="carousel relative  overflow-hidden h- flex justify-center items-center pr-4">
                        <div class="carousel-images flex items-center transform w-[37vw]">
                            <img src="/storage/img/desk.png" class="carousel-image active" alt="Image 1">
                            <img src="/storage/img/desk.png" class="carousel-image inactive" alt="Image 2">
                            <img src="/storage/img/desk.png" class="carousel-image inactive" alt="Image 3">
                            <img src="/storage/img/desk.png" class="carousel-image inactive" alt="Image 4">
                            <img src="/storage/img/desk.png" class="carousel-image inactive" alt="Image 5">

                        </div>
                        <button id="prev"
                            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white px-4 rounded-full shadow">❮</button>
                        <button id="next"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">❯</button>
                    </div>

                    <script>
                        const images = document.querySelectorAll('.carousel-image');
                        const prevButton = document.getElementById('prev');
                        const nextButton = document.getElementById('next');
                        let currentIndex = 0;

                        function updateCarousel() {
                            images.forEach((img, index) => {
                                if (index === currentIndex) {
                                    img.classList.add('active');
                                    img.classList.remove('inactive');
                                } else {
                                    img.classList.add('inactive');
                                    img.classList.remove('active');
                                }
                            });
                            const offset = -currentIndex * 100;
                            document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
                        }

                        nextButton.addEventListener('click', () => {
                            currentIndex = (currentIndex + 1) % images.length;
                            updateCarousel();
                        });

                        prevButton.addEventListener('click', () => {
                            currentIndex = (currentIndex - 1 + images.length) % images.length;
                            updateCarousel();
                        });

                        // Auto scroll every 5 seconds
                        setInterval(() => {
                            currentIndex = (currentIndex + 1) % images.length;
                            updateCarousel();
                        }, 5000);
                    </script>

                </div>




                {{-- script for the carousel --}}

                {{-- end script --}}
                {{-- ***ending the carousel  ****** --}}

                {{-- *********** --}}
                <h2
                    class="py-7 mb-4 text-2xl font-bold text-center text-transparent bg-gradient-to-tr from-amber-500 to-amber-400 bg-clip-text">
                    Books currently available
                </h2>
                <div class=" py-20 mx-6 ml-6 text-center text-white rounded-sm shadow-md mt-28 bg-custom shadow-black">
                    {{-- <div class=" inset-0 "></div> --}}
                    {{-- <div class="  max-w-6xl px-6 mx-auto rounded-lg">

                        <div class="mx-auto text-left md:w-1/2 lg:w-2/5 ">
                            <h2 class="mb-5 text-4xl font-bold">Knowledge is Power</h2>
                            <p class="mb-2 text-sm">Discover the best books to expand your mind and enhance your
                                understanding of the world.</p>
                            <a href="your-link-here.html"
                                class="inline-block px-6 py-3 text-lg font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Explore
                                Top Books</a>
                        </div>
                    </div> --}}

                </div>
                {{-- ***ennd of the black phase*** --}}

                <h2
                    class="py-7 mb-4 text-2xl font-bold text-center text-transparent bg-gradient-to-tr from-amber-500 to-amber-400 bg-clip-text">
                    Books currently available
                </h2>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 pt-5 pb-2 md:grid-cols-1">
                    @foreach ($livre as $livre)
                        <div
                            class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md w-72 ml-8 border-b-4 border-red-500 border- border-r-[px]">
                            <img class="object-cover w-full h-48 rounded-t-lg" src="/storage/{{ $livre->book_img }}"
                                alt="{{ $livre->title }}">

                            <div class="flex-1 p-4 flex flex-col justify-between">
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-800 uppercase">{{ $livre->title }}</h4>
                                    {{-- <h5 class="text-md text-red-600">{{ $livre->category->name }}</h5>
                                    <span class="text-sm text-gray-700">{{ $livre->author_name }}</span>
                
                                    <div class="mt-2">
                                        <p class="text-xs text-gray-700">{{ $livre->description }}</p>
                                    </div> --}}
                                </div>

                                <div class="mt-4">
                                    <a href="{{ route('details', ['id' => $livre->id]) }}"
                                        class="inline-block px-4 py-2 text-sm text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 transition hover:text-red-600 font-bold shadow-red-700 w-full text-center">Plus
                                        de détails</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <h2
                    class="py-5 mb-4 text-2xl font-bold text-center text-transparent bg-gradient-to-tr from-sky-500 to-sky-400 bg-clip-text">
                    Browse Through Some Categories</h2>

                <div class="container p-6 mx-auto my-4 bg-black bg-opacity-50 rounded-md">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                        <!-- Example Category Card -->
                        <a href="/arts" class="transition-transform transform hover:scale-105">
                            <div
                                class="flex items-center justify-center w-full text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-gray-400 to-gray-600 h-28 category-card">
                                <h3 class="text-lg font-bold">Arts</h3>
                            </div>
                        </a>
                        <a href="/gestion" class="transition-transform transform hover:scale-105">
                            <div
                                class="flex items-center justify-center w-full text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-teal-400 to-teal-600 h-28 category-card">
                                <h3 class="text-lg font-bold">Gestion</h3>
                            </div>
                        </a>
                        <a href="/tourisme" class="transition-transform transform hover:scale-105">
                            <div
                                class="flex items-center justify-center w-full text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-400 to-blue-600 h-28 category-card">
                                <h3 class="text-lg font-bold">Tourisme</h3>
                            </div>
                        </a>
                        <a href="/elevage" class="transition-transform transform hover:scale-105">
                            <div
                                class="flex justify-center w-full text-white rounded-lg shadow-lg items-jcenter text-ceter bg-gradient-to-r from-orange-400 to-orange-600 h-28 category-card">
                                <h3 class="text-lg font-bold">Elevage</h3>
                            </div>
                        </a>
                        <a href="/genie-info" class="transition-transform transform hover:scale-105">
                            <div
                                class="flex items-center justify-center w-full text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-purple-400 to-purple-600 h-28 category-card">
                                <h3 class="text-lg font-bold">Genie info</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <style>
                    .category-card {
                        transition: background-color 0.3s ease, transform 0.3s ease;
                    }

                    .category-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                    }

                    a {
                        text-decoration: none;
                        /* Enlève le soulignement par défaut */
                        color: inherit;
                        /* Utilise la couleur du texte de la carte */
                    }
                </style>





                <style>
                    /* Custom styles for the background image */
                    .bg-custom {
                        background-image: thumbnails('68bf3wTQfYYmrPP7oysIhXvkL5juMe1jC0pmgdF6.jpg');
                        /* Replace with your image URL */
                        background-size: cover;
                        background-position: center;
                    }
                </style>

                <style>
                    /* Custom styles for the category circles */
                    .category-card {
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                    }

                    .category-card:hover {
                        transform: scale(1.1);
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    }
                </style>

                {{-- insertion of footer --}}
                <style>
                    /* Footer background gradient */
                    .footer-background {
                        background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
                    }

                    /* Footer text animation */
                    .footer-text {
                        transition: color 0.3s;
                    }

                    .footer-text:hover {
                        color: #f0f9ff;
                    }
                </style>
                </head>

                <body class="bg-gray-100">

                    <!-- Main content -->
                    <main class="p-4">
                        <p class="text-center text-gray-700 text-sm">Explore a vast collection of eBooks and much more.
                        </p>
                    </main>

                    <!-- Footer -->
                    <footer class="py-3 mt-8 footer-background">
                        <div class="container mx-auto text-center">
                            <h2 class="mb-2 text-2xl font-semibold text-white">Digital Library</h2>
                            <p class="mb-2 text-gray-300">© 2024 Your Library. All rights reserved.</p>
                            <div class="flex justify-center mt-4 space-x-4">
                                <!-- Social media or other icons -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-gray-200 transition-colors hover:text-white"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                            </div>
                        </div>
                    </footer>
            </div>
        </div>
    </div>

</body>

</html>
