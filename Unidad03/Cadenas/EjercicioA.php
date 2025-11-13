<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio A</title>
    </head>
    <body>
    <?php
        $cad1 = "Artds333";
        if (preg_match("`^[A-Z][a-z]{2,}[0-9]{3}$`", $cad1)) {
            echo "Cumple con el patrón";
        } else {
            echo "No cumple el patrón";
        }

        $cad2 = "asdAa4@";
        if (preg_match("`[A-Z][a-z][0-9][@#$€_.,;:]`", $cad2)) {
            echo "Se cumple el patrón";
        } else {
            echo "No se cumple el patrón";
        }

    ?>
    </body>
</html>