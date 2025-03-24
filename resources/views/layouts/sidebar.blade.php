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

<body class="bg-gradient-to-r from-slate-900 to-slate-700">

    {{-- abstract --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <div class="p">

        <div class="flex-col w-full fixed md:flex md:flex-row md:min-h-screen dark:bg-gray-800 -z-30 bg-transparent">

            <div @click.away="open = false"
                class="flex flex-col flex-shrink-0 w-full text-yellow-500 bg-gradient-to-b from-slate-700 to-slate-700  md:w-64 dark:text-gray-200 dark:bg-gray-"
                x-data="{ open: false }">
                <div
                    class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 shadow-md bg-slate-900 shadow-white ">

                    <a href="#"
                        class="flex gap-2 pt-2 text-lg font-bold tracking-widest text-yellow-500 uppercase transition-colors duration-300 rounded-lg dark:text-white hover:text-yellow-500 dark:hover:text-gra-300 focus:outline-non focus:shadow-outlin">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="flex justify-between size-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        User</a>
                    <button
                        class="p-2 transition-colors duration-300 rounded-lg md:hidden hover:bg-gray-200 dark:hover:bg-yellow-500 focus:outline-none focus:shadow-outline"
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
                    <a class="flex  gap-3 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-gray-200 rounded-lg dark:bg-yellow-500 dark:hover:bg-yellow-500 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-yellow-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="flex justify-between gap-4 size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Accueil</a>

                    <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-bold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-yellow-500 dark:focus:bg-yellow-500 dark:focus:text-white dark:hover:text-white dark:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-yellow-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('explore') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                        Livres</a>
                    <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-bold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-yellow-500 dark:focus:bg-yellow-500 dark:focus:text-white dark:hover:text-white dark:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-yellow-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('explore') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        Explorer</a>
                    <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-bold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-yellow-500 dark:focus:bg-yellow-500 dark:focus:text-white dark:hover:text-white dark:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-yellow-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('categories') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>

                        Categories</a>
                    {{-- <a class="flex gap-3 px-4 py-2 mt-2 text-sm font-bold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-yellow-500 dark:focus:bg-yellow-500 dark:focus:text-white dark:hover:text-white dark:text-white hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-yellow-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('login') }}">Login</a> --}}


                </nav>

            </div>
    
    
    @yield('content')
</body>
</html>
