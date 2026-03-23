<?php
    $numeros = array(3, 2, 8, 123, 5, 1);
    /*
    for ($i=0; $i < count($numeros); $i++) { 
        echo $numeros[$i];
    }
    echo "\n";
    
    sort($numeros);
    for ($i=0; $i < count($numeros); $i++) {
        echo $numeros[$i];
    }
    
    */
    // otra forma de hacerlo con for each
    asort($numeros);
    foreach ($numeros as $clave => $valor) {
        echo $valor . ", ";
    }
?>