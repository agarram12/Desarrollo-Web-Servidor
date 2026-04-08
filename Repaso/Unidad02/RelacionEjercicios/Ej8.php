<?php
    $entrada = 0;
    // a) ¿Está definida?
    if (isset($entrada)) {
        echo "La entrada está definida";
    } else {
        echo "La entrada no está definida";
    }
    // b) ¿Está vacía? 
    if (empty($entrada)) {
        echo "La variable está vacía";
    } else {
        echo "La variable tiene valor";
    }
    // c) ¿Es numérica?
    if (is_numeric($entrada)) {
        echo "La entrada es númerica";
    } else {
        echo "La entrada no es númerica";
    }

    if (is_string($entrada)) {
        echo $entrada . " Es un string con valor: ";
    } else if (is_int($entrada)) {
        echo $entrada . " Es un entero con valor: ";
    } else if (is_double($entrada)) {
        echo $entrada . " Es un decimal";
    }
?>