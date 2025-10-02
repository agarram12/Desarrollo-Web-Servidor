<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejemplo 14</title>
    </head>
    <body>
    <?php
        $_matriz = [
          "nombre" => "Duque",
          "familia" => "Canino",
          "raza" => "Rottweiler",
          "color" => "Negro",
          "peso" => 55.5,
          "altura" => "65cm",
          "edad" => 8
        ];
    ?>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Familia</th>
            <th>Raza</th>
            <th>Color</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Edad</th>
        </tr>
        <tr>
            <td> <?php echo $_matriz['nombre'] ?> </td>
            <td> <?php echo $_matriz['familia'] ?> </td>
            <td> <?php echo $_matriz['raza'] ?> </td>
            <td> <?php echo $_matriz['color'] ?> </td>
            <td> <?php echo $_matriz['peso'] ?> </td>
            <td> <?php echo $_matriz['altura'] ?> </td>
            <td> <?php echo $_matriz['edad'] ?> </td>
        </tr>
    </table>
    </body>
</html>