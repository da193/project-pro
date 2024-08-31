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
    <h1 class="flex text-center text-4xl items-center justify-center pt-20 text-green-900 font-bold">Add a Book</h1>
   
    <div>
        <table class="text-center m-auto mt-8 border-2 ">
            <div class="flex text-2xl font-bold p-5 text-center justify-center">
                <th class="text-xl bg-blue-700 text-white">Book Title</th>
                <th class="text-xl bg-blue-700 text-white">Author Name</th>
                <th class="text-xl bg-blue-700 text-white">category</th>
                <th class="text-xl bg-blue-700 text-white">Description</th>
                <th class="text-xl bg-blue-700 text-white">Book img</th>
            </div>
@foreach ($livre as $livre)
    

<tr>
    <td{{ $livre->title }}</td>
    <td>{{ $livre->author_name }}</td>
    <td>{{ $livre->category->name }}</td>
    <td{{ $livre->description }}</td>
    <td></td>
    <td>
        <img class="h-10 w-20" src="thumbnails/{{ $livre->book_img }}">
    </td>
</tr>
</table>
@endforeach
    </div>
</body> 
</html>