<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 17</title>
    </head>
<!-- .Crear una página en PHP que tenga 3 cadenas de caracteres y las muestre
en una tabla ordenadas en orden alfabético. -->
    <body>
        
    <table border="1">
        <?php 
            $cadenas = ["Árbol", "Maceta", "Casa"];
            sort($cadenas);
            echo "<tr><th> Cadenas ordenadas</th></tr>";
            foreach ($cadenas as $cadena) {
                echo "<tr><td>$cadena</td></tr>";
            }
        ?>
    </table>
    </body>
</html>