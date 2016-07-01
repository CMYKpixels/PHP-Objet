<?php
	$parameters = '?username=shamp&tel=0659856520&number=10';

	if(isset($_POST['nb1']) AND isset($_POST['nb2']) AND isset($_POST['operator'])):

		switch ($_POST['operator']) {
			case '+':
				$result = $_POST['nb1'] + $_POST['nb2'];
				echo "<p>$result</p>";
				break;

			case '-':
				$result = $_POST['nb1'] - $_POST['nb2'];
				echo "<p>$result</p>";
				break;

			case '/':
				$result = $_POST['nb1'] / $_POST['nb2'];
				echo "<p>$result</p>";
				break;

			case '*':
				$result = $_POST['nb1'] * $_POST['nb2'];
				echo "<p>$result</p>";
				break;

			default:
				echo "<p>Error!</p>";
				break;
		}
	endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- 	<a href="myspace.php<?=$parameters?>">Link</a>

	<form action="myspace.php">
		<label>Banane</label>
		<input type="number" id="banane" name="banane">
		<br>
		<label>Pomme</label>
		<input type="number" id="pomme" name="pomme">
		<br>
		<label>Ananas</label>
		<input type="number" id="Ananas" name="ananas">
		<br>
		<input type="submit" value="Order!">
	<form> -->

	<form method="post">
		<input type="number" name="nb1">
		<input type="number" name="nb2">
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/">/</option>
			<option value="*">*</option>
		</select>
		<input type="submit" name="">
	</form>


</body>
</html>