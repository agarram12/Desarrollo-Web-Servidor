<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            for ($i=260;$i=110;$i--) {
                if ($i % 3 === 0) {
                    echo "<p>" . $i . "</p>";
                }

                if ($i % 2 === 0) {
                    echo "<p>" . $i . "</p>";
                }
            }
            
        ?>
    </body>
</html>