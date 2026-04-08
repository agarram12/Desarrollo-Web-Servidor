<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 14</title>
    </head>
    <body>
        <?php
        /*
            14.Crear un documento PHP en el que se cree un array asociativo para contener
            los datos de una mascota: nombre de la mascota, familia, raza, color, peso, altura y edad.
            Rellenar dicho array con los valores de una mascota y mostrarlo en una tabla.
        */
            $animales = [
                "nombre" => "Trece",
                "familia" => "Felinos",
                "raza" => "Siamés",
                "color" => "Blanco y negro",
                "peso" => 10,
                "altura" => 110,
                "edad" => 4
            ];

            foreach ($animales as $clave => $valor) {
                echo "<tr>";
                echo "<td>" . $clave . "</td>";
                echo "<td>" . $valor . "</td>";
                echo "</tr>";
            }
        ?>
    </body>
</html>