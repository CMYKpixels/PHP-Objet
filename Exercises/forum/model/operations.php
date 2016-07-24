<?php
    function getConnexion ()
    {
        $connexion = new PDO('mysql:host=localhost; dbname=blog; charset:UTF8', 'root', 'root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

        return $connexion;
    }

    function connexionUser ($email, $password)
    {
        $connexion = getConnexion();
        // On effectue la requête SQL
        $query = "SELECT * FROM users WHERE email=:email AND password=:password";
        $pdo   = $connexion->prepare($query);

        $pdo->execute(array(
                          'email'    => $email,
                          'password' => $password,
                      ));

        $user = $pdo->fetchAll(PDO::FETCH_ASSOC);

        if ($user) {
            return $user;
        } else {
            return FALSE;
        }
    }

    function disconnexionUser ()
    {
        unset ($_SESSION['aid']);
        session_destroy();
    }

    function logged ()
    {
        return isset($_session['aid']) && $_session['aid'];
    }

    function newUser ($userid, $username, $password, $email)
    {
        $connexion = getConnexion();
        $query      = 'INSERT INTO users SET userid=:userid, username=:username, password=:password, email=:email';
        $pdo        = $connexion->prepare($query);
        $pdo->execute(array(
                          'userid'   => $userid,
                          'username' => $username,
                          'password' => $password,
                          'email'    => $email
                      ));

        return $pdo->rowCount();
    }

    function newPost ($postid, $userid, $username, $title, $content)
    {
        $connexion = getConnexion();
        $query      = 'INSERT INTO posts SET postid=:postid, userid=:userid, author=:username, title=:title, content=:content';
        $pdo        = $connexion->prepare($query);
        $pdo->execute(array(
                          'postid'   => $postid,
                          'userid'   => $userid,
                          'username' => $username,
                          'title'    => $title,
                          'content'  => $content
                      ));

        return $pdo->rowCount();
    }