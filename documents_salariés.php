<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="utf-8">
<<<<<<< HEAD
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
=======
        <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
>>>>>>> fb4426c17f0ae194f7e1fd6c774bdf4fdd3c80f8
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    	<header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
<<<<<<< HEAD
                <a class="navbar-brand" href="accueil_admin.html">Accueil</a>
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
        	<div class="form-group text-center text-down">
	    		<h1> Nom Prénom </h1>
	    	</div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row">
	    		<div class="col-1"> </div>
	    		<button type="button" class="col-4 btn btn-primary btn-lg">Fiche de renseignements</button>
	    		<div class="col-2"> </div>
	    		<button type="button" class="col-4 btn btn-primary btn-lg">Relevé d'identité Bancaire</button>
	    		<div class="col-1"> </div>
	    	</div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row">
	    		<div class="col-1"> </div>
	    		<button type="button" class="col-4 btn btn-primary btn-lg">Carte Nationale D'identité</button>
	    		<div class="col-2"> </div>
	    		<button type="button" class="col-4 btn btn-primary btn-lg">Carte Vitale</button>
	    		<div class="col-1"> </div>
	    	</div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row">
	    		<div class="col-1"> </div>
	    		<button type="button" class="col-4 btn btn-primary btn-lg">Casier Judiciaire</button>
	    		<div class="col-2"> </div>
	    		<button type="button" class="col-4 btn btn-primary btn-lg">CV</button>
	    		<div class="col-1"> </div>
	    	</div>
        </div>
    </body>
</html>