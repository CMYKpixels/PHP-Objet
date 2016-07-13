<?php
$a = array(
    array('Computer'=>'Mac'),
    'NT',
    'Irix',
    'Linux'
);

$tableau = ['Laptop'=>'PC']
    [
        ['OS'=>'windows']
    ]
    array_combine($a, $tableau);

echo var_dump($a);
echo "<br>";
echo var_dump($tableau);