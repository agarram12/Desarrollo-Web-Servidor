<?php
    $km = 250;
    $combustible = 30;

    if ($km <= 0 || $combustible <= 0) {
        echo "Ni los KM ni el combustible puede ser 0";
    } else {
        $consumo = ($combustible / $km) * 100;
        echo "El consumo medio es de: " . $consumo . "L";
    }
?>