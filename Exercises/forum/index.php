<?php
	header('Content-Type: text/html;Charset=UTF8');
	session_start();
	// Inclusion des fonctions
	include_once('model/operations.php');
    


    
//	die("here");/**/
	//On demande quelle est l url
	if( isset($_GET['p']) ) {
        $page = $_GET['p'];
    } else {
        $page = 'accueil';
    }


	// Content
	switch( $page ) {
        case 'accueil':
            include_once('template/accueil.php');
            break;
        case 'connexion':
            include_once('template/connexion.php');
            break;
        case 'inscription' :
            include_once('template/inscription.php');
            break;
        case'postsList':
            var_dump($_SESSION);
            include_once('template/postsList.php');
            break;
        
    }
