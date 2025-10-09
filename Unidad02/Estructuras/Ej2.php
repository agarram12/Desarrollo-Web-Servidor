<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $edad = 10;
            if ($edad >= 0 || $edad <= 12) {
                echo "<p>Eres un niño!</p>";
            } else if ($edad >=13 || $edad <=17) {
                echo "<p>Eres un adolescente!</p>";
            } else if ($edad >= 18 || $edad <=64) {
                echo "<p>Eres un adulto!</p>";
            } else if ($edad >= 65) {
                echo "<p>Estás jubilado!</p>";
            } else {
                echo "No has introducido una edad válida";
            }
        ?>
    </body>
</html>