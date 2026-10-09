<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Palabras aleatorias</title></head>
<body>
<form action="/DAM2_2627/AD/Proyecto2/lista.php" method="post">
    <label>Cantidad de palabras:
        <select name="cantidad">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </label>
    <label>Tamaño de las palabras:
        <select name="tam">
            <?php for ($i = 3; $i <= 6; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </label>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
