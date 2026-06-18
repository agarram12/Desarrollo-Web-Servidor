<?php
session_start();
require_once 'Sala.php';

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

$db = new PDO('mysql:host=localhost;dbname=examen4_php', 'usuario', 'pass');

// Gestión de altas (Solo Admin)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add']) && $_SESSION['rol'] === 'admin') {
    $stmt = $db->prepare("INSERT INTO salas (nombre, capacidad, estado) VALUES (?, ?, 'Libre')");
    $stmt->execute([$_POST['nombre'], $_POST['capacidad']]);
    header("Location: dashboard.php");
    exit();
}

// Obtención de datos
$query = ($_SESSION['rol'] === 'admin') ? "SELECT * FROM salas" : "SELECT * FROM salas WHERE estado = 'Libre'";
$stmt = $db->query($query);
$salasData = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard de Salas</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background: #fdfdfd; }
        nav { background: #333; color: white; padding: 15px; display: flex; justify-content: space-between; align-items: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
    </style>
</head>
<body>

<nav>
    <span>Usuario: <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong> (<?php echo $_SESSION['rol']; ?>)</span>
    <a href="logout.php" style="color:white; text-decoration:none;">Cerrar Sesión</a>
</nav>

<div style="margin-top: 20px;">
    <?php if ($_SESSION['rol'] === 'admin'): ?>
    <div style="border: 1px solid #ccc; padding: 20px; background: #f9f9f9;">
        <h3>Nueva Sala</h3>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre de la sala" required>
            <input type="number" name="capacidad" placeholder="Capacidad" required>
            <button type="submit" name="add">Registrar Sala</button>
        </form>
    </div>
    <?php endif; ?>

    <h3>Listado de Salas</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Resumen / Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salasData as $fila): 
                $sala = new Sala($fila['nombre'], $fila['capacidad'], $fila['estado']);
            ?>
            <tr style="<?php echo $sala->getEstilo(); ?>">
                <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                <td><?php echo htmlspecialchars($fila['capacidad']); ?></td>
                <td><?php echo $sala->getResumen(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>