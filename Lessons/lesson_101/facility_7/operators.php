<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 22/06/2016
 * Time: 09:44
 */

$name = "nabila";
$day = "vendredi";


if ($name=="Pierre" && $day="jeudi") {
    echo "Ce sera le cours de JavaScript";
} elseif ($name =='Alfonso' || $day="vendredi") {
    echo "Ce sera le cour de PHP";
    } else {
    echo "Il n'y aura pas cours";
}
/////////////////////////////////////
//Les deux formulation se valent ://
///////////////////////////////////
if ($name == 'Alfonso' && $day == 'Jeudi') :
    echo "Le vendredi il n\'y aura pas cours";
    elseif ($name == 'Paul' || $day == 'Vendredi') :
    echo "Pas cours";
    else:
    echo 'Ce doit être le Week-end';
    endif;

