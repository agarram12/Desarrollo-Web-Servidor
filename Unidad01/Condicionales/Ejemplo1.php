<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
           $_fecha = date("w");
            if ($_fecha <= 5 && $_fecha < 1) {
                    echo "<h1>Hoy es día laborable</h1>";
                    echo "$_fecha";
                } else {
                    echo "<h1>Hoy es fin de semana!</h1>";
                }
        ?>
    </body>
</html>