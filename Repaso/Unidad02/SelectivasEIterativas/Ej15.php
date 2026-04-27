<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $arr = [5,2,7,8,9,12,5];
            $suma = 0;
            $media = 0;
            for ($i = 0; $i <= count($arr); $i++) {
                $suma += $arr[$i];
            }
            // obtener la suma de todo y sacar la media
            // aprovecho la variable de suma donde ya los tengo
            $media = $suma / count($arr);

            echo "<p>Suma de todos los valores: " . $suma . "</p>";
            echo "<p>Media de todos los valores: " . $media . "</p>";
            echo "<p>Número de valores encontrados: " . count($arr) . "</p>";
        ?>
    </body>
</html>