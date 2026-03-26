<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            // vegetariano
            $menuVegetariano = ["Ensalada César", "Lasaña de verduras", "Tofu salteado", "Gazpacho"];
            $preciosVegetariano = [
                "Ensalada César" => 7.50,
                "Lasaña de verduras" => 9.00,
                "Tofu salteado" => 8.25,
                "Gazpacho" => 5.50
            ];

            $imagenesVegetariano = [
                "Ensalada César" => "https://source.unsplash.com/300x200/?salad",
                "Lasaña de verduras" => "https://source.unsplash.com/300x200/?vegetable-lasagna",
                "Tofu salteado" => "https://source.unsplash.com/300x200/?tofu",
                "Gazpacho" => "https://source.unsplash.com/300x200/?gazpacho"
            ];
            // carnivoro
            $menuCarnivoro = ["Hamburguesa", "Pollo asado", "Entrecot", "Costillas BBQ"];

            $preciosCarnivoro = [
                "Hamburguesa" => 8.50,
                "Pollo asado" => 10.00,
                "Entrecot" => 14.50,
                "Costillas BBQ" => 13.00
            ];

            $imagenesCarnivoro = [
                "Hamburguesa" => "https://source.unsplash.com/300x200/?burger",
                "Pollo asado" => "https://source.unsplash.com/300x200/?roast-chicken",
                "Entrecot" => "https://source.unsplash.com/300x200/?steak",
                "Costillas BBQ" => "https://source.unsplash.com/300x200/?ribs"
            ];

            // menú internacional
            $menuInternacional = ["Sushi", "Tacos", "Pizza", "Pad Thai"];

            $preciosInternacional = [
                "Sushi" => 12.00,
                "Tacos" => 7.00,
                "Pizza" => 9.50,
                "Pad Thai" => 11.00
            ];

            $imagenesInternacional = [
                "Sushi" => "https://source.unsplash.com/300x200/?sushi",
                "Tacos" => "https://source.unsplash.com/300x200/?tacos",
                "Pizza" => "https://source.unsplash.com/300x200/?pizza",
                "Pad Thai" => "https://source.unsplash.com/300x200/?pad-thai"
            ];
        ?>
        <div>
            <h2>Menú vegetariano</h2>
            <?php 
                for ($i=0; $i < count($menuVegetariano); $i++) {
                    echo $menuVegetariano[$i] . "\n";
                }
            ?>
        </div>
        <div>
            <h2>Menú carnivoro</h2>
            <?php
                for($i=0; $i < count($menuCarnivoro); $i++) {
                    echo $menuCarnivoro[$i] . "\n";
                }
            ?>
        </div>
        <div>
            <h2>Menú internacional</h2>
            <?php
                for($i=0; $i < count($menuInternacional); $i++) {
                    echo $menuInternacional[$i] . "\n";
                }
            ?>
        </div>
        <?php
            foreach($menuVegetariano as $plato) {
                echo "<div>";
                echo "<img src='" . $imagenesVegetariano[$plato] . "' width='150'>";
                echo "<p>" . $plato . "</p>";
                echo "<p>" . $preciosVegetariano[$plato] . "</p>";
                echo "Número de platos: " . count($$menuVegetariano);
                echo "</div>";
            }
            foreach($menuCarnivoro as $plato) {
                echo "<div>";
                echo "<img src='" . $imagenesCarnivoro[$plato] . "' width='150'>";
                echo "<p>" . $plato . "</p>";
                echo "<p>" . $preciosCarnivoro[$plato] . "</p>";
                echo "Número de platos: " . count($menuCarnivoro);
                echo "</div>";
            }
            foreach($menuInternacional as $plato) {
                echo "<div>";
                echo "<img src'" . $imagenesInternacional[$plato] . "' width='150'";
                echo "<p>" . $plato . "</p>";
                echo "<p>" . $preciosInternacional[$plato] . "</p>";
                echo "Número de platos: " . count($menuInternacional);
                echo "</div>";
            }
        ?>
    </body>
</html>