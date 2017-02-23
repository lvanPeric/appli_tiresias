<?php
if (!isset($_SESSION['loginSalarie']) && !isset($_COOKIE['User'])){
    header('Location:Connexion.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Accueil</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="accueil_admin.html">Accueil</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="liste_salarie.php">Liste des salariés</a>
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
                        <a class="nav-link" href="logout.php">Déconnexion</a>
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
        <div class="center">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Remplir les notes de frais</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block margin-button">Demande d'abscence</button>
        </div>
    </div>
    </body>
</html>