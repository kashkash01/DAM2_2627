<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>
            <?php
                echo 7 + 7;
            ?>
        </h2>
        <p>
            <?php
                $horaActual = new DateTimeImmutable();
                echo $horaActual->format('Y-m-d H:i:s');
            ?>
        </p>
    </body>
</html>