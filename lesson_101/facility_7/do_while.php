<?php 

while ($i < 10 ) {
	$i++

	echo$i.'<br>';

	if ($i %2) {
	continue //ignore la suite de la boule et continue jusqu'à la prochaine itération
	}
	elseif ($i ==6) {
	break;
	}
}