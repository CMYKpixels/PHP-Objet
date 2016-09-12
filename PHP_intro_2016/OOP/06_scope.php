<?php
header('Content-Type: text/html;Charset=utf8;');
/**
 * Le scope est défini par trois mots clés: public, protected, private
 * public -> veut dire que la propriété ou méthode est accessible en dehors de la classe
 * au sein de la classe elle-même ET dans les classe qui hérite de notre classe
 * protected -> veut dire que la propriété ou méthode est accessible au sein de la classe
 * même ou d'une classe qui a lien de parenté
 * private->la méthode ou la propriété ne peut accédé qu'au sein de la classe
 */

class Product
{
    public $title = 'default product';
    //Generalement quand une méthode est private elle est déclarée avec un underscore
    protected $_productName = 'default name';
    public $productReference = '0000';
    public $price = '1000';

    public function displayString(){
        echo "Salut je suis une méthode";
    }

    private function _displayPrivateStuff(){
        echo "Je suis un code secret";
    }
}

$object = new Product();
//Pour acceder à la methode il faut utilser notre opérateur flèche
$object->displayString();
echo '<br/>';
echo $object->_productName;
/*echo '<br/>';
echo $object->_productName;
echo '<br/>';
echo $object->_displayPrivateStuff();*/