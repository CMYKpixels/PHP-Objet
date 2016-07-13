<?php

//Je fais l'insertion dans test
$connexion = new PDO('mysql:host=localhost;dbname=sales;charset=UTF8','root','');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$query = 'UPDATE client SET name=:client WHERE id=:id';

$pdo = $connexion->prepare($query);
$pdo->execute(array('client'=>'Alfonsoooooooooo','id'=>4));

var_dump($pdo->rowCount());