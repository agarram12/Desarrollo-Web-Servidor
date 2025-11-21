<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <form name="mayorEdad" method="get" action="">
            <input name="nombre" type="text">
            <input name="edad" type="number">
            <input name="enviar" type="submit">
        </form>
        <?php
            $nombre = $_GET["nombre"];
            $edad = $_GET["edad"];
            if ($edad >= 18) {
                echo "Hola, " . $nombre . " eres mayor de edad ya que tienes " . $edad . " años.";
            } else {
                echo "Hola, " . $nombre . " eres menor de edad ya que tienes " . $edad . " años.";
            }
        ?>
    </body>
</html>