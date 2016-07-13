<?php
ini_set ('error reporting', E_ALL);
ini_set ('display_errors','1');

//data_default_timezone_set('Europe/Paris');


//$string (chaîne de caractère)
$nickname = 'CMYKpixels';
$prenom = 'Julien';
$nom = 'Alsina';
$crew = "KESTAKREW";


//$int (integer - Nombre Entier)
$age = 31;


//float (nombre décimaux)
$decimal = 4.3;


//array() [Tableau associatif]
$tab = ['guillaume', 'vince', 'thomas dit \'Ricain'];
$kestacrew = array('Guillaume', 'Vince', 'Ricain');
var_dump($kestacrew);
print_r($kestacrew);


//array() [Tableau multi-dimenssionnel]
$multi = array(
                array('vocals','slick flow'),
                array('vocals','beatbox'),
                array('vocals','B-boy flow'),
        );


//array() [Tableau Associatif]
$assoc = array(['Nom'=>'Alsina', 'Prénom'=>'Guillaume']);  
var_dump($assoc);
print_r($assoc);


//array() print_r/var_dump pour parcourir les données
echo $prenom.' aka'.$nickname.' '.$nom;
echo $age.' ans.';
var_dump($tab);
var_dump($tab[0]);
//var_dump() est une fonction permettant de lire des tableaux


echo $tab[0].' '.$tab[1].' et '.$tab[2].'<br>';
echo "c'est le".' '.$crew;

die ("à partir d'ici plus de code exécuté");

    ?>