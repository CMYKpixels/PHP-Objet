<?php
/**
 * Created by PhpStorm.
 * User: CMYKpixels
 * Date: 27/06/2016
 * Time: 11:38
 */

function array_searcher ($needle,$haystack,$strict = false) {
    foreach($haystack as $item) {
        if(($strict ? $item === $needle : $item == $needle)||(is_array($item) && array_searcher($needle, $item,$strict))){
            return true;
        }
    }
    return false;
}