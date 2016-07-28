<?php

/**
 * Class Connexion
 * J'ai créer une nouvelle classe Connexion car normalement les details de connexion doivent être
 * stocker dans un fichier config ainsi on peut réimporter ces classes dans différent projets
 * Comme on ne sait pas encore parser un xml on va attendre le cours sur le parsing et ça serait ici
 * ou on devrait le faire. Ou encore créer un autre objet parseur...
*/
class Connexion
{
    private $connexion=false;

    public function __construct()
    {
        $this->InitiatePDO();
    }

    public function InitiatePDO(){
        if($this->connexion === false){
            try{
                $this->connexion = new PDO("mysql:host=localhost;dbname=blog;charset=UTF8",'root','');
            }catch (PDOException $e){
                print "Error:".$e->getMessage()."<br/>";
                print "Code Error:".$e->getCode()."<br/>";
                die();
            }

        }
    }

    public function getConnexion(){
        return $this->connexion;
    }
}