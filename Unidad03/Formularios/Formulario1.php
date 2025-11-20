<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Introducción 1</title>
    </head>
    <body>
        <form name="formulario1" method="get">
            <input name="nombre" type="text"/>
            <input name="enviar" type="submit"/>
        </form>
        <?php
            $nombre = $_GET["nombre"];
            echo "¡Hola " . $nombre . "!";
        ?>
    </body>
</html>