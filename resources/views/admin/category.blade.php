<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('app.name') }}</title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stydxlesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<style>
      .transition-transform {
            transition: transform 0.3s ease;
        }
        .transition-transform:hover {
            transform: scale(1.05);
        }
        .transition-bg {
            transition: background-color 0.3s ease;
        }
        .transition-bg:hover {
            background-color: #2d6a4f;
        }
   </style>

<body class="font-sans bg-gray-100">

    <header class="fixed overflow-hidden w-full p-6 a text-2xl font-bold text-center text-white bg-gradient-to-r from-blue-500 to-purple-600 rounded-md shadow-md shadow-slate-950">
        <h1 class="text-3xl font-semibold text-center shadow-sm first-line:">Add a Category</h1>
    </header>

    <main class="container p-6 mx-auto ">
        <div class="items-end p-6 mb-8 bg-white rounded-lg shadow-lg mt-24">
            <form action="{{ route('add_category') }}" method="POST" class="items-center justify-center block inline-block space-y-6">
                @csrf
                <div>
                    <label class="block mb-2 text-lg font-medium text-gray-700" for="category">Category Name</label>
                    <input id="category" name="category" type="text" required
                        class="w-auto px-4 py-2 transition-transform border border-gray-300 rounded-lg bg-blue-50 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <input type="submit" value="Add Category"
                    class="w-auto px-4 py-2 text-white bg-green-600 rounded-lg cursor-pointer hover:bg-green-700 transition-bg">
            </form>
        </div>

        <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-lg">
            <table class="table-auto ">


                <thead class="flex items-center justify-between text-green-800 bg-green-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Category Name</th>
                        <th class=" flex justify-between items-center px-6 py-2 ml-20 text-center">Actions</th>
                        {{-- <th class="px-4 py-2 text-center">Update</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livre as $livre)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $livre->name }}</td>
                        <td class="py-2 text-center ">
                            <a class="px-4 py-1 text-white bg-red-600 rounded-lg cursor-pointer hover:bg-red-700 transition-bg" href="{{ route('cat_delete', $livre->id) }}">Delete</a>
                        </td>
                        <td class="py-2 text-center ">
                            <a class="px-4 py-1 w-20 h-8 text-white bg-blue-600 rounded-lg cursor-pointer hover:bg-gradient-to-t from-green-500 to-emerald-300 transition-bg" href="{{ route('edit_cat',$livre->id) }}">update</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a class="flex items-center justify-center h-10 text-center bg-orange-500 rounded-md w-14" href="{{ route('adminpage') }}">Return</a>
    </main>

    
    
</body>
</html>
