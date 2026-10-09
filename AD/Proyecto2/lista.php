<?php
$cantidad = (int)($_POST['cantidad'] ?? 0);
$tam = (int)($_POST['tam'] ?? 0);

if ($cantidad < 1 || $cantidad > 10 || $tam < 3 || $tam > 6) {
    die("Datos no válidos. <a href='/DAM2_2627/AD/Proyecto2/palabras.php'>Volver</a>");
}

function palabraAleatoria($tam) {
    $letras = "abcdefghijklmnopqrstuvwxyz";
    $palabra = "";
    for ($i = 0; $i < $tam; $i++) {
        $palabra .= $letras[random_int(0, 25)];
    }
    return $palabra;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Lista</title></head>
<body>
<p><?= $cantidad ?> palabras de <?= $tam ?> letras:</p>
<ul>
    <?php for ($i = 0; $i < $cantidad; $i++): ?>
        <li><?= palabraAleatoria($tam) ?></li>
    <?php endfor; ?>
</ul>
<a href="/DAM2_2627/AD/Proyecto2/palabras.php">Volverr</a>
</body>
</html>
