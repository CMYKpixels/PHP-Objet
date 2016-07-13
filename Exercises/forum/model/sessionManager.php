<?php
    function setMessage(){
        $_SESSION['user']['success'] = 'Nouvel Utilisateur créé avec succès !';
    }

    function setUserSessionLogin($user){
        $_SESSION['user']=$user;
    }