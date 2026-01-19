<?php
    $conexion = new mysqli('localhost', 'root', '', 'centro');
    $sentencia = "select * from alumnos where edad <= ?";
    $consulta = $conexion->prepare($sentencia);
    $ed = 21;
    $consulta->bind_param("s", $ed);
    $consulta->bind_result($dni, $nombre, $edad);
    $consulta->execute();

    echo "Mostrando los alumnos buscados <br>";
    while($consulta->fetch()) {
        echo " $dni, $nombre, $edad <br>";
    }

    $consulta->close();
?>