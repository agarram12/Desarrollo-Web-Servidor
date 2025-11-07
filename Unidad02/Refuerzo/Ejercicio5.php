<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Alumnos</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            </tr>
        <?php
            function mostrar_alumnos($alumnos) {
                foreach($alumnos as $nombre => $asistencia) {
                    echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    foreach($asistencia as $dia) {
                        if($dia == 1) {
                            echo "<td>Asistió</td>";
                        } elseif ($dia == 0) {
                            echo "<td>No asistió</td>";
                        } else {
                            echo "introduce una asistencia válida (1 / 0)";
                        }
                    }
                    echo "</tr>";
                }
            }
            function calcular_porcentaje($alumnos) {
                foreach($alumnos as $alumno => $dias) {
                    $contador = 0;
                    foreach($dias as $dia) {
                        if($dia == 1) {
                            $contador++;
                        }
                    }
                    $totalDias = count($dias);
                    $porcentaje = ($contador/$totalDias) * 100;
                    echo "$alumno: " . round($porcentaje, 2) . "%<br>";
                }
            }
            function mejor_asistencia($alumnos) {
                $mayorAsistencia = -1;
                $menorAsistencia = 100;
                $mejorAlumno = "";
                $peorAlumno = "";
                foreach($alumnos as $alumno => $dias) {
                    $totalAsistencia = array_sum($dias);
                    if ($totalAsistencia > $mayorAsistencia) {
                        $mejorAlumno = $alumno;
                        $mayorAsistencia = $totalAsistencia;
                    }

                    if ($totalAsistencia < $menorAsistencia) {
                        $peorAlumno = $alumno;
                        $menorAsistencia = $totalAsistencia;
                    }

                }
                echo "<tr><th>Mejor alumno</th><td>" . $mejorAlumno . "</td></tr>";
                echo "<tr><th>Peor alumno</th><td>" . $peorAlumno . "</td></tr>";
            }
            $asistencia = [
                        "Ana" => [1, 1, 0, 1, 1],
                        "Pepe" => [1, 0, 0, 1, 0],
                        "Luis" => [1, 1, 1, 1, 1],
                        "Marta" => [0, 1, 1, 0, 1],
                    ];
            mostrar_alumnos($asistencia);
            calcular_porcentaje($asistencia);
            mejor_asistencia($asistencia);
        ?>
    </table>
</body>
</html>