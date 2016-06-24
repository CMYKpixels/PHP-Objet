<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<h1>Hall of Fame</h1>
		<ul>
			<?php
			$characters =['Mickael Jordan','Shaqill o\'neal','Scotty pipen','Kobe Bryan','Karim Abdul jabar'];
			$num_items = count($characters);
			//for ($i = 0; $i < $num_items; $i += 2){
			for ($i=$num_items - 1; $i >= 0 ; $i--) {
				echo "<li>$characters[$i]</li>";
			}
			?>
		</ul>
	</body>
</html>