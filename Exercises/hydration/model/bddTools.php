<?php


abstract class bddTools{

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb(){
        $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=UTF8",'root','root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->db=$connexion;
    }

    public function select($query,array $array){
        $pdo = $this->db->prepare($query);
        $pdo->execute($array);
        $data = $pdo->fetch(PDO::FETCH_ASSOC);

        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }
}