<?php
    session_start();
    unset($_SESSION);
    session_destroy();
    session_write_close();
    setcookie("User", "", time() - 3600);
    setcookie("LUS", "", time() - 3600);

    header('Location:Connexion.php');

    die;
?>