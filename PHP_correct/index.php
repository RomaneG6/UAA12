<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXERCICE 0</h1>
    <?php
    echo'<p> Hello World <p>';
    ?>
    <h1>EXERCICE 1</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) : ?>
        <p>Le nombre vaut <?= $i ?> <p>
    <?php endfor ?>

    <h1>EXERCICE 2</h1>
    <?php
      for ($i = 1; $i <= 10; $i++) : 
      
        if ($i != 3) : ?>
            <p> le nombre vaut <?= $i ?> <p>
        <?php endif ?>
    <?php endfor ?>

    <h1>EXERCICE 3</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) :
        if ($i < 4 || $i > 7) : ?>
            <p> le nombre vaut <?= $i ?> <p>
        <?php endif ?>
    <?php endfor?>

    <h1>EXERCICE 4</h1>
    <?php
        $abs1 = ("-5");
        $abs2 = ("10"); 
    ?>
        <p>La valeure absolue de <?= $abs1 ?> vaut <?= (abs($abs1)) ?> <p>
        <p>La valeure absolue de <?= $abs2 ?> vaut <?= (abs($abs2)) ?> <p>
</body>
</html>