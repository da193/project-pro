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
    <style>
        .readonly {
            background-color: #c0c5cae7;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
      <div>
        <form method="POST" action="">
            <label for="firstname">Nom :</label>
            <input type="text" name="name" id="name" autocomplete="off">
            <label for="lastname">Prenom :</label>
            <input type="text" name="lastname" id="lastname" autocomplete="off">
            <label for="date-and-place-of-birth">Date et Lieu de Naissance :</label>
      
            <input type="date" name="date-and-place-of-birth" id="date-and-place-of-birth" autocomplete="off">
      
            <input type="text" name="place of birth" id="lastname" autocomplete="off">
            <label for="address"> Addresse:</label>
            <input type="text" name="address" id="address" autocomplete="off">
            
            
            <label for="contact">Contact :</label>
            <input type="text" name="contact" id="contact" autocomplete="off">
            
            
            <label for="email">E-MAIL:</label>
            <input type="text" name="contact" id="contact" autocomplete="off" placeholder=" nom@gmail.com">
            
            
            <label for="telephone">Téléphone :</label>
            <input type="text" name="contact" id="contact" autocomplete="off" placeholder=" nom@gmail.com">
            
            
            <label for="cni-of-parent">CNI Parent :</label>
            <input type="text" name="cni-of-parent" id="cni-of-parent" autocomplete="off">
            <br>
            <br>
            <label for="sex">Sexe :</label>
            <input type="radio" name="sex" value="Masculin" id="sex" autocomplete="off">Masculin
          
            <input type="radio" name="sex" value="Féminin" id="sex" autocomplete="off">Féminin
            
            <label for="School-level"> Niveau Scolaire:</label>
           
            <input type="checkbox" name=" BEPC" value="BEPC" autocomplete="off">
            <label for="BEPC">BEPC</label>
           
            <input type="checkbox" name=" PROBATOIRE" value="PROBATOIRE" autocomplete="off">
            <label for="Probatory">Probatoire</label>
            
            <input type="checkbox" name="BAC" value="BAC" autocomplete="off">
            <label for="bac">BAC</label>
            
            <input type="checkbox" name="AUTRES" value="AUTRES" autocomplete="off">
            <label for="bac">AUTRES</label>
            
             
     </form>

      </div>
       <button >Inscription</button>

</body>
</html>