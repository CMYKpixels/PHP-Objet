
<?php
	include_once('templates/header.php');

	if( $post ) :
?>
	<div class="jumbotron">
		<h2><?=$post[0]['title']; ?></h2>
		<p><?=$post[0]['content']; ?></p>
		<p><?=$post[0]['userid']; ?></p>
		<p><a class="btn btn-primary btn-lg" href="index.php?p=postsList" role="button">Retour</a></p>
	</div>

<?php  else: ?>
			<p>ERREUR : Aucun post trouvé !</p>
			
<?php  endif; ?>