<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            $cadena1 = "Mi mamá me mima";
            $cadena2 = "Quiero mucho a mi mamá";
            $cadena3 = implode("", [$cadena1, $cadena2]);
            $repeticiones = [];
            echo $cadena3;
            // contar cantidad de veces que se repite cada letra del abecedario
            $contarLetras = "Esta es mi cadena para contar letras";
            $contarLetrasForm = strtolower($contarLetras);
            $conteo = [];
            for ($i = 'a'; $i <= 'z'; $i++) {
                $conteo[$i] = 0;
            }
            $conteo['ñ'] = 0;
            for ($i = 0; $i < strlen($contarLetrasForm); $i++ ) {
                $letra = $contarLetrasForm[$i];
                $conteo[$letra]++;
            }
            return conteo;
        ?>
    </body>
</html>