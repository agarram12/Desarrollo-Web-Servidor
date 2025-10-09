<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 13</title>
    </head>
    <body>
    <table>
        <?php
            $numeros = [12, 23,45,32,104,21,66,54,78,5,2,34,1657];
            $minimo = $numeros[0];
            $maximo = $numeros[0];
            foreach ($numeros as $numero) {
                if ($minimo > $numero) {
                    $minimo = $numero;
                } elseif ($maximo < $numero) {
                    $maximo = $numero;
                }
            }
            echo "<p>El número máximo es: $maximo</p>";
            echo "<p>El número menor es: $minimo</p>";
        ?>

    </table>
    </body>
</html>