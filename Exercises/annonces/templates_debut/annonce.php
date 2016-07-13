<?php
	if( $annonce ) :
?>
	<div class="jumbotron">
		<h2><?=$annonce[0]['titre']; ?></h2>
		<p><?=$annonce[0]['description']; ?></p>
		<p><?=$annonce[0]['prix']; ?> &euro;</p>
		<p><a class="btn btn-primary btn-lg" href="index.php?p=annonces" role="button">Retour</a></p>
	</div>

<?php  else: ?>
			<p>ERREUR : Aucune annonce trouvée !</p>
			
<?php  endif; ?>