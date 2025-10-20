<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <table border="1">
            <?php
                $matriz = [];
                echo "<tr>";
                for ($i=0;$i<12;$i++) {
                    $matriz[] = mt_rand(0,100);
                }
                echo "<th>Vector original</th>";
                echo "<td>";
                for ($i=0;$i<=11;$i++) {
                    echo $matriz[$i];
                    if ($i < 11) {
                        echo "-";
                        // tambien echo implode("-", $matriz);
                        // el primer parametro es el caracter es el separador y el array
                    }
                }
                echo "</td></tr>";
                echo "<tr><th>Mayor</th>";
                $mayor = max($matriz);
                $menor = min($matriz);
                $inverso = array_reverse($matriz);
                $ordenado = $matriz;
                sort($ordenado);
                echo "<td>$mayor</td></tr>";
                echo "<td>$menor</td></tr>";
                echo "<td>$inverso</td></tr>";
                echo "<td>$ordenado</td></tr>";
            ?>
        </table>
    </body>
</html>