<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title class="text-center text-rose-600">
    IntelliBiblio
</title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-slate-900 to-slate-700">

{{-- abstract --}}
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="md:flex flex-col md:flex-row md:min-h-screen w-full bg-gray-100 dark:bg-gray-900">
    <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
      <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between bg-gray-50 dark:bg-gray-900 shadow-md">
        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white hover:text-gray-700 dark:hover:text-gray-300 transition-colors duration-300 focus:outline-none focus:shadow-outline">Flowtrail UI</a>
        <button class="md:hidden rounded-lg p-2 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-300 focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 transition-colors duration-300 focus:outline-none focus:shadow-outline" href="#">Home</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline"href="{{ route('category_page') }}">Categories</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline" href="#">Authors</a>
        {{-- <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline" href="#">Contact</a> --}}
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline">
            <span>Books</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline" href="{{ route('show_book') }}">Book options</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline" href="#">Add Books</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 transition-colors duration-300 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <a href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-800 size-9">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
            
        </svg>
    
    </a>
   
  </div>

{{-- abstract --}}


    <header class="flex items-center justify-around gap-10 py-5  space-x-5 text-slate bg-gradient-to-r from-rose-100 to-teal-100 text-sky-800 ">
   <a href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-800 size-9">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
            
        </svg>
    
    </a>
   
        {{-- from navigation --}}
        
        <nav class="items-center justify-between mx-auto ">
           
            <div class="nav-links duration-500 md:static 
                        absolute md:min-h-fit min-h-[60vh] 
                        left-0 top-[-100%] md:w-auto  w-full 
                         items-center">
                <ul class="flex md:flex-row flex-col 
                           md:items-centber md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-blue-900" href="{{ route('home') }}">Home</a>
                    </li>
                    
                    <li class="relative flex items-center">
                        <!-- Menu principal -->
                        <a class="hover:text-blue-900" href="{{ route('show_book') }}">Books</a>      
                                       
                    </li>
                    
                    <li>
                        <a class="hover:text-blue-900" href="{{ route('category_page') }}">Categories</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-900" href="#">Authors</a>
                    </li>

                    <li>
                        <a class="hover:text-blue-900" href="{{ route('adminpage') }}">Login</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>
            
    </header>

    <style>
        /* Custom styles for the background image */
        .bg-custom {
            background-image: thumbnails('68bf3wTQfYYmrPP7oysIhXvkL5juMe1jC0pmgdF6.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
        }
    </style>
    
     <!-- Background Section -->
     <div class="relative flex items-center justify-start h-screen bg-custom px-4">
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-black bg-opacity-50 mx-5 my-4 rounded-md"></div>
        
        <div class="relative z-10 flex items-center w-full px-8 py-14 mx-auto max-w-7xl">
            <div class="w-full md:w-1/2 lg:w-2/5">
                <h2 class="mb-5 text-4xl font-bold md:text-4xl text-white">Knowledge is Power</h2>
                <p class="mb-6 text-sm md:text-base text-white">Discover the best books to expand your mind and enhance your understanding of the world.</p>
                <a href="your-link-here.html" class="inline-block px-6 py-3 text-lg font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Explore Top Books</a>
            </div>
        </div>
    </div>

    <!-- Your existing content here -->
    

    <div class="container p-6 cursor-pointer bg-black bg-opacity-50 mx-5 my-4  rounded-md ">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-300">Browse Through Some Categories</h2>
        <div class="flex flex-wrap justify-between">
            <!-- Example Category Card -->
            <div class="w-full p-2 sm:w-1/6">
                <div class="flex items-center justify-center w-14 h-14  mx-auto text-center text-gray-900 bg-blue-400 rounded-full category-card">
                    <h3 class="text-sm font-semibold">Arts</h3>
                </div>
            </div>
            <div class="w-full p-2 sm:w-1/6">
                <div class="flex items-center justify-center w-14 h-14 mx-auto text-center text-gray-900 bg-blue-400 rounded-full category-card">
                    <h3 class="text-sm font-semibold">Gestion</h3>
                </div>
            </div>
            <div class="w-full p-2 sm:w-1/6">
                <div class="flex items-center justify-center w-14 h-14 mx-auto text-center text-gray-900 bg-blue-400 rounded-full category-card">
                    <h3 class="text-sm font-semibold">Tourisme</h3>
                </div>
            </div>
            <div class="w-full p-2 sm:w-1/6">
                <div class="flex items-center justify-center w-14 h-14 mx-auto text-center text-gray-900 bg-blue-400 rounded-full category-card">
                    <h3 class="text-sm font-semibold">Elevage</h3>
                </div>
            </div>
           
            <div class="w-full p-2 sm:w-1/6">
                <div class="flex items-center justify-center w-14 h-14 mx-auto text-center text-gray-900 bg-blue-400 rounded-full category-card">
                    <h3 class="text-sm font-semibold">Genie info</h3>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container p-6 mx-auto">
        <h2 class="mb-4 text-2xl font-bold text-center text-gray-300">Books currently available</h2>

        <div class="flex items-center">

            <form action="{{ route('search') }}" method="get" class="flex py-8">
            {{-- <form action="" method="get" class="flex py-8"> --}}

                @csrf

            <div class="relative hidden md:block">
              <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                
              </div>
              <input type="text" id="search-navbar" name="search" class="block w-full p-2 text-sm text-black border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Recherchez un livre">
            </div>
    
            <div>
                <input type="submit" value="search" class="ml-5 w-auto p-2 text-sm text-black border  border-gray-300 rounded-lg  bg-gray-50 ">
            </div>
        </form>
          </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
            
            @foreach ($livre as $livre)
                <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md lg:flex-row">
                    <img class="object-cover w-full h-48 lg:w-1/3" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}"> 

                    <div class="flex-1 p-4">
                        <h4 class="text-xl font-semibold text-gray-800">{{ $livre->title }}</h4>
                        <h5>{{ $livre->category->name }}</h5>
                        <span class="text-gray-600">{{ $livre->author_name }}</span>

                        <div class="mt-2">
                            <p class="text-gray-700">{{ $livre->description }}</p>
                        </div>
                        
                        <div class="mt-4">
                            <a href="{{ route('details',['id' =>$livre->id]) }}" class="inline-block px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">More details</a>
                        </div>
                    </div>
                </div>
            @endforeach

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
        <p class="text-gray-700 text-center">Explore a vast collection of eBooks and much more.</p>
    </main>

    <!-- Footer -->
    <footer class="footer-background py-6 mt-8">
        <div class="container mx-auto text-center">
            <h2 class="text-white text-2xl font-semibold mb-2">Digital Library</h2>
            <p class="text-gray-300 mb-2">© 2024 Your Library. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <!-- Social media or other icons -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-200 hover:text-white transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            </div>
        </div>
    </footer>
</body>
</html>
