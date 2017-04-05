<?php
if(!isset($_SESSION)) {
    session_start();
}

$cnx = new PDO("mysql:host=localhost; dbname=appli_tiresias", 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
]);

$log = $_SESSION["loginSalarie"];

$stmt = $cnx -> prepare("SELECT loginSalarie, etreAdministrateurSalarie FROM salarie WHERE loginSalarie='$log'");
$stmt -> EXECUTE();
$emt = $stmt -> fetch(PDO::FETCH_ASSOC);

if($emt == true && $emt['etreAdministrateurSalarie'] == 1){
    ?><a class="navbar-brand" href="accueil_admin.php">Accueil</a><?php
} else {
    ?><a class="navbar-brand" href="Accueil.php">Accueil</a><?php
}
?>