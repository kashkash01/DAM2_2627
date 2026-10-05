<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style=" margin: 10px; padding: 10px; background-color: blue; border: 1px solid black">
        <h2 style="text-align: center;">Resultado: <?php echo ($_POST['miBoton1'] ?? '') === 'multiplicar' ? $_POST['miInput1'] * $_POST['miInput2'] : (($_POST['miBoton2'] ?? '') === 'dividir' ? $_POST['miInput1'] / $_POST['miInput2'] : (($_POST['miBoton3'] ?? '') === 'sumar' ? $_POST['miInput1'] + $_POST['miInput2'] : (($_POST['miBoton4'] ?? '') === 'restar' ? $_POST['miInput1'] - $_POST['miInput2'] : ''))); ?></h2>
    </div>
</body>
</html>