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
<div class="flex mt-44  items-center flex-col gap-8 sm:mx-auto sm:w-full">
    <form action="{{ route('book.register') }}" class="bg-red-800 blok mt-4 w-4/12 shadow-sm rounded-sm h-4/5"
    method="post" enctype="multipart/form-data">


    @csrf
    <label for="title"  class="block  mt-2 pl-5 pt-4">Titre :</label>
    
    <input type="text" name="title" class=" rounded-md h-10 mt-4 w-96 ml-16 ">
    
@error('title')
{{ $message }}
@enderror

<label for="category" class="block mt-2 pl-5 pt-4" >Categorie :</label>
<select name="category_id" id="" class="ml-14">
    @foreach ($categories as $category )
        
    <option value={{ $category->id }}>{{ $category->name }}</option>
    @endforeach
   
</select>
{{-- <input type="text" name="category" class="block  rounded-md h-10 mt-4 w-96 ml-14"> --}}

@error('category')
    {{ $message }}
@enderror

<label for="author" class="block mt-2 pl-5 pt-4">Auteur :</label>

<input type="text" name="author" class="block  rounded-md h-10 mt-4 w-96 ml-14" >

<label for="biography" class="block mt-2 pl-5 pt-4">Biographie :</label>

<input type="text" name="biography" class="block  rounded-md h-10 mt-4 w-96 ml-14" >
@error('author')
    {{ $message }}
@enderror

<label for="description" class="block mt-2 pl-5 pt-4">Description :</label>

@error('description')
    {{ $message }}
@enderror
        <input type="text" name="description" class="block  rounded-md h-10 mt-4 w-96 ml-14" >

        <label for="vignette" :value="$livre->thumbnail" class="block mt-2 pl-5 pt-4">image :</label>

        <input type="file" name="thumbnail" type="file" placeholder="ajouter une" class="block  rounded-md h-10 mt-4 w-96 ml-14" >
       
        
@error('thumbnail')
{{ $message }}
@enderror

        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-44 mt-10">Ajouter</button>
    
    </form>

        
        {{-- <button  class="rounded-md bg-teal-600 block mt-10 mb-8 items-center h-8 w-32 justify-center text-center ml-44">Ajouter</button> --}}
    </form>
</div>
</body>
</html>
