<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 3</title>
        <style>
            table {
                border-collapse: collapse;
                border: 1px black solid;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
            $inventario = [
                "Producto1" => ["codigo" => 1, "nombre" => "camiseta", "cantidad" => 5, "precio" => 10],
                "Producto2" => ["codigo" => 2, "nombre" => "pantalón", "cantidad" => 3, "precio" => 25],
                "Producto3" => ["codigo" => 3, "nombre" => "zapatillas", "cantidad" => 8, "precio" => 50],
                "Producto4" => ["codigo" => 4, "nombre" => "gorra", "cantidad" => 10, "precio" => 8],
                "Producto5" => ["codigo" => 5, "nombre" => "chaqueta", "cantidad" => 2, "precio" => 60],
                "Producto6" => ["codigo" => 6, "nombre" => "calcetines", "cantidad" => 12, "precio" => 5],
            ];


        ?>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>
        <?php
            foreach ($inventario as $producto) {
                echo "<tr>";
                echo "<td>" . $producto['codigo'] . "</td>";
                echo "<td>" . $producto['nombre'] . "</td>";
                echo "<td>" . $producto['cantidad'] . "</td>";
                echo "<td>" . $producto['precio'] . "</td>";
                $total = $producto['cantidad'] * $producto['precio'];
                echo "<td>" . $total . "€ </td>";
                echo "</tr>";
            }
            // valor total del inventario
            foreach ($inventario as $producto) {
                    $total += $producto['cantidad'] * $producto['precio'];
                }
            echo "<tr><td colspan='4'>Valor total</td>";
            echo "<td>" . $total . "€ </td></tr>";

            // mayor stock disponible
            foreach($inventario as $producto) {
                $mayor = 0;
                $nombre = 0;
                if ($mayor <= $producto['cantidad']) {
                    $nombre = $producto['nombre'];
                    $mayor = $producto['cantidad'];
                }
            }
            echo "<tr><td colspan='2'>Mayor stock:</td>";
            echo "<td colspan='2'>" . $nombre . "</td>";
            echo "<td>" . $mayor . "</td></tr>";
        ?>

    </table>
    </body>
</html>