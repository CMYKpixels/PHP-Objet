<?php

$isError = false;
$missingFields = array();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
SessionManager::setUsernameField($username);
SessionManager::setPasswordField($password);

/* NOTE: On aurait pu créer un validateur dans un objet pour effectuer des contrôles */

if( !isset($username) || empty($username) ) {
    $isError = true;
    $missingFields[] = 'Nom utilisateur';
}
if( !isset($password) || empty($password) ) {
    $isError = true;
    $missingFields[] = 'Mot de passe';
}

if( $isError==true ) {
    $stringError="";
    if( $isError ) {
        $stringError .= "Veuillez remplir les champs suivants : <br />";
        foreach( $missingFields as $fieldName ) {
            $stringError .= $fieldName . "<br />";
        }

        SessionManager::setErrorsForm($stringError);
        Flight::redirect('login');
    }
}else{
    $dbm = new bddManager();
    $res = $dbm->getUserLogin($username,$password);
    if($res==true){
        SessionManager::setUserSession($res);
        SessionManager::unsetFormFields();
        Flight::redirect('login');
    }else{
        $stringError = "Le nom d'utilisateur ou mot de passe incorrect";
        SessionManager::setErrorsForm($stringError);
        Flight::redirect('login');
    }
}