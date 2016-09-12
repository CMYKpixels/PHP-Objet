<?php
/**
 * Le contructeur est une méthode qui est appelée automatiquement à chaque fois qu'une classe est instanciée
 * Ceci est une méthode magique nous verrons plus tard ce que c'est
 * la méthode __contruct() est le constructeur
 */

class User{
    private $_userId;
    public function __construct($id){
        $this->_userId = $id;
    }

    public function getId()
    {
        return $this->_userId;
    }

}

$object = new User(5);
echo $object->getId();

