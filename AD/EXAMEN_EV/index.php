<?php

function tirarMoneda()
{
    if (rand(0, 1) === 0)
        return "CARA";
    else
        return "CRUZ";
}

$pot = "";
$moneda = "";
$dinero = "";
$postura = "";
$mensaje = "";

if (isset($_POST['reiniciar']))
{
    $pot = 100;
}
else if (isset($_POST['apostar']))
{
    $pot = $_POST['pot'] ?? "";
    $dinero = $_POST['dinero'] ?? "";
    $postura = $_POST['postura'] ?? "";

    if ($pot === "")
    {
        $mensaje = "Primero pulsa Reiniciar para poner el POT a 100";
    }
    else if ((int)$pot <= 0)
    {
        $mensaje = "Te has quedado sin dinero. Pulsa Reiniciar";
    }
    else if ((int)$dinero <= 0 || (int)$dinero >= (int)$pot)
    {
        $mensaje = "El dinero tiene que ser mayor que 0 y menor que el POT";
    }
    else if ($postura === "")
    {
        $mensaje = "Elige Cara o Cruz";
    }
    else
    {
        $moneda = tirarMoneda();

        if ($moneda === $postura)
            $pot = (int)$pot + (int)$dinero;
        else
            $pot = (int)$pot - (int)$dinero;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara o Cruz 2.0</title>
</head>
<body>
    <form action="index.php" method="post" style="width: 330px; margin: auto;">
        <h3 style="text-align: center;">CARA O CRUZ 2.0</h3>

        <fieldset>
            <legend>MONEDA</legend>
            <input type="text" name="moneda" value="<?php echo $moneda; ?>" readonly>
        </fieldset>

        <fieldset>
            <legend>POSTURA</legend>
            <input type="submit" name="apostar" value="Apostar">
            Dinero:<input type="text" name="dinero" value="<?php echo $dinero; ?>" size="10">
            Cara: <input type="radio" name="postura" value="CARA" <?php if ($postura === "CARA") echo "checked"; ?>>
            Cruz: <input type="radio" name="postura" value="CRUZ" <?php if ($postura === "CRUZ") echo "checked"; ?>>
        </fieldset>

        <fieldset>
            <legend>POT</legend>
            <?php echo $pot; ?>
            <input type="submit" name="reiniciar" value="Reiniciar" style="margin-left: 40px;">
            <input type="hidden" name="pot" value="<?php echo $pot; ?>">
        </fieldset>

        <p style="color: red;"><?php echo $mensaje; ?></p>
    </form>
</body>
</html>
