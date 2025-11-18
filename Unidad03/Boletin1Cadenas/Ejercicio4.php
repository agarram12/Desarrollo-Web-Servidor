<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 4</title>
        <style>
            table {
                border-collapse: collapse;
            }
            th, td {
                padding: 1em;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
            $palabras = ["agua", "azul", "aguacero", "azucena", "romero"];
            function primeras_tres($color1, $color2) {
                return substr($color1, 0, 3) === substr($color2, 0, 3);
            }
        ?>
        <table>
            <tr>
                <th></th>
                <?php
                    foreach ($palabras as $palabra) {
                        echo "<th>" . $palabra . "</th>";
                    }
                ?>
            </tr>
            <?php
                foreach ($palabras as $fila) {
                    echo "<tr><th>" . $fila . "</th>";
                    foreach ($palabras as $columna) {
                        $igual = primeras_tres($fila, $columna);
                        if ($igual) {
                            echo "<td style='background-color: green'></td>";
                        } elseif (!$igual) {
                            echo "<td style='background-color: red'></td>";
                        }
                    }
                }
            ?>
        </table>
    </body>
</html>
