<?php

var_dump($_POST);

if (isset($_POST)){
	$a = (int) isset($_POST['a'])?$_POST['a']:'rien';
	$b = (int) isset($_POST['b'])?$_POST['b']:'rien';
	$operateur = isset($_POST['operateur'])?$_POST['operateur']:'rien';
}



$calcul = 0;
switch ($operateur) {
	case 'addition':
		$calcul = $a+$b;
		break;

		case 'soustraire':
		$calcul = $a-$b;
		break;

		case 'multiplier':
		$calcul = $a*$b;
		break;

		case 'diviser':
		$calcul = $a/$b;
		break;
}
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

    <h3>Méthode $_POST</h3>
    <form action="calcul.php" method="post">
    	<pre>
    		<div>
    			<label for="name">A:</label>
    			<input type="text" name="a" id="name" value="" tabindex="1" />
    		</div>

    		<div>
    			<label for="name">B:</label>
    			<input type="text" name="b" id="name" value="" tabindex="1" />
    		</div>
    		<div>
    			<label for="select-choice">Opérateur:</label>
    			<select name="operateur" id="select-choice">
    				<option value="addition">Addition</option>
    				<option value="soustraire">Soustraction</option>
    				<option value="multiplier">Multiplication</option>
    				<option value="diviser">Division</option>
    			</select>
    		</div>

    		<div>
    			<input type="submit" value="Submit" />
    		</div>
    	</pre>
    </form>
<p>Résultat <?=$calcul?></p>

    </body>
</html>

