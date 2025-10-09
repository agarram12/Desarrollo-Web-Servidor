<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 11</title>
        <style>
            div {
                width: 50%;
            }
        </style>
    </head>
    <body>
        <?php
            $temperaturas = [
                "lunes" => 12,
                "martes" => 7,
                "miercoles" => 27,
                "jueves" => 24,
                "viernes" => 21,
                "sabado" => 8,
                "domingo" => 10
            ];
            foreach ($temperaturas as $dia => $temperatura) {
                if ($temperatura <= 9) {
                    echo "<div style='background-color: deepskyblue'>$dia</div>";
                } elseif ($temperatura >= 10 && $temperatura <= 25) {
                    echo "<div style='background-color: limegreen'>$dia</div>";
                } else {
                    echo "<div style='background-color: red'>$dia</div>";
                }
            }
        ?>
    </body>
</html>