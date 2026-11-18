<?php
//var_export($_POST);

$imagenes = ["■", "▲", "●", "★", "▰", "☀", "☂", "☻"];
$precio = 15;

function tirar($imagenes)
{
    $tirada = [];
    for ($i=0; $i < 4; $i++)
    {
        $tirada[] = $imagenes[rand(0, count($imagenes)-1)];
    }
    return $tirada;
}

function premio($tirada)
{
    $repeticiones = array_count_values($tirada);
    $maximo = max($repeticiones);

    if ($maximo === 4)
        return 100;
    else if ($maximo >= 2)
        return 20;

    return 0;
}

$pot = (int)($_POST['pot'] ?? 1000);
$tirada = [];
$ganado = 0;
$mensaje = "";

if (isset($_POST['jugar']) && $pot >= $precio)
{
    $pot = $pot - $precio;
    $tirada = tirar($imagenes);
    $ganado = premio($tirada);
    $pot = $pot + $ganado;

    if ($ganado === 100)
        $mensaje = "¡TODO IGUALES! +100";
    else if ($ganado === 20)
        $mensaje = "¡1 PAREJA! +20";
    else
        $mensaje = "Nada... -15";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tragaperras</title>
</head>
<body>
    <div style="width: 420px; margin: 20px auto; padding: 20px; border: 3px solid;">

        <h2 style="text-align: right;">Pot: <?php echo $pot; ?></h2>

        <div style="text-align: center; margin: 30px 0;">
            <?php
            if (count($tirada) === 0)
            {
                for ($i=0; $i < 4; $i++)
                {
                    echo '<div style="display: inline-block; width: 80px; height: 80px; line-height: 80px; margin: 5px; border: 2px solid;">?</div>';
                }
            }
            else
            {
                foreach ($tirada as $img)
                {
                    echo '<div style="display: inline-block; width: 80px; height: 80px; line-height: 80px; margin: 5px; border: 2px solid; font-size: 50px;">'.$img.'</div>';
                }
            }
            ?>
        </div>

        <h3 style="text-align: center;"><?php echo $mensaje; ?></h3>

        <p>Todo iguales: 100</p>
        <p>1 pareja: 20</p>

        <form action="index.php" method="post" style="text-align: right;">
            <input type="hidden" name="pot" value="<?php echo $pot; ?>">
            (<?php echo $precio; ?>)
            <input type="submit" name="jugar" value="Jugar" <?php if ($pot < $precio) echo "disabled"; ?>>
        </form>

        <?php if ($pot < $precio): ?>
            <p>No te queda dinero. <a href="index.php">Empezar de nuevo</a></p>
        <?php endif; ?>
    </div>
</body>
</html>