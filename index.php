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

    $e1 = new Equipe("FC Basel", 1893, $c3);
    $e2 = new Equipe("SC Freiburg", 1904, $c2);
    $e3 = new Equipe("Racing Club de Strasbourg", 1906, $c1);
    $e4 = new Equipe("Juventus de Turin", 1897, $c4);

    $p1 = new Joueur("Paul", "Pogba", "15-03-1993", $c1, $e4);
    $p2 = new Joueur("Robin", "Risser", "02-12-2004", $c1, $e3);
    $p3 = new Joueur("Vincenzo", "Griffo", "07-04-1993", $c4, $e2);
    $p4 = new Joueur("Fabian", "Frei", "08-01-1989", $c3, $e1);


    $c1 = new Pays('France');
    $c2 = new Pays('Allemagne');
    $c3 = new Pays('Suisse');
    $c4 = new Pays('Italie');

    ?>
</body>

</html>