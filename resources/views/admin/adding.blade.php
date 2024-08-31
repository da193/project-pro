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
    <h1 class="flex text-center text-4xl items-center justify-center pt-32 text-green-900 font-bold">Add a Book</h1>
    cyckifhc
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Categories</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($categories as $category)
                <a href="{{ route('show_cat' . $category->id) }}" class="block p-4 bg-blue-200 rounded-lg shadow hover:bg-blue-300 transition">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>

</body>
</html>