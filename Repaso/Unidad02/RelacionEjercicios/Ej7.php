<?php
    $variable = 10;

    if (is_int($variable) || is_float($variable)) {
        $variable *= 10;
        echo "Valor tras multiplicar * 10: " . $variable;
    } else if (is_string($variable)) {
        echo $variable . " - Tipo String";
    } else if (is_bool($variable)) {
        // operador ternario, condición ? casoTrue : casoFalse;
        echo $variable ? "Es verdadero" : "Es falso";
    }
?>