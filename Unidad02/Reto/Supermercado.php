<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reto</title>
    </head>
    <body>
        <?php
            $ventas = [
                    "Lunes" =>
                            ["Nombre" => "Huevos", "precio" => 2, "unidades" => 10],
                            ["Nombre" => "Leche", "precio" => 3, "unidades" => 8],
                            ["Nombre" => "Pan", "precio" => 1, "unidades" => 23],
                    "Martes" =>
                            ["Nombre" => "Huevos", "precio" => 2, "unidades" => 10],
                            ["Nombre" => "Leche", "precio" => 3, "unidades" => 8],
                            ["Nombre" => "Pan", "precio" => 1, "unidades" => 15],
                    "Miercoles" =>
                            ["Nombre" => "Huevos", "precio" => 2, "unidades" => 3],
                            ["Nombre" => "Leche", "precio" => 3, "unidades" => 6],
                            ["Nombre" => "Pan", "precio" => 1, "unidades" => 8]
            ]
        ?>
        <table border="1">
            <tr>
                <th>Producto</th>
                <th>Precio unitario</th>
                <th>Unidades vendidas</th>
            </tr>
        </table>
    </body>
</html>