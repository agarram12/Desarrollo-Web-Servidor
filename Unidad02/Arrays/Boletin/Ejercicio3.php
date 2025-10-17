<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 3</title>
        <style>
            th {
                background-color: rebeccapurple;
                color: black;
            }
            table {
                padding: 0.5em;
                border-collapse: collapse;
            }
            .nombre {
                background-color: rebeccapurple;
                color: white;
            }
            tr:nth-child(even) {
                background-color: lightgray;
            }
            td {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
            <th>Alumno</th>
            <th>Matemáticas</th>
            <th>Lengua</th>
            <th>Ciencias Naturales</th>
            <th>Geografía</th>
            <th>Media</th>

            </tr>
            <?php
                $alumnos = [
                        [
                                "nombre" => "Antonio",
                                "matematicas" => 5,
                                "lengua" => 8.3,
                                "ciencias naturales" => 9,
                                "geografia" => 7,
                        ],
                        [
                                "nombre" => "Ana",
                                "matematicas" => 8,
                                "lengua" => 7,
                                "ciencias naturales" => 4.5,
                                "geografia" => 9,
                        ],
                        [
                                "nombre" => "Benito",
                                "matematicas" => 9,
                                "lengua" => 6.75,
                                "ciencias naturales" => 9,
                                "geografia" => 3.1,
                        ],
                        [
                                "nombre" => "Clara",
                                "matematicas" => 6.2,
                                "lengua" => 7.5,
                                "ciencias naturales" => 8,
                                "geografia" => 6.5,
                        ],
                        [
                                "nombre" => "David",
                                "matematicas" => 7.8,
                                "lengua" => 6.3,
                                "ciencias naturales" => 7.9,
                                "geografia" => 8.1,
                        ],
                        [
                                "nombre" => "Eva",
                                "matematicas" => 8.5,
                                "lengua" => 8.7,
                                "ciencias naturales" => 9.2,
                                "geografia" => 7.6,
                        ],
                        [
                                "nombre" => "Francisco",
                                "matematicas" => 5.4,
                                "lengua" => 6.2,
                                "ciencias naturales" => 6.7,
                                "geografia" => 7.3,
                        ],
                        [
                                "nombre" => "Gabriela",
                                "matematicas" => 9.3,
                                "lengua" => 7.8,
                                "ciencias naturales" => 8.5,
                                "geografia" => 6.4,
                        ],
                        [
                                "nombre" => "Hugo",
                                "matematicas" => 7.1,
                                "lengua" => 7.2,
                                "ciencias naturales" => 8.4,
                                "geografia" => 7.7,
                        ],
                        [
                                "nombre" => "Isabel",
                                "matematicas" => 6.8,
                                "lengua" => 8.1,
                                "ciencias naturales" => 7.4,
                                "geografia" => 6.9,
                        ]
                ];
                foreach ($alumnos as $alumno) {
                    echo "<tr>";
                    echo "<td class='nombre'>" . $alumno["nombre"] . " </td>";
                    echo "<td>" . $alumno["matematicas"] . " </td>";
                    echo "<td>" . $alumno["lengua"] . " </td>";
                    echo "<td>" . $alumno["ciencias naturales"] . " </td>";
                    echo "<td>" . $alumno["geografia"] . " </td>";
                    $total = array_sum($alumno);
                    $media = $total / 4;
                    echo "<td>$media</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <h2>Busqueda del alumno concreto: </h2>
        <table>
            <tr>
                <th>Alumno</th>
                <th>Matemáticas</th>
                <th>Lengua</th>
                <th>Ciencias Naturales</th>
                <th>Geografía</th>
                <th>Media</th>
            </tr>
        <?php
            $busca = "Benito";
            foreach ($alumnos as $alumno) {
                if ($alumno["nombre"] == $busca) {
                    echo "<tr>";
                    echo "<td class='nombre'>" . $alumno["nombre"] . " </td>";
                    echo "<td>" . $alumno["matematicas"] . " </td>";
                    echo "<td>" . $alumno["lengua"] . " </td>";
                    echo "<td>" . $alumno["ciencias naturales"] . " </td>";
                    echo "<td>" . $alumno["geografia"] . " </td>";
                    $total = array_sum($alumno);
                    $media = $total / 4;
                    echo "<td>$media</td>";
                    echo "</tr>";
                }
            }
        ?>
        </table>
    </body>
</html>