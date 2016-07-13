<?php
    if(isset($_SESSION['nouveau_post']['error'])){
        $error = $_SESSION['nouveau_post']['error'];
        unset($_SESSION['nouveau_post']['error']);
    }
    if(isset($_SESSION['nouveau_post']['success'])){
        $success = $_SESSION['nouveau_post']['success'];
        unset($_SESSION['nouveau_post']['success']);
    }
    ?>
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

<form action="services/serviceAnnonce.php" method="post">
	<div class="form-groups">
		<label>Username</label>
		<input class="form-control" type="text" name="username" />
	</div>
	<div class="form-groups">
		<label>Titre</label>
		<input class="form-control" type="text" name="title" value="" />
	</div>
	<br />
	<div class="form-groups">
		<label>Contenu Post</label>
		<textarea class="form-control" name="content" value=""></textarea>
	</div>
	
	<button class="btn btn-primary" type="submit">Envoyer</button>

</form>
