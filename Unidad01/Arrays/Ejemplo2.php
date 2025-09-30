<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array 2</title>
        <style>
            table {
                border-color: red;
                border-style: solid;
            }
        </style>
    </head>
    <body>
    <?php
        $_matriz['nombre']="Jorge";
        $_matriz['apellido']="Pérez";
        $_matriz['edad']=35;
        $_matriz['altura']=1.77;
        $_matriz['peso']=80;
        $_matriz['pelo']="Moreno";
        $_matriz['estado']="Soltero";
    ?>
    <table border="1">
        <tr align="center">
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Altura</td>
            <td>Peso</td>
            <td>Pelo</td>
            <td>Estado</td>
        </tr>
        <tr align="center">
            <td> <?php echo $_matriz['nombre'] ?> </td>
            <td> <?php echo $_matriz['apellido'] ?> </td>
            <td> <?php echo $_matriz['edad'] ?> </td>
            <td> <?php echo $_matriz['altura'] ?> </td>
            <td> <?php echo $_matriz['peso'] ?> </td>
            <td> <?php echo $_matriz['pelo'] ?> </td>
            <td> <?php echo $_matriz['estado'] ?> </td>
        </tr>
    </table>
    </body>
</html>