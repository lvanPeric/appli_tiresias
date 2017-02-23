<?php

	if(!isset($_SESSION['loginSalarie']) && isset($_POST['loginSalarie'])){
		if(!empty($_POST['loginSalarie']) && !empty($_POST['MdpSalarie'])){
			$login = filter_var($_POST['loginSalarie'], FILTER_SANITIZE_STRING);
			$password = filter_var($_POST['MdpSalarie'], FILTER_SANITIZE_STRING);
			$password = sha1($password);

			try{
					$Host='localhost';
					$User='root';
					$Password='';
				$cnx = new PDO("mysql:host=$Host; dbname=appli_tiresias", $User, $Password);
				$cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$login = $_POST['loginSalarie'];
				$password = $_POST['MdpSalarie'];


				$stmt = $cnx -> prepare("SELECT nomSalarie, loginSalarie, MdpSalarie, etreAdministrateurSalarie FROM salarie WHERE loginSalarie='".$login."' and MdpSalarie='".$password."'");
				$stmt -> bindParam('".$login."', $login, PDO::PARAM_STR);
				$stmt -> bindParam('".$password."', $password, PDO::PARAM_STR);
				$stmt -> EXECUTE();
				$em = $stmt -> fetch(PDO::FETCH_ASSOC);

				if ($em == true && $em['etreAdministrateurSalarie'] == 1){

					$_SESSION['loginSalarie'] = $_POST['loginSalarie'];
					$_SESSION['START'] = time();

					setcookie("User", $_POST['loginSalarie'], time()+(60*3), "/");
					setcookie("LUS", time(), time()+(60*3), "/");

					header('Location:accueil_admin.php');
				} elseif ($em == true && $em['etreAdministrateurSalarie'] == 0) {

					$_SESSION['loginSalarie'] = $_POST['loginSalarie'];
					$_SESSION['START'] = time();

					setcookie("User", $_POST['loginSalarie'], time()+(60*3), "/");
					setcookie("LUS", time(), time()+(60*3), "/");

					header('Location:Accueil.php');
				} else {
					echo "<script>alert('Login ou mot de passe incorrect')</script>";
				}
			} catch (Exception $e) {
				echo "".$e->getMessage();
			}
		} elseif (empty($_POST['loginSalarie']) && !empty($_POST['MdpSalarie'])) {
			echo "<script>alert('Erreur : Entrez votre login')</script>";
		} elseif (!empty($_POST['loginSalarie']) && empty($_POST['MdpSalarie'])) {
			echo "<script>alert('Erreur : Entrez votre mot de passe')</script>";
		} else {
			echo "<script>alert('Erreur : Entrez votre login et votre mot de passe')</script>";
		}
	}
?>