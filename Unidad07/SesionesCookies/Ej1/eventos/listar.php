<?php
    session_start();
    require "../config/db.php";

    $stmt = $pdo->prepare(
        "SELECT * FROM evento WHERE usuario_id = ? ORDER BY fecha, hora"
    );

    $stmt->execute([$_SESSION["usuario_id"]]);
?>