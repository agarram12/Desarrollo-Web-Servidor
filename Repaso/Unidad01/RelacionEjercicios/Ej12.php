<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <table>
            <?php
                $persona = [
                    "nombre" => "Javier",
                    "apellido" => "López",
                    "edad" => 23,
                    "salario" => 1500,
                    "fecha nacimiento" => "07/11/2006"
                ];

                foreach ($persona as $clave => $valor) {
                    echo "<tr>";
                    echo "<td>" . $clave . "</td>";
                    echo "<td>" . $valor . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>