<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-center text-rose-600">
        📕 DAYLIBRIS
    </title>
    <link rel="stylesheet" href="https://heroicons.com">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-l from-slate-900 to-slate-700">

    <style>
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }

        .bg-custom {
            background-image: url('your-background-image.jpg');
            /* Replace with your background image */
            background-size: cover;
            background-position: center;
        }

        .search-input::placeholder {
            color: #aaa;
        }

        .nav-link:hover {
            background-color: #f0f0f0;
        }

        .nav-link:focus {
            background-color: #e0e0e0;
        }

        .dropdown-menu {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    {{-- abstract --}}
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-900">

        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark:text-gray-200 dark:bg-gray-800"
            x-data="{ open: false }">

            <div
                class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 mb-2 shadow-md bg-gray-50 dark:bg-gray-900 shadow-black">

                <a href="{{ route('profile.edit') }}"
                    class="flex gap-3 text-lg font-semibold tracking-widest text-gray-900 uppercase transition-colors duration-300 rounded-lg dark:text-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="flex justify-between size-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Admin</a>

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
                <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-gray-200 rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline"
                    href="{{ route('adminpage') }}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="flex justify-between gap-4 text-center size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Accueil</a>
                <a
                    class="flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"href="{{ route('category_page') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                    Categories</a>

                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>

                            Livres</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
                            <a class=" flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('show_book') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                                Options</a>
                            <a class=" flex gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('add_book') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                </svg>Ajouter un livre</a>

                        </div>
                    </div>
                </div>


            </nav>


        </div>


        <div class="flex-1">

            <!-- Main Content -->

            
           
            <header class="flex items-center justify-between px-6 py-5 ml-4 mr-4 bg-gradient-to-t from-sky-500 to-sky-300 text-sky-800">


                <form action="{{ route('search') }}" method="get"
                    class="flex items-center max-w-lg mx-auto space-x-4">
                    @csrf
                    <div class="relative flex-grow">
                        <input type="text" id="search-navbar" name="search"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 transition-all duration-300 border border-gray-300 rounded-lg search-input bg-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Recherchez un livre">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35M15.65 10.65A4.5 4.5 0 1 0 7.5 15.65a4.5 4.5 0 0 0 8.15-5z" />
                            </svg>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-auto px-4 py-2 text-sm text-white transition-all duration-300 bg-gradient-to-t from-slate-400 to-slate-300 border border-transparent rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        Search
                    </button>
                </form>

                    {{-- add the name and the email of the person who logged in --}}
                
                <nav x-data="{ open: false }" class="b border-b border-gray-100">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            {{-- <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <a href="{{ route('dashboard') }}">
                                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                                    </a>
                                </div>
                
                                <!-- Navigation Links -->
                                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-nav-link>
                                </div>
                            </div> --}}
                
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                    {{-- @dd(auth()) --}}
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>
                
                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                
                            <!-- Hamburger -->
                            <div class="-me-2 flex items-center sm:hidden">
                                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Responsive Navigation Menu -->
                    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                        {{-- <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                        </div> --}}
                
                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                {{-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}
                            </div>
                
                            <div class="mt-3 space-y-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>
                
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
                
                {{-- * end of the profil* * --}}

            </header>

            <!-- Hero Section -->
            <div
                class="relative py-12 mx-auto mt-5 text-left text-white rounded-md shadow-md bg-custom md:w-4/5 lg:w-4/5 xl:w-5/6">
                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-md"></div>
                <div class="relative z-10 px-10">
                    <div class="mx-auto">
                        <h2 class="mb-4 text-3xl font-bold">Le savoir, clé de la réussite</h2>
                        <p class="mb-4 text-sm">Découvrez les meilleurs livres pour enrichir votre esprit et mieux
                            comprendre le monde.</p>
                        <div class="flex justify-center">
                            <a href="your-link-here.html"
                                class="inline-block px-6 py-3 text-base font-semibold text-white bg-blue-500 rounded-lg hover:bg-gradient-to-r from-blue-400 to-blue-600">Explorer
                                les livres</a>
                        </div>
                    </div>
                </div>
            </div>




            {{-- presentations of my books --}}
            <div class="container p-6 mx-auto">
                <h2
                    class="mb-4 text-2xl font-bold text-center text-transparent py-7 bg-gradient-to-tr from-sky-500 to-sky-400 bg-clip-text">
                    Livres Disponible</h2>



                <div
                    class="grid grid-cols-1 gap-4 px-4 shadow-md sm:grid-cols-2 lg:grid-cols-2 w- 1/3 shadow-black py-7">

                    @foreach ($livre as $livre)
                        <div
                            class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md w-72 lg:flex-row shadow-slate-700">
                            <img class="object-cover pt-2 pl-3 rounded-sm w-fit h-36 lg:w-1/3"
                                src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}">

                            <div class="flex-1 p-4">
                                <h4 class="text-xl font-semibold text-gray-800">{{ $livre->title }}</h4>
                                <h5>{{ $livre->category->name }}</h5>
                                <span class="text-sm text-gray-700">{{ $livre->author_name }}</span>

                                <div class="mt-2">
                                    <p class="text-xs text-gray-700">{{ $livre->description }}</p>
                                </div>

                                <div class="mt-4">
                                    <a href="{{ route('details', ['id' => $livre->id]) }}"
                                        class="inline-block px-4 py-2 text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-600">More
                                        details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- presentation of categories but before that use --}}

            <h2
                class="mb-4 text-2xl font-bold text-center text-transparent py-7 bg-gradient-to-tr from-sky-500 to-sky-400 bg-clip-text">
                category currently available</h2>

            <div class="container p-6 pl-6 mx-6 my-4 bg-black bg-opacity-50 rounded-md cursor-pointer">
                <div class="flex flex-wrap justify-between">
                    <!-- Example Category Card -->
                    <div class="w-full p-2 sm:w-1/6">
                        <div
                            class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Arts</h3>
                        </div>
                    </div>
                    <div class="w-full p-2 sm:w-1/6">
                        <div
                            class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Gestion</h3>
                        </div>
                    </div>
                    <div class="w-full p-2 sm:w-1/6">
                        <div
                            class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Tourisme</h3>
                        </div>
                    </div>
                    <div class="w-full p-2 sm:w-1/6">
                        <div
                            class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Elevage</h3>
                        </div>
                    </div>

                    <div class="w-full p-2 sm:w-1/4">
                        <div
                            class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Genie info</h3>
                        </div>
                    </div>
                </div>
            </div>
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
                    <p class="text-center text-gray-700">Explore a vast collection of eBooks and much more.</p>
                </main>

                <!-- Footer -->
                <footer class="py-6 mt-8 footer-background">
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
                                class="w-6 h-6 text-gray-200 transition-colors hover:text-white" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                        </div>
                    </div>
                </footer>


        </div>
    </div>
    </div>


    </div>

    </div>

    </div>

    {{-- end of second controller --}}

    {{-- abstract --}}


    <style>
        /* Custom styles for the background image */
        .bg-custom {
            background-image: thumbnails('68bf3wTQfYYmrPP7oysIhXvkL5juMe1jC0pmgdF6.jpg');
            /* Replace with your image URL */
            background-size: cover;
            background-position: center;
        }
    </style>



    </div>

</body>

</html>
