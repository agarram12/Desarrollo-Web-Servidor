<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 16</title>
    </head>
<!-- Crear una página en PHP que, utilizando un array, muestre los números del
20 al 300 y después muestre la suma de todos ellos-->
    <body>
        <?php 
            for ($i = 20; $i <= 300; $i++) {
                echo "<p>$i</p>";
                $numeros[] = $i;
            }
            $suma = array_sum($numeros);
            echo "<p>La suma de todos los números del 20 al 300 es: $suma</p>";
        ?>
    </body>
</html>