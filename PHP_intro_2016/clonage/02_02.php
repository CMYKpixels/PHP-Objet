<?php
/**
 * The __clone() method
 */

/***
 * Cloning objects
 */
class Beverage{
    public $name="tea";

    public function __construct()
    {
        echo "Nouvelle instance de".__CLASS__;
    }

    public function __clone()
    {
        echo "Nouveau clonage de ".__CLASS__;
    }
}

$a = new Beverage();
echo "<br/>";
$a->name="coffee";
echo "<br/>";
$b = clone $a;
echo "<br/>";
$a->name="Coca Cola";
echo "<br/>";

echo $b->name;