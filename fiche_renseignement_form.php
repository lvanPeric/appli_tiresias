<?php

    // Ouverture de la base de donnée
    $dbname = 'appli_tiresias';
    $user = 'root';
    $password = '';
    $host = 'localhost';

    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ]);

    // Récupération des éléments de la table pays
    $query = $dbh->prepare("SELECT idPays, nomPays FROM pays");
    $query->execute();
    $countries = $query->fetchAll();

    // Récupération des éléments de la table département
    $dpt = $dbh->prepare("SELECT numeroDepartement, nomDepartement FROM departement");
    $dpt->execute();
    $departements = $dpt->fetchAll();

    // Récupération des éléments de la table fonction
    $fct = $dbh->prepare("SELECT idFonction, nomFonction FROM fonction");
    $fct->execute();
    $fonctions = $fct->fetchAll();

    // Récupération des éléments de la table type de contrat
    $tdc = $dbh->prepare("SELECT idTypeContrat, nomTypeContrat FROM type_de_contrat");
    $tdc->execute();
    $contrats = $tdc->fetchAll();

    if (isset($_POST) && !empty($_POST)) {

        /* Récupération du type et du nom du formulaire : */

        $dateDebutContrat = $dbh->quote($_POST['dateDebutContrat']);
        $dateFinReelleContrat = $dbh->quote($_POST['dateFinReelleContrat']);

        $nomSalarie = $dbh->quote($_POST['nomSalarie']);
        $prenomSalarie = $dbh->quote($_POST['prenomSalarie']);
        $nomJeuneFilleSalarie = !empty($_POST['nomJeuneFilleSalarie']) ? $dbh->quote($_POST['nomJeuneFilleSalarie']) : "NULL";
        $dateNaissanceSalarie = $dbh->quote($_POST['dateNaissanceSalarie']);
        $lieuNaissanceSalarie = $dbh->quote($_POST['lieuNaissanceSalarie']);
        $numeroDepartement = $dbh->quote($_POST['numeroDepartement']);
        $idPays = $_POST['idPays'];
        $situationFamilialeSalarie = $dbh->quote($_POST['situationFamilialeSalarie']);
        $nbEnfantSalarie = $dbh->quote($_POST['nbEnfantSalarie']);
        $numSecSocSalarie = $dbh->quote($_POST['numSecSocSalarie']);
        $nationaliteSalarie = $dbh->quote($_POST['nationaliteSalarie']);
        $niveauEtudeSalarie = $dbh->quote($_POST['niveauEtudeSalarie']);

        $idTypeContrat = $dbh->quote($_POST['idTypeContrat']);
        $nbHeuresHebdoContrat = $_POST['nbHeuresHebdoContrat'];
        $idFonction = $dbh->quote($_POST['nomFonction']);
        $niveauFonction = $_POST['niveauFonction'];
        $echelonFonction = $_POST['echelonFonction'];

        $Adresse1Salarie = $dbh->quote($_POST['Adresse1Salarie']);
        $Adresse2Salarie = $dbh->quote($_POST['Adresse2Salarie']);
        $codePostalSalarie = $dbh->quote($_POST['codePostalSalarie']);
        $villeSalarie = $dbh->quote($_POST['villeSalarie']);
        $fixeSalarie = $dbh->quote($_POST['fixeSalarie']);
        $portableSalarie = $dbh->quote($_POST['portableSalarie']);
        $emailSalarie = $dbh->quote($_POST['emailSalarie']);

        /* Insertion d'une ligne dans MySQL*/
        if (!isset($id)) {
            $count = $dbh->exec("INSERT INTO salarie( nomSalarie, prenomSalarie, nomJeuneFilleSalarie, loginSalarie,
                MdpSalarie, dateNaissanceSalarie, lieuNaissanceSalarie, numSecSocSalarie, nationaliteSalarie, Adresse1Salarie,
                Adresse2Salarie, codePostalSalarie, villeSalarie, fixeSalarie, portableSalarie, emailSalarie,
                numeroDepartement, idPays, situationFamilialeSalarie, nbEnfantSalarie, niveauEtudeSalarie) 
                    VALUES ( $nomSalarie, $prenomSalarie, $nomJeuneFilleSalarie, '', '', $dateNaissanceSalarie, 
                        $lieuNaissanceSalarie, $numSecSocSalarie, $nationaliteSalarie, $Adresse1Salarie, $Adresse2Salarie, 
                        $codePostalSalarie, $villeSalarie, $fixeSalarie, $portableSalarie, $emailSalarie, 
                        $numeroDepartement, $idPays, $situationFamilialeSalarie, $nbEnfantSalarie, $niveauEtudeSalarie)");

            $count = $dbh->exec("INSERT INTO contrat(dateDebutContrat, dateFinReelleContrat, nbHeuresHebdoContrat, idFonction,
                             idTypeContrat, niveauFonction, echelonFonction, idSalarie)
                             VALUES ($dateDebutContrat, $dateFinReelleContrat, $nbHeuresHebdoContrat, $idFonction,
                             $idTypeContrat, $niveauFonction, $echelonFonction, $idSalarie)");
        } else {
            $count = $dbh->exec("UPDATE salarie SET nomSalarie=$nomSalarie, prenomSalarie=$prenomSalarie, nomJeuneFilleSalarie=$nomJeuneFilleSalarie, loginSalarie='',
                             MdpSalarie='', dateNaissanceSalarie=$dateNaissanceSalarie, lieuNaissanceSalarie=$lieuNaissanceSalarie, numSecSocSalarie=$numSecSocSalarie, nationaliteSalarie=$nationaliteSalarie, Adresse1Salarie=$Adresse1Salarie,
                             Adresse2Salarie=$Adresse2Salarie, codePostalSalarie=$codePostalSalarie, villeSalarie=$villeSalarie, fixeSalarie=$fixeSalarie, portableSalarie=$portableSalarie, emailSalarie=$emailSalarie,
                             numeroDepartement=$numeroDepartement, idPays=$idPays, situationFamilialeSalarie=$situationFamilialeSalarie, nbEnfantSalarie=$nbEnfantSalarie, niveauEtudeSalarie=$niveauEtudeSalarie WHERE idSalarie=$id");
            $count = $dbh->exec("UPDATE contrat SET dateDebutContrat=$dateDebutContrat, dateFinReelleContrat=$datefinReelleContrat, nbHeuresHebdoContrat=$nbheuresHebdoContrat, idFonction=$idfonction,
                             idTypeContrat=$idtypeContrat, niveauFonction=$niveauFonction, echelonFonction=$echelonFonction, idSalarie=$idSalarie WHERE id=$id");
        }

        // ferme la base de donnée

        $dbh = null;

    }
?>