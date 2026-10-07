<?php

$n = 5;

echo "<pre>";

for ($fila = 1; $fila <= $n; $fila++) {
    // Espacios para centrar
    for ($i = 1; $i <= $n - $fila; $i++) {
        echo " ";
    }

    // Asteriscos de la fila
    for ($j = 1; $j <= 2 * $fila - 1; $j++) {
        echo "*";
    }

    echo "\n";
}

echo "</pre>";
