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

<header class="h-20 pt-5 pl-4 text-red-600 rounded-md shadow-md shadow-black ">

    <div class="flex items-center justify-between text-center">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="pl-8 text-white size-9">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />

            </svg>
        </div>

        <nav class="items-center justify-between">
            <div>
                <ul class="flex md:flex-row flex-col md:items-centber md:gap-[4vw] gap-6 pr-8 ">
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">contact us</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</header>

<body class="">

    <div
        class="relative block h-screen px-4 pt-8 pl-6 mx-6 mt-3 mb-3 rounded-md bg-custom bg-gradient-to-bl from-cyan-400 to-blue-800 shadow-blue-800 shadow-">

        <!-- Overlay for better text visibility -->
        {{-- <div class="absolute inset-0 mx-5 my- bg-opacity-50 rounded-md">

        </div> --}}

        <div class="relative z-10 flex justify-between items-center px-8 w-ful py-14 mx-aut max-w-7xl mb-[10rem]">
            <div class="w-full md:w-1/2 lg:w-2/5">
                <h2 class="mb-5 text-4xl font-bold md:text-4xl text-amber-400">Knowledge is Power</h2>
                <p class="mb-6 text-sm text-white md:text-base">Discover the best books to expand your mind and enhance
                    your understanding of the world.</p>

                {{-- <a href="your-link-here.html" class="inline-block px-6 py-3 text-lg font-semibold bg-blue-500 rounded-lg hover:bg-blue-600">Explore Top Books</a> --}}
            </div>

            <img class="object-cover h-auto max-w-sm mr-12 lg:w-4/3" src="/storage/img/book.png" alt="">

        </div>
        <div class="flex">
            <a href="{{ route('regist') }}"
                class="flex items-center justify-center h-10 ml-16 font-bold text-center text-white bg-gradient-to-t from-pink-700 to-pink-400 rounded-lg w-28">admin</a>

            <a href="{{ route('home') }}"
                class="flex items-center justify-center h-10 ml-16 font-bold text-center text-white bg-gradient-to-t from-pink-700 to-pink-400 rounded-lg w-32">student</a>

        </div>


    </div>

</body>

</html>
