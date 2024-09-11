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
    <header class="flex items-center justify-around gap-10 py-5 space-x-5 text-slate bg-gradient-to-r from-rose-100 to-teal-100 text-sky-800 ">
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
                    <li class="flex justify-between">
                        <a class="hover:text-blue-900" href="{{ route('explore') }}">Explore</a>
                        
                    
                    </li>
                    
                    <li>
                        <a class="hover:text-blue-900" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-900" href="{{ route('login') }}">Item Details</a>
                    </li>

                    <li>
                        <a class="hover:text-blue-900" href="{{ route('register') }}">register</a>
                    </li>

                    <li>
                        <a class="hover:text-blue-900" href="">Login</a>
                    </li>
                    
                </ul>
               
            </div>
            <div class="flex items-center gap-6">
                <ion-icon onclick="onToggleMenu(this)" 
                          name="menu" class="text-3xl text-white cursor-pointer md:hidden">
                  </ion-icon>
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
     <div class="relative flex items-center justify-start h-screen px-4 bg-custom">
        
         <!-- Overlay for better text visibility -->
         <div class="absolute inset-0 mx-5 my-4 bg-opacity-50 rounded-md">
             
        </div>
        
        <div class="relative z-10 flex items-center px-8 w-ful py-14 mx-aut max-w-7xl">
            <div class="w-full md:w-1/2 lg:w-2/5">
                <h2 class="mb-5 text-4xl font-bold md:text-4xl text-amber-400">Knowledge is Power</h2>
                <p class="mb-6 text-sm text-white md:text-base">Discover the best books to expand your mind and enhance your understanding of the world.</p>
                <a href="your-link-here.html" class="inline-block px-6 py-3 text-lg font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Explore Top Books</a>
            </div>
        </div>
        <img class="object-cover mr-16 w-80 h-52 lg:w-4/3" src="/storage/img/book.png" alt=""> 


    </div>

    <!-- Your existing content here -->
    

    <div class="container p-6 mx-5 my-4 bg-black bg-opacity-50 rounded-md cursor-pointer ">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-300">Browse Through Some Categories</h2>
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
           
            <div class="w-full p-2 sm:w-1/6">
                <div class="flex items-center justify-center mx-auto text-center text-gray-900 bg-blue-400 rounded-full w-14 h-14 category-card">
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
                <input type="submit" value="search" class="w-auto p-2 ml-5 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 ">
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
</body>
</html>
