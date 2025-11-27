<?php
    $importe = $_POST['euros'];
    $cambio = $_POST['moneda'];
    if ($cambio === "dolares") {
        $importe = $importe * 1.10;
        echo "<p>Son ". $importe . " " . $cambio . "</p>";
    } elseif ($cambio === "libras") {
        $importe = $importe * 0.85;
        echo "<p> Son " . $importe . " " . $cambio . "</p>";
    } elseif ($cambio === "yen") {
        $importe = $importe * 130;
        echo "<p> Son " . $importe . " " . $cambio . "</p>";
    }
?>