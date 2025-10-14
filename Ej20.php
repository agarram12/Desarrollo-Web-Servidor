<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 20</title>
    </head>
    <body>
        <?php
            $datos = [3, "hola", 7.5, 11, true, 4, "23", null, 2.0, "cadena",  1               
            ];

            foreach ($valores as $valor) {
                if (is_numeric($valor)) {
                    $numero = (int)$valor;
                    $es_primo = true;

                    if ($numero < 2) {
                        $es_primo = false;
                    } else {
                        for ($i = 2; $i < $numero; $i++) {
                            if ($numero % $i == 0) {
                                $es_primo = false;
                                break;
                            }
                        }
                    }

                    echo "El valor $valor es numérico y " . ($es_primo ? "es primo" : "no es primo") . ".<br>";
                }
            }

        ?>
    </body>
</html>