<?php
    $num = 0;
    $vacio;

    // usar isset y empty con ambas y mostrar los resultados

    echo isset($num);
    echo empty($num);
    echo "------------";
    echo isset($vacio);
    echo empty($vacio);

    // destruir con unset() el num
    unset($num);

    // comprobar estado después del unset()
    echo isset($num);
    echo empty($num);
?>