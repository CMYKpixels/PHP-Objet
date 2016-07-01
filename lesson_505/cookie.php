<?php
    $var= serialize($var);
    $expir = time()+2*30*24*3600;
    //défini le cookie
    setcookie("fond",$var, $expir);

    if (isset($_COOKIE["fond"])) {
        var_dump($_COOKIE["fond"]);
        $var2 = unserialize($_COOKIE["fond"]);
        var_dump($var2)
    };
    