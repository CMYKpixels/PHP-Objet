<?php 
	header('Content-Type: text/html;Charset=UTF8');
	session_start();
	// Inclusion des "model" -> fichiers backend
	include_once('model/operations.php');
	include_once('model/sessionManager.php');

	//On prend le parametre dans l'url qui va déterminer quelle page on regarde
	if( isset($_GET['p']) ) {
		$page = $_GET['p'];
	} else {
		$page = 'login';
	}

	switch( $page ) {
		case 'login':
			sessionControlOffline();
			$error = getErrorsForm();
			include_once('templates/login.php');
			break;
		case 'signup':
			sessionControlOffline();
			$error = getErrorsForm();
			$success = isset($_GET['success']) ? $_GET['success'] : false;
			include_once('templates/signup.php');
			break;
		case 'acceuil':
			sessionControlOnline();
			include_once('templates/accueil.php');
			break;
		case 'deconnexion':
			sessionDestroy();
			break;
		
	}