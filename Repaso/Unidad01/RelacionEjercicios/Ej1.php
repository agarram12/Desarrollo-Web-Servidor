<?php
    // declarar distintos tipos de variables existentess
    $entero = 1;
    $decimal = 5.5;
    $cadena = "Esto es una cadena";
    $booleano = true;
    $nulo = null;

    // obtener su tipo con la función gettype();
    gettype($entero);
    gettype($decimal);
    gettype($cadena);
    gettype($boolean);
    gettype($nulo);

    // funciones para identificar su tipo
    is_int($entero);
    is_float($decimal);
    is_string($cadena);
    is_bool($booleano);
    is_null($nulo);

    // detectar si están definidas y si están vacías

    isset($entero);
    empty($entero);
    
    isset($decimal);
    empty($decimal);
    
    isset($cadena);
    empty($cadena);
    
    isset($booleano);
    empty($booleano);

    isset($nulo);
    empty($nulo);
?>