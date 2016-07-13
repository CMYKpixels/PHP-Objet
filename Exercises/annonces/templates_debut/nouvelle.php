<h2>Nouvelle annonce</h2>

<p>
	Formulaire
</p>
<div class="alert alert-danger">
	<strong>Erreur!</strong> Ici un message
</div>
	<div class="alert alert-success">
		<strong>Validation!</strong>Ici un message de validation
	</div>

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
