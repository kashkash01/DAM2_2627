<?php
require 'comun.php';
entrar(3);
cabecera(3);
?>

<p class="historia">
    Bajas unas escaleras que crujen. El sótano está húmedo y solo lo ilumina una vela.
    Al fondo, una trampilla verde sube hacia la torre.
</p>

<section class="objetos">
    <h3>🔎 En el Sótano ves…</h3>
    <?php
    objeto("🕸️", "Una telaraña enorme en una esquina", "En el centro hay una araña 🕷️ que no te quita ojo. Junto a ella, en la pared: " . pista("C3", "1ª cifra = las patas que tiene esta araña."));
    objeto("📦", "Una caja de madera", "Dentro hay una nota doblada que parece importante: " . pista("C5", "2ª cifra = suma las tres cifras del candado azul (C2) y réstale 3."));
    objeto("🛢️", "Unos barriles viejos", "Golpeas uno y suena hueco. Están todos vacíos.");
    ?>
</section>

<section class="puertas">
    <h3>🚪 Salidas</h3>
    <?php
    puerta(3, 1);
    puerta(3, 5, "C3");
    ?>
</section>

<?php pie(); ?>
