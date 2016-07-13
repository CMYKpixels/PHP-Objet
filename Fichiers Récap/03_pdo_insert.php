<?php

//Je fais l'insertion dans test
$connexion = new PDO('mysql:host=localhost;dbname=sales;charset=UTF8','root','');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$query = 'INSERT INTO client SET name=:moi ';

$pdo = $connexion->prepare($query);
$pdo->execute(array('moi'=>'Alfonso'));

var_dump($pdo->rowCount());