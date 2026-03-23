<?php
    $numeros = [
        5 => 1,
        12 => 2,
        13 => 56,
        "x" => 42
    ];

    /* 
    * count() -> Devuelve la cantidad de elementos
    * unset() -> Borrar un elemento o borrar el array
    *            si se le pasa la variable que contiene el array se borra
    *            si le pasamos la variable y la posición i se borra el elemento
    */

    echo "Número de elementos: " . count($numeros) . "\n";
    // borrar elemento 5 y tras ello mostrar array
    foreach ($numeros as $clave => $valor) {
        echo $valor . " ";
    }
    echo "\n";

    unset($numeros[5]);
    foreach ($numeros as $clave => $valor) {
        echo $valor . " ";
    }

    // borrar ahora todo el array. Si se le pasa sin posición se borra entero
    unset($numeros);

?>