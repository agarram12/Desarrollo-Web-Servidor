<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <?php
                $tabla = 1;
                for ($i=1;$i<=10;$i++) {
                    echo "<tr>";
                    echo "<td>" . $tabla . "x" . $i . "</td>";
                    $resultado = $tabla * $i;
                    echo "<td>" . $resultado . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>