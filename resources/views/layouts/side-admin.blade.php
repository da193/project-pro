<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>📕 DAYLIBRIS</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-900">

        <div @click.away="open = false"
     class="flex flex-col flex-shrink-0 w-full text-slate-700 bg-white md:w-64 dark:text-slate-200 dark:bg-slate-900 transition-all duration-300"
     x-data="{ open: false }">

    <!-- Header avec logo -->
    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 mb-2 shadow-lg bg-yellow-500/90 dark:bg-slate-800 shadow-slate-500/20">
        <img class="object-cover w-auto h-auto py-2 ml-4 md:h-16 md:w-16 transition-transform duration-300 hover:scale-105" 
             src="/storage/img/loog.png" 
             alt="Logo">
    </div>

    <!-- Navigation -->
    <nav :class="{ 'block': open, 'hidden': !open }"
         class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
        <!-- Accueil -->
        <a class="flex items-center gap-3 px-4 py-3 mt-2 text-sm font-medium text-slate-800 bg-yellow-100/80 rounded-lg transition-all duration-300 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700 dark:hover:text-yellow-300 hover:bg-yellow-200 hover:text-slate-900 focus:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400"
           href="{{ route('adminpage') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
            </svg>
            Accueil
        </a>

        <!-- Catégories -->
        <a class="flex items-center gap-3 px-4 py-3 mt-2 text-sm font-medium text-slate-800 bg-transparent rounded-lg transition-all duration-300 dark:bg-transparent dark:text-slate-200 dark:hover:bg-slate-700 dark:hover:text-yellow-300 hover:bg-yellow-100/70 hover:text-slate-900 focus:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400"
           href="{{ route('category_page') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M3 4h6v6H3zm8 0h6v6h-6zm-8 8h6v6H3zm8 0h6v6h-6z" />
            </svg>
            Catégories
        </a>

        <!-- Dropdown Livres -->
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                    class="flex items-center justify-between w-full px-4 py-3 mt-2 text-sm font-medium text-slate-800 bg-transparent rounded-lg transition-all duration-300 dark:bg-transparent dark:text-slate-200 dark:hover:bg-slate-700 dark:hover:text-yellow-300 hover:bg-yellow-100/70 hover:text-slate-900 focus:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <span class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                              d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                    </svg>
                    Livres
                </span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                     class="inline w-4 h-4 transition-transform duration-300">
                    <path fill-rule="evenodd" 
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                          clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Sous-menu -->
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute left-0 w-full mt-2 origin-top-left rounded-lg shadow-lg bg-white dark:bg-slate-800 border border-yellow-200/50 dark:border-slate-700">
                <div class="px-2 py-2">
                    <!-- Options -->
                    <a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-slate-800 bg-transparent rounded-lg transition-all duration-300 dark:bg-transparent dark:text-slate-200 dark:hover:bg-slate-700 dark:hover:text-yellow-300 hover:bg-yellow-100/70 hover:text-slate-900 focus:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       href="{{ route('show_book') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                                  d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                        </svg>
                        Options
                    </a>
                    <!-- Ajouter un livre -->
                    <a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-slate-800 bg-transparent rounded-lg transition-all duration-300 dark:bg-transparent dark:text-slate-200 dark:hover:bg-slate-700 dark:hover:text-yellow-300 hover:bg-yellow-100/70 hover:text-slate-900 focus:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       href="{{ route('add_book') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                                  d="M12 9v6m3-3H9m10.5 0a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
                        </svg>
                        Ajouter un livre
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>



    @yield('content')
</body>

</html>
