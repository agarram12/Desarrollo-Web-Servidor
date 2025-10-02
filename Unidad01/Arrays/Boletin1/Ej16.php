<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php
            $_matriz = [
                5 => 1,
                12 => 2,
                13 => 56,
                "x" => 42
            ];
        ?>
        <table border="1">
            <tr>
                <th>Valores</th>
                <td> <?php echo $_matriz[5] ?> </td>
                <td> <?php echo $_matriz[12] ?> </td>
                <td> <?php echo $_matriz[13] ?> </td>
                <td> <?php echo $_matriz['x'] ?> </td>
            </tr>
            <tr>
                <th>Núm. Elementos</th>
                <td colspan="4"> <?php $_nElementos = count($_matriz); echo "$_nElementos"?> </td>
            </tr>
            <tr>
                <th colspan="2">Valores sin pos. 5</th>
                <?php unset($_matriz[5]) ?>
                <td> <?php echo $_matriz[12] ?> </td>
                <td> <?php echo $_matriz[13] ?> </td>
                <td> <?php echo $_matriz['x'] ?> </td>
            </tr>
        </table>
    </body>
</html>