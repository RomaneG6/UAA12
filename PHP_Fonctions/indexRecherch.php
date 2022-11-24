<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche Carac</title>
</head>
<body>
    <?php
    function OccCarDansTexte($chaineDepart, $caractere)
    {
        $longueurChaine = strlen($chaineDepart);
        $nbOccurrences = 0;
        for($i = 0; $i <= $longueurChaine - 1; $i++)
        {
            if($chaineDepart[$i] == $caractere)
            {
                $nbOccurrences = $nbOccurrences + 1;
            }
        }
        return $nbOccurrences;
    }
    ?>
    <h1>Recherche</h1>
    <p>La recherche donne <?= OccCarDansTexte("Bienvenue en 5TI", "n") ?></p>
</body>
</html>