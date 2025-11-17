<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
            $cadena = ["casa", 345, "barco", "arbol", 673, "mañana", "tarde"];
            $modificacion = [];

            foreach ($cadena as $caracter) {
                if (is_string($caracter)) {
                    $cambio = str_replace(['a', 'A'], ['b', 'B'], $caracter);
                    $modificacion[] = $cambio;
                } else {
                    $modificacion[] = $caracter;
                }
            }

            for ($i = 0; $i < count($cadena); $i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $cadena[$i] . "</td>";
                echo "<td>" . $modificacion[$i] . "</td>";
                echo "</tr>";
            }
        ?>
    </body>
</html>