<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo 5</title>
        <style>
            table {
                border-collapse: collapse;
            }
            td {
                border: 1px solid black;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <!--
        Crea un archivo PHP que muestre los números del 1 al 100 en una tabla
        HTML con 10 columnas por fila. Aplica algo de CSS para darle formato a la
        tabla.
    -->
    <body>
        <table border="1">
            <?php
                for ($i=1;$i<=100;$i++) {
                    if ($i % 10 == 1) {
                        echo "<tr>";
                    }
                    echo "<td style='border: 1px solid black; padding: 5px;'>$i</td>";
                    if ($i % 10 == 0) {
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>