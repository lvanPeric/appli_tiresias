<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="demande_absence.css"/>
        <title>Demande d'absence</title>
<<<<<<< HEAD
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
=======
        <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
>>>>>>> fb4426c17f0ae194f7e1fd6c774bdf4fdd3c80f8
    </head>
    <body>
        <header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
<<<<<<< HEAD
                <a class="navbar-brand" href="accueil_admin.php">Accueil</a>
=======
                <?php
                    include 'accueil_separation.php';
                ?>
>>>>>>> fb4426c17f0ae194f7e1fd6c774bdf4fdd3c80f8
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
                        <li class="nav-item active">
                            <a class="nav-link" href="demande_absence.php">Demande d'absence<span class="sr-only">(current)</span></a>
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
            <h1 class="title1">Demande D'absence</h1>
            <div class="form-group row"> </div>
            <div class="form-group row"> </div>
            <form>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nom</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="Nom" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Prénom</label>
                    <div class="col-10">
                        <input class="form-control" type="search" value="Prénom" id="example-search-input">
                    </div>
                </div>
            </form>
            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Premier jour d'absence</label>
                <div class="col-2">
                    <input class="form-control" type="date" value="Artisanal kale" id="example-date-input">
                </div>
                <label for="example-time-input" class="col-2 col-form-label">à :</label>
                <div class="col-2">
                    <input class="form-control" type="time" value="Artisanal kale" id="example-time-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Retour effectif le :</label>
                <div class="col-2">
                    <input class="form-control" type="date" value="How do I shoot web" id="example-date-input">
                </div>
                <label for="example-time-input" class="col-2 col-form-label">à :</label>
                <div class="col-2">
                    <input class="form-control" type="time" value="Artisanal kale" id="example-time-input">
                </div>
            </div>
            <h4 class="">Demande de congés</h4>
            <div class="form-group row"> </div>
            <fieldset class="form-group">
                <legend></legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Annuels par Anticipation
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    non
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Récupération
                    </label>
                </div>
            </fieldset>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>