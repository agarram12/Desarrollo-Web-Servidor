<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $cadenas = ["def", "abc", "ghi"];
            sort($cadenas);
            echo "Cadenas ordenadas por orden";
            foreach ($cadenas as $cadena) {
                echo "<div>";
                    echo "<p>" . $cadena . "</p>";
                echo "</div";
            }
        ?>
    </body>
</html>