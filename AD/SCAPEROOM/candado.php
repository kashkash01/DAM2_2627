<?php
require 'comun.php';


$c = $_POST['candado'] ?? '';
$volver = (int)($_POST['volver'] ?? 0);
$codigo = ($_POST['d1'] ?? '') . ($_POST['d2'] ?? '') . ($_POST['d3'] ?? '');

if (!isset($candados[$c]) || !puedeEntrar($volver))
{
    header("Location: hab0.php");
    exit;
}

if ($codigo === $candados[$c]['codigo'])
{
    if (!abierto($c))
    {
        $_SESSION['abiertos'][] = $c;
    }
    $_SESSION['mensaje'] = ["ok", "🔓 ¡CLICK! El candado " . $c . " se abre con el código " . $codigo . "."];
}
else if ($c === "C5")
{
    $_SESSION['intentosC5']++;

    if ($_SESSION['intentosC5'] >= $intentosMaxC5)
    {
        $_SESSION = [];
        $_SESSION['abiertos'] = [];
        $_SESSION['visitadas'] = [];
        $_SESSION['intentosC5'] = 0;
        $_SESSION['inicio'] = time();
        $_SESSION['mensaje'] = ["teletransporte", "🌀 ¡ZZZAP! Has fallado el candado dorado 3 veces. La mansión te ha teletransportado al Recibidor y todos los candados se han vuelto a cerrar. ¡Empieza de nuevo!"];
        header("Location: hab0.php");
        exit;
    }

    $quedan = $intentosMaxC5 - $_SESSION['intentosC5'];
    $_SESSION['mensaje'] = ["error", "❌ El código " . $codigo . " no es correcto. Te quedan " . $quedan . " intento(s) en el candado dorado."];
}
else
{
    $_SESSION['mensaje'] = ["error", "❌ El código " . $codigo . " no abre el candado " . $c . ". Busca mejor las pistas."];
}

header("Location: hab" . $volver . ".php");
exit
