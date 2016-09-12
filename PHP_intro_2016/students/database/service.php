<?php

require('operations.php');

if(!empty($_POST)){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $langue = $_POST['langue'];
    if(empty($nom) || empty($prenom) || empty($age) || empty($email) || empty($langue)){
        header('location: students.php?fields=1');
        die();
    }

    $res = setNewStudent($nom,$prenom,$age,$email,$langue);

    if($res){
        header('location: students.php?success=1');
    }else{
        header('location: students.php?failure=1');
        die();
    }

}