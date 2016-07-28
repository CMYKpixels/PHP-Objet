<?php echo $header ?>
<h2>Login</h2>
<p>
    Connectez-vous
</p>
<?php if(!empty(SessionManager::isErrorForm())): ?>
    <div class="alert alert-danger">
        <strong>Erreur!</strong> <?=SessionManager::getErrorsForm()?>
    </div>
<?php endif; ?>
<form action="serviceLogin" method="post">
    <div class="form-groups">
        <label>Username</label>
        <input class="form-control" type="text" name="username" value="<?php echo SessionManager::getUsernameField() ?>"/>
    </div>
    <div class="form-groups">
        <label>Password</label>
        <input class="form-control" type="text" name="password" value="<?php echo SessionManager::getPasswordField() ?>" />
    </div>

    <button class="btn btn-primary" type="submit">Se connecter</button>

</form>
<?php echo $footer ?>