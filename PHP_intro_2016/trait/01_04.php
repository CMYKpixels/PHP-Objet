<?php
trait TraitFunction
{
    public function test()
    {
        echo 'My trait function ';
    }
}

trait MySecondTrait{

    public function test()
    {
        echo "something else";
    }
}

class Mother
{
    use TraitFunction,MySecondTrait
    {
        MySecondTrait::test insteadof TraitFunction;
    }
    //Rajout de cette fonction
    public function test(){
        echo "Je suis la classe Mere";
    }
}

class Child extends Mother
{
    use TraitFunction,MySecondTrait
    {
        TraitFunction::test insteadof MySecondTrait;
    }
}

$a = new Mother;
$a->test(); // Affiche « Hello world ! ».

$b = new Child();
$b->test(); // Affiche aussi « Hello world ! ».