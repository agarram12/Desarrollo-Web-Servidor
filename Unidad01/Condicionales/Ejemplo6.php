<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejemplo 6</title>
    </head>
    <body>
        <?php
            $min = 100;
            $lista = [3,8,2,14,1,99];
            for ($i=0;$i < count($lista);$i++) {
                if ($lista[$i] < $min) {
                    $min = $lista[$i];
                }
            }
                    echo $min;
        ?>
    </body>
</html>