<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./ejercicio2.css">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $_num1 = 25;
            $_num2 = 13;
            $_suma = $_num1 + $_num2;
            $_rest = $_num1 - $_num2;
            $_mult = $_num1 * $_num2;
            $_divi = $_num1 / $_num2;
        ?>
        <table>
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
            <tr style="background-color: salmon">
                <td> <?php  echo "$_num1 + $_num2" ?></td>
                <td> <?php echo "$_suma" ?> </td>
                <td> <?php echo "$_num1 * $_num2" ?> </td>
                <td> <?php echo "$_mult" ?> </td>
            </tr>
            <tr style="background-color: navajowhite">
                <td> <?php echo "$_num1 - $_num2" ?> </td>
                <td> <?php echo "$_rest" ?> </td>
                <td> <?php echo "$_num1 / $_num2" ?> </td>
                <td> <?php echo "$_divi" ?> </td>
            </tr>
        </table>
    </body>
</html>
