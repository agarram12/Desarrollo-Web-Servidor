<?php
    $a = 15;
    $b = 8;

    $suma = $a + $b;
    $resta = $a - $b;
    $multiplicacion = $a * $b;
    $division = $a / $b;
    $resto = $a % $b;

    // Mostrar el tipo junto a cada resultado también
    echo "Suma: " . $suma;
    echo "Tipo: " . gettype($suma);

    echo "Resta: " . $resta;
    echo "Tipo: " . gettype($resta);

    echo "Multiplicación: " . $multiplicacion;
    echo "Tipo: " . gettype($multiplicacion);

    echo "División: " . $division;
    echo "Tipo: " . gettype($division);

    echo "Resto: " . $resto;
    echo "Tipo: " . gettype($resto);
?>