<?php
require_once('includes/functions.php');



$msg='';
//variable pour les messages d'erreurs
$e_title='';
$e_content='';
if(isset($_GET['delete']))
{
    $success=deleteArticle($_GET['delete']);
    if($success)
    {
        header('location:index.php?delete=1');
    }
    else
    {
        $msg .='<p>Erreur lors de la suppression de l\'article.</p>';
    }
}


else if(isset($_GET['edition']) 
   && isset($_POST['title'])
   && isset($_POST['content']))
{
        $title=$_POST['title'];
//on stocke la valeur dans le formulaire
        $content=$_POST['content'];
    
    if($title!=''&& $content!='')
//si les champs de titre et content sont renseigné, les récupérer pour modification
    {
        $success=updateArticle($title,$content,$_GET['edition']);
        if($success)
//si l'article a été créé avec succès
        {
            header ('location:index.php?edition=1');
        }
    
        else
        {
            $msg .="<p class='error'>Erreur lors de la modification de l\'article</p>";
        }
        
    }
    else
    {
        $msg .="<p class='error'>Champs Manquant</p>";
    }
}


//variable message vide
else if(isset($_GET['edition']))
{
    $article_id=$_GET['edition'];
    $article=getArticleById($article_id);
    $e_title=$article['title'];
    $e_content=$article['content'];
//même variable que ci-dessus, mais chargées
}



else if(isset($_POST['title']) && isset($_POST['content']))
{
    $title=$_POST['title'];
    $content=$_POST['content'];
    if($title!=''&& $content!='')
//si les champs de titre et content sont renseigné, les récupérer pour modification
    {
        $success=createArticle($title,$content,$_SESSION['user']['id']);
        if($success)
//si l'article a été créé avec succès
        {
            header ('location:localhost:index.php?creation=1');
        }
    
        else
        {
            $msg .="<p class='error'>Erreur lors de la création de l\'article</p>";
        }
        
    }
    else
    {
        $msg .="<p class='error'>Champs Manquant</p>";
    }
}
include('includes/header.php');
echo $msg;
?>


<form method="post">
    <input class="form-control" type="text" name='title' placeholder="titre..." value="<?=$e_title;?>"/>
    <br>
    <textarea class="form-control" cols="45" rows="15" name="content"><?=$e_content;?></textarea>
    <br>
    <input type="submit"/>
</form>


<?php
include('includes/footer.php');
?>