<?php
var_export($_POST);

function letraAleatoria()
{
    $letras = mb_str_split("abcdefghijklmnñopqrstuvwxyz");
    return $letras[random_int(0, count($letras) - 1)];
}

function palabraAletoria($tam)
{
        $palabra = "";
        for ($i=0; $i < $tam; $i++)
        {
            $palabra .= letraAleatoria();
        }
        return $palabra;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=0; $i < $_POST['numeros']; $i++)
    {
        echo palabraAletoria($_POST['tam'])."<br>";
    }
    ?>
</body>
</html>