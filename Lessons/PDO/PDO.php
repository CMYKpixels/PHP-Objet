<?php
$connexion = new PDO('mysql:host=localhost;dbname=world;charset=UTF8','root','root');
$connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion-> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//    $query = 'SELECT * FROM country';
//    $object = $connexion -> query($query);
//    while ($data = $object->fetch(PDO::FETCH_ASSOC)) {
//        $countries[] = $data;
//    }
//    var_dump($countries);

//Autre Méthode plus rapide
$object = $connexion->prepare('SELECT * FROM country');
    $object->execute(array());
    $result = $object->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);

    $object = $connexion->prepare('SELECT*FROM country WHERE population>:pop');
    $object->execute(array('pop'=>100000));
    $result = $object->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);

    