<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Football_POO</title>
</head>

<body>
    <?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    $e1 = new Equipe("SC Freiburg", 1904, $c2);
    $e2 = new Equipe("Racing Club de Strasbourg", 1906, $c1);
    $e3 = new Equipe("FC Basel", 1893, $c4);
    $e4 = new Equipe("Arsenal FC", 1897, $c3);
    var_dump($e1);

    $p1 = new Joueur("Lucas", "Höler", "10-07-1994", $c2, $e1);
    $p2 = new Joueur("Robin", "Risser", "02-12-2004", $c1, $e2);
    $p3 = new Joueur("Michael", "Lang", "08-02-1991", $c4, $e3);
    $p4 = new Joueur("Ainsley", "Maitland-Niles", "29-08-1997", $c3, $e4);
    // var_dump($p1);

    $c1 = new Pays('France');
    $c2 = new Pays('Allemagne');
    $c3 = new Pays('Engleterre');
    $c4 = new Pays('Suisse');
    // var_dump($c1);

    ?>

    <?php

    ?>
</body>

</html>