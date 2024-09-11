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
            background-color: #f9f9f9; /* Couleur de fond pour les lignes paires */
        }
        .alternating-bg:nth-child(odd) {
            background-color: #ffffff; /* Couleur de fond pour les lignes impaires */
        }
        .title-bg {
            background-color: #009688; /* Couleur de fond du titre */
            border-bottom: 3px solid #00796b; /* Bordure inférieure pour un effet de séparation */
        }
        .title-text {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3); /* Ombre portée pour le texte */
        }
        .title-bg:hover {
            background-color: #00796b; /* Couleur de fond du titre au survol */
        }
</style>

<body class="bg-gradient-to-r from-slate-600 to-slate-700 min-h-screen flex items-center justify-center py-12 px-4">
    
    <div class="w-full max-w-6xl bg-white rounded-lg shadow-lg overflow-hidden">
        <h1 class="text-center text-4xl font-extrabold  py-6 bg-teal-600 text-white">Book Options</h1>

        <div class="table-container p-4">
            <table class="w-full bg-white border border-gray-200 rounded-lg shadow-md divide-y divide-gray-300">
                <thead class="bg-teal-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Book Title</th>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Author Name</th>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Category</th>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Description</th>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Book Image</th>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Delete</th>
                        <th class="py-3 px-4 text-left text-lg font-semibold">Update</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($livre as $livre)
                    <tr class="hover:bg-gray-50 transition-colors duration-300">
                        <td class="py-4 px-4 alternating-bg">{{ $livre->title }}</td>
                        <td class="py-4 px-4">{{ $livre->author_name }}</td>
                        <td class="py-4 px-4">{{ $livre->category->name }}</td>
                        <td class="py-4 px-4">{{ $livre->description }}</td>
                        <td class="py-4 px-4 text-center">
                            <img class="h-24 w-24 object-cover rounded-lg border border-gray-300 transition-shadow duration-300 transform hover:scale-105" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}">
                        </td>
                        <td class="py-4 px-4 text-center">
                            <a class="bg-red-600 text-white w-36 h-12 font-semibold rounded-md shadow-md hover:bg-red-700 transition-colors duration-300 transition-shadow" href="{{ route('delete_book', $livre->id) }}">Delete</a>
                           
                        </td>
                        <td class="py-4 px-4 text-center">
                            <a class="bg-teal-600 text-white w-28 h-12 font-semibold rounded-md shadow-md hover:bg-teal-700 transition-colors duration-300 transition-shadow" href="{{ route('edit_book', $livre->id) }}">Update</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- hide message --}}

    <div>
        <a href="{{ route('adminpage') }}">Return</a>
    </div>

</body>

</html>