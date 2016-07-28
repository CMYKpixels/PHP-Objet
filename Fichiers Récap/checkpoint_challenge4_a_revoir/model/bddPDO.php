<?php

/**
 * Ici on déclare notre classe abstraite car ça n'a pas de sens d'instantier ça directement
 * Cette classe aurait pu s'appeler bddPDO car elle implémente l'objet PDO pour son fonctionnement
 */
abstract class bddPDO implements DatabaseInterface{

    protected $lastQuery;
    protected $lastInsertId;
    static $nbCount;
    protected $db;

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb(){
        $connexion = new Connexion();
        $this->db=$connexion->getConnexion();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    /**
     * Ici on est sensé implémenter la logique CRUD
     * Create, Read, Update et delete
     * mais dans notre projet par exemple forum nous n'avons que select et insert
     */

    public function select($query,array $array,$fetchall=false){
        // On peut implémenter ici un compteur de requête pour savoir combien de resource on consomme
        self::$nbCount++;
        $this->lastQuery=$query;
        $pdo = $this->db->prepare($query);
        $pdo->execute($array);
        if($fetchall===true){
            $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $data = $pdo->fetch(PDO::FETCH_ASSOC);
        }

        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }

    public function insert($query,array $array)
    {
        self::$nbCount++;
        $this->lastQuery=$query;
        $pdo = $this->db->prepare($query);
        $pdo->execute($array);
        $this->lastInsertId = $this->db->lastInsertId();
        return $pdo->rowCount();
    }

    public function update($query, array $array)
    {
        // TODO: Implement update() method.
    }

    public function delete($query, array $array)
    {
        // TODO: Implement delete() method.
    }

    public function disconnect(){
        // TODO: dans le cas ou vous êtes maniaque et voulez couper la connexion
    }

    /**
     * Ici on veut implementer une query generique dans laquelle on puisse passer n'importequ'elle requête
     * @param $query
     * @param array $array
     */

    public function query($query, array $array)
    {
        // TODO: Implement query() method.
    }


}