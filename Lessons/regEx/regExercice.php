<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 30/06/2016
     * Time: 11:46
     */
    //    if(isset($_GET['email']) AND isset($_GET['password']));
    //    for ($i=0; $i < $_GET['email']; $i++);
    //    echo "  <p>$i</p>";
    //    echo "<h2>Bienvenue $username</h2>";
    //    echo "<p>Votre email est : $email</p>";
    //    endfor;
    //    else:
    //    echo "username & email are required";
    //    endif;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>RegExercice</title>
</head>
<body>
<form action="congrats.php" method="post">
    <label for="email">Email</label>
    <input name="email" id="email" type="email"><br>
    <?php
        if (preg_match("/^([a-z0-9_\.-]+\@[\da-z\.-]+\.[a-z\.]{2,6})$/", $_POST['email'])) {
            echo 'Email Valide';
        } else {
            echo 'Email invalide"';
        }
    ?>
    <label for="password">Password</label>
    <input name="password" id="password" type="password"><br>
    <?php
        if (preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,16}$/", $_POST['password'])) {
            echo 'Email Valide';
        } else {
            echo 'Password invalide"';
        }
    ?>
    <input type="submit" class="submit"><br>
</form>
</body>
</html>
