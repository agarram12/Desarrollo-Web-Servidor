<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Ej11.css">
    <title>Ej11</title>
</head>
<body>
    <?php
    $_matriz = ["Nombre", "Apellidos", "Edad", "Salario", "Fecha nacimiento"];
    ?>
<table>
    <tr>
        <th>0</th>
        <td> <?php echo $_matriz[0] ?> </td>
    </tr>
    <tr>
        <th>1</th>
        <td> <?php echo $_matriz[1] ?> </td>
    </tr>
    <tr>
        <th>2</th>
        <td> <?php echo $_matriz[2] ?> </td>
    </tr>
    <tr>
        <th>3</th>
        <td> <?php echo $_matriz[3] ?> </td>
    <tr>
        <th>4</th>
        <td> <?php echo $_matriz[4] ?> </td>
    </tr>
</table>

</body>
</html>