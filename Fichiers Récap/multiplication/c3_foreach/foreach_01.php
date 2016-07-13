<?php
$characters = ['Michael Jordan', 'Kobe Bryant', 'Lebron James', 'Allen Iverson', 'Shaquille Oneal'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach Hall of Fame</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Hall of fame</h1>
<ul>
<?=
foreach ($characters as t) {
	echo "<li> t </li>";
}
?>
</ul>
</body>
</html>