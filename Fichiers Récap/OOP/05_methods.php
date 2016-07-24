<?php
header('Content-Type: text/html;Charset=utf8;');
/**
 * Les fonctions en programmation orientée objet sont appelées methodes
 */

class Product
{
    var $title = 'default product';
    var $productName = 'default name';
    var $productReference = '0000';
    var $price = '1000';

    /** Methode qui est déclarée avec le mot clé "function" */
    function displayString(){
        echo "Salut je suis une méthode";
    }

    function displayNumer($number){
        echo $number;
    }
}

$object = new Product();
//Pour acceder à la methode il faut utilser notre opérateur flèche
$object->displayString();

echo '<br/>';
$object->displayNumer(2);