<?php
$class = [
    ['first' => 'Mathieu', 'last' => 'Vie'],
    ['first' => 'Lerognon', 'last' => 'Isaac'],
    ['first' => 'Thomas', 'last' => 'Lerouge'],
    ['first' => 'Lucas', 'last' => 'Hugo'],
    ['first' => 'Damien', 'last' => 'Merle'],
    ['first' => 'Maxime', 'last' => 'Paturel'],
    ['first' => 'Aurore', 'last' => 'Regalado'],
    ['first' => 'Julien', 'last' => 'Alsina'],
];


usort($class, function($a,$b){
    if([$a['last'], $a['first']] < [$b['last'], $b['first']]) {
        return -1;
    } elseif ([$a['last'], $a['first']] > [$b['last'], $b['first']]){
        return 1;
    } else {
        return 0;
    }
});