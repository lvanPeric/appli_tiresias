<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="demande_absence.css"/>
        <title>Demande d'absence</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="accueil_admin.php">Accueil</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Remplir NDF</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_note_frais.html">Fiche NDF</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_fiche_renseignement.html">Fiche de renseignements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_salarie.html">Liste des salariés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_absence.html">Fiche d'absences</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="demande_absence.php">Demande d'absence<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_demande_absence.html">Réponse aux absences</a>
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
            <img src="https://lh5.googleusercontent.com/-1dGzpvr210Q/AAAAAAAAAAI/AAAAAAAAABo/dQP0LC7RtwE/photo.jpg" class="imglogo">
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
                <legend>Radio buttons</legend>
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