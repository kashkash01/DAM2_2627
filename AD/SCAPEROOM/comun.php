<?php

session_start();

// ---------------------------------------------------------------
// HABITACIONES
// ---------------------------------------------------------------
$habitaciones = [
    0 => ["nombre" => "Recibidor",   "icono" => "🚪"],
    1 => ["nombre" => "Biblioteca",  "icono" => "📚"],
    2 => ["nombre" => "Cocina",      "icono" => "🍳"],
    3 => ["nombre" => "Sótano",      "icono" => "🕯️"],
    4 => ["nombre" => "Laboratorio", "icono" => "🧪"],
    5 => ["nombre" => "Torre",       "icono" => "🔭"],
    6 => ["nombre" => "Salida",      "icono" => "🏆"]
];

// ---------------------------------------------------------------
// CANDADOS (3 cifras cada uno)
// ---------------------------------------------------------------
$candados = [
    "C1" => ["codigo" => "472", "color" => "rojo",    "punto" => "🔴"],
    "C2" => ["codigo" => "351", "color" => "azul",    "punto" => "🔵"],
    "C3" => ["codigo" => "806", "color" => "verde",   "punto" => "🟢"],
    "C4" => ["codigo" => "913", "color" => "morado",  "punto" => "🟣"],
    "C5" => ["codigo" => "265", "color" => "dorado",  "punto" => "🟡"]
];

$intentosMaxC5 = 3;

$necesita = [
    0 => [],
    1 => [],
    2 => [],
    3 => ["C2"],
    4 => ["C1"],
    5 => ["C3", "C4"],
    6 => ["C5"]
];


if (!isset($_SESSION['abiertos']))
{
    $_SESSION['abiertos'] = [];
    $_SESSION['visitadas'] = [];
    $_SESSION['intentosC5'] = 0;
    $_SESSION['inicio'] = time();
}

// ---------------------------------------------------------------
// FUNCIONES
// ---------------------------------------------------------------
function abierto($c)
{
    return in_array($c, $_SESSION['abiertos']);
}

function puedeEntrar($h)
{
    global $necesita;
    foreach ($necesita[$h] as $c)
    {
        if (!abierto($c))
            return false;
    }
    return true;
}


function entrar($h)
{
    if (!puedeEntrar($h))
    {
        $_SESSION['mensaje'] = ["error", "¡Esa puerta sigue cerrada! Vuelves al Recibidor."];
        header("Location: hab0.php");
        exit;
    }
    if (!in_array($h, $_SESSION['visitadas']))
    {
        $_SESSION['visitadas'][] = $h;
    }
}

function cabecera($h)
{
    global $habitaciones;
    $hab = $habitaciones[$h];
    echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room · '.$hab['nombre'].'</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="juego">';

   
    echo '<nav class="mapa">';
    foreach ($habitaciones as $n => $datos)
    {
        $clase = "sala";
        if ($n === $h)
            $clase .= " actual";
        else if (in_array($n, $_SESSION['visitadas']))
            $clase .= " visitada";
        else if (!puedeEntrar($n))
            $clase .= " cerrada";

        $texto = puedeEntrar($n) ? $datos['icono'] : "🔒";
        echo '<div class="'.$clase.'"><span>'.$texto.'</span><small>H'.$n.'</small></div>';
    }
    echo '</nav>';

    echo '<header class="titulo"><div class="num">Habitación '.$h.'</div><h1>'.$hab['icono'].' '.$hab['nombre'].'</h1></header>';

   
    if (isset($_SESSION['mensaje']))
    {
        echo '<div class="aviso '.$_SESSION['mensaje'][0].'">'.$_SESSION['mensaje'][1].'</div>';
        unset($_SESSION['mensaje']);
    }
}

function pie()
{
    global $candados;
    echo '<footer class="pie">';
    echo '<div class="candados">';
    foreach ($candados as $c => $datos)
    {
        $estado = abierto($c) ? "abierto" : "";
        $icono = abierto($c) ? "🔓" : "🔒";
        echo '<span class="mini '.$estado.'">'.$datos['punto'].' '.$c.' '.$icono.'</span>';
    }
    echo '</div>';
    echo '<a class="reiniciar" href="reiniciar.php">↺ Reiniciar</a>';
    echo '</footer></div></body></html>';
}


function objeto($icono, $nombre, $contenido)
{
    echo '<details class="objeto"><summary>'.$icono.' '.$nombre.'</summary><div class="dentro">'.$contenido.'</div></details>';
}


function pista($c, $texto)
{
    global $candados;
    return '<div class="nota '.$candados[$c]['color'].'">'.$candados[$c]['punto'].' <b>'.$c.'</b> · '.$texto.'</div>';
}


function puerta($desde, $hacia, $c = null)
{
    global $habitaciones, $candados, $intentosMaxC5;
    $destino = $habitaciones[$hacia];

    echo '<div class="puerta">';
    echo '<div class="cartel">Puerta a la habitación '.$hacia.' · '.$destino['nombre'].'</div>';

    if ($c === null || abierto($c))
    {
        if (puedeEntrar($hacia))
        {
            echo '<a class="boton" href="hab'.$hacia.'.php">Entrar '.$destino['icono'].' →</a>';
        }
        else
        {
            echo '<p class="cerrada">🔓 Esta cerradura ya está abierta, pero la '.$destino['nombre'].' tiene otra cerradura por otro lado.</p>';
        }
    }
    else
    {
        $datos = $candados[$c];
        echo '<form class="candado '.$datos['color'].'" action="candado.php" method="post">';
        echo '<div class="etiqueta">'.$datos['punto'].' Candado '.$c.' ('.$datos['color'].')</div>';
        echo '<div class="ruedas">';
        for ($r = 1; $r <= 3; $r++)
        {
            echo '<select name="d'.$r.'">';
            for ($i = 0; $i <= 9; $i++)
            {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            echo '</select>';
        }
        echo '</div>';
        echo '<input type="hidden" name="candado" value="'.$c.'">';
        echo '<input type="hidden" name="volver" value="'.$desde.'">';
        echo '<button type="submit">Probar código</button>';
        if ($c === "C5")
        {
            $quedan = $intentosMaxC5 - $_SESSION['intentosC5'];
            echo '<div class="intentos">⚠️ Te quedan <b>'.$quedan.'</b> intento(s). Si fallas los 3, la mansión te teletransporta al inicio.</div>';
        }
        echo '</form>';
    }
    echo '</div>';
}
