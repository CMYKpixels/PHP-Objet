<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 23/06/2016
 * Time: 08:59
 */

/*for ($i=0, $k<=10 && $k >=0, $i++, $k--) {
    echo "var " . $i . " is " . $k . "<br>";
}

foreach($array as $a){
    echo $a;
}
$tab["prénom1"] = "Jean";
$tab["prénom2"] = "Pierre";
*/
$tabAssoc= [
    'prénom' => 'Julien',
    'Nom'    => 'Alsina',
    'address'=> '21 rue Sébatien Vauban',
];

foreach ($tabAssoc as $value){
    echo 'le paramètre $key est $value<br>';
}