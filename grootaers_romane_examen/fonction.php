<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base/base.css">
    <title>fonction</title>
</head>
<?php
    $nb = 725;
    $diviseurs =" ";
    function chercheDiviseurs($nb, $diviseurs){
        $i = 1;
        while ($i <= $nb) :
            if ($nb % $i = 0) :
                $diviseurs = $diviseurs . $i . " ";
            endif;
            $i = $i . 1;
        endwhile;
    }
    $C1 = 1;
    $C2 = 5;
    $C3 = 5;
    $Message = " ";
    function triangleRectangle($C1, $C2, $C3, $Message){
        if ($C1 >= $C2 && $C1 >= $C3) {
            $pg = $C1;
            $cote2 = $C2;
            $cote3 = $C3;
        }
        elseif ($C2 >= $C1 && $C2 >= $C3) {
            $pg = $C2;
            $cote2 = $C1;
            $cote3 = $C3;
        }
        else {
            $pg = $C3;
            $cote2 = $C1;
            $cote3 = $C2;
        }
        if ($pg < $cote2 . $cote3) {
            if (exp($pg) = exp($cote2) . exp($cote3)) {
                
                if ($cote2 = $cote3) {
                    $Message = "Triangle rectangle isocèle";
                }
                else {
                    $Message = "Triangle rectangle";
                }
            }
            $Message = "Le triangle n'est pas rectangle";
        }
        else {
            $Message = "Ces dimensions ne peuvent être celle d'un triangle";
        }    
    }
    $chaine = "kayak";
    $v = "a" || "e" || "i" || "o" || "u";
    for ($i=0; $i <= 5 ; $i++) { 
        if ($chaine = $v) {
            $chaine = $chaine . 1;
        }
        else{
            $chaine = $chaine . 0;
        }
    }
    
       
?>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="fonction.php">Fonctions</a></li>
        <li><a href="">Contact</a></li>
    </ul>
    <h1>Affichage avec des fonctions PHP</h1>
    <h2>Trouver les diviseurs d'un nombre</h2>
        <p>Le nombre <?= $nb ?> a <?= chercheDiviseurs($nb, $diviseurs) ?> comme diviseurs</p>
    <h2>Est-ce un triangle rectangle et lequel.</h2>
        <p><?= $Message ?></p>
    <h1>Affichage avec des fonctions PHP</h1>
    <h2>Changer un nombre par un autre</h2>
    <h2>Remplacer les voyelles et consonnes</h2>
    <p>Examen 2022-2023 UAA12 : Création d'un site dynamique</p>
    <p>5TTI</p>
</body>
</html>