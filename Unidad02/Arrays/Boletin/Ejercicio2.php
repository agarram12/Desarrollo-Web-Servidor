<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2</title>
        <style>
            th {
                background-color: #a8d08d;
            }
            table {
                border-color: limegreen;
                border-collapse: collapse;
                background-color: ;
            }
            tr {
                background-color: lightgreen;
            }
            tr:nth-child(odd) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <?php
                $ciudades = [
                    "Granada" => 150000,
                    "Madrid" => 3000000,
                    "Barcelona" => 2879200,
                    "Málaga" => 240000,
                    "Sevilla" => 500000,
                    "Valencia" => 1584600,
                    "Tarragona" => 485210
                ];
                echo "<tr><th>Ciudad</th><th>Población</th>";
                foreach ($ciudades as $ciudad => $poblacion) {
                    echo "<tr>";
                    echo "<td>$ciudad</td>";
                    echo "<td>$poblacion</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <h2>Tabla ordenada por ciudad</h2>
        <table>
            <?php
                ksort($ciudades);
                foreach ($ciudades as $ciudad => $poblacion) {
                    echo "<tr>";
                    echo "<td>$ciudad</td>";
                    echo "<td>$poblacion</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <h2>Tabla ordenada por población</h2>
        <table>
            <?php
                asort($ciudades);
                foreach ($ciudades as $ciudad => $poblacion) {
                    echo "<tr>";
                    echo "<td>$ciudad</td>";
                    echo "<td>$poblacion</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <h2>Mostrar ciudad con más población y ciudad con menos población</h2>
        <table>
            <?php
                echo "<tr>";
                echo "<th>Ciudad</th><th>Población</th></tr>";
                echo "<tr>";
                arsort($ciudades);
                echo "<td>" . key($ciudades) . "</td>";
                echo "<td>" . current(($ciudades)) . "</td>";
                echo "</tr><tr>";
                asort($ciudades);
                echo "<td>" . key($ciudades) . "</td>";
                echo "<td>" . current(($ciudades)) . "</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>
