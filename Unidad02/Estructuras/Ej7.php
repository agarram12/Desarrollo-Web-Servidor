<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo 7</title>
    </head>
        <!--
            Crear una página en PHP que muestre las tablas de multiplicar. Mostrará
            cada una en una tabla del tipo:
        -->
    <body>
        <table>
            <?php
                for ($i=1;$i<=10;$i++) {
                    echo "<tr><th>Tabla del $i</th></tr>";
                    for ($j=1;$j<=10;$j++) {
                        $resultado = $i * $j;
                        echo "<tr><td>$i x $j = $resultado</td></tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>