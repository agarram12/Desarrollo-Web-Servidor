<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejemplo 1</title>
    </head>
    <body>
        <table border="1">
            <?php
                $matriz = [
                    "Nombre:" => "Álvaro",
                    "Apellidos" => "García",
                    "Edad" => "18",
                    "Nacionalidad" => "Español"
                ];

                $indices = array_keys($matriz);
                $valores = array_values($matriz);
                foreach ($indices as $indice) {
                    echo "<tr>";
                    echo "<td>$indice</td>";
                }
                foreach ($valores as $valor) {
                    echo "<td>$valor</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>