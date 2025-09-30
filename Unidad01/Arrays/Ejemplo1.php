<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array1</title>
    </head>
    <body>
        <?php
            $_matriz[0]="León";
            $_matriz[1]="Seat";
            $_matriz[2]=false;
            $_matriz[3]=2500;
            $_matriz[4]="V6";
        ?>
    <table border="1" >
        <tr align="center">
            <td> <?php echo $_matriz[0] ?></td>
            <td> <?php echo $_matriz[1] ?></td>
            <td> <?php echo $_matriz[2] ?></td>
            <td> <?php echo $_matriz[3] ?></td>
            <td> <?php echo $_matriz[4] ?></td>
        </tr>
        <tr align="center">
            <td>0</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
    </table>
    </body>
</html>