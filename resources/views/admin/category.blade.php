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

<body class="bg-gray-100 font-sans">

    <header class="bg-green-900 text-white py-6">
        <h1 class="text-center text-3xl font-semibold shadow-sm first-line:">Add a Category</h1>
    </header>

    <main class="container mx-auto p-6">
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8 items-end">
            <form action="{{ route('add_category') }}" method="POST" class="space-y-6 items-center justify-center inline-block block">
                @csrf
                <div>
                    <label class="block text-gray-700 text-lg font-medium mb-2" for="category">Category Name</label>
                    <input id="category" name="category" type="text" required
                        class="w-auto px-4 py-2 border border-gray-300 rounded-lg bg-blue-50 focus:outline-none focus:ring-2 focus:ring-green-500 transition-transform">
                </div>
                <input type="submit" value="Add Category"
                    class="w-auto px-4 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-green-700 transition-bg">
            </form>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-center">
            <table class=" table-auto">
                <thead class="bg-green-100 text-green-800 flex justify-between">
                    <tr>
                        <th class="px-4 py-2 text-left">Category Name</th>
                        <th class="px-6 py-2 text-center ml-20 items-center">Actions</th>
                        {{-- <th class="px-4 py-2 text-center">Update</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livre as $livre)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $livre->name }}</td>
                        <td class=" py-2 text-center">
                            <a class="bg-red-600 text-white px-4 py-1 rounded-lg cursor-pointer hover:bg-red-700 transition-bg" href="{{ route('cat_delete', $livre->id) }}">Delete</a>
                        </td>
                        <td class=" py-2 text-center">
                            <button class="bg-blue-600 text-white px-4 py-1 rounded-lg cursor-pointer hover:bg-blue-700 transition-bg">Update</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a class="bg-orange-500" href="{{ route('adminpage') }}">Return</a>
    </main>

    
    
</body>
</html>
