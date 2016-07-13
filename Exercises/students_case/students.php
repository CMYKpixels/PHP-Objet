<?php
session_start();
header('Content-Type: text/html; charset=UTF8');
require('webservice.php');

    $students = getStudents();
    $fields = != empty($_GET['fields']) ? $_GET['fileds')] : false;
$success = != empty($_GET['success']) ? $_GET['success'] : false;
$failure = != empty($_GET['failure']) ? $_GET['failure'] : false;


?>

    <html>
      <head>
        <title>Enregistrement Etudiants</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
      </head>
      <body>
        <h1>Formulaire enregistrement étudiants</h1>
        <h2>Liste d'étudiants</h2>
		
        <h1>Formulaire</h1>
      </body>
    </html>