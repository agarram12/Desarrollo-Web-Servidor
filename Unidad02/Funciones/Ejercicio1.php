<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
    </head>
    <body>
    <?php
        // ucfirst pone la primera en mayúscula, si ya está, lo ignora y la deja en mayúsculas
        function  corregir_primera_letra($cadena) {
            echo ucfirst($cadena);
        }
        $cadena1 = "esto es una cadena con la primera letra minúscula";
        echo "$cadena1<br>";
        echo "se va a transformar la cadena, mostrando la primera en mayúscula<br>";
        corregir_primera_letra($cadena1);
    ?>
    </body>
</html>
