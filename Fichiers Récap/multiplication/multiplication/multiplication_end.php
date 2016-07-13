<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Utilisation de Boucles</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Table de Multiplication</h1>
<table>
    <?php
    // Creer la première ligne d'entête
    echo '<tr>';
    echo '<th></th>';
    for ($col = 1; $col <= 12; $col++) :
        echo "<th>$col</th>";
    endfor;
    echo '</tr>';
    // Créer les lignes restantes
    for ($row = 1, $col = 1; $row <= 12; $row++) :
        echo '<tr>';
        // La premiere cellules est un th
        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= 12) {
            echo '<td>' . $row * $col++ . '</td>';
        }
//        for($col=1;$col<=12;$col++){
//            echo '<td>' . $row * $col . '</td>';
//        }
        echo '</tr>';
        // Reseter $col à la fin de chaque ligne pour la boucle while
        $col = 1;
    endfor;
    ?>
</table>
</body>
</html>