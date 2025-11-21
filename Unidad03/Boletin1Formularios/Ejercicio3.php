<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <form name="numeros" method="get" action="">
            <input name="num1" type="number">
            <input name="num2" type="number">
            <input name="num3" type="number">
            <input name="enviar" type="submit">
        </form>
        <?php
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];
            $mayor = $num1;
            $menor = $num1;
            // 2 3 4
            if ($num2 > $mayor) {
                $mayor = $num2;
            }
            if ($num3 > $mayor) {
                $mayor = $num3;
            }

            if ($num2 < $menor) {
                $menor = $num2;
            }
            if ($num3 < $menor) {
                $menor = $num3;
            }
            echo "Mayor: " . $mayor . "<br>";
            echo "Menor: " . $menor;
        ?>
    </body>
</html>