<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 7</title>
        <style>
            table {
                border-collapse: collapse;
                border: 1px solid lightskyblue;
            }
            th {
                background-color: lightskyblue;
                color: white;
            }
            
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Fecha de pago</th>
                <th>Recargo</th>
            </tr>
        </table>
        <?php
            function calcular_dias($fechaHoy, $fechaCalcular) {
                $dias = $fechaHoy - $fechaCalcular;
                echo $dias;
            }
            
            $personas = [
                "Nombre1" => rand(1,31),
                "Nombre2" => rand(1,31),
                "Nombre3" => rand(1,31)
            ];
            $fechaHoy = 25;
            $fechaCalcular = 12;

        ?>
    </body>
</html>