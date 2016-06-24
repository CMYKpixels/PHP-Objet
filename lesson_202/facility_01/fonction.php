<?php
//$p = 3.9;
	//déclaration avec le mot fonction
	function leCalculQueJeVeux($p){
		$resultat = $p *2;
		$resultat2 = round($resultat);

		//return est requis pour afficher le résultat
		return $resultat;
		return $resultat2;
	}
		$resultatFonction = leCalculQueJeVeux(3.9);
		//return est requis pour afficher le résultat
		var_dump($resultatFonction);
	$var =3;
	function multiplier(&$var){
        return $var*=2;

    }
	$res = multiplier($var){
		var_dump($var)
	}
?>
