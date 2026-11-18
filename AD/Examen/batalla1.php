<?php

$numero = (int)($_POST['numero'] ?? 0);
$apuesta = $_POST['apuesta'] ?? '';
$chofi = rand(1, 3);

$ganador = false;

if ($apuesta === 'menor' && $numero < $chofi)
{
    $ganador = true;
}
else if ($apuesta === 'mayor' && $numero > $chofi)
{
    $ganador = true;
}
else if ($apuesta === 'iguales' && $numero === $chofi)
{
    $ganador = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla 1</title>
</head>
<body style="text-align: center;">
    <h1>MonstruosDeluxe</h1>

    <div style="width: 320px; margin: 20px auto; padding: 20px; border: 6px solid; border-radius: 20px;">
        <h2>CHOFI SACA</h2>
        <div style="width: 120px; margin: 15px auto; padding: 10px; border: 4px solid; border-radius: 8px;">
            <h1><?php echo $chofi; ?></h1>
        </div>
        <p>Tu número: <?php echo $numero; ?> · Tu apuesta: <?php echo $apuesta; ?></p>

        <?php if ($ganador): ?>
            <h2>¡PERFECTO! CONTINÚAS</h2>
        <?php else: ?>
            <h2>MUERTO</h2>
        <?php endif; ?>

        <div style="margin-top: 30px;">
            <form action="chofo.php" method="post" style="display: inline-block;">
                <button type="submit" <?php if (!$ganador) echo "disabled"; ?>>Continuar →</button>
            </form>
            <form action="chofi.php" method="post" style="display: inline-block;">
                <button type="submit" <?php if ($ganador) echo "disabled"; ?>>← Volver atrás</button>
            </form>
        </div>
    </div>
</body>
</html>
