<?php 
	header('Content-Type: text/html;Charset=UTF8');
	session_start();
	// Inclusion des "model" -> fichiers backend
    include_once('autoload.php');
	include_once('model/sessionManager.php');
	include_once('model/helpers.php');
	include_once('model/requestManager.php');

	/**
	 * On prend le parametre dans l'url qui va déterminer quelle page on regarde
	 * J'ai créer un nouveau fichier le request Manager
	 */
	$dbm = new bddManager();

	$page = getPageName();

	switch( $page ) {
		case 'login':
			sessionControlOffline();
			$error = getErrorsForm();
			include_once('templates/login.php');
			break;
		case 'signup':
			sessionControlOffline();
			$error = getErrorsForm();
			$success = getSuccessFromGETRequest();
			include_once('templates/signup.php');
			break;
		case 'acceuil':
			sessionControlOnline();
			$success = getSuccessForm();//en provenance du service serviceNewPost
			$posts = $dbm->getAllPosts(); //objet
			include_once('templates/accueil.php');
			break;
		case 'newPost':
			sessionControlOnline();
			$error = getErrorsForm();
			$myid = getMyId();
			include_once('templates/newPost.php');
			break;
		case 'viewPost':
			sessionControlOnline();
			$error = getErrorsForm();
			$success = getSuccessForm();
			$myid = getMyId();
			$postid = getPostIdFromGETRequest();

            $post = $dbm->getPostById($postid); //objet
			$comments = $dbm->getAllCommentsByPostId($postid); //objet

            include_once('templates/viewPost.php');
			break;
		case 'deconnexion':
			sessionDestroy();
			break;
		
	}