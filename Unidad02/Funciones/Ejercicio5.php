<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
            function contar_letra($cadena, $letra, $caseSensitive=true) {
                if ($caseSensitive) {
                    $contador = substr_count($cadena, $letra);
                    echo "En la frase \"" . $cadena . "\" diferenciando entre mayúsculas hay \"" . $letra ."\" $contador de veces.";
                } else {
                    $contador = substr_count(strtolower($cadena), strtolower($letra));
                    echo "En la frase \"" . $cadena . "\" sin diferenciar entre mayúsculas hay \"" . $letra ."\" $contador de veces.";
                }
            }
            $frase = "FrAse para difERENciAr Entre mayúsculAs y minúscULAS";
            $letraBuscar = "A";
            contar_letra($frase,$letraBuscar,false);
        ?>
    </body>
</html>