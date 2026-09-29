<?php
echo "HOLA MUNDO";


$edad = 24;
$nombre = "Juan";
$apellido = "Pérez";

echo $edad . " " . $nombre . " " . $apellido;

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) echo ", ";
    }

$num1 = 10;
$num2 = 20;
function mayor($num1,$num2) {
    if ($num1 > $num2) {
        echo $num1;
    } else {
        echo $num2;
    }
}
?>


