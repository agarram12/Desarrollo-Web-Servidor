<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Ej11.css">
    <title>Ej12</title>
</head>
<body>
    <?php
        $_matriz = [
          "Nombre" => "Juan",
          "Apellidos" => "Pérez",
          "Edad" => 27,
          "Salario" => 1250,
          "FechaNacimiento" => '04/12/1997'
        ];
    ?>
    <table>
        <tr>
            <th>Nombre: </th>
            <td><?php echo $_matriz['Nombre'] ?></td>
        </tr>
        <tr>
            <th>Apellidos: </th>
            <td><?php echo $_matriz['Apellidos'] ?></td>
        </tr>
        <tr>
            <th>Edad: </th>
            <td><?php echo $_matriz['Edad'] ?></td>
        </tr>
        <tr>
            <th>Salario: </th>
            <td><?php echo $_matriz['Salario'] ?></td>
        </tr>
        <tr>
            <th>Fecha nacimiento: </th>
            <td><?php echo $_matriz['FechaNacimiento'] ?></td>
        </tr>
    </table>
</body>
</html>