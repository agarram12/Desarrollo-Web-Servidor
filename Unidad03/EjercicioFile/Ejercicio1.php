<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
        <style>
            table {
                margin-top: 1em;
                border-collapse: collapse;
            }
            th, td {
                padding: 0.5em;
                border: 1px solid white;
            }
            th {
                background-color: deeppink;
                color: white;
            }
            td {
                background-color: lightpink;
            }
        </style>
    </head>
    <body>
        <form name="form1" method="post" action="" enctype="multipart/form-data">
            <input name="nombreNuevo" type="text" placeholder="Nuevo texto para la imagen">
            <input name="imagen" type="file">
            <input name="enviar" type="submit">
        </form>
        <?php
            // seleccionar campos del archivo

            $name = $_FILES['imagen']['name'];
            $temp = $_FILES['imagen']['tmp_name'];
            $size = $_FILES['imagen']['size'];
            $type = $_FILES['imagen']['type'];
            $nombreNuevo = $_POST['nombreNuevo'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            if (!file_exists("./img")) {
                mkdir("./img");
            }
            $ruta = "img/$name";
            move_uploaded_file($temp,"$ruta");
        ?>
        <table>
            <tr>
                <th>Nombre original</th>
                <th>Nuevo nombre</th>
                <th>Tamaño en megas</th>
                <th>Tipo de imagen</th>
            </tr>
            <?php
                echo "<tr>";
                echo "<td>" . $name . "</td>";
                echo "<td>" . $nombreNuevo . "." . $extension . "</td>";
                echo "<td>" . $size . "</td>";
                echo "<td>" . $type . "</td>";
                echo "</tr>"
            ?>
        </table>
    </body>
</html>