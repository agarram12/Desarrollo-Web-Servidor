<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 8</title>
        <style>
            table {
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
                padding: 0.4em;
            }
        </style>
    </head>
    <body>
        <form name="notas" method="get" action="">
            <input name="nombre" type="text" placeholder="nombre">
            <input name="matematicas" type="number" placeholder="Nota mates">
            <input name="lengua" type="number" placeholder="Nota lengua">
            <input name="historia" type="number" placeholder="Nota historia">
            <input name="dibujo" type="number" placeholder="Nota dibujo">
            <input name="enviar" type="submit">
        </form>
        <?php
            $nombre = $_GET["nombre"];
            $matematicas = $_GET["matematicas"];
            $lengua = $_GET["lengua"];
            $historia = $_GET["historia"];
            $dibujo = $_GET["dibujo"];
        ?>
        <table>
            <tr>
                <th>Alumno</th>
                <?php
                    echo "<th>" . $nombre . "</th>";
                ?>
            </tr>
                <?php
                    function obtener_Nota($nota) {
                        if ($nota <= 4) {
                            return "Insuficiente";
                        } elseif ($nota == 5) {
                            return "Suficiente";
                        } elseif ($nota == 6) {
                            return "Bien";
                        } elseif ($nota == 7 || $nota == 8) {
                            return "Notable";
                        } elseif ($nota == 9 || $nota == 10) {
                            return "Sobresaliente";
                        } else {
                            return "Nota no válida";
                        }
                    }
                    echo "<tr>";
                    echo "<td>Matemáticas</td>";
                    echo "<td>" . obtener_Nota($matematicas) . "</td></tr>";

                    echo "<tr>";
                    echo "<td>Matemáticas</td>";
                    echo "<td>" . obtener_Nota($lengua) . "</td></tr>";

                    echo "<tr>";
                    echo "<td>Matemáticas</td>";
                    echo "<td>" . obtener_Nota($historia) . "</td></tr>";

                    echo "<tr>";
                    echo "<td>Matemáticas</td>";
                    echo "<td>" . obtener_Nota($dibujo) . "</td></tr>";
                ?>

        </table>
    </body>
</html>