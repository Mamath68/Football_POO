<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="foot.jpg" type="image/x-icon">
    <title>Football_POO</title>
</head>

<body>
    <?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    $p1 = new Pays("France");
    $p2 = new Pays("Allemagne");
    $p3 = new Pays("Suisse");
    $p4 = new Pays("Angleterre");

    $e1 = new Equipe("SC Freiburg", 1904, $p2);
    $e2 = new Equipe("Racing club de Strasbourg", 1906, $p1);
    $e3 = new Equipe("FC Basel", 1893, $p3);
    $e4 = new Equipe("Arsenal FC", 1897, $p4);


    $j1 = new Joueur("Lucas", "Höler", "10-07-1994", "Allemand", $p2);
    $j2 = new Joueur("Robin", "Risser", "02-12-2004", "Français", $p1);
    $j3 = new Joueur("Michael", "Lang", "08-02-1991", "Anglais", $p4);
    $j4 = new Joueur("Ainsley", "Maitland-Niles", "29-08-1997", "Suisse", $p3);

    $c1 = new Carriere($j1, $e2, "01-01-2018");
    $c2 = new Carriere($j2, $e1, "01-01-2021");
    $c3 = new Carriere($j3, $e3, "19-07-2021");
    $c4 = new Carriere($j4, $e4, "09-12-2014");
    ?>

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match uk-grid uk-position-top-center ">
        <div>
            <div class="uk-card rouge uk-card-body">
                <h3 class="uk-card-title rouge">
                    <?php echo $p1->getName() ?>
                </h3>
                <p>
                    <?php echo $e2->getName() ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card rouge uk-card-body ">
                <h3 class="uk-card-title rouge">
                    <?php echo $p2->getName() ?>
                </h3>
                <p>
                    <?php echo $e1->getName()
                        ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card rouge uk-card-body ">
                <h3 class="uk-card-title rouge">
                    <?php echo $p3->getName() ?>
                </h3>
                <p>
                    <?php echo $e3->getName()
                        ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card rouge uk-card-body ">
                <h3 class="uk-card-title rouge">
                    <?php echo $p4->getName() ?>
                </h3>
                <p>
                    <?php echo $e4->getName()
                        ?>
                </p>
            </div>
        </div>
    </div>
    <br>
    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match uk-grid uk-position-center ">
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title">
                    <?php echo $e1->getName() . " <br>" . $p2->getName() . " - " . $e1->getDateCreation() ?>
                </h3>
                <p>
                    <?php echo $j1->getFirstName() . " " . $j1->getName() . " (" . date_format($c1->getDateRecrutement(), 'Y') . ")" ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body ">
                <h3 class="uk-card-title">
                    <?php echo $e2->getName() . " <br>" . $p1->getName() . " - " . $e2->getDateCreation()
                        ?>
                </h3>
                <p>
                    <?php echo $j2->getFirstName() . " " . $j2->getName() . " (" . date_format($c2->getDateRecrutement(), 'Y') . ")"
                        ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body ">
                <h3 class="uk-card-title">
                    <?php echo $e3->getName() . " <br>" . $p3->getName() . " - " . $e3->getDateCreation()
                        ?>
                </h3>
                <p>
                    <?php echo $j3->getFirstName() . " " . $j3->getName() . " (" . date_format($c3->getDateRecrutement(), 'Y') . ")"
                        ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body ">
                <h3 class="uk-card-title">
                    <?php echo $e4->getName() . " <br>" . $p4->getName() . " - " . $e4->getDateCreation()
                        ?>
                </h3>
                <p>
                    <?php echo $j4->getFirstName() . " " . $j4->getName() . " (" . date_format($c4->getDateRecrutement(), 'Y') . ")"
                        ?>
                </p>
            </div>
        </div>
    </div>
    <br>
    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match uk-grid uk-position-bottom-center ">
        <div>
            <div class="uk-card vert uk-card-body">
                <h3 class="uk-card-title vert">
                    <?php echo $j1->getFirstName() . " " . $j1->getName() . " <br> " . $j1->getPays() . " - " . $j1->calculateAge() . " ans" ?>
                </h3>
                <p>
                    <?php echo $e1->getName() . " (" . date_format($c1->getDateRecrutement(), 'Y') . ")"
                        ?>

                </p>
            </div>
        </div>
        <div>
            <div class="uk-card vert uk-card-body ">
                <h3 class="uk-card-title vert">
                    <?php echo $j2->getFirstName() . " " . $j2->getName() . " <br> " . $j2->getPays() . " - " . $j2->calculateAge() . " ans" ?>
                </h3>
                <p>
                    <?php echo $e2->getName() . " (" . date_format($c2->getDateRecrutement(), 'Y') . ")"
                        ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card vert uk-card-body ">
                <h3 class="uk-card-title vert">
                    <?php echo $j3->getFirstName() . " " . $j3->getName() . " <br> " . $j3->getPays() . " - " . $j3->calculateAge() . " ans" ?>
                </h3>
                <p>
                    <?php echo $e3->getName() . " (" . date_format($c3->getDateRecrutement(), 'Y') . ")"
                        ?>
                </p>
            </div>
        </div>
        <div>
            <div class="uk-card vert uk-card-body ">
                <h3 class="uk-card-title vert">
                    <?php echo $j4->getFirstName() . " " . $j4->getName() . " <br> " . $j4->getPays() . " - " . $j4->calculateAge() . " ans" ?>
                </h3>
                <p>
                    <?php echo $e4->getName() . " (" . date_format($c4->getDateRecrutement(), 'Y') . ")" ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>