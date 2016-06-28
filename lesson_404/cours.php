<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 28/06/2016
 * Time: 09:01
 */
$my_array = array("PHP","HTML","SCSS","javaScript");

list($a, $b, $c, $d) = $my_array;
echo "j'adore programmer en  $a, $b, $c & $d";
echo "<br>";
echo "<br>";
/////////ACTIONS SUR DES STRINGS/////////
$phrase='Salut tout le monde! Vous'
       .'êtes prêt pour un nouveau'
       .'Challenge ?';
$longueur=strlen($phrase);
//Calcule la li=ongueur de la chaîne
print($longueur.' Caractères : '.$phrase);
echo "<br>";
echo "<br>";
///////////////////////////////////////
$ma_variable = str_replace('aimer', 'détestez', 'Vous le chocolat ?');
echo $ma_variable;
echo "<br>";
echo "<br>";
///////////////////////////////////////
$phrase = 'ALORS COMMENT VA VOTRE JAVASCRIPT ?';
strtolower($phrase);
///////////////////////////////////////
echo substr("Salut tout le monde",6,4);
echo "<br>";


