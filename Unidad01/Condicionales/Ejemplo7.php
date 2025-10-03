<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejemplo 7</title>
    </head>
    <body>
        <?php
            $matriz = [1,2,3,4,5,6,2,34,234,22,21];
            $nElementos = 0;
            for ($i=0;$i<=count($matriz);$i++) {
                $nElementos++;
            }
            echo "Tienes " . $nElementos . " elementos en el array";
        ?>
    </body>
</html>