<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <table border="1">
            <?php
                $cadenas = ["hola", "coche@", "azul", "ratón", "manzana\$", "pers/ona", "xilofono"];
                foreach ($cadenas as $cadena) {
                echo "<tr>";
                echo "<td>" . $cadena . "</td>";
                    if (strchr($cadena, "@") || strchr($cadena, "C") || strchr($cadena, "$") || strchr($cadena, "/")) {
                        echo "<td>Contiene uno de los caracteres</td>";
                    } elseif (!strchr($cadena, "@") || !strchr($cadena, "C") || !strchr($cadena, "$") || !strchr($cadena, "/")) {
                        echo "<td>No contiene uno de los caracteres</td>";
                    }
                echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>