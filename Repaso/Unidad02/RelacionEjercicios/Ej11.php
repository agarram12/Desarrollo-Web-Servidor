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
                $elementos = array("Nombre", "Apellidos", "Edad", "Salario");
                // con for principalmente porque necesito que la i vaya incrementando automáticamente y con foreach haría falta clave valor
                for ($i=0; $i < count($elementos); $i++) { 
                    echo "<tr>" . $i . "</tr>";
                    echo "<tr>" . $elementos[$i] . "</tr>";
                }
            ?>
        </table>
    </body>
</html>