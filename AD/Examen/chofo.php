<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chofo</title>
</head>
<body style="text-align: center;">
    

<form action="batallafinal.php" method="post">
        <div style="width: 320px; margin: 20px auto; padding: 20px; border: 6px solid; border-radius: 20px;">
            <h2>CHOFO</h2>
            <p>Tienes dos apuestas para ganarme</p>
        <div style="margin: 40px 0;">
                <label>Tu número (1-10)</label><br>
                <input type="text" name="numero" placeholder="1 ... 10" pattern="([1-9]|10)" maxlength="2" required title="Un número del 1 al 10" style="width: 80px;">
                <input type="submit" name="boton1" value="¡A luchar!">
            </div>
            <div style="text-align: left;">
                <label>Apuesta 1</label><br>
                <select name="apuesta1" style="width: 100%; margin-bottom: 10px;">
                    <option value="dif1">Jugador a diferencia de 1</option>
                    <option value="dif2">Jugador a diferencia de 2</option>
                    <option value="iguales">Iguales</option>
                </select>
             <label>Apuesta 2</label><br>
                <select name="apuesta2" style="width: 100%;">
                    <option value="dif1">Jugador a diferencia de 1</option>
                    <option value="dif2">Jugador a diferencia de 2</option>
                    <option value="iguales" selected>Iguales</option>
                </select>
            </div>
        </div>
    </form>
</body>
</html>