<?php
$nom      = "Alsina";
$nickname = "CMYKpixels";
$prenom   = "Julien";
$skills   = "PHP/JavaScript"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">    
    <title>Facility N°.2</title>
</head>

<body>
<?php include("header.php"); ?>

<h1 class="title">Bonjour <?php echo $nickname; ?> </h1>
<hr>
<h2 class="subtitle">Bienvenue <?= $prenom.' '.$nickname.' '.$nom; ?></h2>


<?php include("footer.php"); ?>
</body>

</html>
