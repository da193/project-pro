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
    <header class="flex items-center justify-around gap-10 py-6 space-x-5 text-slate bg-gradient-to-r from-rose-100 to-teal-100 text-sky-800 ">
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
                        <a class="hover:text-blue-900" href="">Home</a>
                    </li>
                    <li class="flex justify-between">
                        <a class="hover:text-blue-900" href="{{ route('explore') }}">Explore</a>
                       
                    
                    </li>
                    
                    <li>
                        <a class="hover:text-blue-900" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-900" href="#">Item Details</a>
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

    <h2 class="mb-4 text-2xl font-bold text-center text-gray-300 py-6">Books currently available</h2>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 pt-5">
        @foreach ($livre as $livre)
            <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md lg:flex-row">
                <img class="object-cover w-full h-48 lg:w-1/3" src="thumbnails/{{ $livre->book_img }}" alt="{{ $livre->title }}"> 

                <div class="flex-1 p-4">
                    <h4 class="text-xl font-semibold text-gray-800">{{ $livre->title }}</h4>
                    <span class="text-gray-600">{{ $livre->author_name }}</span>

                    <div class="mt-2">
                        <p class="text-gray-700">{{ $livre->description }}</p>
                    </div>
                    
                    <div class="mt-4">
                        <a href="#" class="inline-block px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">More details</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

    
</body>
</html>