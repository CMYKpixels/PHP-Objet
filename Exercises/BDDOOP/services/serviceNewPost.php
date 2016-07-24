<?php
session_start();
require('../model/bddManager.php');
require('../model/sessionManager.php');

$isError = false;
$missingFields = array();

$userId = isset($_POST['poster']) ? (int) $_POST['poster'] : '';
$title = isset($_POST['title']) ? strip_tags($_POST['title']) : '';
$description = isset($_POST['description']) ? strip_tags($_POST['description']) : '';

setSessionDescription($description);
setSessionTitle($title);

if(empty($userId) ) {
    setErrorsForm('Le posteur est vide petit hacker!!');
    kickOut();
}

if(empty($title) ) {
    $isError = true;
    $missingFields[] = 'Le titre est vide';
}else{
    if(strlen($title)<10){ // On veut que le sujet fasse au moins 30 caractères
        $isError = true;
        $missingFields[] = 'Le titre est trop court veuillez écrire au moins 10 caractères';
    }
}

if(empty($description)) {
    $isError = true;
    $missingFields[] = 'La description est vide';
}else{
    if(strlen($description)<30){ // On veut que le sujet fasse au moins 30 caractères
        $isError = true;
        $missingFields[] = 'La description est trop courte veuillez écrire au moins 30 caractères';
    }
}

if( $isError==true ) {
    $stringError="";
    if( $isError ) {
        $stringError .= "Erreurs sur les champs suivants : <br />";
        foreach( $missingFields as $fieldName ) {
            $stringError .= $fieldName . "<br />";
        }
        setErrorsForm($stringError);
        header('location: ../index.php?p=newPost');
    }
}else{
    $res = setNewPost($userId,$title,$description);
    unsetFormFields(); //sessions
    if($res==true){
        setSuccessForm('Votre sujet a bien été posté');
        header('location: ../index.php?p=acceuil');
        die();
    }
}
