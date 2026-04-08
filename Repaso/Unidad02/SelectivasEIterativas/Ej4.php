<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $nota = 7;
            if ($nota >= 0 && $nota <= 4) {
                echo "<p>Suspenso</p>";
            } elseif ($nota >= 5 && $nota <= 6) {
                echo "<p>Aprobado</p>";
            } elseif ($nota >= 7 && $nota <= 8) {
                echo "<p>Notable</p>";
            } elseif ($nota >= 9 && $nota <= 10) {
                echo "<p>Sobresaliente</p>";
            }
        ?>
    </body>
</html>