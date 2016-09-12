<?php

    function loadMyClass($class) {
        include $class.'.php';
    }
    spl_autoload_register('loadMyClass');

//Fonction appelée chaque fois qu'une Class est instanciée.
    $Ninjas = new Ninjas();
    $Turtles = new Turtles();

    echo "Toutes les Tortues sont des Ninjas";
