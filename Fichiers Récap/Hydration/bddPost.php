<?php

class bddPost{
    private $db;
    public function __construct(){
        $this->setDb();
    }

    public function setDb(){
        $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=UTF8",'root','');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->db=$connexion;
    }

    public function getPostById($id){
        $query = 'SELECT p.id,p.poster_id,p.title,p.description,p.date_post,u.id as user_id,u.username,u.email 
              FROM post AS p,user AS u WHERE u.id=p.poster_id AND p.id=:postid ORDER BY id DESC';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'postid'=>$id
        ));
        return new Post($pdo->fetch(PDO::FETCH_ASSOC));
    }

    public function getAllPost(){
        $query = 'SELECT p.id,p.poster_id,p.title,p.description,p.date_post,u.id AS user_id,u.username,COUNT(c.id) AS nb_comment
            FROM USER AS u,post AS p 
            LEFT JOIN COMMENT AS c ON c.post_id=p.id
            WHERE u.id=p.poster_id GROUP BY p.id ORDER BY id DESC';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array());
        $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        foreach($data as $d){
            $array[] = new Post($d);
        }
        return $array;
    }

    public function setNewPost(Post $post){
        $query = 'INSERT INTO post SET poster_id=:id,date_post=NOW(),title=:title,description=:description';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'id'=>$post->getId(),
            'title'=>$post->getTitle(),
            'description'=>$post->getDescription()
        ));
        return $pdo->rowCount();
    }


}