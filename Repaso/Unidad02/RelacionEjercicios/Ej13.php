<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <table>
            <?php 
                $elementos = ["X", "Y", "Z", "X+Y", "Y*Z", "X/Z", "X+Y+Z", "(Y+Z) / X"];
                for ($i=0; $i < count($elementos); $i++) { 
                    echo "<tr>";
                    echo "<td> Posición" . $i . ": </td>";
                    echo "<td>" . $elementos[$i] . "</td>";
                    echo "</tr>";
                }
            ?>

        </table>
    </body>
</html>