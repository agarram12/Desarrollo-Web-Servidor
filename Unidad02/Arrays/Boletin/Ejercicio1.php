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
                    }
                }
                echo "</td></tr>";
                echo "<tr><th>Mayor</th>";
                $mayor = max($matriz);
                echo "<td>$mayor</td></tr>";
            ?>
        </table>
    </body>
</html>