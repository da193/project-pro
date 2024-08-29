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
<body class=" ">
    <header class="flex items-center justify-around gap-10 py-6 space-x-5 text-slate bg-gradient-to-r from-rose-100 to-teal-100 text-sky-800
    ">
   <a href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-800 size-9">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
            
        </svg>
    
    </a>
    <div class="flex items-center">
        
        <div class="relative hidden md:block">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            
          </div>
          <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Recherchez un livre">
        </div>
        
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
                        <a class="hover:text-blue-900" href="{{ route('show_book', 1) }}">Books</a>
                        <button id="" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto md:dark:hover:text-blue-500 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg>
                        </button>
                          <div>
                             
                          </div>
                    
                    </li>
                    
                    <li>
                        <a class="hover:text-blue-900" href="{{ route('category_loads') }}">Categories</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-900" href="#">Authors</a>
                    </li>

                    <li>
                        <a class="hover:text-blue-900" href="">Login</a>
                    </li>

                    <li>
                        <a class="hover:text-blue-900" href="{{ route('addbook') }}">add</a>
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
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[6%]')
        }
    </script>

