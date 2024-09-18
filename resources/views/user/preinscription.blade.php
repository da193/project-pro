<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('app.name') }} </title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- <header clss=" justify-evenly flex items-center   shadow-black shadow-md fixed  w-full "> --}}
</header>
<body class="">
    
    <img class="object-cover ml-10  max-w-sm h-20 flex items-center justify-center pt-2 text-center align-middle  " src="/storage/img/logo.jpg " alt="">
    <h1 class="flex text-center align-middle items-center font-bold uppercase justify-center text-3xl ">Pre-inscription File</h1>

    <div class="pt-24">

  


    <form action="{{ route('dashboard') }}" method="POST" class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg ">
        @csrf
        <div class="mb-4">
            <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
            <input type="text" name="name" id="name" autocomplete="off" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Prénom :</label>
            <input type="text" name="lastname" id="lastname" autocomplete="off" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="date-and-place-of-birth" class="block text-gray-700 text-sm font-bold mb-2">Date et Lieu de Naissance :</label>
            <input type="date" name="date-and-place-of-birth" id="date-and-place-of-birth" autocomplete="off" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="text" name="place of birth" id="place-of-birth" autocomplete="off" placeholder="Lieu de Naissance" class="w-full mt-2 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Adresse :</label>
            <input type="text" name="address" id="address" autocomplete="off" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="contact" class="block text-gray-700 text-sm font-bold mb-2">Contacts des parents:</label>
            <input type="text" name="contact" id="contact" autocomplete="off" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-MAIL :</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="nom@gmail.com" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
        <div class="mb-4">
            <label for="telephone" class="block text-gray-700 text-sm font-bold mb-2">Téléphone :</label>
            <input type="text" name="telephone" id="telephone" autocomplete="off" placeholder="Nom +237 _ __ __ __ __" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    
    
        <fieldset class="mb-4">
            <legend class="block text-gray-700 text-sm font-bold mb-2">Sexe :</legend>
            <div class="flex items-center mb-2">
                <input type="radio" name="sex" value="Masculin" id="sex-masculin" class="form-radio text-blue-600 focus:ring-blue-500">
                <label for="sex-masculin" class="ml-2 text-gray-700 text-sm">Masculin</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="sex" value="Féminin" id="sex-feminin" class="form-radio text-blue-600 focus:ring-blue-500">
                <label for="sex-feminin" class="ml-2 text-gray-700 text-sm">Féminin</label>
            </div>
        </fieldset>
    
        <fieldset class="mb-4">
            <legend class="block text-gray-700 text-sm font-bold mb-2">Niveau Scolaire :</legend>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="BEPC" value="BEPC" id="bepec" class="form-checkbox text-blue-600 focus:ring-blue-500">
                <label for="bepec" class="ml-2 text-gray-700 text-sm">BEPC</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="PROBATOIRE" value="PROBATOIRE" id="probatoire" class="form-checkbox text-blue-600 focus:ring-blue-500">
                <label for="probatoire" class="ml-2 text-gray-700 text-sm">Probatoire</label>
            </div>
            <div class="flex items-center mb-2">
                <input type="checkbox" name="BAC" value="BAC" id="bac" class="form-checkbox text-blue-600 focus:ring-blue-500">
                <label for="bac" class="ml-2 text-gray-700 text-sm">BAC</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="AUTRES" value="AUTRES" id="autres" class="form-checkbox text-blue-600 focus:ring-blue-500">
                <label for="autres" class="ml-2 text-gray-700 text-sm">AUTRES</label>
            </div>
        </fieldset>
    
        <div class="mt-6 items-center justify-center flex">
            <button type="submit" class="w-auto bg-blue-500 text-white py-2 px-4 rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Envoyer</button>
        </div>
    </form>
   
    
</div>
</body>
</html>