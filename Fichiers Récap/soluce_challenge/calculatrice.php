<?php

$a = (int) isset($_POST['a']) ? $a = $_POST['a']: 'vide';
$calc = isset($_POST['calc']) ? $calc = $_POST['calc']: 'vide';
$b = (int) isset($_POST['b']) ? $ab = $_POST['b']: 'vide';

$result = '';

if (isset($_POST['a']) && isset($_POST['calc']) && isset($_POST['b'])) {
	if ($calc == '+') {
		$result = $a + $b;
	} else if ($calc == '-') {
		$result = $a - $b;
	} else if ($calc == '*') {
		$result = $a * $b;
	} else {
		$result = $a / $b;
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Calculatrice</title>
</head>
<body>

	<form method="post" action="05-calculatrice.php">
		<input type="number" name="a" placeholder="Votre chiffre" />

		<!-- <label for="calc">Opération</label> -->
		<select name="calc">
			<option value="+" selected>+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>

		<input type="number" name="b" placeholder="Votre chiffre"/>

		<input type="submit" value="Calculer" />
	</form>

	<?php
	if (!empty($result)) {
		echo "<p>Résultat : <strong>$result</strong>  <small>($a $calc $b)</small></p>";
	}
	?>
</body>
</html>