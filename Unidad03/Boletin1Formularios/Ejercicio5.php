<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 5</title>
        <style>
            table {
                border-collapse: collapse;
                margin-top: 10px;
                border: 1px solid black;
            }
            td {
                text-align: center;
                background-color: midnightblue;
                color: white;
                border: 1px solid white;
                padding: 0.4em;

            }
        </style>
    </head>
    <body>
        <form name="formulario" method="get" action="">
            <input name="num1" type="number">
            <input name="num2" type="number">
            <input name="enviar" type="submit">
        </form>
        <table>
            <tr>
            <?php
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $menor = ($num1 < $num2) ? $num1 : $num2;
                $mayor = ($num1 > $num2) ? $num1 : $num2;
                $numeros = range($menor, $mayor);
                foreach ($numeros as $numero) {
                    echo "<td>" . $numero . "</td>";
                }
            ?>
            </tr>
        </table>
    </body>
</html>