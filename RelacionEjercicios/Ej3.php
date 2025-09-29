<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 3</title>
    </head>
    <!-- Declara dos variables con valores numéricos (por ejemplo, 12 y 5). Calcula y
        muestra:
        • Suma
        • Resta
        • Multiplicación
        • División
        • Resto
    -->
    <body>
    <?php
        $_num1 = 12;
        $_num2 = 5;
        $suma = $_num1 + $_num2;
        $resta = $_num1 - $_num2;
        $multiplicacion = $_num1 * $_num2;
        $division = $_num1 / $_num2;
        $resto = $_num1 % $_num2;
        echo "La suma de $_num1 y $_num2 es de $suma de tipo: " . gettype($suma) . "<br>";
        echo "La resta de $_num1 y $_num2 es de $resta de tipo: " . gettype($resta) . "<br>";
        echo "La multiplicacion de $_num1 y $_num2 es de $multiplicacion de tipo: " . gettype($multiplicacion) . "<br>";
        echo "La division de $_num1 y $_num2 es de $division de tipo: " . gettype($division) . "<br>";
        echo "El resto de $_num1 y $_num2 es de $resto de tipo: " . gettype($resto) . "<br>";
    ?>
    </body>
</html>