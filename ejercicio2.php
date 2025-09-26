<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./ejercicio2.css">
        <title>Ejercicio 2</title>
    </head>
    <body>
    <table>
        <tr>
            <th>Número 1</th>
            <th>Número 2</th>
            <th>Suma</th>
        </tr>
        <?php
            $_num1 = 28;
            $_num2 = 13;
            $_result = $_num1 + $_num2;
            echo "<tr>";
                echo "<td>$_num1</td>";
                echo "<td>$_num2</td>";
                echo "<td>$_result</td>";
            echo "</tr>";
        ?>
    </table>
    </body>
</html>
