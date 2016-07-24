<?php
    session_start();
    require('../model/operations.php');
    require('../model/sessionManager.php');

    $isError       = FALSE;
    $missingFields = array();

    $email         = $_POST['email'];
    $password      = $_POST['password'];


    if ( !isset($email) || empty($email)) {
        $isError         = TRUE;
        $missingFields[] = 'Email';
    }

    if ( !isset($password) || empty($password)) {
        $isError         = TRUE;
        $missingFields[] = 'Password';
    }

    if ($isError == TRUE) {

        $stringError = "";
        if ($isError) {
            $stringError .= "Merci de vérifier les champs suivants : <br>";
            foreach ($missingFields as $fieldName) {
                $stringError .= $fieldName . "<br>";
            }
            $_SESSION['user']['error'] = $stringError;
            header('location : ../index.php?p=connexion');
            die();
        }
    } else {
        $res = connexionUser($email, $password);
//        var_dump($res);
//        die();
        if ($res > 0) {
            setMessage();
            setUserSessionLogin($res);
            header('location: ../index.php?p=postsList');
            die();
        }
    }



















//    echo 'Service Login loaded';
//
//    $msg='';
//    if(isset($_POST['email'])&&isset($_POST['password'])) {
//
//        var_dump($_POST);
//        die();
//
//        $email    = $_POST['email'];
//        $password = $_POST['password'];
//
//        $user     = connexionUser($email, $password);
//        if ($user != FALSE) {
//            $_SESSION['user'] = $user;
//
//            var_dump($_SESSION);
//            die();
//
//            setcookie('user', serialize($user), time(3600));
//            header("location:../postList.php");
//            die();
//        } else {
//            $msg = "<span class='alert'>Login ou mot de passe incorrects</span>";
//        }
//        echo $msg;
//    }