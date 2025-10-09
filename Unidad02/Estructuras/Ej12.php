<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 12</title>
        <style>
            table {
                border-collapse: collapse;
            }
            th {
                background-color: lightblue;
            }
            td {
                background-color: antiquewhite;
            }
            th,td {
                padding: 0.5em;
            }
        </style>
    </head>
    <body>
        <table border="1">
        <?php
            $juan = [
                "Servidor" => rand(0,10),
                "Cliente" => rand(0,10),
                "Optativa" => rand(0,10),
                "Interfaz" => rand(0,10),
                "Ingles" => rand(0,10),
                "Desarrollo" => rand(0,10),
                "Despliegue" => rand(0,10)
            ];
            foreach ($juan as $asignatura => $nota) {
                echo "<tr><th>$asignatura</th>";
                echo "<td>$nota</td></tr>";
            }
            $total = array_sum($juan);
            $media = $total / 7;
            echo "<tr><th>Nota media</th>";
            echo "<td>$media</td></tr>";
        ?>
        </table>
    </body>
</html>