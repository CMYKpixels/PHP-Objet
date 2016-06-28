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
	};

//Fonctions Anonymes
function func1(Closure $closure){
    $closure();
};
function func2(Callable $callback){
    $callback();
};

$function = function()
{
    echo "<br>Fuck You World<br>";
};
//////////////////////////////////////////////////
func1($function);
func2($function);

$message = 'hello';
$var = 256;

//Noter l'utilisation de "use"
$example = function () use ($message, $var2){
    var_dump($message);
    var_dump($var2);
};
echo $example();
//////////////////////////////////////////////////
//$var = 'string';
//$var = array(8);
$var = 4;

//Changer le type d'une variable
function testFunction($var) {
    $var2 = (int) $var;
//    $var2 = (int) $var;
    return $var2;
    echo "<br>";
};

$result = testFunction($var);
echo "<br>";
//////////////////////////////////////////////////
function valeurParDefaut($var2=Null) //true/false...
{
    return $var2;
    echo "<br>";
}
$result = valeurParDefaut();

var_dump($result);
echo "<br>";
die();
//////////////////////////////////////////////////
function mean() {
    $sum = 0;
    //nombres d'arguments passés
    $size = func_num_args();
    for($i = 0; $i < $size; $i++) {
        //piocher les arguments
        $sum += func_get_arg($i);
        echo "<br>";
    }
    $average = $sum / $size;
    return $average;
}
$mean = mean(96,93,98,98);
var_dump($mean);
echo "<br>";
///////////////////////////////////
//retourner la variable ://///////
//$string = 'example';///////////
//->Fonction Anonyme;///////////
//->passer var par référence;//
//"elpmexe"->"exemple"////////
/////////////////////////////

$inverse ="alpmexe";

$reverse = function() use($chaine, &$inverse) {
    $j=0;
    for($i=strlen($chaine)-1; $i>=0; $i--)
    {
        $inverse.=$chaine[$i];
        $j++;
    }
};