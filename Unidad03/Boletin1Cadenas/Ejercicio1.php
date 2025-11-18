<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
        <style>
            table {
                border-collapse: collapse;
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <?php
                $cadenas = ["pamplona", "arbol", "coche", "pantalla", "alcachofa"];
                foreach ($cadenas as $cadena) {
                    echo "<tr>";
                    echo "<td>" . $cadena . "</td>";
                    if (strchr($cadena, "p")) {
                        echo "<td>Contiene el símbolo 'p'</td>";
                    }
                    if (!strchr($cadena,"p")) {
                        echo "<td>No contiene el símbolo 'p'</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>