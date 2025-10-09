<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo 6</title>
    </head>
    <!-- Crea una variable $n = 50;. Usa un for para sumar los números del 1 al N y
        muestra el resultado. 
    -->
    <body>
        <?php
            $n = 50;
            $suma = 0;
            for ($i=1;$i<=$n;$i++) {
                $suma += $i;
            }
            echo "Los números del 1 al $n suman: $suma";
        ?>
    </body>
</html>