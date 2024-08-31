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
<body class=" ">

       <div class="">
              @if (session()-> has('message'))
              <div class="bg-green-600">

                     {{ session()->get('message') }} 
                  <button type="button" class="close" >X</button>      
              </div>
              @endif
       </div>

       <h1 class="flex text-center text-4xl items-center justify-center pt-10 text-green-900 font-bold">Add a category</h1>

       <div class=" flex align-center m-auto pt-8 justify-center">
       <form action="{{ route('add_category') }}" method="Post">
        @csrf

        <label class="px-2" for="category">Categoory Name</label>
        <input class="bg-blue-300 px-2 h-8 w-auto rounded-md" type="text" name="category" required>
        
        <input class=" rounded-md ml-4 h-9 w-36 mt-10 bg-emerald-900" type="submit" value="Add a category">
       </form>

        <div>
        </div>
       </div>
</body>
</html>
