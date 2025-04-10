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

        
      </div>
        
       

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

    <div class="container mx-auto p-8 max-w-4xl">
        <h1 class="text-3xl font-bold mb-6">Books in {{ $category->name }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            
            @forelse($category->livres as $livre)
            <div class="p-4 bg-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-shadow transform hover:scale-105">
                <img class="h-10 w-20" src="thumbnails/{{ $livre->book_img }}">
                <h2 class="text-xl font-semibold mb-2">{{ $livre->title }}</h2>
                <p class="text-sm text-gray-600 mb-1">by {{ $livre->author_name }}</p>
                <p class="text-sm text-gray-600">{{ $livre->description }}</p>
            </div>
            @empty
                <p class="text-gray-500 col-span-full">No books found in this category.</p>
            @endforelse
        </div>
        <a href="{{ route('categories') }}" class="block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition-colors mt-6">
            Back to Categories
        </a>
    </div>
    
</body>
</html>