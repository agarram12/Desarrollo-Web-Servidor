<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 5</title>
    </head>
    <body>
    <?php
        function contar_letra($frase, $letra)
        {
            $frase = strtolower($frase);
            $caracter = substr_count($frase, $letra);
            echo "En la frase \"" . $frase . "\" se encuentra la letra \"" . $letra . "\" $caracter veces <br>";
        }
        $cadena = "Esta es una cadena en la que voy a buscar una letra";
        $letraABuscar = "e";
        contar_letra($cadena, $letraABuscar);
    ?>
    </body>
</html>