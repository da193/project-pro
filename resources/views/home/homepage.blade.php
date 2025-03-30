@extends('layouts.sidebar')

@section('content')



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
                    <div class="carousel relative  overflow-hidden h- flex justify-center items-center pr-4 ">
                        <div class="carousel-images flex items-center transform w-[37vw] gap-5">
                            <img src="/storage/img/desk.png" class="carousel-image active px-3" alt="Image 1">
                            <img src="/storage/img/kiné.jpg" class="carousel-image inactive px-3" alt="Image 2">
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

    @endsection