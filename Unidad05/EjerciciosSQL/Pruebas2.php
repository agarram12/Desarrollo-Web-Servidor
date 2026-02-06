<?php
    $conexion = new mysqli('localhost', 'root', '', 'centro');
    $conexion->set_charset('utf8');
    $consulta = "SELECT dni, nombre, edad FROM alumnos";
    $resultado = $conexion->query($consulta);

    if($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "Código: " . $fila['codigo'] . "<br>";
            echo "Nombre: " . $fila['nombre'] . "<br>";
            echo "Créditos: " . $fila['creditos'] . "<br>";
            echo "Trimestre: " . $fila['trimestre'] . "<br> <hr>";
        }
    } else {
        echo "No hay asignaturas registradas";
    }

    $conexion->close();
?>