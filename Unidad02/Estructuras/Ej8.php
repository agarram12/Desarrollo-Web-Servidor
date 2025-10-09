<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8</title>
    </head>
    <!--
        Codificar una página en PHP que, utilizando los tres tipos de bucles, muestre
        por pantalla las 10 primeras potencias de un número. 
    -->
    <body>
        <?php
            $numero = 2;
            // for
            for ($i=1;$i<=10;$i++) {
                $potencia = $numero ** $i;
                echo "$numero<sup>$i</sup> = $potencia<br>";
            }
            // while

            // do while
        ?>
    </body>
</html>