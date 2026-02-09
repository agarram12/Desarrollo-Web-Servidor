<?php
    $host = "localhost";
    $db   = "agenda";
    $user = "root";
    $pass = "";

    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );
