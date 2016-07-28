<?php
trait TraitFunction
{
    public function test()
    {
        echo 'My trait function ';
    }
}

class Mother
{
    use TraitFunction;
}

class Child
{
    use TraitFunction;
}

$a = new Mother;
$a->test(); // Affiche « Hello world ! ».

$b = new Child();
$b->test(); // Affiche aussi « Hello world ! ».