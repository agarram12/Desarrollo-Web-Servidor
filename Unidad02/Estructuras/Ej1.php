<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <!--
        Muestra del 1 al 50 indicando si cada número es par o impar. Usa etiquetas
        <div> con diferente color de fondo para pares e impares.
    -->
    <body>
        <?php
            for ($i=0;i<=50;$i++) {
                if ($i % 2 == 0) {
                    echo "<div> $i es par </div>";
                } else {
                    echo "<div> $i es impar </div>";
                }
            }
        ?>
    </body>
</html>