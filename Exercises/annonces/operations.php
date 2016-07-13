<?php

	/*
	 * Connecte la base de données et retourne l'object de la bdd
	 */
    function getConnexion(){
        $connexion = new PDO("mysql:host=localhost;dbname=annonces;charset=UTF8",'root','root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $connexion;
    }


/** CONNEXION */

	/*
	 * Connecte un utilisateur en fonction des données contenues dans $_POST
	 */
	function connexionUtilisateur() {
        $connexion = getConnexion();

        // On effectue la requête SQL
        $query = "SELECT * FROM utilisateurs WHERE login=:login AND password=:password";
        $pdo = $connexion->prepare($query);
        $pdo->execute(array('login'=>$_POST['login'],'password'=>$_POST['motdepasse']));

        $utilisateur = $pdo->fetchAll(PDO::FETCH_ASSOC);

        if( $utilisateur ) {
            return $utilisateur;
        } else {
            return false;
        }
    }

	/*
	 * Déconnecte l'utilisateur en supprimant les données de session
	 */
	function deconnexionUtilisateur() {
        unset( $_SESSION['aid'] );
        session_destroy();
    }


	/*
	 * Return true si l'utilisateur est connecté
	 */
	function estConnecte() {
        return isset($_SESSION['aid']) && $_SESSION['aid'];
    }



/***** ANNONCES ***/


    function nouvelleAnnonce($username,$titre,$prix,$description){
        $connexion = getConnexion();
        $query = 'INSERT INTO annonces SET username=:username, titre=:titre, description=:description,
                  prix=:prix';
        $pdo = $connexion->prepare($query);
        $pdo->execute(array('username'=>$username,'titre'=>$titre,'prix'=>$prix,'description'=>$description));

        return $pdo->rowCount();
    }


	function editerAnnonce($id,$titre,$prix,$description,$username) {
        $connexion = getConnexion();
        $query = "UPDATE annonces SET username=:username, titre=:titre, description=:description,
                  prix=:prix WHERE id=:id";
        $pdo = $connexion->prepare($query);
        $pdo->execute(array(
            'id'=>$id,
            'titre'=>$titre,
            'prix'=>$prix,
            'description'=>$description,
            'username'=>$username
        ));

        return $pdo !== false ? true : false;
    }


	function supprimerAnnonce( $id ) {
        $connexion = getConnexion();
        $query = "DELETE FROM annonces WHERE id=:id";
        $pdo = $connexion->prepare($query);
        $pdo->execute(array(
           'id'=>$id
        ));
        return $pdo !== false ? true : false;
    }


	function getAnnonce( $idAnnonce ) {
        $connexion = getConnexion();
        $query = "SELECT * FROM annonces WHERE id = :id";
        $pdo = $connexion->prepare($query);
        $pdo->execute(array('id'=>$idAnnonce));
        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAnnonces()
    {
        $connexion = getConnexion();
        // On effectue la requête SQL
        $query = "SELECT * FROM Annonces ORDER BY titre DESC";
        $pdo = $connexion->prepare($query);
        $pdo->execute(array());
        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }







?>