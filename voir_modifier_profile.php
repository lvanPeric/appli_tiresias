<?php
if(!isset($_SESSION)) {
    session_start();
}
$cnx = new PDO("mysql:host=localhost; dbname=appli_tiresias", 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
]);

$log = $_SESSION["loginSalarie"];

$stmt = $cnx -> prepare("SELECT * FROM salarie WHERE loginSalarie='$log'");
$stmt -> EXECUTE();
$em = $stmt -> fetch(PDO::FETCH_ASSOC);
$id = $em['idSalarie'];

$query = $cnx->prepare("SELECT * FROM contrat WHERE idSalarie='$id'");
$query->execute();
$contratSalarie = $query->fetch(PDO::FETCH_ASSOC);

include('fiche_renseignement_form.php');
?>

<html lang="fr_fr">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>Fiche de renseignements</title>
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
    <form method="POST" action="">
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
                <input class="form-control" type="date" id="example-date-input" name="dateDebutContrat">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3 form-group row"> </div>
            <label for="example-date-input" class="col-3 col-form-label">Date de sortie de l'établissement</label>
            <div class="col-3">
                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input" name="dateFinReelleContrat">
            </div>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <u>
                <h2>Civilité :</h2>
            </u>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nom</label>
            <div class="col-4">
                <input class="form-control" type="text" value="<?php echo $em['nomSalarie']; ?>" id="example-text-input" name="nomSalarie">
            </div>
            <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
            <div class="col-3">
                <input class="form-control" type="text" value="<?php echo $em['prenomSalarie'] ?>" id="example-text-input" name="prenomSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nom de jeune fille</label>
            <div class="col-9">
                <input class="form-control" type="text" value="<?php echo $em['nomJeuneFilleSalarie'] ?>" id="example-text-input" name="nomJeuneFilleSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Date de naissance</label>
            <div class="col-9">
                <input class="form-control" type="date" value="<?php echo $em['dateNaissanceSalarie'] ?>" id="example-date-input" name="dateNaissanceSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Lieu de naissance</label>
            <div class="col-9">
                <input class="form-control" type="text" value="<?php echo $em['lieuNaissanceSalarie'] ?>" id="example-text-input" name="lieuNaissanceSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Département</label>
            <div class="col-4">
                <select class="form-control" id="exampleSelect1" name="numeroDepartement">
                    <?php foreach($departements as $key => $departement): ?>
                        <option value="<?= $departement['numeroDepartement'] ?>" <?php if ($departement['numeroDepartement'] == $em['numeroDepartement']) echo "selected" ?>><?php echo $departement['numeroDepartement']." - ".$departement['nomDepartement']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="exampleSelect1" class="col-2 col-form-label">Pays</label>
            <div class="col-3">
                <select class="form-control" id="exampleSelect1" name="idPays" >
                    <?php foreach($countries as $key => $country): ?>
                        <option value="<?php echo $country['idPays']; ?>"  <?php if ($country['idPays'] == $em['idPays']) echo "selected" ?>><?php echo  $country['nomPays']; ?></option>
                    <?php endforeach; ?>
                </select>
                <!--<input class="form-control" type="text" placeholder="Pays" id="example-text-input" name="idPays">-->
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Situation familiale</label>
            <div class="col-4">
                <select class="form-control" id="exampleSelect1" name="situationFamilialeSalarie">
                    <?php
                    $situationFamilialeSalaries = ['célibataire', 'pacsé(e)', 'marié(e)', 'veuf(veuve)'];
                    foreach($situationFamilialeSalaries as $key=> $situationFamilialeSalarie): ?>
                        <option <?php if ($situationFamilialeSalarie == $em['situationFamilialeSalarie']) echo "selected" ?>><?php echo $situationFamilialeSalarie ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="example-text-input" class="col-2 col-form-label">Nombre d'enfants</label>
            <div class="col-3">
                <select class="form-control" id="exampleSelect1" name="nbEnfantSalarie">
                    <?php for ($i = 0 ; $i <= 10; $i++): ?>
                        <option <?php if ($i == $em['nbEnfantSalarie']) echo "selected" ?>><?php echo $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Numéro de sécurité sociale</label>
            <div class="col-9">
                <input class="form-control" type="text" value="<?php echo $em['numSecSocSalarie'] ?>" id="example-text-input" name="numSecSocSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nationalité</label>
            <div class="col-9">
                <input class="form-control" type="text" value="<?php echo $em['nationaliteSalarie'] ?>" id="example-text-input" name="nationaliteSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Niveau d'études et spécialité(s)</label>
            <div class="col-9">
                <input class="form-control" type="text" value="<?php echo $em['niveauEtudeSalarie']; ?>" id="example-text-input" name="niveauEtudeSalarie">
            </div>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <u>
                <h2>Le Contrat :</h2>
            </u>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Type de contrat signé</label>
            <div class="col-4">
                <select class="form-control" id="exampleSelect1" name="idTypeContrat" >
                    <?php foreach($contrats as $key => $contrat): ?>
                        <option value="<?php echo $contrat['idTypeContrat']; ?>" <?php if ($contratSalarie['idTypeContrat'] == $contrat['idTypeContrat']) echo "selected" ?>><?php echo $contrat['nomTypeContrat']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="example-text-input" class="col-3 col-form-label">Nombres d'heures hebdomadaire</label>
            <div class="col-3">
                <input class="form-control" type="text" value="<?php echo $contratSalarie['nbHeuresHebdoContrat'] ?>" placeholder="Nombre d'heures" id="example-text-input" name="nbHeuresHebdoContrat">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-1 col-form-label">Fonction</label>
            <div class="col-3">
                <select class="form-control" id="exampleSelect1" name="nomFonction" >
                    <?php foreach($fonctions as $key => $fonction): ?>
                        <option value="<?php echo $fonction['idFonction']; ?>" <?php if ($fonction['idFonction'] == $contratSalarie['idFonction']) echo "selected" ?>><?php echo $fonction['nomFonction']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Niveau</label>
            <div class="col-3">
                <input class="form-control" type="text" value="<?php echo $contratSalarie['niveauFonction'] ?>" placeholder="Niveau" id="example-text-input" name="niveauFonction">
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Echelon</label>
            <div class="col-3">
                <input class="form-control" type="text" value="<?php echo $contratSalarie['echelonFonction'] ?>" placeholder="Echelon" id="example-text-input" name="echelonFonction">
            </div>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <u><h2>Adresse Personnelle :</h2></u>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-1 col-form-label">nº</label>
            <div class="col-1">
                <input class="form-control" type="text" value="<?php echo $em['Adresse1Salarie'] ?>" id="example-text-input" name="Adresse1Salarie">
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Rue</label>
            <div class="col-9">
                <input class="form-control" type="text" value="<?php echo $em['Adresse2Salarie'] ?>" id="example-text-input" name="Adresse2Salarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Code Postal</label>
            <div class="col-2">
                <input class="form-control" type="text" value="<?php echo $em['codePostalSalarie'] ?>" id="example-text-input" name="codePostalSalarie">
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Commune</label>
            <div class="col-7">
                <input class="form-control" type="text" value="<?php echo $em['villeSalarie'] ?>" id="example-text-input" name="villeSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Téléphone Fixe</label>
            <div class="col-4">
                <input class="form-control" type="text" value="<?php echo $em['fixeSalarie'] ?>" id="example-text-input" name="fixeSalarie">
            </div>
            <label for="example-text-input" class="col-2 col-form-label">Téléphone Portable</label>
            <div class="col-4">
                <input class="form-control" type="text" value="<?php echo $em['portableSalarie'] ?>" id="example-text-input" name="portableSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Adresse E-mail</label>
            <div class="col-10">
                <input class="form-control" type="text" value="<?php echo $em['emailSalarie'] ?>" id="example-text-input" name="emailSalarie">
            </div>
        </div>
        <div class="form-group row"></div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Valider les renseignements</button>
        </div>
    </form>
</div>
</body>
</html>
