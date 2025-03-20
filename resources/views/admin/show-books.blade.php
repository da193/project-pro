@extends('layouts.side-admin')

@section('content')

    <body class="">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        {{-- <div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-900"> --}}

            <div class="flex-1">


                <header class="fixed z-10 w-full py-6 text-3xl font-bold text-center text-slate-900 bg-yellow-400 shadow-lg">
                    <h1 class="flex items-center justify-center gap-3">
                        <svg class="w-9 h-9 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Options de Livres
                    </h1>
                </header>
                
                <div class="container mx-auto mt-24 px-4 sm:px-6 lg:px-8">
                    <div class="w-full bg-white rounded-2xl shadow-xl overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full border-separate border-spacing-0">
                                <thead class="bg-slate-700 text-yellow-300">
                                    <tr>
                                        <th class="px-4 py-4 text-left text-lg font-semibold sm:px-6">Titre</th>
                                        <th class="px-4 py-4 text-left text-lg font-semibold sm:px-6">Auteur</th>
                                        <th class="px-4 py-4 text-left text-lg font-semibold sm:px-6 hidden md:table-cell">Catégorie</th>
                                        <th class="px-4 py-4 text-left text-lg font-semibold sm:px-6 hidden lg:table-cell">Description</th>
                                        <th class="px-4 py-4 text-center text-lg font-semibold sm:px-6">Image</th>
                                        <th class="px-4 py-4 text-center text-lg font-semibold sm:px-6">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-700">
                                    @foreach ($livre as $livre)
                                        <tr class="transition-all duration-300 hover:bg-yellow-50">
                                            <td class="px-4 py-4 font-medium sm:px-6">{{ $livre->title }}</td>
                                            <td class="px-4 py-4 sm:px-6">{{ $livre->author_name }}</td>
                                            <td class="px-4 py-4 sm:px-6 hidden md:table-cell">{{ $livre->category->name }}</td>
                                            <td class="px-4 py-4 sm:px-6 max-w-md truncate hidden lg:table-cell">{{ $livre->description }}</td>
                                            <td class="px-4 py-4 sm:px-6 text-center">
                                                <img class="object-cover w-16 h-16 sm:w-20 sm:h-20 rounded-lg shadow-md transition-transform duration-300 hover:scale-110" 
                                                     src="/storage/{{ $livre->book_img }}" 
                                                     alt="{{ $livre->title }}">
                                            </td>
                                            <td class="px-4 py-4 sm:px-6 text-center space-x-2 sm:space-x-3">
                                                <a href="{{ route('edit_book', $livre->id) }}"
                                                   class="inline-flex items-center px-3 py-2 sm:px-4 sm:py-2 text-sm font-medium text-slate-800 bg-yellow-400 rounded-lg shadow-md hover:bg-yellow-500 hover:text-slate-900 transition-all duration-300">
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                    </svg>
                                                    Modifier
                                                </a>
                                                <a x-data="{ showModal: false }" 
                                                   @click="showModal = true"
                                                   href="{{ route('delete_book', $livre->id) }}"
                                                   class="inline-flex items-center px-3 py-2 sm:px-4 sm:py-2 text-sm font-medium text-white bg-slate-600 rounded-lg shadow-md hover:bg-slate-700 transition-all duration-300">
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4M9 7h6"></path>
                                                    </svg>
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
