<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo2</title>
</head>
<body>
    <?php
        $_a = 5;
        $_b = 35;
        $_c = 18;
        $_mayor = 0;
        if ($_a > $_b && $_a > $_c) {
            $_mayor = $_a;
        } elseif ($_b > $_a && $_b > $_c) {
            $_mayor = $_b;
        } else {
            $_mayor = $_c;
        }
        echo "<h1>El mayor es $_mayor</h1>";
    ?>
</body>
</html>