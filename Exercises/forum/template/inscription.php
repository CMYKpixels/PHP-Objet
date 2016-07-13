<?php
    if(isset($_SESSION['new_user']['error'])){
        $error = $_SESSION['new_user']['error'];
        unset($_SESSION['new_user']['error']);
    }
    if(isset($_SESSION['new_user']['success'])){
        $success = $_SESSION['new_user']['success'];
        unset($_SESSION['new_user']['success']);
    }
?>
<?php include_once('template/header.php') ?>

<h2>Inscription</h2>

<p>
    Formulaire
</p>
<?php if ( !empty($error)): ?>
    <div class="hidden alert alert-danger">
        <strong>Erreur!</strong><?=$error;?> Ici un message
    </div>
<?php endif; ?>

<?php if ( !empty($success)): ?>
<div class="hidden alert alert-success">
    <strong>Validation!</strong><?=$success;?> un message de validation
</div>
<?php endif; ?>

<form action="../service/serviceLogin.php" method="post">
    <div class="form-groups">
        <label>Mail</label>
        <input class="form-control" type="email" name="email" value="Votre adresse email"/>
    </div>
    <div class="form-groups">
        <label>Username</label>
        <input class="form-control" type="text" name="username" value="Votre nom d'utilisateur"/>
    </div>
    <br/>
    <div class="form-groups">
        <label>password</label>
        <input class="form-control" type="password" name="password" value="*********"/>
    </div>
    <div class="form-groups">
        <label>password check</label>
        <input class="form-control" type="password" name="passwordCheck" value="*********"/>
    </div>

    <button class="btn btn-primary" type="submit">Envoyer</button>

</form>

<?php include_once('template/footer.php') ?>

