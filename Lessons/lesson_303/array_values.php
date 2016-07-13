<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 27/06/2016
 * Time: 11:00
 */

//array values
$x = array(1, 2, 3, 4, 5);
//avant
echo var_dump($x)."<br>";
unset($x[3]);
$x = array_values($x);
//après
//pratique pour ne pas avoir de trous dans son tableau
echo var_dump($x)."<br>";
echo "<br>";

//array push
//permet d'insérer un tableau dans l'un des index d'un autre tableau
$array = array(1,2,3,4);
$array2 = array(45,46,47,48);
array_push($array, $array2);

echo var_dump($array)."<br>";
echo "<br>";

//array combine
//permet d'indexer un tableau en tant que clé
// avec un autre tableau en valeurs.
$array = array(1,2,3,4,5);
$array2 = array(45,46,47,48,49);
$c = array_combine($array, $array2);
echo var_dump($c)."<br>";
echo "<br>";


//array merge
//permet de fusionner 2 tableaux
$array = array(1,2,3,4,5);
echo "<br>";
$array2 = array(45,46,47,48);
echo "<br>";
$c = array_merge($array, $array2);
echo var_dump($c)."<br>";


//array
//
$arr= ['prof'=>'Alfonso', 'elèves'=>'Julien'];
//array_key_exist -> recherche de clé;
var_dump(array_key_exists('prof',$arr));//vrai
//in_array équivalent de array_search -> recherche une valeur
//retourne vrai/faux, array_search renvoie la valeur
$result= in_array('prof',$arr);
echo "<br>";
$result2 = array_search('Alfonso',$arr);
echo "<br>";
echo var_dump($result)."<br>";
echo var_dump($result2)."<br>";