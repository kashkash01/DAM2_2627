<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chofi</title>
</head>
<body style="text-align: center;">
    

  <form action="batalla1.php" method="post">
        <div style="width: 320px; margin: 20px auto; padding: 20px; border: 6px solid; border-radius: 20px;">
            <h2>CHOFI</h2>
            <p>¿Te atreves a retarme?</p>
           <div style="margin: 40px 0;">
                <label>Tu número (1-3)</label><br>
                <input type="text" name="numero" placeholder="1, 2 o 3" pattern="[1-3]" maxlength="1" required title="Solo 1, 2 o 3" style="width: 80px;">
                <input type="submit" name="boton1" value="¡A luchar!">
            </div>
            <div style="text-align: left;">
                <label>Tu apuesta</label><br>
                <select name="apuesta" style="width: 100%;">
                    <option value="menor">Jugador menor</option>
                    <option value="mayor">Jugador mayor</option>
                    <option value="iguales">Iguales</option>
                </select>
            </div>
        </div>
    </form>
</body>
</html>
