<?php
require 'comun.php';
entrar(5);
cabecera(5);
?>

<p class="historia">
    Lo más alto de la mansión. Por los ventanales se ve la tormenta alejándose.
    Aquí está la puerta de salida, protegida por el candado dorado. ¡Piensa bien antes de probar!
</p>

<section class="objetos">
    <h3>🔎 En la Torre ves…</h3>
    <?php
    objeto("🔭", "Un telescopio apuntando al cielo", "Miras por él y en la lente hay algo escrito: " . pista("C5", "3ª cifra = suma las tres cifras del candado verde (C3) y réstale 9."));
    objeto("🗺️", "Un mapa de las estrellas", "Bonito, pero no ves ningún número que te sirva.");
    objeto("📜", "Un pergamino en el atril", "«El candado dorado no perdona: tres fallos y volverás al principio. Junta las tres pistas doradas antes de probar.»");
    ?>
</section>

<section class="puertas">
    <h3>🚪 Salidas</h3>
    <?php
    puerta(5, 3);
    puerta(5, 4);
    puerta(5, 6, "C5");
    ?>
</section>

<?php pie(); ?>
