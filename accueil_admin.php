<?php
    if (!isset($_SESSION['loginSalarie']) && !isset($_COOKIE['User'])){
        header('Location:Connexion.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="accueil_admin.css"/>
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
        <div class="form-group text-center text-down">
            <h1> Accueil </h1>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <div class="col-1"> </div>
            <a type="submit" class="btn btn-secondary btn-lg col-4" href="#">Compléter une note de frais</a>
            <div class="col-2"> </div>
            <a type="submit" class="btn btn-secondary btn-lg col-4" href="liste_note_frais.php">Liste des notes de frais</a>
            <div class="col-1"> </div>
        </div>
        <div class="form-group row">
            <div class="col-1"> </div>
            <a type="submit" class="btn btn-secondary btn-lg col-4" href="liste_fiche_renseignement.php">Fiches de renseignements</a>
            <div class="col-2"> </div>
            <a type="submit" class="btn btn-secondary btn-lg col-4" href="liste_salarie.php">Liste des salariés</a>
            <div class="col-1"> </div>
        </div>
        <div class="form-group row">
            <div class="col-1"> </div>
            <a type="button" class="btn btn-secondary btn-lg col-4" href="demande_absence.php">Remplir une fiche d'absence</a>
            <div class="col-2"> </div>
            <a type="button" class="btn btn-secondary btn-lg col-4" href="liste_absence.php">Liste des demandes d'absence</a>
            <div class="col-1"> </div>
        </div>
        <div class="form-group row">
            <div class="col-1"> </div>
            <a type="button" class="btn btn-secondary btn-lg col-4" href="validation_absence.php">Répondre aux demandes d'absence</a>
            <div class="col-2"> </div>
            <a type="button" class="btn btn-secondary btn-lg col-4" href="changement_mdp.php">Changer le mot de passe</a>
            <div class="col-1"> </div>
        </div>
    </body>
</html>