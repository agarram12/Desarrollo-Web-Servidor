<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $n = 50;
            $resultado = 0;
            for ($i=1;$i<=$n;$i++) {
                $resultado += $i;
            }
            echo $resultado;
        ?>
    </body>
</html>