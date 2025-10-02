<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <?php
            $_matriz = [3,2,8,123,8,5,1];
            sort($_matriz);
        ?>
        <table border="1">
            <tr>
                <td> <?php echo $_matriz[0] ?> </td>
                <td> <?php echo $_matriz[1] ?> </td>
                <td> <?php echo $_matriz[2] ?> </td>
                <td> <?php echo $_matriz[3] ?> </td>
                <td> <?php echo $_matriz[4] ?> </td>
                <td> <?php echo $_matriz[5] ?> </td>
                <td> <?php echo $_matriz[6] ?> </td>
            </tr>
        </table>
    </body>
</html>
