<?php

use function PHPSTORM_META\type;

    $cadena = "123.45";

    // a) Mostrar tipo con gettype();
    gettype($cadena);

    // b) convertir a tipo float, int y boleano mediante settype()
    // float
    $decimal = settype($cadena, "float");
    // int
    $entero = settype($cadena, "integer");
    // boolean
    $booleano = settype($cadena, "boolean");

    // mostrar tipo y nuevo valor
    // gettype obtiene el tipo y el valor se muestra llamando a la variable
    echo "Tipo: " . gettype($decimal);
    echo "Valor: " . $decimal;
    
    echo "Tipo: " . gettype($entero);
    echo "Valor: " . $entero;
    
    echo "Tipo: " . gettype($entero);
    echo "Valor: " . $entero;
?>