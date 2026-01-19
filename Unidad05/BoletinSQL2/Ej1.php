<?php
$dni = $_POST['dni'];

$conexion = new mysqli('localhost', 'root', '', 'centro');
if ($conexion->connect_error) {
    die("Error de conexión");
}

/* 1. Comprobar si existe el alumno */
$sentencia = "SELECT nombre, edad FROM alumnos WHERE dni = ?";
$consulta = $conexion->prepare($sentencia);
$consulta->bind_param("s", $dni);
$consulta->execute();
$consulta->bind_result($nombre, $edad);

if (!$consulta->fetch()) {
    echo "No existe ningún alumno con ese DNI</p>";
    $consulta->close();
    $conexion->close();
    exit;
}

$consulta->close();

/* 2. Mostrar datos del alumno */
echo "<h3>Datos del alumno</h3>";
echo "Nombre: $nombre <br>";
echo "Edad: $edad <br><br>";

/* 3. Obtener asignaturas con nota ≥ 6 */
$sentencia2 = "
    SELECT a.nombre, m.nota
    FROM asignaturas a
    JOIN matriculas m ON a.id = m.id_asignatura
    WHERE m.dni = ? AND m.nota >= 6
    ORDER BY m.nota DESC
";

$consulta2 = $conexion->prepare($sentencia2);
$consulta2->bind_param("s", $dni);
$consulta2->execute();
$consulta2->bind_result($asignatura, $nota);

echo "<h3>Asignaturas aprobadas</h3>";

$hay_resultados = false;
echo "<ul>";
while ($consulta2->fetch()) {
    $hay_resultados = true;
    echo "<li>$asignatura — Nota: $nota</li>";
}
echo "</ul>";

if (!$hay_resultados) {
    echo "No tiene asignaturas con nota mayor o igual a 6";
}

$consulta2->close();
$conexion->close();
