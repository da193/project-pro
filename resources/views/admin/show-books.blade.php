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

<style>
    .table-container {
        overflow-x: auto;
    }

    .table-container::-webkit-scrollbar {
        height: 8px;
    }

    .table-container::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    .table-container::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
    }

    .alternating-bg:nth-child(even) {
        background-color: #f9f9f9;
        /* Couleur de fond pour les lignes paires */
    }

    .alternating-bg:nth-child(odd) {
        background-color: #ffffff;
        /* Couleur de fond pour les lignes impaires */
    }

    .title-bg {
        background-color: #009688;
        /* Couleur de fond du titre */
        border-bottom: 3px solid #00796b;
        /* Bordure inférieure pour un effet de séparation */
    }

    .title-text {
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        /* Ombre portée pour le texte */
    }

    .title-bg:hover {
        background-color: #00796b;
        /* Couleur de fond du titre au survol */
    }
</style>

<body class="">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>


    <header
        class="fixed z-10 w-full py-5 mb-6 overflow-y-hidden text-2xl font-bold text-center text-white rounded-md shadow-md bg-gradient-to-r from-blue-500 to-purple-500 shadow-black">
        <h1 class="">Book Options</h1>
    </header>

    @if (session()->has('message'))
    @endif


    <div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gradient-to-r from-slate-600 to-slate-700">
        {{-- <div class="w-full max-w-6xl overflow-hidden bg-white rounded-lg shadow-lg"> --}}
        <div class="items-center justify-center p-4 px-4 py-12 overflow-hidden rounded-lg shadow-lg">
            <table class="w-full bg-white border border-gray-200 divide-y divide-gray-300 rounded-lg shadow-md">
                <thead class="text-white bg-gradient-to-r from-orange-900 to-orange-900">
                    <tr>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Book Title</th>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Author Name</th>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Category</th>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Description</th>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Book Image</th>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Delete</th>
                        <th class="px-4 py-3 text-lg font-semibold text-left">Update</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($livre as $livre)
                        <tr class="transition-colors duration-300 hover:bg-gray-50">
                            <td class="px-4 py-4">{{ $livre->title }}</td>
                            <td class="px-4 py-4">{{ $livre->author_name }}</td>
                            <td class="px-4 py-4">{{ $livre->category->name }}</td>
                            <td class="px-4 py-4">{{ $livre->description }}</td>
                            <td class="px-4 py-4 text-center">
                                <img class="object-cover w-24 h-24 transition-transform transform border border-gray-300 rounded-lg shadow-sm hover:scale-105"
                                    src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}">
                            </td>
                            <td x-data="{ showModal: true }" class="px-4 py-4 text-center">
                                <a @click="showModal = true"
                                    class="w-full px-4 py-2 text-sm font-medium text-white bg-red-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-red-500"
                                    href="{{ route('delete_book', $livre->id) }}">Delete</a>
                               
                            </td>
                            <td class="px-4 py-4 text-center">
                                <a class="w-full px-4 py-2 text-sm font-medium text-white bg-gradient-to-t from-green-600 to-green-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-red-500"
                                    href="{{ route('edit_book', $livre->id) }}">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="py-4 text-center">
                <a class="flex items-center justify-center py-2 text-lg font-semibold text-white align-middle transition duration-150 ease-in-out rounded-md shadow-md bg-slate-800 w-28 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 shadow-slate-900 hover:text-teal-800"
                    href="{{ route('adminpage') }}">Return</a>
            </div>
        </div>
    </div>
    </div>


</body>

</html>
