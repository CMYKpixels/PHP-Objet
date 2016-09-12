<?php

/**
 * Comparison operator == compare les attributs sont les mêmes
 * Indetity operateur === exige que les deux objets comparés pointe au même objet
 */

class Box{
    public $name="box";

}

$box = new Box();
$box_reference = $box;
$box_clone = clone $box;

$box_changed = clone $box;
$box_changed->name = "changed box";

$another_box = new Box();

echo $box == $box_reference ? 'true':'false'; //vrai
echo '<br />';
echo $box == $box_clone ? 'true':'false'; //vrai
echo '<br />';
echo $box == $box_changed ? 'true':'false'; // faux
echo '<br />';
echo $box == $another_box ? 'true':'false'; //vrai
echo '<br />';