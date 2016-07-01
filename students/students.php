<?php
    session_start();
    header('Content-Type: text/html; charset=UTF8');

    if(isset ($_SESSION['étudiant'])){
        //on définit la session en tant que tableau
        //dans le cas où elle n'est pas encore créée.
        $_SESSION['étudiant']=array();
    }
    if (!empty($_POST)){
        $_SESSION['étudiant'][]=$_POST;
    }

    if(!empty($_SESSION['étudiant'])){
        $students = $_SESSION['étudiant'];
    }
?>

<html>
<head>
    <title>Enregistrement Etudiants</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Formulaire enregistrement étudiants</h1>
<h2>Liste d'étudiants</h2>
<?php if(!empty($students)): ?>
    <table>
        <thead>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Age</th>
        <th>Email</th>
        <th>Langue</th>
        </thead>
        <tbody>
            <?php 
            foreach ($students as $s): ?>
                <tr>
                <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>"Il n'y a pas d'étudiants enregistrés</p>
<?php endif; ?>
<h1>Formulaire</h1>
<form method="post" action="students.php">
    <pre>
        prénom <input type="text" name="prenom">
        nom <input type="text" name="prenom">
        email <input type="text" name="prenom">
        langue <input type="text" name="prenom">
        <input type="submit" name="envoyer">
    </pre>
    </form>
</body>
</html>