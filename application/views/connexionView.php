<div class="container">
    <img src="<?= base_url() ?>src/images/logo.jpg" class="rounded col-2" alt="logo de l'entreprise" width="150px" height="150px">
    <form name="loginform" action="<?= base_url() ?>login" method="POST">
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