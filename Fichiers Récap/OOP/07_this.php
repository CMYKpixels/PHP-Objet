<?php

/**
 * La variable interne $this intervient quand on veut accéder à une propriété ou une méthode au sein
 * d'une même classe
 */
class Product
{
    public $title = 'default product';
    //Generalement quand une méthode est private elle est déclarée avec un underscore
    private $_productName = 'default name';
    public $productReference = '0000';
    public $price = '1000';

    public function displayPrice(){
//        echo $this->price;
        $this->echoSomething($this->price);
    }

    public function echoSomething($var){
        echo $var;
    }

    //Une classe peut retourner des informations comme le ferait une fonction
    public function getProductName(){
        return $this->_productName;
    }
}

$object = new Product();
$object->displayPrice();


// Exemple de retour d'information de la part d'une methode d'une classe
$price = $object->getProductName();
echo '<br/>';
echo $price;

