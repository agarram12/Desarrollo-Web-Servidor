<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        setcookie("nombre", $nombre, time() + (7 * 24 * 60 * 60), "/");
        echo "Bienvenido, " . $nombre;
    } elseif (isset($_COOKIE['nombre'])) {
        echo "Bienvenido de nuevo, " . $nombre;
    } else {
        echo "Introduce tu nombre, por favor.";
    }

    if(isset($_POST['borrar'])) {
        setcookie("nombre", "", - 3600);
        unset($_COOKIE["usuario"]);
    }
?>