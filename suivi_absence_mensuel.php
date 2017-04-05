<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="utf-8">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="liste_absence.php">Fiche d'absences<span class="sr-only">(current)</span></a>
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
	    		<h1> Liste et suivi des absences </h1>
	    	</div>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" href="liste_absence.php">Listes des absences</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="suivi_absence_mensuel.php">Suivi des absences mensuels</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="suivi_absence_annuel.php">Suivi des absences annuels</a>
				</li>
			</ul>
			<table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Suivi en pdf</th>
                        <th>Mois</th>
                        <th>Année</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">10</th>
                        <th><a href="">suivi_mensuel_novembre.pdf</a></th>
                        <th>novembre</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <th><a href="">suivi_mensuel_octobre.pdf</a></th>
                        <th>octobre</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <th><a href="">suivi_mensuel_septembre.pdf</a></th>
                        <th>septembre</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <th><a href="">suivi_mensuel_août.pdf</a></th>
                        <th>août</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <th><a href="">suivi_mensuel_juillet.pdf</a></th>
                        <th>juillet</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <th><a href="">suivi_mensuel_juin.pdf</a></th>
                        <th>juin</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <th><a href="">suivi_mensuel_mai.pdf</a></th>
                        <th>mai</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th><a href="">suivi_mensuel_avril.pdf</a></th>
                        <th>avril</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th><a href="">suivi_mensuel_mars.pdf</a></th>
                        <th>mars</th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th><a href="">suivi_mensuel_février.pdf</a></th>
                        <th>février</th>
                        <th>2017</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>