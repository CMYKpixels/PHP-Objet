<?php
/**
 * EXEMPLE 1 select all countries
 */

$connexion = new PDO('mysql:host=localhost;dbname=world;charset=UTF8','root','');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

/*$query ='SELECT * FROM country';
$object = $connexion->query($query);
//'l'option PDO::FETCH_ASSOC rend un array assoc
while($donnees = $object->fetch(PDO::FETCH_ASSOC)){
    $countries[] = $donnees;
}*/




/**
 * EXEMPLE 2 PAS DE PARAMETRE MAIS AVEC PREPARE
 */

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


/*$object = $connexion->prepare('SELECT * FROM country');

$object->execute(array());
$result = $object->fetchAll(PDO::FETCH_ASSOC);*/

/**
 * Exemple avec paramètres
 */

$object = $connexion->prepare('SELECT * FROM country WHERE Population>:pop');

$object->execute(array('pop'=>100000));
$result = $object->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);


