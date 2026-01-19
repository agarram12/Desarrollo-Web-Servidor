<?php
    $conexion = new mysqli('localhost', 'root', '', 'centro');
    $sentencia = "select * from alumnos where nombre like ?";
    $consulta = $conexion->prepare($sentencia);
    $nombre = '%Paloma%';
    $consulta->bind_param("s", $nombre);
    $consulta->bind_result($dni, $nombre, $edad);
    $consulta->execute();

    echo "Mostrando los alumnos buscados <br>";
    while($consulta->fetch()) {
        echo " $dni, $nombre, $edad <br>";
    }

    $consulta->close();
?>