<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Forum PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
		<div id="body-wrapper">
			<div class="page-header">
				<h2>Mon Forum</h2>
				<?php if(SessionManager::isSessionSet()): ?>
				<div class="btn-group" role="group" aria-label="...">
					<a href="accueil"><button type="button" class="btn btn-info">Liste de poste</button></a>
					<a href="newPost"><button type="button" class="btn btn-info">New Post</button></a>
					<a href="deconnexion"><button type="button" class="btn btn-warning">Deconnexion</button></a>
				</div>
				<?php else: ?>
				<div class="btn-group" role="group" aria-label="...">
					<a href="login"><button type="button" class="btn btn-default">Login</button></a>
					<a href="signup"><button type="button" class="btn btn-default">Sing up</button></a>
				</div>
				<?php endif; ?>
			</div>
			
			<div id="content">