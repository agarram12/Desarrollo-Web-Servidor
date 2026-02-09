<?php
    session_start();
    require "../config/db.php";

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["usuario_id"] = $user["id"];
        header("Location: ../index.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
