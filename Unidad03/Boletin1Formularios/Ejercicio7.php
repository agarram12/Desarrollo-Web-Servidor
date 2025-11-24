<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 7 relación</title>
    </head>
    <body>
        <form name="primo" method="get" action="">
            <input name="num" type="number">
            <input name="enviar" type="submit">
        </form>
        <?php
            $num = $_GET["num"];
            $coincidencias = 0;
            $divisores = [];
            for ($i=1;$i<=10;$i++) {
                if ($num % $i == 0) {
                    $coincidencias++;
                    $divisores[] = $i;

                }
            }
            if ($coincidencias === 2) {
                echo "<p>El número es primo, solo se divide entre 1 y " . $num . "</p>";
            } else {
                echo "<p>El número no es primo, también puede ser dividido entre: </p>";
                foreach ($divisores as $divisor) {
                    echo $divisor . "<br>";
                }
            }
        ?>
    </body>
</html>