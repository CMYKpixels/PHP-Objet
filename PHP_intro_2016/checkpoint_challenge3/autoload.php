<?php

function loadMyClass($classe){
    include 'model/'.$classe.'.php';
}
spl_autoload_register('loadMyClass');