<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeroDia = 3;
        switch ($1) {
            case 1:
                    echo "<p>Lunes</p>";
                break;
            case 2:
                    echo "<p>Martes</p>";
                break;
            case 3:
                    echo "<p>Miércoles</p>";
                break;
            case 4:
                    echo "<p>Jueves</p>";
                break;
            case 5:
                    echo "<p>Viernes</p>";
                break;
            case 6:
                    echo "<p>Sábado</p>";
                break;
            case 7:
                    echo "<p>Domingo</p>";
                break;
            default:
                echo "<p> No se ha introducido un día válido </p>";
                break;
        }
    ?>
</body>
</html>