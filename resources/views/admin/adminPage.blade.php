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
<body class="bg-gradient-to-l from-slate-900 to-slate-700">

    <style>
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
        .bg-custom {
            background-image: url('your-background-image.jpg'); /* Replace with your background image */
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-900">
    <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark:text-gray-200 dark:bg-gray-800" x-data="{ open: false }">
      <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4 shadow-md bg-gray-50 dark:bg-gray-900">
        <a href="#" class="flex text-lg font-semibold tracking-widest text-gray-900 uppercase transition-colors duration-300 rounded-lg dark:text-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:shadow-outline">
            <img class="flex justify-between object-cover h-8 max-w-sm gap-4 rounded-full lg:w-4/3" src="/storage/img/Avatar2.jpg" alt=""> Admin</a>
        <button class="p-2 transition-colors duration-300 rounded-lg md:hidden hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-gray-200 rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline" href="#">Home</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"href="{{ route('category_page') }}">Categories</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Authors</a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Books</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('show_book') }}">Book options</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('add_book') }}">Add Books</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                </div>
            </div>
        </div>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 transition-colors duration-300 bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">settings</a>

      </nav>
    </div>

   
    <div class="flex-1">
  
    <!-- Main Content -->
        <header class="flex items-center justify-between px-6 py-5 ml-4 mr-4 bg-gradient-to-r from-rose-100 to-teal-100 text-sky-800">
            <form action="{{ route('search') }}" method="get" class="flex items-center max-w-lg mx-auto space-x-4">
                @csrf
                <div class="relative flex-grow">
                    <input type="text" id="search-navbar" name="search" class="block w-full p-2 pl-10 text-sm text-gray-900 transition-all duration-300 border border-gray-300 rounded-lg search-input bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search a book">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
        </header>

        <!-- Hero Section -->
        <div class="relative py-20 mx-6 mt-5 ml-6 text-center text-white rounded-md shadow-md bg-custom ">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative z-10 max-w-6xl px-6 mx-auto rounded-lg">
                
                <div class="mx-auto text-left md:w-1/2 lg:w-2/5">
                    <h2 class="mb-5 text-4xl font-bold">Knowledge is Power</h2>
                    <p class="mb-2 text-sm">Discover the best books to expand your mind and enhance your understanding of the world.</p>
                    <a href="your-link-here.html" class="inline-block px-6 py-3 text-lg font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Explore Top Books</a>
                </div>
            </div>
        </div>
        {{-- presentations of my books --}}
        <div class="container p-6 mx-auto">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-300">Books currently available</h2>
    
           
    
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
                
                @foreach ($livre as $livre)
                    <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md lg:flex-row shadow-slate-700">
                        <img class="object-cover w-full pt-2 pl-3 rounded-sm h-36 lg:w-1/3" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}"> 
    
                        <div class="flex-1 p-4">
                            <h4 class="text-xl font-semibold text-gray-800">{{ $livre->title }}</h4>
                            <h5>{{ $livre->category->name }}</h5>
                            <span class="text-sm text-gray-700">{{ $livre->author_name }}</span>
    
                            <div class="mt-2">
                                <p class="text-xs text-gray-700">{{ $livre->description }}</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="{{ route('details',['id' =>$livre->id]) }}" class="inline-block px-4 py-2 text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-600">More details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
    
            </div>
        </div>

        {{-- presentation of categories but before that use --}}
        
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-300">Browse Through Some Categories</h2>

            <div class="container p-6 pl-6 mx-6 my-4 bg-black bg-opacity-50 rounded-md cursor-pointer">
                <div class="flex flex-wrap justify-between">
                    <!-- Example Category Card -->
                    <div class="w-full p-2 sm:w-1/6">
                        <div class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Arts</h3>
                        </div>
                    </div>
                    <div class="w-full p-2 sm:w-1/6">
                        <div class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Gestion</h3>
                        </div>
                    </div>
                    <div class="w-full p-2 sm:w-1/6">
                        <div class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Tourisme</h3>
                        </div>
                    </div>
                    <div class="w-full p-2 sm:w-1/6">
                        <div class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
                            <h3 class="text-sm font-semibold">Elevage</h3>
                        </div>
                    </div>
                   
                    <div class="w-full p-2 sm:w-1/4">
                        <div class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-200 transition-colors hover:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            background-image: thumbnails('68bf3wTQfYYmrPP7oysIhXvkL5juMe1jC0pmgdF6.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
        }
    </style>
  
    <!-- Your existing content here -->
    
    {{-- home <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> --}}
        {{-- <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /> --}}
    {{-- </svg> --}}

</div>

</body>
</html>
