<?php
    require_once 'includes/functions.php';
    include 'includes/header.php';

$page=0;
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }


    if(isset($_SESSION['user']))
        {
        echo'<button class="btn btn-danger"><a href="deconnect.php">Déconnexion</a></button>';
        echo "<h3>Bienvenue ".$_SESSION['user']['firstname']."</h3>";
        echo '<button class="btn btn-info"><a href="create.php">Ecrire un article</a></button>';
    }










?>
