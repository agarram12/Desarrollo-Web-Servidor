<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            for ($i=20; $i <= 300; $i++) {
                $suma += $i;
            }

            echo "<p>Suma del 20 al 300" . $suma . "</p>";
        ?>
    </body>
</html>