<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $semana = [
                "lunes" => 16,
                "martes" => 18,
                "miercoles" => 5,
                "jueves" => 15,
                "sabado" => 20,
                "domingo" => 30
            ];

            foreach ($semana as $dia => $temperatura) {
                if ($temperatura < 10 ) {
                    $color = "blue";
                } elseif ($temperatura > 10 && $temperatura <= 25) {
                    $color = "green";
                } elseif ($temperatura > 25) {
                    $color = "red";
                }
                echo "<div style='background-color: $color>";
                echo "<p> Día:" . $dia . "</p>";
                echo "<p> Temperatura: " . $temperatura . "</p>";
            }
        ?>
    </body>
</html>