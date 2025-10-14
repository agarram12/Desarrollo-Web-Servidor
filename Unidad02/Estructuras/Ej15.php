<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <?php
            $numeros = [23, 15, 73, 46, 56, 61, 27];
            foreach ($numeros as $numero) {
                echo "<p>$numero</p>";
            }
            $total = array_sum($numeros);
            $media = $total / count($numeros);
            echo "<p>Total: $total</p>";
            echo "<p>Hay ". count($numeros) . " valores</p>";
            echo "<p>La media es de: $media";
        ?>
    </body>
</html>