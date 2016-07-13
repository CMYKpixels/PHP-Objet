<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 28/06/2016
 * Time: 10:50
 */
header("Content-Type: text/html; charset: UTF-8");
var_dump($_POST);


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="post.php">
    <pre>
        Emprunts <input  type="text" name="principle"/>
        mensualité <input  type="text" name="monthly"/>
        Description <textarea name="desription" cols="30" rows="10"></textarea>
        <input  type="submit" placeholder="Query Input" name="SEND"/>
        <input type="checkbox" option="[]" value="45">
        <input type="checkbox" option="[]" value="69">
            <option value="choix1">choix1</option>
            <option value="choix2">choix2</option>
    </pre>
</form>
</body>
</html>
