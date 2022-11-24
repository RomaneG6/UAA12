<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorielle</title>
</head>
<body>
    <?php

        function factorielle ($nombreDepart)
        {
            $resultatFact = 1;
            for($i = 1; $i <= $nombreDepart; $i++)
            {
                $resultatFact = $resultatFact * $i;
                
            }
            return $resultatFact;
        }
    ?>
    <h1> factorielle</h1>
    <p>Le résultat de la factorielle de 7 est de : <?= factorielle(7) ?></p>
</body>
</html>