<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $multiplo = 7;
            $i = 1;
            // bucle for
            for ($i=1;$i<=100;$i++) {
                if ($i % 7 === 0) {
                    echo $i;
                }
            }
            // bucle while
            while ($i <= 100) {
                if ($i % 7 === 0) {
                    echo $i;
                }
                $i++;
            }
        ?>
    </body>
</html>