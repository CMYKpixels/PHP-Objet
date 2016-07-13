<?php include_once ('template/header.php') ?>
<h2>Nouveau post</h2>

<p>
    Formulaire
</p>
<div class="hidden alert alert-danger">
    <strong>Erreur!</strong> Ici un message
</div>
<div class="hidden alert alert-success">
    <strong>Validation!</strong>Ici un message de validation
</div>

<form action="service/serviceLogin.php" method="post">
    <div class="form-groups">
        <label>Username</label>
        <input class="form-control" type="text" name="email" placeholder="Your email" autofocus/>
    </div>
    <div class="form-groups">
        <label>Password</label>
        <input class="form-control" type="password" name="password" value="" placeholder="*********"/>
    </div>
    <br />
    <button class="btn btn-primary" type="submit">Envoyer</button>

</form>
<?php include_once ('template/footer.php') ?>
