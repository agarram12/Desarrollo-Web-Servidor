<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 4</title>
        <style>
            table {
                margin-top: 20px;
                border-collapse: collapse;
                color: white;
            }
            th, td {
                border: 1px solid black;
                padding: 0.6em;
            }
            th {
                background-color: purple;
                text-align: left;
            }
            td {
                background-color: mediumpurple;
            }

        </style>
    </head>
    <body>
        <form name="num" method="get" action="">
            <input name="num1" type="number">
            <input name="num2" type="number">
            <input name="num3" type="number">
            <input name="enviar" type="submit">
        </form>
        <table>
        <?php
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];
            $suma1 = $num1+$num2;
            $multi1 = $num2*$num3;
            $division1 = $num1 / $num3;
            $suma2 = $num1 + $num2 + $num3;
            $division2 = ($num2 + $num3) / $num1;
        // tabla
            echo "<tr><th>Valor 1</th>";
            echo "<td>" . $num1 . "</td></tr>";
            echo "<tr><th>Valor 2</th>";
            echo "<td>" . $num2 . "</td></tr>";
            echo "<tr><th>Valor 3</th>";
            echo "<td>" . $num3 . "</td></tr>";
            echo "<tr><th>Valor 1 + Valor 2</th>";
            echo "<td>" . $suma1 . "</td></tr>";
            echo "<tr><th>Valor 2 * Valor 3</th>";
            echo "<td>" . $multi1 . "</td></tr>";
            echo "<tr><th>Valor 1 / Valor 3</th>";
            echo "<td>" . $division1 . "</td></tr>";
            echo "<tr><th>Valor 1 + Valor 2 + Valor 3</th>";
            echo "<td>" . $suma2 . "</td></tr>";
            echo "<tr><th>(Valor 2 + Valor 3) / Valor 1</th>";
            echo "<td>" . $division2 . "</td></tr>";
        ?>


        </table>
    </body>
</html>