<?php
$mes = (int)($_POST['mes'] ?? 0);
$dia = (int)($_POST['dia'] ?? 0);

if ($mes < 1 || $mes > 12 || $dia < 1 || $dia > 31) {
    die("Mes o día no válido. <a href='mes.php'>Volver</a>");
}

// Estación (aproximada por mes completo)
switch ($mes) {
    case 12: case 1: case 2:  $estacion = "Invierno"; break;
    case 3: case 4: case 5:   $estacion = "Primavera"; break;
    case 6: case 7: case 8:   $estacion = "Verano"; break;
    default:                  $estacion = "Otoño";
}

// Horóscopo
if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19))        $signo = "Aries";
elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20))    $signo = "Tauro";
elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20))    $signo = "Géminis";
elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22))    $signo = "Cáncer";
elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22))    $signo = "Leo";
elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22))    $signo = "Virgo";
elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22))   $signo = "Libra";
elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21))  $signo = "Escorpio";
elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21))  $signo = "Sagitario";
elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19))   $signo = "Capricornio";
elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18))    $signo = "Acuario";
else                                                               $signo = "Piscis";
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Resultado</title></head>
<body>
<p>Mes <?= $mes ?>, día <?= $dia ?></p>
<p>Estación: <strong><?= $estacion ?></strong></p>
<p>Horóscopo: <strong><?= $signo ?></strong></p>
<a href="mes.php">Volver</a>
</body>
</html>
