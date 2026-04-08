<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $edad = 20;
        if ($edad < 0) {
            if ($edad < 12) {
                echo "Eres un niño";
            } elseif ($edad >= 13 && $edad <= 17) {
                echo "Eres un adolescente";
            } elseif ($edad >= 18 && $edad <= 64) {
                echo "Eres un adulto";
            } elseif ($edad >= 65) {
                echo "Eres un jubilado";
            }
        } else {
            echo "La edad no es válida";
        }
    ?>
</body>
</html>