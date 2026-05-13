<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <?php
                $limite = 15;
                $a = 0;
                $b = 1;
                $filaPosiciones = "<tr>";
                $filaValores = "<tr style='background-color: #d0d0d0;'>";
                for ($i = 1; $i <= $limite; $i++) {
                    $filaPosiciones .= "<td>$i</td>";
                    $filaValores .= "<td>$a</td>";

                    $siguiente = $a + $b;
                    $a = $b;
                    $b = $siguiente;
                }

                $filaPosiciones .= "</tr>";
                $filaValores .= "</tr>";

                echo $filaPosiciones;
                echo $filaValores;
            ?>
        </table>
    </body>
</html>