<?php
$characters = ['Michael Jordan', 'Kobe Bryant', 'Lebron James', 'Allen Iverson', 'Shaquille Oneal'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach Hall of Fame</title>
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
<h1>Hall of fame</h1>
<ul>
    <?php
    $num_items = count($characters);
    //for ($i = 0; $i < $num_items; $i += 2){
    for ($i=$num_items - 1; $i >= 0 ; $i--) {
        echo "<li>$characters[$i]</li>";
    }
    ?>
</ul>
</body>
</html>