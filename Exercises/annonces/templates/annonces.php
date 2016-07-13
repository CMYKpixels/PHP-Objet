<?php include_once('templates/header.php'); ?>
<div class="list-annonces">
	<ul class="list-group">
		<?php foreach( $resultats as $r ):?>
			<li class="list-group-item">
				<a href="index.php?p=annonce&id=<?= $r['id']; ?>">
					<?= $r['titre']; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
	
	