<?php
if(!isset($_SESSION)) {
    session_start();
}

$cnx = new PDO("mysql:host=db; dbname=appli_tiresias", 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
]);
class salary {
    public $idSalarie;
    public $nomSalarie;
    public $prenomSalarie;
}

$stmt = $cnx -> prepare("SELECT idSalarie, nomSalarie, prenomSalarie FROM salarie");
$stmt -> EXECUTE();
$salaries = $stmt -> fetchAll(PDO::FETCH_CLASS, "salary");
?>
<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    include 'accueil_separation.php';
                ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Remplir NDF</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_note_frais.php">Fiche NDF</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_fiche_renseignement.php">Fiche de renseignements</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="liste_salarie.php">Liste des salariés<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_absence.php">Fiche d'absences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="demande_absence.php">Demande d'absence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_demande_absence.php">Réponse aux absences</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            echo '<a class="nav-link" href="logout.php">Déconnexion</a>';
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
          <div class="form-group row">  
            <img src="logo.jpg" class="rounded col-2" alt="logo de l'entreprise" width="150px" height="150px">
            <div class="col-10"> </div>
            </div>
          <div class="form-group text-center text-down">
            <h1> Liste des salariés </h1>
          </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Poste</th>
                    </tr>
                </thead>
                <tbody>
                <? foreach ($salaries as $salary): ?>
                    <tr>
                        <th scope="row"><a href="documents_salariés.php"><?= $salary->idSalarie ?></a></th>
                        <th><?= $salary->prenomSalarie ?></th>
                        <th><?= $salary->nomSalarie ?></th>
                        <th>Poste</th>
                    </tr>
                <? endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>