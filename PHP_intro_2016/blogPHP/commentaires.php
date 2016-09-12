<?php   
/* Gestion des commentaires */
require_once 'includes/functions.php';


$articleIndex=0;
//je d"finie une variable index d'articles que je fixe à 0
    if(isset($_GET['article']))
    {
        $articleIndex=$_GET['article'];
    }
    
$msg='';
$comments=getCommentsByArticleId($articleIndex);
if(count($comments) > 0){
    foreach($comments as $comment)
    {
        $id=$article['author_id'];
        $author=getUserById($id);
        $name=$author['firstname'].' '.$author['lastname'];

    ?>
    <article>
         <article>
            <h4><?=$name;?></h4>
            <p><?=$comment['comment_content'];?></p>
        </article>
    </article>
    <?php
    }
}
else
{
    ?>
    <p>Soyez le premier à commenter cet article !</p>
    <?php
    /*print_r($comment['content']);*/
};

if(isset($_POST['comment_content']))
{
    $content=$_POST['comment_content'];
    if($content!='')
//si le content est renseigné, le récupérer pour modification
    {
        $success=createComment($_SESSION['user']['id'],$content,$articleIndex);
        if(!$success)
//si l'article a été créé avec succès
        {
            $msg .="<p class='error'>Erreur lors de la publication du commentaire</p>";
        }
        
    }
    else
    {
        $msg .="<p class='error'>Champs Manquant</p>";
    }
}




?>

<form method="post">
    <h2>Ajouter un commentaire</h2>
    <textarea class="form-control" cols="45" rows="15" name="comment_content" placeholder="Mon Commentaire">Votre comentaire ici...</textarea>
    <br>
    <input class="btn btn-primary btn-block" type="submit"/>
</form>