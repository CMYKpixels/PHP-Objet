<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 28/06/2016
 * Time: 09:30
 */
//var_dump($_GET);
$username = isset($_GET['username'])?
    $_GET['username']:'anonyme';
$email = isset($_GET['email'])?
    $_GET['email']:'non renseigné';

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mustachio Space</title>
</head>
<body>
<?php
    if(isset($_GET['username']) AND isset($_GET['email']));
        for ($i=0; $i < $_GET['email']; $i++);
            echo "  <p>$i</p>";
            echo "<h2>Bienvenue $username</h2>";
            echo "<p>Votre email est : $email</p>";
        endfor;
    else:
        echo "username & email are required";
endif
?>

<form action=""></form>
</body>
</html>