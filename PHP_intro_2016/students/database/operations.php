<?php

function getConnexion(){
    $connexion = new PDO("mysql:host=localhost;dbname=study;charset=UTF8",'root','');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}

function getStudents(){
    $connexion = getConnexion();
    $query = "SELECT * FROM student";
    $pdo = $connexion->prepare($query);
    $pdo->execute(array());
    return $pdo->fetchAll(PDO::FETCH_ASSOC);
}

function setNewStudent($nom,$prenom,$age,$email,$langue){
    $connexion = getConnexion();
    $query =  "INSERT INTO student SET nom=:nom,prenom=:prenom,age=:age,email=:email,langue=:langue";
    $pdo = $connexion->prepare($query);

    $pdo->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'age'=>$age,
        'email'=>$email,
        'langue'=>$langue
    ));
    return $pdo->rowCount();
}


