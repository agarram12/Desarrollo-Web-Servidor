<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Cuadrado</th>
                    <th>Cubo</th>
                </tr>
            </thead>
            <?php
                $arr = [3,8,7,-6];
                foreach ($arr as $elemento) {
                    echo "<tr>";
                        echo "<td>" . $elemento . "</td>";
                        echo "<td>" . pow($elemento, 2) . "</td>";
                        echo "<td>" . pow($elemento, 3) . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>