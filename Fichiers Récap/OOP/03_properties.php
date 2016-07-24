<?php

/**
 * En POO les variables sont appelées propriétés
 * Elles sont définies au sein de la classe
 */

class Product
{
    var $title = 'default product';
    var $productName = 'default name';
    var $productReference = '0000';
    var $price = 1000;
    var $array = array();
}

$product = new Product();
//On peut acceder á la propriété price grace à l'opérateur "->"
var_dump($product->price);
