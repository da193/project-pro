@extends('layouts.side-admin')

@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="flex-col w-full bg-gray-100 md:flex md:flex-row md:min-h-screen dark:bg-gray-900">


        <div class="flex-1">
            <header
                class="w-auto py-5 overflow-hidden text-center rounded-md shadow-md bg-gradient-to-r from-red-300 to-red-400 shadow-slate-900">
                <h1 class="text-2xl font-bold text-white">Ajouter un Livre</h1>
            </header>

            @if ($errors->any())
                <div class="mb-4">
                    <ul class="pl-5 text-red-600 list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="flex items-center justify-center min-h-screen ">

                <main class="flex items-center justify-center w-full max-w-lg p-4 mt-4">
                    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg shadow-slate-900">
                        <form action="{{ route('book.register') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="block mb-2 text-lg font-semibold text-gray-700">Titre
                                    :</label>
                                <input type="text" name="title" id="title"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                                @error('title')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="category" class="block mb-2 text-lg font-semibold text-gray-700">Catégorie
                                    :</label>
                                <select name="category_id" id="category"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="author" class="block mb-2 text-lg font-semibold text-gray-700">Auteur
                                    :</label>
                                <input list="authors" id="author" name="author_name"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                                <datalist id="authors">
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->name }}">
                                    @endforeach
                                </datalist>
                                @error('author')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="biography"
                                    class="block mb-2 text-lg font-semibold text-gray-700">Biographie :</label>
                                <input type="text" id="biography" name="biography"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                                @error('biography')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description"
                                    class="block mb-2 text-lg font-semibold text-gray-700">Description :</label>
                                <textarea name="description" id="description" cols="30" rows="5"
                                    class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                                @error('description')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="thumbnails" class="block mb-2 text-lg font-semibold text-gray-700">Image
                                    du Livre:</label>
                                <input type="file" name="book_img" id="thumbnails"
                                    class="w-full p-3 text-gray-700 border border-gray-300 rounded-md file:border-0 file:bg-purple-600 file:text-white file:rounded-md file:p-2 hover:file:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                @error('thumbnails')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="thumbnails" class="block mb-2 text-lg font-semibold text-gray-700">Contenu
                                    du livre :</label>
                                {{-- <input type="file" name="book_img" id="thumbnails" class="w-full p-3 text-gray-700 border border-gray-300 rounded-md file:border-0 file:bg-purple-600 file:text-white file:rounded-md file:p-2 hover:file:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500"> --}}
                                <input type="file" id="file_path" name="file_path"
                                    class="w-full p-2 border rounded" accept=".pdf,.epub,.txt" required>
                                @error('thumbnails')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit"
                                class="items-center h-10 py-2 text-white transition duration-150 ease-in-out bg-gray-700 rounded-md shadow-md w-14 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                Ajouter
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


</div>
</div>
@endsection
