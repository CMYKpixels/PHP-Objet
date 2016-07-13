<?php
session_start();
header('Content-Type: text/html; charset=UTF8');
require('operations.php');

$students = getStudents();
$fields = !empty($_GET['fields']) ? $_GET['fields'] : false;
$success = !empty($_GET['success']) ? $_GET['success'] : false;
$failure = !empty($_GET['failure']) ? $_GET['failure'] : false;

?>
    <html>
      <head>
        <title>Enregistrement Etudiants</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
      </head>
      <body>
        <h1>Formulaire enregistrement étudiants</h1>
        <h2>Liste d'étudiants</h2>
        <?php if (!empty($students)): ?>
          <table>
            <thead>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Age</th>
              <th>Email</th>
              <th>Langue</th>
            </thead>
            <tbody>
              <?php foreach($students as $s): ?>
              <tr>
                <td><?=$s['prenom']?></td>
                <td><?=$s['nom']?></td>
                <td><?=$s['age']?></td>
                <td><?=$s['email']?></td>
                <td><?=$s['langue']?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
            <p>Il n'y a pas d'étudiants enregistrés</p>
        <?php endif; ?>
        <h1>Formulaire</h1>
        <form method="post" action="service.php">
          <pre>
            prenom  <input type="text" name="prenom" />
            nom     <input type="text" name="nom" />
            age     <input type="text" name="age" />
            email   <input type="text" name="email" />
            langue  <input type="text" name="langue" />
            <input type="submit" name="envoyer" />
          </pre>
        </form>
        <pre>
          <?php if(!empty($fields)): ?>
          <h2 style="color: red;">Tout les champs doivent être complété</h2>
          <?php endif; ?>
          <?php if(!empty($success)): ?>
            <h1 style="color: green;">Nouvel étudiant ajouté</h1>
          <?php endif; ?>
          <?php if(!empty($failure)): ?>
            <h2 style="color: red;">Tout les champs doivent être complété</h2>
          <?php endif; ?>
        </pre>
      </body>
    </html>