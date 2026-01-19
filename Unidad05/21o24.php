<?php
    $conexion = new mysqli('localhost', 'root', '', 'centro');
    $sentencia = "select * from alumnos where edad = ? || edad = ?";
    $consulta = $conexion->prepare($sentencia);
    $ed1 = 21;
    $ed2 = 24;
    $consulta->bind_param("ii", $ed1, $ed2);
    $consulta->bind_result($dni, $nombre, $edad);
    $consulta->execute();
   echo "Mostrando los alumnos buscados <br>";
    while($consulta->fetch()) {
        echo " $dni, $nombre, $edad <br>";
    }

    $consulta->close();
?>