<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <table border="1">
            <th>Nombre</th>
            <th>Partida 1</th>
            <th>Partida 2</th>
            <th>Partida 3</th>
            <th>Puntuación Total</th>
            <?php
                $jugadores = [
                    ['nombre' => 'Ana', 'partida1' => 10, 'partida2' => 15, 'partida3' =>
                    20],
                    ['nombre' => 'Luis', 'partida1' => 20, 'partida2' => 25, 'partida3' =>
                    30],
                    ['nombre' => 'Marta', 'partida1' => 15, 'partida2' => 10, 'partida3' =>
                    5],
                ];
                // calcular puntuación total+
                foreach($jugadores as $jugador) {
                    $puntuacion = $jugador['partida1'] + $jugador['partida2'] + $jugador['partida3'];
                    // mostrar un rankings con los jugadores ordenados por puntuación
                    $jugador['puntuacion'] = $puntuacion;
                }
                foreach ($jugadores as $jugador) {
                    echo "<tr>";
                    echo "<td>". $jugador['nombre'] . "</td>";
                    echo "<td>". $jugador['partida1'] . "</td>";
                    echo "<td>". $jugador['partida2'] . "</td>";
                    echo "<td>". $jugador['partida3'] . "</td>";
                    echo "<td>". $jugador['puntuacion'] . "</td>";
                }
            ?>
        </table>
    </body>
</html>