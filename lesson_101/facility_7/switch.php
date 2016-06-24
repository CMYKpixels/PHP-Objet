<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 22/06/2016
 * Time: 10:05
 */
$name = "";

Switch ($name) {
    case 'Manuel':
        echo "j'adore le SQL";
        break;
    case 'Aurore'
    case 'Isaac'
    case 'Caroline';
        echo  "2 semaines de PHP";
        break;
    default :
        echo "Pas de résultat";
        break;
}