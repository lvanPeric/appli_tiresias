<!DOCTYPE html>
<html lang="fr_FR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
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
					<a class="nav-link" href="suivi_absence_mensuel.php">Suivi des absences mensuels</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="suivi_absence_annuel.php">Suivi des absences annuels</a>
				</li>
			</ul>
			<table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Suivi en pdf</th>
                        <th>Année</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">10</th>
                        <th><a href="">suivi_annuel_2017.pdf</a></th>
                        <th>2017</th>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <th><a href="">suivi_annuel_2016.pdf</a></th>
                        <th>2016</th>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <th><a href="">suivi_annuel_2015.pdf</a></th>
                        <th>2015</th>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <th><a href="">suivi_annuel_2014.pdf</a></th>
                        <th>2014</th>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <th><a href="">suivi_annuel_2013.pdf</a></th>
                        <th>2013</th>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <th><a href="">suivi_annuel_2012.pdf</a></th>
                        <th>2012</th>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <th><a href="">suivi_annuel_2011.pdf</a></th>
                        <th>2011</th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th><a href="">suivi_annuel_2010.pdf</a></th>
                        <th>2010</th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th><a href="">suivi_annuel_2009.pdf</a></th>
                        <th>2009</th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th><a href="">suivi_annuel_2008.pdf</a></th>
                        <th>2008</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>