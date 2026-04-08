<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $titulos = ["The Last of Us", "Elden Ring", "Cyberpunk 2077"];
            $desarrolladores = ["Naughty Dog". "FromSoftware", "CD Projekt Red"];
            $anyos = [2013,2022,2020];
            $precios = [
                "The Last of Us" => 39.99,
                "Elden Ring" => 59.99,
                "Cyberpunk 2077" => 29.99
            ];
            $disponible1 = true;
            $disponible2 = true;
            $disponible3 = false;
            for ($i=0; $i < count($titulos); $i++) {
                echo "<div>";
                echo $titulos[$i] . "\n";
                echo $desarrolladores[$i] . "\n";
                echo $anyos[$i] . "\n";
                echo number_format($precios[$titulos[$i]], 2) . "€\n";
                if ($i === 0) {
                    if ($disponible1) {
                        echo "<p>Disponible</p>";
                    } else {
                        echo "<p>No disponible</p>";
                    }
                } elseif ($i === 1) {
                    if ($disponible2) {
                        echo "<p>Disponible</p>";
                    } else {
                        echo "<p>No disponible</p>";
                    }
                } elseif ($i === 2) {
                    if($disponible3) {
                        echo "<p>Disponible</p>";
                    } else {
                        echo "<p>No disponible</p>";
                    }
                }
                echo "</div>";
            }
        ?>
    </body>
</html>