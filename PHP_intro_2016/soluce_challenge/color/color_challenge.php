<?php
if(!empty($_POST)){
    $fond=$_POST['fond'];
    $texte=$_POST['texte'];
    $expir=time() + 2*30*24*3600;
    setcookie("fond",$fond,$expir);
    setcookie("texte",$texte,$expir);
}else if(isset($_COOKIE['fond']) && isset($_COOKIE['texte']) )
{
    $fond=$_COOKIE['fond'];
    $texte=$_COOKIE['texte'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Couleurs du site</title>
    <style type="text/css" >
        <!--
        body{background-color: <?php echo $fond ?> ; color: <?php echo $texte ?> ;}
        legend{font-weight:bold;font-family:cursive;}
        label{font-weight:bold;font-style:italic;}
        -->
    </style>
</head>
<body>
<form method="post" action="color_challenge.php">
    <fieldset>
        <legend>Choisissez vos couleurs</legend>
        <label>Couleur de fond
            <input type="text" name="fond" />
        </label><br /><br />
        <label>Couleur de texte
            <input type="text" name="texte" />
        </label><br />
        <input type="submit" value="Envoyer" />&nbsp;&nbsp;
        <input type="reset" value="Effacer" />
    </fieldset>
</form>
<p>Essayer avec font #597cff et #cdfdff et couleur de fond #cdfdff</p>
</body>
</html>