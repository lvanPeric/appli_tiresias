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
                        <li class="nav-item active">
                            <a class="nav-link" href="liste_fiche_renseignement.php">Fiche de renseignements<span class="sr-only">(current)</span></a>
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
	    		<h1> Fiche de renseignements personnels </h1>
	    	</div>
	    	<div class="form-group row"> </div>
	    	<div class="form-group row">
	    		<div class="col-3 form-group row"> </div>
	            <label for="example-date-input" class="col-3 col-form-label">Date d'entrée dans l'établissement</label>
	            <div class="col-3">
	                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input">
	            </div>
	        </div>
	        <div class="form-group row">
	    		<div class="col-3 form-group row"> </div>
	            <label for="example-date-input" class="col-3 col-form-label">Date de sortie de l'établissement</label>
	            <div class="col-3">
	                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input">
	            </div>
	        </div>
	        <div class="form-group row"> </div>
	        <div class="form-group row">
	        	<u><h2>Civilité :</h2></u>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Nom</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Nom" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
	            <div class="col-3">
	                <input class="form-control" type="text" placeholder="Prénom" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Nom de jeune fille</label>
	            <div class="col-9">
	                <input class="form-control" type="text" placeholder="Nom de jeune fille" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-date-input" class="col-3 col-form-label">Date de naissance</label>
	            <div class="col-9">
	                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Lieu de naissance</label>
	            <div class="col-9">
	                <input class="form-control" type="text" placeholder="Lieu de naissance" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Département</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Département" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-2 col-form-label">Pays</label>
	            <div class="col-3">
	                <input class="form-control" type="text" placeholder="Pays" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Situation de famille</label>
	            <div class="col-4">
	                <select class="form-control" id="exampleSelect1">
	                	<option>célibataire</option>
	                	<option>pacsé(e)</option>
						<option>marié(e)</option>
						<option>veuf(veuve)</option>
					</select>
	            </div>
	            <label for="example-text-input" class="col-2 col-form-label">Nombre d'enfants</label>
	            <div class="col-3">
	                <select class="form-control" id="exampleSelect1">
	                	<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Numéro de sécurité sociale</label>
	            <div class="col-9">
	                <input class="form-control" type="text" placeholder="Numéro de sécurité sociale" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Nationalité</label>
	            <div class="col-9">
	                <input class="form-control" type="text" placeholder="Nationalité" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-3 col-form-label">Niveau d'études et spécialité(s)</label>
	            <div class="col-9">
	                <input class="form-control" type="text" placeholder="Niveau d'études et spécialité(s)" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row"> </div>
	        <div class="form-group row">
	        	<u><h2>Le Contrat :</h2></u>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-2 col-form-label">Type de contrat signé</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Type de contrat" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-3 col-form-label">Nombres d'heures hebdomadaire</label>
	            <div class="col-3">
	                <input class="form-control" type="text" placeholder="Nombre d'heures" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-1 col-form-label">Fonction</label>
	            <div class="col-3">
	                <input class="form-control" type="text" placeholder="Fonction" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-1 col-form-label">Niveau</label>
	            <div class="col-3">
	                <input class="form-control" type="text" placeholder="Niveau" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-1 col-form-label">Echelon</label>
	            <div class="col-3">
	                <input class="form-control" type="text" placeholder="Echelon" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-2 col-form-label">Banque</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Banque" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-2 col-form-label">Code Banque</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Code Banque" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-2 col-form-label">Code Guichet</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Code Guichet" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-2 col-form-label">RIB</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="RIB" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row"> </div>
	        <div class="form-group row">
	        	<u><h2>Adresse Personnelle :</h2></u>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-1 col-form-label">nº</label>
	            <div class="col-1">
	                <input class="form-control" type="text" placeholder="nº" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-1 col-form-label">Rue</label>
	            <div class="col-9">
	                <input class="form-control" type="text" placeholder="Rue" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-2 col-form-label">Code Postal</label>
	            <div class="col-1">
	                <input class="form-control" type="text" placeholder="Code Guichet" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-1 col-form-label">Commune</label>
	            <div class="col-8">
	                <input class="form-control" type="text" placeholder="Commune" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-2 col-form-label">Téléphone Fixe</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="Code Guichet" id="example-text-input">
	            </div>
	            <label for="example-text-input" class="col-2 col-form-label">Téléphone Portable</label>
	            <div class="col-4">
	                <input class="form-control" type="text" placeholder="RIB" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row">
	            <label for="example-text-input" class="col-2 col-form-label">Adresse E-mail</label>
	            <div class="col-10">
	                <input class="form-control" type="text" placeholder="Exemple : email@xyz.com" id="example-text-input">
	            </div>
	        </div>
	        <div class="form-group row"> </div>
	        <div class="form-group row">
	        	<u><h2>Pièces à fournir :</h2></u>
	        </div>
	        <div class="row">
			    <label for="exampleInputFile" class="col-3 col-form-label">Coordonnées bancaire : RIB</label>
			    <input type="file" class="form-control-file col-2" id="exampleInputFile" aria-describedby="fileHelp">
			</div>
			<div class="row">
			    <label for="exampleInputFile" class="col-3 col-form-label">Photocopie de la carte d'identité</label>
			    <input type="file" class="form-control-file col-2" id="exampleInputFile" aria-describedby="fileHelp">
			</div>
			<div class="row">
			    <label for="exampleInputFile" class="col-3 col-form-label">Photocopie de la carte vitale</label>
			    <input type="file" class="form-control-file col-2" id="exampleInputFile" aria-describedby="fileHelp">
			</div>
			<div class="row">
			    <label for="exampleInputFile" class="col-3 col-form-label">Extrait de casier judiciaire</label>
			    <input type="file" class="form-control-file col-2" id="exampleInputFile" aria-describedby="fileHelp">
			</div>
			<div class="row">
			    <label for="exampleInputFile" class="col-3 col-form-label">CV</label>
			    <input type="file" class="form-control-file col-2" id="exampleInputFile" aria-describedby="fileHelp">
			</div>
			<div class="form-group row"></div>
			<div class="form-group row">
				<button type="button" class="btn btn-primary btn-lg btn-block">Valider les renseignements</button>
			</div>
        </div>
    </body>
</html>