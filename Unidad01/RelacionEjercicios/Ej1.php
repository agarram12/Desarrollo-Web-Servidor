<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 1</title>
    </head>
    <!-- 1. Declara cinco variables que contengan los siguientes valores:
            • Un número entero
            • Un número decimal
            • Una cadena de texto
            • Un valor booleano
            • Un valor null
            Para cada variable:
            a) Muestra su valor y su tipo usando gettype().
            b) Usa funciones is_int(), is_float(), is_string(), is_bool() para identificar
            su tipo
            c) Indica si están definidas (isset()) y si están vacías (empty()) -->
    <body>
        <?php
            $_entero = 5;
            $_decimal = 9.2;
            $_cadena = "Esto es una cadena";
            $_booleano = true;
            $_nulo = null;
            echo "$_entero es de tipo: " . gettype($_entero) . "<br>";
            echo "$_decimal es de tipo: " . gettype($_decimal) . "<br>";
            echo "$_cadena es de tipo: " . gettype($_cadena) . "<br>";
            echo "$_booleano es de tipo: " . gettype($_booleano) . "<br>";
            echo "nulo es de tipo: " . gettype($_nulo);
            echo "<p>-------------------</p>";
            // entero
            if (is_int($_entero)) {
                echo "La variable $_entero es de tipo entero <br>";
            } else {
                echo "La variable $_entero NO es de tipo entero <br>" ;
            }
            // float
            if (is_float($_decimal)) {
                echo "La variable $_decimal es de tipo float <br>";
            } else {
                echo "La variable $_entero NO es de tipo float <br>";
            }
            // string
            if (is_string($_cadena)) {
                echo "La variable $_cadena es de tipo cadena <br>";
            } else {
                echo "la variable $_cadena no es de tipo cadena <br>";
            }
            if (is_bool($_booleano)) {
                echo "La variable $_booleano es de tipo booleano <br>";
            } else {
                echo "La variable $_booleano NO es de tipo booleano <br>";
            }
            if (is_null($_nulo)) {
                echo "La variable $_nulo es de tipo nulo <br>";
            } else {
                echo "La variable nulo NO es de tipo nulo";
            }
            echo "<p>-------------------</p>";
            if (isset($_entero)) {
                echo "La variable tiene valores <br>";
            } else if (empty($_entero)) {
                echo "La variable está vacía <br>";
            }

            if (isset($_decimal)) {
                echo "La variable tiene valores <br>";
            } else if (empty($_decimal)) {
                echo "La variable está vacía <br>";
            }

            if (isset($_cadena)) {
                echo "La variable tiene valores <br>";
            } else if (empty($_cadena)) {
                echo "La variable está vacía <br>";
            }

            if (isset($_booleano)) {
                echo "La variable tiene valores <br>";
            } else if (empty($_booleano)) {
                echo "La variable está vacía <br>";
            }

            if (isset($_nulo)) {
                echo "La variable tiene valores <br>";
            } else if (empty($_nulo)) {
                echo "La variable está vacía <br>";
            }
        ?>
    </body>
</html>