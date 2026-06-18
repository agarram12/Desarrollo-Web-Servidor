<?php
session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];

    $db = new PDO('mysql:host=localhost;dbname=examen4_php', 'usuario', 'pass');
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && $pass === $usuario['pass']) {
        $_SESSION['usuario'] = $usuario['email'];
        $_SESSION['rol'] = $usuario['rol'];
        
        setcookie('ultimo_email', $email, time() + 86400, "/");
        
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RoomTrack - Login</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 100px; background: #eee; }
        .login-box { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { display: block; width: 250px; margin-bottom: 10px; padding: 8px; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>Acceso RoomTrack</h3>
        <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <input type="email" name="email" value="<?= isset($_COOKIE['ultimo_email']) ? htmlspecialchars($_COOKIE['ultimo_email']) : '' ?>" placeholder="Email" required>
            <input type="password" name="pass" placeholder="Contraseña" required>
            <button type="submit" name="login">Entrar</button>
        </form>
    </div>
</body>
</html>