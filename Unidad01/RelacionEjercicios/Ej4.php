<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 4</title>
    </head>
    <body>
    <?php
        $var1 = 5;
        $var2 = "5";
        $var3 = 10;
        if ($var1 == $var2) {
            echo "$var1 y $var2 tienen el mismo contenido <br>";
        } else {
            echo "$var1 y $var2 NO tienen el mismo contenido <br>";
        }
        if ($var1 === $var2) {
            echo "$var1 y $var2 tienen el mismo contenido y el mismo tipo <br>";
        } else {
            echo "$var1 y $var2 no son del mismo tipo <br>";
        }
        if ($var1 > $var3) {
            echo "$var1 es mayor que $var3 <br>";
        } else {
            echo "$var1 no es mayor que $var3 <br>";
        }
        if ($var1 < $var3) {
            echo "$var3 es mayor que $var1 <br>";
        } else {
            echo "$var3 no es mayor que $var1 <br>";
        }
        if ($var1 >= $var3) {
            echo "$var1 es mayor o igual que $var3 <br>";
        } else {
            echo "$var1 no es mayor ni igual que $var3 <br>";
        }
        if ($var1 <= $var3) {
            echo "$var3 es mayor o igual que $var1 <br>";
        } else {
            echo "$var3 no es mayor ni igual que $var1 <br>";
        }
    ?>
</body>
</html>