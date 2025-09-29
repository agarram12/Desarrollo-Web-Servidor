<!doctype html>
<html lang=es>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2</title>
    </head>
    <!-- 2. Declara una variable string con valor "123.45".
    a) Muestra su tipo.
    b) Convierte la variable a tipo float, int y booleano usando settype().
    c) Después de cada conversión, muestra su tipo y su nuevo valor -->
    <body>
    <?php
        $_cadena = "123.45";
        echo gettype($_cadena) . " valor nuevo: $_cadena <br>";
        echo settype($_cadena, "float");
        echo gettype($_cadena) . " valor nuevo: $_cadena <br>";
        echo settype($_cadena, "integer");
        echo gettype($_cadena) . " valor nuevo: $_cadena <br>";
        echo settype($_cadena, "boolean");
        echo gettype($_cadena) . " valor nuevo: $_cadena <br>";
    ?>
    </body>
</html>