<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 23/06/2016
 * Time: 12:14
 */

function copyright($startYear){
    $currentYear = date('Y');
    if ($startYear < $currentYear) {
        $currentYear = date('y');
        return "&copy; $startYear&ndash;$currentYear";
    } else {
        return "&copy; $startYear;";
    }
}

echo copyright(2017);