<?php

class Product
{
    var $title = 'default product';
    var $productName = 'default name';
    var $productReference = '0000';
    var $price = '1000';
}

$product = new Product();
$product2 = new Product();
// On peut affecter des valeurs différentes aux différents objects à travers du même opérateur flèche
//Sachez que le fait d'attribuer des valeurs comme ceci est une mauvaise pratique. et par conséquent
//elle n'est jamais utilisée
$product->title = 'incredible product';
$product2->title = 'This is a shitty product';

//important on ne met pas le dollar en face de la propriété quand on l'appel
echo $product->title;
echo '<br />';
echo $product2->title;
