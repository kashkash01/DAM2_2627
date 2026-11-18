<?php
require 'comun.php';
entrar(1);
cabecera(1);
?>

<p class="historia">
    Estanterías hasta el techo llenas de libros polvorientos. Huele a papel viejo y una
    chimenea apagada ocupa la pared del fondo. Al otro lado hay una puerta que baja hacia el sótano.
</p>

<section class="objetos">
    <h3>🔎 En la Biblioteca ves…</h3>
    <?php
    objeto("📅", "Un calendario colgado en la pared", "Es un calendario de una sola semana, con todos los días tachados. " . pista("C1", "2ª cifra = los días que tiene una semana."));
    objeto("📕", "Un libro titulado «NADA»", "Lo abres y todas sus páginas están en blanco. Solo en la contraportada pone: " . pista("C3", "2ª cifra = las páginas escritas que tiene este libro."));
    objeto("🦉", "Un búho disecado", "Te mira fijamente con sus ojos de cristal. Da un poco de miedo, pero no esconde nada.");
    objeto("🔥", "La chimenea", "Solo hay ceniza fría. Si alguna vez hubo una nota aquí, ya se quemó.");
    ?>
</section>

<section class="puertas">
    <h3>🚪 Salidas</h3>
    <?php
    puerta(1, 0);
    puerta(1, 3, "C2");
    ?>
</section>

<?php pie(); ?>
