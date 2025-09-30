<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Ej13.css">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <?php
            $_matriz = ["X", "Y", "Z", "X+Y", "Y*Z", "X/Z", "X+Y+Z", "(Y+Z)/X"];
        ?>
        <table>
            <tr>
                <th>Posición 0</th>
                <td><?php echo $_matriz[0] ?></td>
            </tr>
            <tr>
                <th>Posición 1</th>
                <td><?php echo $_matriz[1] ?></td>
            </tr>
            <tr>
                <th>Posición 2</th>
                <td><?php echo $_matriz[2] ?></td>
            </tr>
            <tr>
                <th>Posición 3</th>
                <td><?php echo $_matriz[3] ?></td>
            </tr>
            <tr>
                <th>Posición 4</th>
                <td><?php echo $_matriz[4] ?></td>
            </tr>
            <tr>
                <th>Posición 5</th>
                <td><?php echo $_matriz[5] ?></td>
            </tr>
            <tr>
                <th>Posición 6</th>
                <td><?php echo $_matriz[6] ?></td>
            </tr>
            <tr>
                <th>Posición 7</th>
                <td><?php echo $_matriz[7] ?></td>
            </tr>
        </table>
    </body>
</html>