<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo 4</title>
    </head>
    <!--
        Dada una nota numérica del 0 al 10, muestra el resultado textual:
        "Suspenso", "Aprobado", "Notable", "Sobresaliente".
    -->
    <body>
        <?php
            $nota = 6;
            if ($nota >= 0 && $nota <= 4) {
                echo "Suspenso";
            } elseif ($nota >= 5 && $nota <= 7) {
                echo "Aprobado";
            } elseif ($nota >= 8 && $nota <= 9) {
                echo "Notable";
            } elseif ($nota == 10) {
                echo "Sobresaliente";
            } else {
                echo "La nota debe estar entre 0 y 10";
            }
    </body>
</html>