<?php
    $var1 = 5;
    $var2 = "5";
    $var3 = 10;

    // comparar var1 y var2 usando == y ===
    if ($var1 == $var2) {
        echo "Son el mismo valor";
    }

    if ($var1 === $var2) {
        echo "Son el mismo valor y del mismo TIPO";
    }

    // comparar var1 con var3 usando >, <, >= , <=

    if ($var1 > $var3) {
        echo $var1 . " es mayor que " . $var3;
    } else if ($var1 < $var3) {
        echo $var1 . " es menor que " . $var3;
    } else if ($var1 >= $var3) {
        echo $var1 . " es mayor o igual que " . $var3;
    } else if ($var1 <= $var3) {
        echo $var1 . " es menor o igual que " . $var3;
    }
?>