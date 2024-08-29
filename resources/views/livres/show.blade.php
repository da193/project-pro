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
<body class="">
    <h1 class="text-center pt-10 text
    text-sky-900">Tout les livres a lire</h1>
   
    @foreach ($livre as $livre)
        
    <div class="ml-4 flex gap-4">
        <div>
            <img class="h-44 w-40 py-4" src="thumbnails/{{ $livre->book_img }}">
        </div>

    <div class="  block gap-4 pt-4 ml-4">
         <div class="flex ">
            {{ $livre->title }}</div>
            <div>{{ $livre->category->name }}</div>
         {{-- <div>{{ $livre->author_name }}</div> --}}
        <div>{{ $livre->description }}</div> 

        
        
    </div>
    </div>
    @endforeach
</body> 
</html>

    
    