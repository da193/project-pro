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

    {{-- show --}}
    <h1 clas="text-3xl font-bold mb-6">AllCategories</h1>
    
    <div class="container mx-auto p-8">

        <div  class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-3/4  h-4/4 text-center justify-center ">
            @foreach($categories as $category)
                <a href="{{ url('/category/' . $category->id) }}" class="block p-4 bg-blue-200 rounded-lg shadow hover:bg-blue-300 transition">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>

    
</body>
</html>