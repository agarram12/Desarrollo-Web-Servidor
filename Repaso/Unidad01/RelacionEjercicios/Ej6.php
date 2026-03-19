<?php
    $edad = 20;
    $es_estudiante = true;
    $tiene_dni = false;

    // Usar operadores lógicos para evaluar:
    // a) ¿Puede entrar en una discoteca si tiene más de 18 y tiene DNI?
    if ($edad >= 18 && $tiene_dni) {
        echo "Puede entrar a la discoteca";
    } else {
        echo "No cumple los requisitos para entrar a la discoteca";
    }

    // b) ¿Tiene algún beneficio si es estudiante o menor de 25?
    if ($es_estudiante || $edad < 25) {
        echo "Tiene beneficio";
    } else {
        echo "No cumple los requisitos para los beneficios";
    }

    // c) ¿Es válida la combinación si no tiene DNI?
    if (!$tiene_dni) {
        echo "La combinación no es válida sin DNI";
    } else {
        echo "La combinación es válida";
    }
?>