<?php
	session_start();
    include('login.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="login.css"/>
        <title>Connexion</title>
<<<<<<< HEAD
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
=======
        <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
>>>>>>> fb4426c17f0ae194f7e1fd6c774bdf4fdd3c80f8
    </head>
    <body>
        <div class="container">
            <img src="logo.jpg" class="rounded col-2" alt="logo de l'entreprise" width="150px" height="150px">
            <form name="loginform" action="" method="POST">
                <h1 class="text-center">Connexion</h1>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-2 control-label">Login</label>
                    <input type="text" name="loginSalarie" class="form-control col-12" id="inputEmail3" placeholder="Login" required="required"/>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-2 control-label">Password</label>
                    <input type="password" name="MdpSalarie" class="form-control col-12" id="inputPassword3" placeholder="Password" required="required"/>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-default col-2">Connexion</button>
                    <div class="col-1"> </div>
                    <button type="submit" class="btn btn-default col-2" value="">Mot de passe oublié</button>
                </div>
            </form>
        </div>
    </body>
</html>