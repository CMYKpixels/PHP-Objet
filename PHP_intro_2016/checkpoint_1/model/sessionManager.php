<?php


function sessionControlOffline()
{
    if(isset($_SESSION['user'])){
        header('location: index.php?p=acceuil');
        die();
    }
}

function sessionControlOnline()
{
    if(!isset($_SESSION['user'])){
        header('location: index.php?p=login');
        die();
    }
}

function setUserSession($user){
    $_SESSION['user']=$user;
}

function sessionDestroy() {
    unset( $_SESSION['user'] );
    session_destroy();
    header('location: index.php?p=login');
}

function isSessionSet(){
    return isset($_SESSION['user']) ? true : false;
}

function setErrorsForm($error){
    $_SESSION['form']['error']=$error;
}
function setSuccessForm($success){
    $_SESSION['form']['error']=$success;
}

function getErrorsForm() {
    if(isset($_SESSION['form']['error'])){
        $error = $_SESSION['form']['error'];
        unset($_SESSION['form']['error']);
        return $error;
    }
    return false;
}

function getSuccessForm(){
    if(isset($_SESSION['form']['success'])){
        $success = $_SESSION['form']['success'];
        unset($_SESSION['form']['success']);
        return $success;
    }
    return false;
}

function setUsernameField($username){
    $_SESSION['form']['username']=$username;
}
function setPasswordField($password){
    $_SESSION['form']['password']=$password;
}
function setEmailField($email){
    $_SESSION['form']['email']=$email;
}

function getUsernameField(){
    return isset($_SESSION['form']['username']) ? $_SESSION['form']['username'] :'';
}
function getPasswordField(){
    return isset($_SESSION['form']['password']) ? $_SESSION['form']['password'] :'';
}
function getEmailField(){
    return isset($_SESSION['form']['email']) ? $_SESSION['form']['email'] :'';
}
function unsetFormFields(){
    foreach($_SESSION['form'] as $key => $f){
        unset($_SESSION['form'][$key]);
    }
}



