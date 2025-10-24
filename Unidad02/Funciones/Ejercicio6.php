<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <table border="1">
            <th>Alumno</th>
            <?php
                function formatea_notas(array $notas)
                {
                    $notas_formateadas = [];
                    foreach ($notas as $asignatura => $nota) {
                        if ($nota <= 4.9) {
                            $notas_formateadas[$asignatura] = "Insuficiente";
                        } elseif ($nota >= 5 && $nota <=6.9 ) {
                            $notas_formateadas[$asignatura] = "Aprobado";
                        } elseif ($nota >= 7 && $nota <= 8.9) {
                            $notas_formateadas[$asignatura] = "Notable";
                        } elseif ($nota >= 9 && $nota <= 10) {
                            $notas_formateadas[$asignatura] = "Sobresaliente";
                        } elseif ($nota < 0) {
                            echo "Nota inválida, califica del 0 al 10";
                        }
                    }
                    return $notas_formateadas;
                }
                function mostrar_nota(array $notas) {
                    $notas_formateadas = formatea_notas($notas);
                    foreach ($notas_formateadas as $asignatura => $nota) {
                        echo "<tr>";
                        echo "<td>$asignatura</td>";
                        echo "<td>$nota</td>";
                        echo "</tr>";
                    }
                }
                $notas = [
                    "Matematicas" => 9,
                    "Lengua" => 8,
                    "Historia" => 7,
                    "Dibujo" => 3
                ];
                $nombre = "Juan rámirez";
                echo "<th>" . $nombre . "</th>";
                mostrar_nota($notas);

            ?>
        </table>
    </body>
</html>