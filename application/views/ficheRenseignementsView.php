<div class="container">
    <form method="POST" action="<?= base_url().$this->uri->uri_string() ?>">
        <div class="form-group row">
            <img src="<?= base_url() ?>src/images/logo.jpg" class="rounded col-2" alt="logo de l'entreprise" width="150px" height="150px">
            <div class="col-8"> </div>
            <div class="col-2"> <a type="button" class="btn btn-secondary btn-lg btn-down" href="voir_modifier_profile.php">Voir profil</a> </div>
        </div>
        <div class="form-group text-center text-down">
            <h1> Fiche de renseignements personnels </h1>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <div class="col-3 form-group row"> </div>
            <label for="example-date-input" class="col-3 col-form-label">Date d'entrée dans l'établissement</label>
            <div class="col-3">
                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input" name="dateDebutContrat" value="<?= set_value('dateDebutContrat'); ?>">
                <?= form_error('dateDebutContrat', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-3 form-group row"> </div>
            <label for="example-date-input" class="col-3 col-form-label">Date de sortie de l'établissement</label>
            <div class="col-3">
                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input" name="dateFinReelleContrat" value="<?= set_value('dateFinReelleContrat'); ?>">
                <?= form_error('dateFinReelleContrat', '<div class="error">', '</div>'); ?>
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
                <input class="form-control" type="text" placeholder="Nom" id="example-text-input" name="nomSalarie" value="<?= set_value('nomSalarie'); ?>">
                <?= form_error('nomSalarie', '<div class="error">', '</div>'); ?>
            </div>
            <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
            <div class="col-3">
                <input class="form-control" type="text" placeholder="Prénom" id="example-text-input" name="prenomSalarie" value="<?= set_value('prenomSalarie'); ?>">
                <?= form_error('prenomSalarie', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nom de jeune fille</label>
            <div class="col-9">
                <input class="form-control" type="text" placeholder="Nom de jeune fille" id="example-text-input" name="nomJeuneFilleSalarie" value="<?= set_value('nomJeuneFilleSalarie'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Date de naissance</label>
            <div class="col-9">
                <input class="form-control" type="date" placeholder="format : jj-mm-aaaa" id="example-date-input" name="dateNaissanceSalarie" value="<?= set_value('dateNaissanceSalarie'); ?>">
                <?= form_error('dateNaissanceSalarie', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Lieu de naissance</label>
            <div class="col-9">
                <input class="form-control" type="text" placeholder="Lieu de naissance" id="example-text-input" name="lieuNaissanceSalarie" value="<?= set_value('lieuNaissanceSalarie'); ?>">
                <?= form_error('lieuNaissanceSalarie', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Département</label>
            <div class="col-4">
                <select class="form-control" id="exampleSelect1" name="numeroDepartement" >
                    <option value="">---</option>
                    <?php foreach($departments as $key => $department): ?>
                        <option value="<?= $department->numeroDepartement; ?>" <?= (set_value('numeroDepartement')==$department->numeroDepartement) ? "selected":"" ?>>
                            <?= $department->numeroDepartement." - ".$department->nomDepartement; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('numeroDepartement', '<div class="error">', '</div>'); ?>
            </div>
            <label for="exampleSelect1" class="col-2 col-form-label">Pays</label>
            <div class="col-3">
                <select class="form-control" id="exampleSelect1" name="idPays" >
                    <option value="">---</option>
                    <?php foreach($countries as $key => $country): ?>
                        <option value="<?= $country->idPays; ?>" <?= (set_value('idPays')==$country->idPays) ? "selected":"" ?>>
                            <?= $country->nomPays; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('idPays', '<div class="error">', '</div>'); ?>
                <!--<input class="form-control" type="text" placeholder="Pays" id="example-text-input" name="idPays">-->
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Situation familiale</label>
            <div class="col-4">
                <select class="form-control" id="exampleSelect1" name="situationFamilialeSalarie">
                    <option value="">---</option>
                    <?php $situations = ['célibataire', 'pacsé(e)', 'marié(e)', 'veuf(veuve)'] ?>
                    <?php foreach($situations as $key => $situation): ?>
                        <option value="<?= $situation ?>" <?= (set_value('situationFamilialeSalarie')==$situation) ? "selected":"" ?>>
                            <?= $situation ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('situationFamilialeSalarie', '<div class="error">', '</div>'); ?>
            </div>
            <label for="example-text-input" class="col-2 col-form-label">Nombre d'enfants</label>
            <div class="col-3">
                <select class="form-control" id="exampleSelect1" name="nbEnfantSalarie">
                    <option value="">---</option>
                    <?php for($i=0; $i <= 10; ++$i): ?>
                        <option value="<?= $i ?>" <?= (set_value('nbEnfantSalarie')==$i) ? "selected":"" ?>>
                            <?= $i ?></option>
                    <?php endfor; ?>
                </select>
                <?= form_error('nbEnfantSalarie', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Numéro de sécurité sociale</label>
            <div class="col-9">
                <input class="form-control" type="text" placeholder="Numéro de sécurité sociale" id="example-text-input" name="numSecSocSalarie" value="<?= set_value('numSecSocSalarie'); ?>">
                <?= form_error('numSecSocSalarie', '<div class="error">', '</div>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nationalité</label>
            <div class="col-9">
                <input class="form-control" type="text" placeholder="Nationalité" id="example-text-input" name="nationaliteSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Niveau d'études et spécialité(s)</label>
            <div class="col-9">
                <input class="form-control" type="text" placeholder="Niveau d'études et spécialité(s)" id="example-text-input" name="niveauEtudeSalarie">
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
                        <option value="<?php echo $contrat->idTypeContrat; ?>">
                            <?php echo $contrat->nomTypeContrat; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="example-text-input" class="col-3 col-form-label">Nombres d'heures hebdomadaire</label>
            <div class="col-3">
                <input class="form-control" type="text" placeholder="Nombre d'heures" id="example-text-input" name="nbHeuresHebdoContrat">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-1 col-form-label">Fonction</label>
            <div class="col-3">
                <select class="form-control" id="exampleSelect1" name="nomFonction" >
                    <?php foreach($fonctions as $key => $fonction): ?>
                        <option value="<?php echo $fonction->idFonction; ?>">
                            <?php echo $fonction->NomFonction; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Niveau</label>
            <div class="col-3">
                <input class="form-control" type="text" placeholder="Niveau" id="example-text-input" name="niveauFonction">
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Echelon</label>
            <div class="col-3">
                <input class="form-control" type="text" placeholder="Echelon" id="example-text-input" name="echelonFonction">
            </div>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <u><h2>Adresse Personnelle :</h2></u>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-1 col-form-label">nº</label>
            <div class="col-1">
                <input class="form-control" type="text" placeholder="nº" id="example-text-input" name="Adresse1Salarie">
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Rue</label>
            <div class="col-9">
                <input class="form-control" type="text" placeholder="Rue" id="example-text-input" name="Adresse2Salarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Code Postal</label>
            <div class="col-2">
                <input class="form-control" type="text" placeholder="Code Postal" id="example-text-input" name="codePostalSalarie">
            </div>
            <label for="example-text-input" class="col-1 col-form-label">Commune</label>
            <div class="col-7">
                <input class="form-control" type="text" placeholder="Commune" id="example-text-input" name="villeSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Téléphone Fixe</label>
            <div class="col-4">
                <input class="form-control" type="text" placeholder="Ex : 0123456789" id="example-text-input" name="fixeSalarie">
            </div>
            <label for="example-text-input" class="col-2 col-form-label">Téléphone Portable</label>
            <div class="col-4">
                <input class="form-control" type="text" placeholder="Ex : 0612345789" id="example-text-input" name="portableSalarie">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Adresse E-mail</label>
            <div class="col-10">
                <input class="form-control" type="text" placeholder="Exemple : email@xyz.com" id="example-text-input" name="emailSalarie">
            </div>
        </div>
        <div class="form-group row"> </div>
        <div class="form-group row">
            <u>
                <h2>Pièces à fournir :</h2>
            </u>
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
            <button type="submit" class="btn btn-primary btn-lg btn-block">Valider les renseignements</button>
        </div>
    </form>
</div>