<?php

/**
 * Les objets ne sont que des instances d'une classe. donc une classe sera une espèce d'empreinte qui peut être
 * réitérée
 */

class Product
{

}

//Instantiation d'une classe grâce au mot clé "new"
$produit1 = new Product();
$produit2 = new Product();

print_r($produit1);
var_dump($produit1);
var_dump($produit2);
