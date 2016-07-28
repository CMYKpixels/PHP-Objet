<?php

class bddManager extends bddTools{
    public function __construct(){
        parent::__construct();
    }

    /** USER METHODS **/
    public function setNewUser(User $user){
        $password = $this->encryptPassword($user->getPassword());
        $query = 'INSERT INTO user SET username=:username, password=:password, email=:email';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'username'=>$user->getUsername(),
            'password'=>$password,
            'email'=>$user->getEmail()
        ));
        return $pdo->rowCount();
    }


    public function getUserLogin($username,$password){
        $password = $this->encryptPassword($password);
        $query = 'SELECT id,username,email FROM user WHERE username=:username AND password=:password';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'username'=>$username,
            'password'=>$password
        ));
        return new User($pdo->fetch(PDO::FETCH_ASSOC));
    }

    public function getUserLogin2($username,$password){
        $password = $this->encryptPassword($password);
        $query = 'SELECT id,username,email FROM user WHERE username=:username AND password=:password';
        $array = array(
            'username'=>$username,
            'password'=>$password
        );
        $data = $this->select($query,$array);
        if($data){
            return new User($data);
        }else{
            return false;
        }
    }

    private function encryptPassword($password){
        return md5($password);
    }


    public function getUserByUsername($username)
    {
        $query = 'SELECT id,username FROM user WHERE username=:username';
        $array = array(
            'username'=>$username
        );
        $data = $this->select($query,$array);
        if(!empty($data)){
            return new User($data);
        }else{
            return false;
        }
    }

    public function getUserByEmail($email){
        $query = 'SELECT id,username FROM user WHERE email=:email';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'email'=>$email
        ));
        $data = $pdo->fetch(PDO::FETCH_ASSOC);
        if(!empty($data)){
            return new User($data);
        }else{
            return false;
        }
    }

    /** POST METHODS */
    public function getPostById($id){
        $query = 'SELECT p.id,p.poster_id,p.title,p.description,p.date_post,u.id as user_id,u.username,u.email
              AS email_user
              FROM post AS p,user AS u WHERE u.id=p.poster_id AND p.id=:postid ORDER BY id DESC';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'postid'=>$id
        ));
        return new Post($pdo->fetch(PDO::FETCH_ASSOC));
    }

    public function getAllPosts(){
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
        $query = 'INSERT INTO post SET poster_id=:posterid,date_post=NOW(),title=:title,description=:description';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'posterid'=>$post->getPosterId(),
            'title'=>$post->getTitle(),
            'description'=>$post->getDescription()
        ));
        return $pdo->rowCount();
    }


    /** COMMENT METHODS */
    public function getAllCommentsByPostId($postId){
        $query = 'SELECT c.id,c.date_com,c.comment,u.id as commentator_id,u.username,u.email 
              FROM comment AS c,user AS u
              WHERE u.id=c.commentator_id AND c.post_id=:postId ORDER BY c.id ASC';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'postId'=>$postId
        ));
        $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        foreach($data as $d){
            $array[] = new Comment($d);
        }
        return $array;
    }


    public function setNewComment(Comment $comment){
        $query = 'INSERT INTO comment SET commentator_id=:commentatorId, post_id=:postId, date_com=NOW(),
                  comment=:comment';
        $pdo = $this->db->prepare($query);
        $pdo->execute(array(
            'commentatorId'=>$comment->getCommentatorId(),
            'postId'=>$comment->getPostId(),
            'comment'=>$comment->getComment()
        ));
        return $pdo->rowCount();
    }

    public function charge($id=0)
    {
        if($id==0){
            $array=array();
            $string="";
        }else{
            $string="and p.user_id=:Userid";
            $array =array('Userid'=>$id);
        }
        $query="query principale $string";



    }

}