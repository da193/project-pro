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
 
    </header>

    <h2 class="mb-4 text-2xl font-bold text-center text-gray-300 py-6">Books currently available</h2>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 pt-5">
        @foreach ($livre as $livre)
        <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-md lg:flex-row shadow-slate-700">
            <img class="object-cover w-2/4 pt-2 pl-3 rounded-sm h-36 lg:w-1/3" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}"> 

            <div class="flex-1 p-4">
                <h4 class="text-xl font-semibold text-gray-800">{{ $livre->title }}</h4>
                <h5>{{ $livre->category->name }}</h5>
                <span class="text-sm text-gray-700">{{ $livre->author_name }}</span>

                <div class="mt-2">
                    <p class="text-xs text-gray-700">{{ $livre->description }}</p>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('details',['id' =>$livre->id]) }}" class="inline-block px-4 py-2 text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-600">More details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

    
</body>
</html>