<?php 
	header('Content-Type: text/html;Charset=UTF8');
	session_start();
	// Inclusion des fonctions
	include_once('operations.php');


//	die("here");/**/
	//On demande quelle est l url
	if( isset($_GET['p']) ) {
		$page = $_GET['p'];
	} else {
		$page = 'accueil';
	}


	// Content
	switch( $page ) {
		case 'annonces':
			$resultats = getAnnonces();
			include_once('templates/annonces.php');
			break;

		case 'annonce':
			if(!empty($_GET['id'])){
				$id = $_GET['id'];
				$annonce = getAnnonce($id);
			}
			include_once('templates/annonce.php');
			break;

		case 'nouvelle':
			include_once('templates/nouvelle.php');
			break;

		case 'accueil':
			include_once('templates/accueil.php');
			break;
	}