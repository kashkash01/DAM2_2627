<?php
require 'comun.php';
entrar(4);
cabecera(4);
?>

<p class="historia">
    Probetas, matraces y una pizarra llena de fórmulas. Aquí trabajaba el dueño de la mansión.
    Una escalera de caracol con un candado morado sube hacia la torre.
</p>

<section class="objetos">
    <h3>🔎 En el Laboratorio ves…</h3>
    <?php
    objeto("🧮", "Una pizarra llena de fórmulas", "Entre tantas cuentas, una está rodeada con tiza morada: " . pista("C4", "1ª cifra = 3²."));
    objeto("🌍", "Un globo terráqueo", "Al girarlo aparece una etiqueta pegada: " . pista("C2", "3ª cifra = las lunas que tiene la Tierra."));
    objeto("🎲", "Un dado gigante", "Está apoyado con el 1 hacia arriba. En un lateral pone: " . pista("C3", "3ª cifra = el número de la cara opuesta al 1."));
    objeto("⚗️", "Un matraz con un papel enrollado dentro", "Sacas el papel con cuidado: " . pista("C5", "1ª cifra = la 1ª cifra del candado rojo (C1) menos 2."));
    ?>
</section>

<section class="puertas">
    <h3>🚪 Salidas</h3>
    <?php
    puerta(4, 2);
    puerta(4, 5, "C4");
    ?>
</section>

<?php pie(); ?>
