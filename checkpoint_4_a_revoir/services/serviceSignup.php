<?php

$isError = false;
$missingFields = array();

$dbm = new bddManager();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

SessionManager::setUsernameField($username);
SessionManager::setPasswordField($password);
SessionManager::setEmailField($email);

if(empty($username) ) {
    $isError = true;
    $missingFields[] = 'Nom utilisateur vide';
}else{
    $checkUsername = $dbm->getUserByUsername($username); //objet
    if($checkUsername==true){
        $isError = true;
        $missingFields[] = 'Ce nom d\'utilisateur est déjà pris';
    }
}

if(empty($password) ) {
    $isError = true;
    $missingFields[] = 'Mot de passe vide';
}else{
    if(!preg_match('#^[a-zA-Z0-9]{8,16}#',$password)){
        $isError = true;
        $missingFields[] = 'Mot de passe entre 8 et 16 caractères alpha numérique';
    }
}
if(empty($email)){
    $isError = true;
    $missingFields[] = 'Email Vide';
}
if(!empty($email)){
    if(!preg_match('#^[a-z0-9_-]+@[a-z0-9_-]+\.[a-z0-9_-]{2,}$#',$email)){
        $isError = true;
        $missingFields[] = 'Email non valide';
    }else{
        $checkEmail = $dbm->getUserByEmail($email);
        if($checkUsername==true){
            $isError = true;
            $missingFields[] = 'Cet email est déjà présent dans notre base de données';
        }
    }
}

if( $isError==true ) {
    $stringError="";
    if( $isError ) {
        $stringError .= "Erreurs sur les champs suivants : <br />";
        foreach( $missingFields as $fieldName ) {
            $stringError .= $fieldName . "<br />";
        }
        SessionManager::setErrorsForm($stringError);
        Flight::redirect('signup');
    }
}else{
    $userObj = new User(array(
        'username'=>$username,
        'password'=>$password,
        'email'=>$email
    ));
    $res = $dbm->setNewUser($userObj);
    SessionManager::unsetFormFields(); //sessions
    SessionManager::setSuccessForm("Vous avez bien été enregistré");
    if($res==true){
        /**
         * Normalement on devrait envoyer un mail de confirmation avec un token
         * avec la fonction mail($to,$subject,$message,$header);
         */
        Flight::redirect('signup');
    }
}
