<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('app.name') }}></title>
<link rel="stylesheet" href="https://heroicons.com">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-blue-500 ">

    <h1>{{ $livre->title }}</h1>
    <p>{{ $livre->description }}</p>
    <img src="{{ asset('storage/app/public/Books/Encyclopédie_des_sciences_médicales_(IA_b28746922_0029).pdf' ) }}" alt="Cover Image">
</body>
</html>

    
    