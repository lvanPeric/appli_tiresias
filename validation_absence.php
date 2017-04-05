<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="demandabsence.css"/>
        <title>Validation d'absence</title>
        <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
                        <li class="nav-item">
                            <a class="nav-link" href="liste_salarie.php">Liste des salariés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_absence.php">Fiche d'absences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="demande_absence.php">Demande d'absence</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="validation_absence.php">Réponse aux absences<span class="sr-only">(current)</span></a>
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
            <h4 class="">Cadre Réservé à l'administrateur</h4>
            <div class="">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Demande accordée
            </label> 
            <div class="radio">
                <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Demande refusée
                </label>
                <div class="form-group">
                    <label for="exampleTextarea">Motif</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
            </div>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <button type="button" class="btn btn-secondary btn-lg btn-block">Valider</button>
        </div>
    </body>
</html>