<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo 3</title>
    </head>
        <!-- 
            Crea una variable $numeroDia = 3; (por ejemplo) y, con switch, muestra qué
            día de la semana representa (1 = lunes, 7 = domingo).
        -->
    <body>
        <?php
            $numeroDia = 3;
            switch ($numeroDia) {
                case 1:
                    echo "Lunes";
                    break;
                case 2:
                    echo "Martes";
                    break;
                case 3:
                    echo "Miércoles";
                    break;
                case 4:
                    echo "Jueves";
                    break;
                case 5:
                    echo "Viernes";
                    break;
                case 6:
                    echo "Sábado";
                    break;
                case 7:
                    echo "Domingo";
                    break;
                default:
                    echo "Introduce un número válido para el día de la semana.";
            }
    </body>
</html>