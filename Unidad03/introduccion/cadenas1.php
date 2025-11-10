<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadenas</title>
        <style>
            table {

                border-collapse: collapse;
                border-color: white;
                text-align: center;
            }
            th {
                background-color: lightgreen;
                color: white;
                font-weight: bold;
            }
            tr:nth-child(even) {
                background-color: palegreen;
            }
            tr:nth-child(odd) {
                background-color: ;
            }
            th, td {
                padding: 1.5em;
            }


        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Carácter</th>
                <th>Posición</th>
            </tr>
            <?php
                $cadena = "Saludo";
                $longitud = strlen($cadena);
                for ($i = 0; $i < $longitud; $i++) {
                    echo "<tr>";
                    echo "<td>" . $cadena[$i] . "</td>";
                    echo "<td>" . $i . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>