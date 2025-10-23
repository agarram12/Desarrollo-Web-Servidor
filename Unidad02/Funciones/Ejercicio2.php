<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            // strtolower coge la cadena completa sin importar y pone toda la cadena en minúsculas
            // tras ello ucfirst pone la primera en mayúsculas y así tenemos nuestro string arreglado
            function corregir_mayusculas($cadena) {
                $cadena = strtolower($cadena);
                $cadena = ucfirst($cadena);
                echo "cadena arreglada: $cadena <br>";
            }

            $malFormateada = "HoLA eSto ES Una Cadena CON ErrORes De MAyúSCulaS <br>";
            echo "$malFormateada";
            corregir_mayusculas($malFormateada);
        ?>
    </body>
</html>