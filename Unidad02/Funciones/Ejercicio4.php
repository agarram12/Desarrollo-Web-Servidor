<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            function contar_mayusculas($frase)
            {
                /*
                 * Con pre_match_all le pasamos la expresión que queremos que busque en la cadena
                 * Tras ello se le pasa la propia cadena en la que buscaremos.
                 */
                $coincidencias = preg_match_all('/[A-Z]/', $frase);
                echo "Hay " . $coincidencias . "  letra(s) mayúsculas <br>";
            }
            $cadena = "CadeNA para CONTar cuantas MAYÚSculas HAY <br>";
            echo "$cadena";
            contar_mayusculas($cadena);
        ?>
    </body>
</html>