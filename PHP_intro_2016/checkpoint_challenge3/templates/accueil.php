<?php include_once('templates/header.php'); ?>
<?php if (!empty($success)): ?>
    <div class="alert alert-success">
        <strong><?= $success ?></strong>
    </div>
<?php endif; ?>
<?php foreach($posts as $p): ?>
<div id="">
    <div>
        <div class="user-post-header">
            <a href="" lambdaeverupdated="2"><?=$p->getUsername()?></a> <small>dit</small>
            <div>
                <?= reformatDate($p->getDatePost())?>
                <span aria-hidden="true" class="glyphicon glyphicon-comment"></span> <?=$p->getNbComment()?>
            </div>
            <div class="user-post-header__label">
                <a href="index.php?p=viewPost&postid=<?=$p->getId()?>"><?=$p->getTitle()?></a>
            </div>
        </div>
        <div>
            <blockquote>
                <?=shortenText($p->getDescription())?>...
            </blockquote>
        </div>
    </div>
<?php endforeach; ?>
<?php include_once('templates/footer.php'); ?>