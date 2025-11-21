<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <form name="tablas" method="get" action="">
            <input name="numero" type="number">
            <input name="enviar" type="submit">
        </form>
        <?php
            $num = $_GET["numero"];
            echo "<h4> Tabla del " . $num . "</h4>";
            for($i=1;$i<=10;$i++) {
                $producto = $num * $i;
                echo $num . " * " . $i . " = " . $producto . "<br>";
            }
        ?>
    </body>
</html>