<?php include_once('template/header.php'); ?>


<div class="jumbotron">
    <h1>Liste des Sujets</h1>
</div>

<div class="list-annonces">
    <ul class="list-group">
        <?php foreach ($resultats as $r): ?>
            <li class="list-group-item">
                <a href="../index.php?p=post&id=<?= $r['id']; ?>">
                    <?= $r['titre']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php include_once('template/newPost.php'); ?>
</div>
<?php include_once('template/footer.php'); ?>

	
	