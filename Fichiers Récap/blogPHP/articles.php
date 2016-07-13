<?php
    require_once 'includes/functions.php';
    include 'includes/header.php';

$articleIndex=0;
//je d"finie une variable index d'articles que je fixe à 0
    if(isset($_GET['article']))
    {
        $articleIndex=$_GET['article'];
    }

$article=getArticleById($articleIndex);
if($article !=false)
{
    $id=$article['author_id'];
    $author=getUserById($id);
    $name=$author['firstname'].' '.$author['lastname'];
?>
<article>
     <article>
        <h2><?=$article['title']?></h2>
        <h4><?=$name;?></h4>
        <p><?=$article['content'] ?></p>
    </article>
</article>
<?php
}
else
{
    ?>
    <p>Cet article n'existe pas</p>
    <?php
};

    include 'commentaires.php';
    include 'includes/footer.php';
?>