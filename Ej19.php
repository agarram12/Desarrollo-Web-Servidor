<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 19</title>
    </head>
    <body>
        <?php
            $a = 0;
            $b = 1;
            for ($i=1;$i<=15;$i++) {
                echo "<tr><td>$i</td></tr>";
                $siguiente = $a + $b;
                $a = $b;
                $b = $siguiente;
            }
        ?>
    </body>
</html>