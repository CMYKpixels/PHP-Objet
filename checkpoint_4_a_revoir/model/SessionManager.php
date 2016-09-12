<?php


class SessionManager{

    private $logged_in=false;
    public $user_id;

    static public function SessionStart(){
        session_start();
    }

    public static function sessionControlOffline()
    {
        if(self::isSessionSet()){
            Flight::redirect('/accueil');
        }
    }

    public static function sessionControlOnline()
    {
        if(self::isSessionSet() == false){
            Flight::redirect('/login');
        }
    }

    public static function setUserSession($user){
        $_SESSION['user']=serialize($user);
    }

    public static function getMyId(){
        $unser = unserialize($_SESSION['user']);
        return $unser->getId();
    }

    public static function sessionDestroy() {
        unset( $_SESSION['user'] );
        session_destroy();
    }

    public static function isSessionSet(){
        return isset($_SESSION['user']) ? true : false;
    }

    public static function setErrorsForm($error){
        $_SESSION['form']['error']=$error;
    }
    public static function setSuccessForm($success){
        $_SESSION['form']['success']=$success;
    }

    public static function getErrorsForm() {
        if(isset($_SESSION['form']['error'])){
            $error = $_SESSION['form']['error'];
            unset($_SESSION['form']['error']);
            return $error;
        }
        return false;
    }

    public static function isErrorForm(){
        return isset($_SESSION['form']['error']) ? true : false;
    }

    public static function getSuccessForm(){
        if(isset($_SESSION['form']['success'])){
            $success = $_SESSION['form']['success'];
            unset($_SESSION['form']['success']);
            return $success;
        }
        return false;
    }

    public static function isSuccessForm(){
        return isset($_SESSION['form']['success']) ? true : false;
    }

    public static function setUsernameField($username){
        $_SESSION['form']['username']=$username;
    }
    public static function setPasswordField($password){
        $_SESSION['form']['password']=$password;
    }
    public static function setEmailField($email){
        $_SESSION['form']['email']=$email;
    }

    public static function getUsernameField(){
        return isset($_SESSION['form']['username']) ? $_SESSION['form']['username'] :'';
    }
    public static function getPasswordField(){
        return isset($_SESSION['form']['password']) ? $_SESSION['form']['password'] :'';
    }
    public static function getEmailField(){
        return isset($_SESSION['form']['email']) ? $_SESSION['form']['email'] :'';
    }
    public static function unsetFormFields(){
        foreach($_SESSION['form'] as $key => $f){
            unset($_SESSION['form'][$key]);
        }
    }

    /**
     * Pour le formulaire poster un nouveau sujet
     */
    public static function setSessionTitle($title){
        $_SESSION['form']['title']=$title;
    }
    public static function setSessionDescription($description){
        $_SESSION['form']['description']=$description;
    }

    public static function getSessionTitle(){
        return isset($_SESSION['form']['title']) ? $_SESSION['form']['title'] : '';
    }
    public static function getSessionDescription(){
        return isset($_SESSION['form']['description']) ? $_SESSION['form']['description'] : '';
    }

    public static function setSessionComment($comment){
        $_SESSION['form']['comment']=$comment;
    }
    public static function getSessionComment(){
        return isset($_SESSION['form']['comment']) ? $_SESSION['form']['comment'] : '';
    }



    public static function kickOut(){
        self::sessionDestroy();
        Flight::redirect('login');
    }
}