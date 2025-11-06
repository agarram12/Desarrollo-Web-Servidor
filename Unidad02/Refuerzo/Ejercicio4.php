<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <table border="1">
            <?php
            function mostrar_codigos($codigos) {
                echo "<table border='1'>";
                foreach ($codigos as $codigo) {
                    $contador = 0;
                    foreach ($codigo as $numero) {
                        if ($numero == 5) {
                            $contador++;
                        }
                    }
                    if ($contador >= 5) {
                        echo "<tr><td>" . implode('', $codigo) . "</td></tr>";
                    }
                }
                echo "</table>";
            }

            $codigos = [];
            for ($i = 0; $i < 10; $i++) {
                $fila = [];
                for ($j = 0; $j < 8; $j++) {
                    $fila[] = rand(0, 9);
                }
                $codigos[] = $fila;
            }

            foreach ($codigos as $codigo) {
                echo "<tr><td>" . implode('', $codigo) . "</td></tr>";
            }

            echo "<h3>Códigos con 5 o más dígitos '5'</h3>";
            mostrar_codigos($codigos);
            ?>
        </table>
    </body>
</html>
