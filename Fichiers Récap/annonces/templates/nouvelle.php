<?php
	if(isset($_SESSION['nouvelle_annonce']['error'])){
		$error = $_SESSION['nouvelle_annonce']['error'];
		unset($_SESSION['nouvelle_annonce']['error']);
	}
	if(isset($_SESSION['nouvelle_annonce']['success'])){
		$success = $_SESSION['nouvelle_annonce']['success'];
		unset($_SESSION['nouvelle_annonce']['success']);
	}
?>
<?php include_once('templates/header.php'); ?>
<h2>Nouvelle annonce</h2>

<p>
	Formulaire
</p>
<?php if(!empty($error)): ?>
<div class="alert alert-danger">
	<strong>Erreur!</strong> <?=$error?>
</div>
<?php endif; ?>
<?php if(!empty($success)): ?>
	<div class="alert alert-success">
		<strong>Validation!</strong> <?=$success?>
	</div>
<?php endif; ?>

<form action="services/serviceAnnonce.php" method="post">
	<div class="form-groups">
		<label>Username</label>
		<input class="form-control" type="text" name="username" />
	</div>
	<div class="form-groups">
		<label>Titre</label>
		<input class="form-control" type="text" name="titre" value="" />
	</div>
	<div class="form-groups">
		<label>Prix</label>
		<input class="form-control" type="number" name="prix" value="" />
	</div>
	<br />
	<div class="form-groups">
		<label>Contenu Annonce</label>
		<textarea class="form-control" name="description" value=""></textarea>
	</div>
	
	<button class="btn btn-primary" type="submit">Envoyer</button>

</form>
