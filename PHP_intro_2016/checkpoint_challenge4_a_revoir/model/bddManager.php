<?php

class bddManager extends bddPDO{

    /**
     * petite astuce pour insérer des valeurs tableau dans les sql query string
     * J'ai créer les attributs xxxTable ci-dessous
     * Ça peut paraître plus long mais c'est pas inusuelle de changer le nom de sa table
     * Je vous laisse imaginer le mal de tête quand vous avez au moins une quinzaine de
     * requêtes
     */
    protected $userTable="user";
    protected $postTable="post";
    protected $commentTable="comment";

    public function __construct(){
        parent::__construct();
    }

    /** USER METHODS **/
    public function setNewUser(User $user){
        $password = $this->encryptPassword($user->getPassword());
        $query = "INSERT INTO $this->userTable SET username=:username, password=:password, email=:email";
        $array = array(
            'username'=>$user->getUsername(),
            'password'=>$password,
            'email'=>$user->getEmail()
        );
        return $this->insert($query,$array);
    }

    public function getUserLogin($username,$password){
        $password = $this->encryptPassword($password);
        $query = "SELECT id,username,email FROM $this->userTable WHERE username=:username AND password=:password";
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
        $query = "SELECT id,username FROM $this->userTable WHERE username=:username";
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
        $query = "SELECT id,username FROM $this->userTable WHERE email=:email";
        $array = array(
            'email'=>$email
        );
        $data = $this->select($query,$array);
        if(!empty($data)){
            return new User($data);
        }else{
            return false;
        }
    }

    /** POST METHODS */
    public function getPostById($id){
        $query = "SELECT p.id,p.poster_id,p.title,p.description,p.date_post,u.id as user_id,u.username,u.email
              AS email_user
              FROM $this->postTable AS p,$this->userTable AS u WHERE u.id=p.poster_id AND p.id=:postid 
              ORDER BY id DESC";
        $array = array(
            'postid'=>$id
        );
        $data = $this->select($query,$array);
        if(!empty($data)){
            return new Post($data);
        }else{
            return false;
        }
    }

    public function getAllPosts(){
        $query = "SELECT p.id,p.poster_id,p.title,p.description,p.date_post,u.id AS user_id,u.username,COUNT(c.id) AS nb_comment
            FROM $this->userTable AS u,$this->postTable AS p 
            LEFT JOIN COMMENT AS c ON c.post_id=p.id
            WHERE u.id=p.poster_id GROUP BY p.id ORDER BY id DESC";
        $array = array();
        $data = $this->select($query,$array,true);
        $array = array();
        if($data!==false){
            foreach($data as $d){
                $array[] = new Post($d);
            }
            return $array;
        }else{
            return false;
        }
    }

    public function setNewPost(Post $post){
        $query = "INSERT INTO $this->postTable SET poster_id=:posterid,date_post=NOW(),title=:title,description=:description";
        $array = array(
            'posterid'=>$post->getPosterId(),
            'title'=>$post->getTitle(),
            'description'=>$post->getDescription()
        );
        return $this->insert($query,$array);
    }


    /** COMMENT METHODS */
    public function getAllCommentsByPostId($postId){
        $query = "SELECT c.id,c.date_com,c.comment,u.id as commentator_id,u.username,u.email 
              FROM $this->commentTable AS c,user AS u
              WHERE u.id=c.commentator_id AND c.post_id=:postId ORDER BY c.id ASC";
        $array = array(
            'postId'=>$postId
        );
        $data = $this->select($query,$array,true);
        if($data !== false){
            $array = array();
            foreach($data as $d){
                $array[] = new Comment($d);
            }
            return $array;
        }else{
            return false;
        }
    }


    public function setNewComment(Comment $comment){
        $query = "INSERT INTO $this->commentTable SET commentator_id=:commentatorId, post_id=:postId, date_com=NOW(),
                  comment=:comment";
        $array = array(
            'commentatorId'=>$comment->getCommentatorId(),
            'postId'=>$comment->getPostId(),
            'comment'=>$comment->getComment()
        );
        return $this->insert($query,$array);
    }

}