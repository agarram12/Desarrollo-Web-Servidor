<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <form name="form1" method="get" action="">
            <input name="num" type="number">
            <input name="enviar" type="submit">
        </form>
        <?php
            $num = $_GET["num"];
            for ($i=0;$i<10;$i++) {
                $potencia = pow($num, $i);
                echo "Número " . $num . " potencia " . $i . " resultado: " . $potencia . "<br>";
            }
        ?>
    </body>
</html>