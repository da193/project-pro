<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title class="text-center text-rose-600">
    Edit category
</title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h2 class="fixed overflow-hidden w-full p-6 a text-2xl font-bold text-center text-white bg-gradient-to-r from-blue-500 to-purple-600 rounded-md shadow-md shadow-slate-950">
        Update Category
    </h2>
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-gray-100 to-gray-300">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md border border-gray-300">
            <form action="{{ route('update_cat', $livre->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="cat_name" class="block text-lg font-medium text-gray-700 mb-2">Category Name:</label>
                    <input type="text" name="cat_name" id="cat_name" value="{{ $livre->name }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <input type="submit" class="w-full py-2 px-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold rounded-lg shadow-md hover:from-blue-600 hover:to-purple-700 transition duration-300" value="Finish">
            </form>
        </div>
    </div>
    
</body>
</html>
