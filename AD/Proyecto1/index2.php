<?php
function saludar($nombre, $saludo) {
    return $saludo . " " . $nombre;
}

$num1 = 10;
$num2 = 20;

function mayor($num1, $num2) {
    if ($num1 > $num2) {
        echo $num1;
    } else {
        echo $num2;
    }
}

echo saludar("Alejandro", "Hola"); 
echo "<br>";

mayor($num1, $num2); 

function mayor3($num1, $num2, $num3) {
    if ($num1 > $num2 && $num1 > $num3)echo $num1;
    elseif ($num2 > $num1 && $num2 > $num3)echo $num2;
    else echo $num3;
}
echo "<br>";
mayor3(10, 20, 30);

//si algun numero de los 3 son iguales que saque -1
function mayor3ConIguales($num1, $num2, $num3) {
    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        return -1;
    }
}
echo "<br>";
echo mayor3ConIguales(10, 20, 30);
echo "<br>";
echo mayor3ConIguales(10, 10, 30);

echo "<br>";

$cateto1 = 3;
$cateto2 = 4;
// hacer la hipotenusa sin usar return
function hipotenusa($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    echo ("la hipotenusa es: " . $hipotenusa);
}
hipotenusa($cateto1, $cateto2);

//Calculadora

echo "<br>";

function calcular($a, $b, $operador, &$resultado) {
    if ($operador === "+") {
        $resultado = $a + $b;
    } elseif ($operador === "-") {
        $resultado = $a - $b;
    } elseif ($operador === "*") {
        $resultado = $a * $b;
    } elseif ($operador === "/") {
        $resultado = $a / $b;
    } else {
        $resultado = null;
    }
}

echo "<br>";

$total = 0;
calcular(4, 5, "+", $total);
echo "4 + 5 = " . $total . "<br>";
calcular(4, 5, "-", $total);
echo "4 - 5 = " . $total . "<br>";
calcular(4, 5, "*", $total);
echo "4 * 5 = " . $total . "<br>";
calcular(4, 5, "/", $total);
echo "4 / 5 = " . $total . "<br>";