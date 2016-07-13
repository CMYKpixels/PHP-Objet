<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 22/06/2016
 * Time: 10:14
 */

$reponse = 42;
$resultat = ($reponse == 42) ? "La réponse est $reponse" : "en cours de calcul";
    
    echo $resultat;

//$var = (condition) ?[equivalent de if] 14 :[equivalent de else] 3;


$cout_unitaire = false;

//opérateur marchant comme un if simple
$prix_entier = $cout_unitaire ?: 25;

echo $prix_entier;