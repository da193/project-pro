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
            @apply max-w-4xl mx-auto bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105;
        }
        .form-input {
            @apply block h-12 mt-2 px-4 rounded-lg w-full border border-gray-300 dark:border-gray-700 shadow-sm focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300;
        }
        .form-label {
            @apply block text-lg font-semibold text-gray-800 dark:text-gray-200;
        }
        .form-button {
            @apply bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-400;
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
<body class="bg-gray-100 dark:bg-gray-900">
    <header class="text-center py-10">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200">Add a Book</h1>
    </header>

    <main class="flex justify-center items-center min-h-screen">
        <div class="form-container">
            <form action="{{ route('book.register') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="form-label">Book Title :</label>
                    <input type="text" name="title" id="title" class="form-input">
                    @error('title')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category" class="form-label">Category :</label>
                    <select name="category_id" id="category" class="form-input">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="author" class="form-label">Author Name :</label>
                    <input list="authors" id="author" name="author_name" class="form-input">
                    <datalist id="authors">
                        @foreach($authors as $author)
                            <option value="{{ $author->name }}">
                        @endforeach
                    </datalist>
                    @error('author')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="biography" class="form-label">Biography :</label>
                    <input type="text" id="biography" name="biography" class="form-input">
                    @error('biography')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <label for="description">Description </label>
               

                <div class="mb-6">
                    <label for="description" class="form-label">Description :</label>
                    <textarea name="description" id="description" cols="30" rows="10">
                        
                    </textarea>
                    @error('description')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnails" class="form-label">Book Image :</label>
                    <input type="file" name="book_img" id="thumbnails" class="form-input">
                    @error('thumbnails')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="form-button">Add</button>
            </form>
        </div>
    </main>

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
