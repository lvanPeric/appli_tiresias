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
					<a class="nav-link active" href="liste_absence.php">Listes des absences</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="suivi_absence_mensuel.php">Suivi des absences mensuels</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="suivi_absence_annuel.php">Suivi des absences annuels</a>
				</li>
			</ul>
			<table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom et Prénom</th>
                        <th>Pdf de l'absence</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">10</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <th>NOM Prénom</th>
                        <th><a href="">demande_absence-NOM_Prenom.pdf</a></th>
                        <th>JJ-MM-AAAA</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>