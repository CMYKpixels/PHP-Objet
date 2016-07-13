<?php
/**
 * @return PDO
 * retourne l'objet pdo que l'on nomme connexion
 */
function getConnexion(){
    $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=UTF8",'root','');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}

function encryptPassword($password){
    return md5($password);
}

function setNewUser($username,$password,$email){
    $connexion = getConnexion();
    $password = encryptPassword($password);
    $query = 'INSERT INTO user SET username=:username, password=:password, email=:email';
    $pdo = $connexion->prepare($query);
    $pdo->execute(array('username'=>$username,'password'=>$password,'email'=>$email));
    return $pdo->rowCount();
}

function getUserByUsername($username)
{
    $connexion = getConnexion();
    $query = 'SELECT id,username FROM user WHERE username=:username';
    $pdo = $connexion->prepare($query);
    $pdo->execute(array(
       'username'=>$username
    ));
    return $pdo->fetch(PDO::FETCH_ASSOC);
}

function getUserByEmail($email){
    $connexion = getConnexion();
    $query = 'SELECT id,username FROM user WHERE email=:email';
    $pdo = $connexion->prepare($query);
    $pdo->execute(array(
        'email'=>$email
    ));
    return $pdo->fetch(PDO::FETCH_ASSOC);
}

function getUserLogin($username,$password){
    $connexion = getConnexion();
    $password = encryptPassword($password);
    $query = 'SELECT id,username FROM user WHERE username=:username AND password=:password';
    $pdo = $connexion->prepare($query);
    $pdo->execute(array(
        'username'=>$username,
        'password'=>$password
    ));
    return $pdo->fetch(PDO::FETCH_ASSOC);
}