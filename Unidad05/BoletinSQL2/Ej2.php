<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>

    <body>
        <h2>Seleccionar trimestre</h2>
        <form method="post" action="">
            <label for="trimestre">Trimestre: </label>
            <select name="trimestre" id="trimestre" required>
                <option value="">-- Trimestre -- </option>
                <option value="1">1º Trimestre </option>
                <option value="2">2º Trimestre </option>
            </select>
            <br>
            <input type="submit" value="Mostrar">
        </form>
        <?php
        if (isset($_POST['trimestre'])) {
            $trimestre = $_POST['trimestre'];
            $conexion = new mysqli('localohost', 'root', '', 'centro');
            if ($conexion->connect_error) {
                echo ("Error de conexión" . $conexion->connect_error);
            }

            $consulta = $sql = "
            SELECT 
                a.nombre AS alumno,
                COUNT(m.id_asignatura) AS num_asignaturas,
                ROUND(AVG(m.nota), 2) AS nota_media
            FROM alumnos a
            JOIN matriculas m ON a.id_alumno = m.id_alumno
            JOIN asignaturas s ON m.id_asignatura = s.id_asignatura
            WHERE s.trimestre = ?
            GROUP BY a.id_alumno
            HAVING COUNT(m.id_asignatura) > 1
        ";
        }
        ?>
    </body>
</html>