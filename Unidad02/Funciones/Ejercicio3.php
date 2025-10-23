<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
            function contar_letra_a($frase)
            {
                // se le pasa la cadena donde buscar y la letra o string que queremos buscar
                $a = substr_count($frase,"a");
                echo "Número de apariciones: " . $a;
            }
            $cadena = "Cadena para contar el número de letras \"a\" que aparece en esta <br>";
            echo "$cadena";
            contar_letra_a($cadena);
        ?>
    </body>
</html>