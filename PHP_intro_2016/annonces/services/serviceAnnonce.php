<?php
session_start();
require('../operations.php');

$isError = false;
$missingFields = array();

$titre = $_POST['username'];
$username = $_POST['username'];
$description = $_POST['description'];
$prix = $_POST['prix'];

if( !isset($username) || empty($username) ) {
    $isError = true;
    $missingFields[] = 'Pseudo';
}
if( !isset($titre) || empty($titre) ) {
    $isError = true;
    $missingFields[] = 'Titre';
}
if( !isset($prix) || empty($prix) ) {
    $isError = true;
    $missingFields[] = 'Prix';
}
if( !isset($description) || empty($description) ) {
    $isError = true;
    $missingFields[] = 'Description';
}

if( $isError==true ) {
    $stringError="";
    if( $isError ) {
        $stringError .= "Veuillez remplir les champs suivants : <br />";
        foreach( $missingFields as $fieldName ) {
            $stringError .= $fieldName . "<br />";
        }
        $_SESSION['nouvelle_annonce']['error']=$stringError;
        header('location: ../index.php?p=nouvelle');
    }
}else{
    //collect data into the database
    $username = $_POST['username'];
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];

    $res = nouvelleAnnonce($username,$titre,$prix,$description);
    if($res>0){
        $_SESSION['nouvelle_annonce']['success']='Nouvelle annonce validée!';
        header('location: ../index.php?p=nouvelle');
        die();
    }

}