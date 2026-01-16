<?php
    $conexion = new mysqli('localhost', 'root', '', 'centro');
    $conexion->set_charset('utf8');
    $consulta = "select * from alumnos";

    $resultado = $conexion->query($consulta);
    $fila = $resultado->fetch_all(MYSQLI_BOTH);
    $numero_filas = $resultado->num_rows;
    echo "Se han encontrado " . $numero_filas . " alumnos";
    while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
        echo "<br> $fila[nombre] tienen $fila[edad]";
    }
    
    $conexion->close();
?>