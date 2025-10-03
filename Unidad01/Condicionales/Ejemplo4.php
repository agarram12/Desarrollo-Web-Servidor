<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejemplo 4</title>
        <style>
            table {
                border-collapse: collapse;
                background-color: salmon;
                padding-left: 0.4em;
                border-color: white;
            }
            th {
                background-color: darkred;
                color: white;
                font-size: large;
            }
            td {
                background-color: salmon;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Palabras</th>
                <th>Valores</th>
            </tr>
            <?php
                $_palabras = [
                    "palabra1" => "valor1",
                    "palabra2" => "valor2",
                    "palabra3" => "valor3",
                    "palabra4" => "valor4"
                ];
                foreach ($_palabras as $_palabra => $_valor) {
                    echo "<tr>";
                    echo "<td>$_palabra</td>";
                    echo "<td>$_valor</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>