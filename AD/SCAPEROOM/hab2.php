<?php
require 'comun.php';
entrar(2);
cabecera(2);
?>

<p class="historia">
    Una cocina antigua con azulejos agrietados. La mesa está puesta como si alguien
    fuera a volver a cenar. Hay una puerta metálica con un candado rojo que lleva al laboratorio.
</p>

<section class="objetos">
    <h3>🔎 En la Cocina ves…</h3>
    <?php
    objeto("🍽️", "La mesa puesta", "Sobre el mantel hay estos platos: 🍽️ 🍽️. En una servilleta pone: " . pista("C1", "3ª cifra = los platos que hay en la mesa."));
    objeto("⚠️", "Una señal de tráfico apoyada en la pared", "Es una señal de «ceda el paso». ¿Qué hace en una cocina? Por detrás pone: " . pista("C2", "1ª cifra = los lados que tiene esta señal."));
    objeto("🥚", "Una huevera con un solo huevo", "El huevo es normal, nada de dos yemas. Debajo de la huevera: " . pista("C4", "2ª cifra = las yemas que tiene un huevo normal."));
    objeto("🫖", "Una tetera", "Todavía está templada… pero dentro solo hay té.");
    ?>
</section>

<section class="puertas">
    <h3>🚪 Salidas</h3>
    <?php
    puerta(2, 0);
    puerta(2, 4, "C1");
    ?>
</section>

<?php pie(); ?>
