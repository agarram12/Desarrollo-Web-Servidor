<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Introducción 2</title>
        <style>
            table {
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 0.5em;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form name="form1" method="get" action="">
            <input name="num1" type="number">
            <input name="num2" type="number">
            <input name="enviar" type="submit">
        </form>
        <table>
            <tr>
                <th>Suma</th>
                <th>Resta</th>
                <th>Multiplicación</th>
                <th>División</th>
            </tr>
            <!-- Obtener números -->
            <?php
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $suma = $num1 + $num2;
                $resta = $num1 - $num2;
                $multi = $num1 * $num2;
                $division = 0;
                if ($num1 != 0 && $num2 != 0) {
                    $division = $num1 / $num2;
                } else {
                    echo "No se puede divir entre 2";
                }
                echo "<tr>";
                echo "<td>" . $suma . "</td>";
                echo "<td>" . $resta . "</td>";
                echo "<td>" . $multi . "</td>";
                echo "<td>" . $division . "</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>