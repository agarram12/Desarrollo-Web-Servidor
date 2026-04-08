<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Libros</title>
    </head>
    <body>
        <?php
            $libros = [
                [
                    "Titulo" => "La sombra del viento",
                    "Autor" => "Carlos Ruiz Zafón",
                    "Género" => "Misterio",
                    "año" => 2001,
                    "imagen" => "https://example.com/imagenes/sombra_del_viento.jpg"

                ],
                [
                    "Titulo" => "El camino",
                    "Autor" => "Miguel Delibes",
                    "Género" => "Narrativa",
                    "año" => 1950,
                    "imagen" => "https://example.com/imagenes/el_camino.jpg"
                ],
                [
                    "Titulo" => "Los detectives salvajes",
                    "Autor" => "Roberto Bolaño",
                    "Género" => "Novela",
                    "año" => 1998,
                    "imagen" => "https://example.com/imagenes/detectives_salvajes.jpg"
                ],
                [
                    "Titulo" => "La tregua",
                    "Autor" => "Mario Benedetti",
                    "Género" => "Romance",
                    "año" => 1960,
                    "imagen" => "https://example.com/imagenes/la_tregua.jpg"
                ]
            ];
            foreach($libros as $libro) {
                echo "<div>";
                echo "Titulo: " . $libro["Titulo"] . "\n";
                echo "Autor: " . $libro["Autor"] . "\n";
                echo "Género: " . $libro["Género"] . "\n";
                echo "Año: " . $libro["año"] . "\n";
                echo "Portada" . $libro["imagen"] . "\n";
                echo "</div>";
            }
            $favorito = "La metamorfósis";
            echo "<p> Mi libro favorito es " . $favorito . "</p>";
        ?>
    </body>
</html>