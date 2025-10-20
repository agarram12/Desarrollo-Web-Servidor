<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
        <style>
            table {
                border-collapse: collapse;
                align-items: center;
            }

            th {
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
    <?php

    ?>
        <table border="1">
            <th>Número</th>
            <th>Repeticiones</th>
            <?php
                // declarar array con números aleatorios
                $numeros = [];
                for ($i=1;$i<=30;$i++) {
                    $numeros[] = rand(1,15);
                }
                $repiteNumero = array_count_values($numeros);
                $repiteOrdenado = $repiteNumero;
                $masVeces = $repiteNumero;
                ksort($repiteOrdenado);
                foreach ($repiteOrdenado as $numero => $veces) {
                    echo "<tr>";
                    echo "<td>$numero</td>";
                    echo "<td>$veces</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <table>
            <th>Número</th>
            <th>Repeticiones</th>
            <?php
            foreach ($masVeces as $numero => $veces) {
                if () {

                }
            }
            ?>
        </table>
    </body>
</html>