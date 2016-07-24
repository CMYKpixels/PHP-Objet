<?php

    function loadMyClass($class) {
        include $class.'.php';
    }
    spl_autoload_register('loadMyClass');
//Fonction appelée chaque fois qu'une Class est instanciée.
    $adress1 = new Adress();
    $Person1 = new Person();

    echo "Toutes les Classes existent";