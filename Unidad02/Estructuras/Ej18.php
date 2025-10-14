<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 18</title>
        <style>
            th {
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <!-- Crear un documento PHP que cree un array de al menos 4 posiciones.
Después el documento mostrará una tabla como la que se ve a
continuación:-->
    <body>
        <table>
            <?php 
                $numeros = [3,8,7,-6];
                echo "<tr>";
                echo "<th>Número</th>";
                echo "<th>Cuadrado</th>";
                echo "<th>Cubo</th>";
                echo "</tr>";
                foreach ($numeros as $numero) {
                    echo "<tr>";
                    $cuadrado = $numero ** 2;
                    $cubo = $numero ** 3;
                    echo "<td>$cuadrado</td>";
                    echo "<td>$cubo</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>