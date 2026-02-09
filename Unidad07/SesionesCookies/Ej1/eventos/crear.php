<?php
    session_start();

    if (!isset($_SESSION["usuario_id"])) {
        header("Location: ../auth/login.php");
        exit;
    }
    require "../config/db.php";
    $errores = [];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $titulo = trim($_POST["titulo"]);
        $descripcion = trim($_POST["descripcion"]);
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $categoria = $_POST["categoria"];

        if (strlen($titulo) < 3) {
            $errores[] = "El título debe tener al menos 3 caracteres";
        }

        try {
            $fechaEvento = new DateTime($fecha . " " . $hora);
            $ahora = new DateTime();

            if ($fechaEvento <= $ahora) {
                $errores[] = "La fecha y hora deben ser futuras";
            }
        } catch (Exception $e) {
            $errores[] = "Fecha u hora inválidas";
        }

        $categoriasValidas = ["trabajo", "estudio", "ocio", "personal"];
        if (!in_array($categoria, $categoriasValidas)) {
            $errores[] = "Categoría no válida";
        }

        if (empty($errores)) {
            $stmt = $pdo->prepare(
                "INSERT INTO eventos 
                (usuario_id, titulo, descripcion, fecha, hora, categoria)
                VALUES (?, ?, ?, ?, ?, ?)"
            );

            $stmt->execute([
                $_SESSION["usuario_id"],
                $titulo,
                $descripcion,
                $fecha,
                $hora,
                $categoria
            ]);

            header("Location: listar.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear evento</title>
    </head>
    <body>

    <h2>Crear evento</h2>
    <?php if (!empty($errores)): ?>
        <ul style="color:red">
            <?php foreach ($errores as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <label>Título</label><br>
        <input type="text" name="titulo" required><br><br>

        <label>Descripción</label><br>
        <textarea name="descripcion"></textarea><br><br>

        <label>Fecha</label><br>
        <input type="date" name="fecha" required><br><br>

        <label>Hora</label><br>
        <input type="time" name="hora" required><br><br>

        <label>Categoría</label><br>
        <select name="categoria" required>
            <option value="">-- Selecciona --</option>
            <option value="trabajo">Trabajo</option>
            <option value="estudio">Estudio</option>
            <option value="ocio">Ocio</option>
            <option value="personal">Personal</option>
        </select><br><br>

        <button type="submit">Guardar evento</button>
    </form>

    </body>
</html>
