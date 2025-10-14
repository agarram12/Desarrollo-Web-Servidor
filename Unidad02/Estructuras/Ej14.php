<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 14</title>
<!-- Define varios productos como arrays asociativos individuales y muéstralos
con PHP en una página dentro de un <div> con clases CSS. De cada producto
tendremos nombre, precio y descripción.-->
    </head>
    <body>
        <?php
            $producto1 = [
                "nombre" => "Camisa",
                "precio" => 20.00,
                "cantidad" => 3
            ];
            $producto2 = [
                "nombre" => "Pantalón",
                "precio" => 35.00,
                "cantidad" => 2
            ];
            $producto3 = [
                "nombre" => "Zapatos",
                "precio" => 50.00,
                "cantidad" => 1
            ];

            $productos = [$producto1, $producto2, $producto3];
            foreach ($productos as $producto) {
                echo "<div class='producto'>";
                echo "<p>" . $producto['nombre'] . "</p>";
                echo "<p>Precio: " . $producto['precio'] . " €</p>";
                echo "<p>Cantidad: " . $producto['cantidad'] . "</p>";
                echo "</div>";
            }
        ?>
    </body>
</html>