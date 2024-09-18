<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title class="text-center text-rose-600">
    IntelliBiblio
</title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    
    <body class="">
        <header>
            
            <h1 class="py-5 mb-6 text-2xl font-bold text-center text-white bg-gradient-to-r from-blue-500 to-purple-500 shadow-black shadow-md fixed w-full overflow-y-hidden z-10 rounded-md">Update Book</h1>
        </header>
        
 <div class="flex items-center justify-center min-h-screen bg-blue-200 ">
    
 
        <div class="w-full max-w-lg p-8 mx-4 rounded-lg  bg-slate-500 shadow-black  mt-24">
    
            <form class="text-black " action="{{ route('update_book', $livre->id) }}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="mb-4">
                    <label for="title" class="block mb-2 text-lg font-semibold text-gray-700">Book Title:</label>
                    <input type="text" name="title" value="{{ $livre->title }}" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 ">
                </div>
    
                <div class="mb-4">
                    <label for="author_name" class="block mb-2 text-lg font-semibold text-gray-700">Author Name:</label>
                    <input type="text" name="author_name" value="{{ $livre->author_name }}" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
    
                <div class="mb-4">
                    <label for="category" class="block mb-2 text-lg font-semibold text-gray-700">Category:</label>
                    <select name="cat_name" id="cat_name" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="{{ $livre->category_id }}" selected>{{ $livre->category->name }}</option>
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
    
                <div class="mb-4">
                    <label for="description" class="block mb-2 text-lg font-semibold text-gray-700">Description:</label>
                    <textarea name="description" id="" cols="30" rows="5" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">{{ $livre->description }}</textarea>
                </div>
    
                <div class="mb-4">
                    <label for="" class="block mb-2 text-lg font-semibold text-gray-700">Current Book Image:</label>
                    <img class="object-cover w-full h-48 rounded-md shadow-md" src="/storage/{{ $livre->book_img }}" alt="{{ $livre->title }}">
                </div>
    
                <div class="mb-4">
                    <label for="book_img" class="block mb-2 text-lg font-semibold text-gray-700">Change Book Image:</label>
                    <input type="file" name="book_img" class="w-full p-3 text-gray-700 border border-gray-300 rounded-md file:border-0 file:bg-slate-400 file:text-white file:rounded-md file:p-2 hover:file:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
    
                <div>
                    <button type="submit" class="py-2 text-white transition duration-150 ease-in-out rounded-md shadow-md bg-slate-800 w-28 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 justify-center items-center shadow-slate-900 flex">
                        Update Book
                    </button>
                </div>

            </form>
        </div>
    </div>
    </body>
</html>