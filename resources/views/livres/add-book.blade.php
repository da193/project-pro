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
    <style>
        .readonly {
            background-color: #c0c5cae7;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <h1 class="flex text-center text-4xl items-center justify-center pt-20 text-green-900 font-bold">Add a Book</h1>

    <div class="flex flex-col items-center gap-8 mt-12 sm:mx-auto sm:w-full">
        <form action="{{ route('book.register') }}" class="w-4/12 mt-4 bg-red-800 rounded-sm shadow-sm h-4/5" method="post" enctype="multipart/form-data">

            @csrf
            <div>

            
            <label for="title" class="inline-block pt-4 pl-5 mt-2 w-48">Book Title :</label>
            <input type="text" name="title" class="h-10 ml-16 rounded-md w-96">
            @error('title')
                {{ $message }}
            @enderror

            <label for="category" class=" inline-block pt-4 pl-5 mt-2">Category :</label>
            <select name="category_id" class="h-10 ml-16 rounded-md w-96">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
                {{ $message }}
            @enderror

            <label for="author" class="inline-block pt-4 pl-5 mt-2">Author name :</label>
            <input list="authors" id="author" name="author_name" class=" h-10 mt-4 rounded-md w-96 ml-14">

            <datalist id="authors">
                @foreach($authors as $author)
                    <option value="{{ $author->name }}">
                @endforeach
            </datalist>

            <label for="biography" class="inline-block pt-4 pl-5 mt-2">Biography :</label>
            <input type="text" id="biography" name="biography" class="block h-10 mt-4 rounded-md w-96 ml-14">

            @error('author')
                {{ $message }}
            @enderror

            <label for="description" class="inline-block pt-4 pl-5 mt-2">Description :</label>
            @error('description')
                {{ $message }}
            @enderror
            <input type="text" name="description" class="block h-10 mt-4 rounded-md w-96 ml-14">
             
            {{-- name="thumbnail" type="file" label="Vignette" :value="$post->thumbnail"/> --}}

            <label for="vignette" class="inline-block pt-4 pl-5 mt-2">Book Image :</label>
            <input type="file" name="thumbnails" class="block h-10 mt-4 rounded-md w-96 ml-14">
            @error('thumbnails')
                {{ $message }}
            @enderror

            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-44 mt-10">Add</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const authorInput = document.getElementById('author');
            const biographyInput = document.getElementById('biography');
            const authorsList = @json($authors->pluck('name'));

            authorInput.addEventListener('input', function() {
                const authorName = authorInput.value.trim();
                
                if (authorsList.includes(authorName)) {
                    biographyInput.value = ""; // Clear the biography field
                    biographyInput.setAttribute('readonly', true);
                    biographyInput.classList.add('readonly');
                } else {
                    biographyInput.removeAttribute('readonly');
                    biographyInput.classList.remove('readonly');
                }
            });
        });
    </script>
</body>
</html>
