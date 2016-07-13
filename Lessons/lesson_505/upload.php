<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 29/06/2016
     * Time: 11:08
     */

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
</head>
<body>
<form action="uploader.php" enctype="multipart/form-data" method="post">
    Choisissez un fichier : <input type="file" name="uploadFile">
    <br>
    <input type="submit" value="uploadFile">
</form>
</body>
</html>
