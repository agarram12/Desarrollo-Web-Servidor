<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reto</title>
    </head>
    <body>
        <?php
            $lunes = [
                "leche" => [
                    "nombre" => "leche",
                    "precio" => 5.99,
                    "unidades" => 5,
                    "cantidad" => 12
                ],
                "pan" => [
                    "nombre" => "pan",
                    "precio" => 1.50,
                    "unidades" => 3,
                    "cantidad" => 20
                ],
                "agua" => [
                    "nombre" => "agua",
                    "precio" => 2.0,
                    "unidades" => 10,
                    "cantidad" => 7
                ]
            ];
            $martes = [
                "leche" => [
                    "nombre" => "leche",
                    "precio" => 5.99,
                    "unidades" => 3,
                    "cantidad" => 8
                ],
                "pan" => [
                    "nombre" => "pan",
                    "precio" => 1.50,
                    "unidades" => 4,
                    "cantidad" => 12
                ],
                "agua" => [
                    "nombre" => "agua",
                    "precio" => 2.0,
                    "unidades" => 18,
                    "cantidad" => 6
                ]
            ];
        ?>
        <table border="1">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Unidades vendidas</th>
            </tr>
            <?php
                $totalDia = 0;
                $productoMasVendido = 0;
                foreach ($lunes as $producto) {
                    // mostrar tabla y dejar calculado el total del día
                    echo "<tr>";
                    echo "<td>" . $producto['nombre'] . "</td>";
                    echo "<td>" . $producto['precio'] . "</td>";
                    echo "<td>" . $producto['unidades'] . "</td>";
                    echo "</tr>";
                    $totalDia += $producto['precio'] * $producto['unidades'];
                }
                    // calcular cual es el producto más vendido
                foreach ($lunes as $producto) {
                    if ($producto['unidades'] > $productoMasVendido) {
                        $productoMasVendido = $producto['unidades'];
                    }
                }
            ?>
        </table>
            <?php
                // mostrar el total de ventas
                echo "<p> Total ventas: " . $totalDia . "</p>";
                foreach ($lunes as $producto) {
                    if($producto['unidades'] == $productoMasVendido) {
                        echo "<p>" . $producto['nombre'] . " ha sido el producto más vendido </p>";
                    }
                }
            ?>
    </body>
</html>