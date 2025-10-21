<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <table>
            <?php
                $jugadores = [
                    ['nombre' => 'Ana', 'partida1' => 10, 'partida2' => 15, 'partida3' =>
                    20],
                    ['nombre' => 'Luis', 'partida1' => 20, 'partida2' => 25, 'partida3' =>
                    30],
                    ['nombre' => 'Marta', 'partida1' => 15, 'partida2' => 10, 'partida3' =>
                    5],
                ];
                // calcular puntuación total
                foreach($jugadores as $jugador) {
                    $puntuacion = $jugador['partida1'] + $jugador['partida2'] + $jugador['partida3'];
                    echo "La puntuación de $jugador['nombre'] es de $puntuacion puntos";
                    // mostrar un rankings con los jugadores ordenados por puntuación
                    usort($jugadores, $puntuacion);
                    
                }

                
            ?>
        </table>
    </body>
</html>