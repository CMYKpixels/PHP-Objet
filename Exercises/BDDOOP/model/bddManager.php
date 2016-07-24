<?php

    class bddManager
    {
        private $db; //Store Database Handler
        protected $email;
        protected $username; //Protected->could be accessed/overwritten
        protected $password; //Same as username
        protected $user; //Stores User DATA

        public function __construct ()
        {
            $this->setDb();
        }

        public function setDb ()
        {
            $this->db = new PDO("mysql:dbname=;host=localhost;dbname=blog;charset=UTF8", 'root', 'root');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

            return $this->db;
        }

        public function encryptPassword ($password)
        {
            return md5($password);
        }

        public function setNewUser ($username, $password, $email)
        {
            $password = $this->encryptPassword($password);
            $query    = 'INSERT INTO user SET username=:username, password=:password, email=:email';
            $pdo      = $this->db->prepare($query);
            $pdo->execute(array('username' => $username, 'password' => $password, 'email' => $email));

            return $pdo->rowCount();
        }

        public function getUserByUsername ($username)
        {

            $query = 'SELECT id,username FROM user WHERE username=:username';
            $pdo   = $this->db->prepare($query);
            $pdo->execute(array(
                              'username' => $username,
                          ));

            return $pdo->fetch(PDO::FETCH_ASSOC);
        }

        public function getUserByEmail ($email)
        {

            $query = 'SELECT id,username FROM user WHERE email=:email';
            $pdo   = $this->db->prepare($query);
            $pdo->execute(array(
                              'email' => $email,
                          ));

            return $pdo->fetch(PDO::FETCH_ASSOC);
        }

        public function getUserLogin ($username, $password)
        {
            
            $password = $this->encryptPassword($password);
            $query    = 'SELECT id,username FROM user WHERE username=:username AND password=:password';
            $pdo      = $this->db->prepare($query);
            $pdo->execute(array(
                              'username' => $username,
                              'password' => $password,
                          ));

            return $pdo->fetch(PDO::FETCH_ASSOC);
        }

        public function setNewPost ($posterid, $title, $description)
        {

            $query = 'INSERT INTO post SET poster_id=:id,date_post=NOW(),title=:title,description=:description';
            $pdo   = $this->db->prepare($query);
            $pdo->execute(array(
                              'id'          => $posterid,
                              'title'       => $title,
                              'description' => $description,
                          ));

            return $pdo->rowCount();
        }


        public function getAllPosts ()
        {

            $query
                 = 'SELECT p.id,p.title,p.description,p.date_post,u.id AS user_id,u.username,COUNT(c.id) AS nb_comment
                FROM USER AS u,post AS p 
                LEFT JOIN COMMENT AS c ON c.post_id=p.id
                WHERE u.id=p.poster_id GROUP BY p.id ORDER BY id DESC';
            $pdo = $this->db->prepare($query);
            $pdo->execute(array());

            return $pdo->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getPostById ($postId)
        {

            $query
                 = 'SELECT p.id,p.title,p.description,p.date_post,u.id AS user_id,u.username,u.email 
              FROM post AS p,user AS u WHERE u.id=p.poster_id AND p.id=:postid ORDER BY id DESC';
            $pdo = $this->db->prepare($query);
            $pdo->execute(array(
                              'postid' => $postId,
                          ));

            return $pdo->fetch(PDO::FETCH_ASSOC);
        }

    }

