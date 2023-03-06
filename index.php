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

    $e1 = new Equipe("SC Freiburg", 1904, "Allemagne", $p1);
    $e2 = new Equipe("Racing Club de Strasbourg", 1906, "France", $p2);
    $e3 = new Equipe("FC Basel", 1893, "Suisse", $p3);
    $e4 = new Equipe("Arsenal FC", 1897, "Engleterre", $p4);

    $p1 = new Joueur("Lucas", "Höler", "10-07-1994", "Allemand", $e1);
    $p2 = new Joueur("Robin", "Risser", "02-12-2004", "Français", $e2);
    $p3 = new Joueur("Michael", "Lang", "08-02-1991", "Englais", $e3);
    $p4 = new Joueur("Ainsley", "Maitland-Niles", "29-08-1997", "Suisse", $e4);


    echo $p1;

    ?>
</body>

</html>