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
        .form-container {
            @apply max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105;
        }
        .form-input {
            @apply block h-12 mt-2 px-4 rounded-lg w-full border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500
        }
        .form-label {
            @apply block text-lg font-semibold text-gray-800
        }
        .form-button {
            @apply bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500
        }
        .form-button:disabled {
            @apply bg-gray-400 cursor-not-allowed;
        }
        .error-message {
            @apply text-red-500 text-sm mt-1;
        }
        .readonly {
            @apply bg-gray-200 cursor-not-allowed;
        }
    </style>
</head>
<body class="f ">
    <header class="w-auto py-5 overflow-hidden text-center rounded-md shadow-md bg-gradient-to-r from-blue-400 via-purple-500 shadow-slate-900">
        <h1 class="text-2xl font-bold text-gray-800">Add a Book</h1>
    </header>

    <div class="flex items-center justify-center min-h-screen ">
        
    <main class="flex items-center justify-center w-full max-w-lg p-4 mt-4">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg shadow-slate-900">
            <form  action="{{ route('book.register') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block mb-2 text-lg font-semibold text-gray-700">Book Title :</label>
                    <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('title')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="block mb-2 text-lg font-semibold text-gray-700">Category :</label>
                    <select name="category_id" id="category" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="author" class="block mb-2 text-lg font-semibold text-gray-700">Author Name :</label>
                    <input list="authors" id="author" name="author_name" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <datalist id="authors">
                        @foreach($authors as $author)
                            <option value="{{ $author->name }}">
                        @endforeach
                    </datalist>
                    @error('author')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="biography" class="block mb-2 text-lg font-semibold text-gray-700">Biography :</label>
                    <input type="text" id="biography" name="biography" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('biography')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block mb-2 text-lg font-semibold text-gray-700">Description :</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                    @error('description')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="thumbnails" class="block mb-2 text-lg font-semibold text-gray-700">Book Image :</label>
                    <input type="file" name="book_img" id="thumbnails" class="w-full p-3 text-gray-700 border border-gray-300 rounded-md file:border-0 file:bg-purple-600 file:text-white file:rounded-md file:p-2 hover:file:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    @error('thumbnails')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="items-center h-10 py-2 text-white transition duration-150 ease-in-out bg-gray-700 rounded-md shadow-md  w-14 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    Add
                </button>
            </form>
        </div>
    </main>
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
                    biographyInput.classList.add('bg-gray-200', 'cursor-not-allowed');
                } else {
                    biographyInput.removeAttribute('readonly');
                    biographyInput.classList.remove('bg-gray-200', 'cursor-not-allowed');
                }
            });
        });
    </script>
</body>
</html>
