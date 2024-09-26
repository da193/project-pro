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
   

    
    {{-- details --}}

    <div class="container mx-auto text-center">
        <h2 class="mb-4 text-2xl font-bold text-center text-gray-300 py-6">Details du Livre</h2>

    </div>
</header>
<main class="justify-center items-center container  mt-8 p-4 bg-white ml-4 mr-4 w-4/5 shadow-md rounded-lg">
    <img class="object-cover w-full h-48 lg:w-1/3" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}"> 

    <h2 class="text-2xl font-semibold mb-2">{{ $livre->title }}</h2>
    <p class="text-gray-700 mb-2"><strong>Auteur :</strong> {{ $livre->author_name }}</p>
    <p class="text-gray-700 mb-2"><strong>Categorie :</strong> {{ $livre->category->name }}</p>
    <p class="text-gray-700 mb-4"><strong>Description :</strong> {{ $livre->description }}</p>
   

    <a href="{{ route('livres.read', $livre->id) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded">Lire le livre</a>
</main>

    <button class=" flex container mx-auto text-center w-52 items-center justify-center rounded-md  bg-emerald-700 mt-8 h-12">
        <a href="{{ route('adminpage') }}" class="text-blue-500 ">Retour à la page principale</a>
    </button>

</body>
</html>