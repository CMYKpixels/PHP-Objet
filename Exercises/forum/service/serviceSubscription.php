<?php
    session_start();
    require('../model/operations.php');
    require('../model/sessionManager.php');

    $isError       = FALSE;
    $missingFields = array();

    $email         = $_POST['email'];
    $username      = $_POST['username'];
    $password      = $_POST['password'];
    $passwordCheck = $_POST['passwordCheck'];

    if ( !isset($email) || empty($email)) {
        $isError         = TRUE;
        $missingFields[] = 'Email';
    }

    if ( !isset($username) || empty($username)) {
        $isError         = TRUE;
        $missingFields[] = 'Username';
    }



    if ( !isset($password) || empty($password)) {
        $isError         = TRUE;
        $missingFields[] = 'Password';
    }


    if (isset($passwordCheck) && ($password != $passwordCheck)) {
        $isError         = TRUE;
        $missingFields[] = 'Password Check';
    }


    if ($isError == TRUE) {

        $stringError = "";
        if ($isError) {
            $stringError .= "Merci de vérifier les champs suivants : <br>";
            foreach ($missingFields as $fieldName) {
                $stringError .= $fieldName . "<br>";
            }
            $_SESSION['new_user']['error'] = $stringError;
            header('location : ../index.php?p=inscription');
            die();
        }
    } else {
        $res = newUser($userid, $username, $password, $email);
//        var_dump($res);
//        die();
        if ($res > 0) {
            setMessage();
            header('location: ../index.php?p=postsList');
            die();
        }
    }