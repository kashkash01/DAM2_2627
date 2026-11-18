<?php
require 'comun.php';
entrar(0);
cabecera(0);
?>

<section class="intro">
    <p class="historia">
        Una tormenta te obliga a refugiarte en <b>La Mansión Olvidada</b>. Nada más entrar,
        la puerta principal se cierra de golpe detrás de ti. Para salir tendrás que recorrer
        <b>7 habitaciones</b> y abrir <b>5 candados</b> de <b>3 cifras</b>.
    </p>

    <div class="reglas">
        <h3>📜 Cómo se juega</h3>
        <ul>
            <li>Pulsa sobre los objetos de cada habitación para examinarlos.</li>
            <li>Cada pista lleva el <b>color de su candado</b>: 🔴 C1 · 🔵 C2 · 🟢 C3 · 🟣 C4 · 🟡 C5.</li>
            <li>Las pistas de un candado están repartidas por las habitaciones a las que puedes entrar antes de llegar a él.</li>
            <li>Al abrir un candado se abre una nueva habitación.</li>
            <li>El candado dorado (C5) solo tiene <b>3 intentos</b>. Si fallas los tres, vuelves aquí y empiezas de nuevo.</li>
        </ul>
    </div>
</section>

<section class="objetos">
    <h3>🔎 En el Recibidor ves…</h3>
    <?php
    objeto("🪑", "Una silla vieja junto a la puerta", "Es una silla de madera normal y corriente, con sus cuatro patas. Debajo del asiento alguien ha rayado: " . pista("C1", "1ª cifra = las patas que tiene esta silla."));
    objeto("🕰️", "Un reloj de pared parado", "Las agujas no se mueven. En la esfera, en lugar de números, hay una mano dibujada. " . pista("C2", "2ª cifra = los dedos de una mano ✋."));
    objeto("🖼️", "Un cuadro de una calle de noche", "En el cuadro solo destaca un semáforo encendido. " . pista("C4", "3ª cifra = las luces que tiene un semáforo 🚦."));
    objeto("🧥", "Un perchero con un abrigo", "Rebuscas en los bolsillos… solo hay pelusa y un caramelo pegado. Nada útil.");
    ?>
</section>

<section class="puertas">
    <h3>🚪 Salidas</h3>
    <?php
    puerta(0, 1);
    puerta(0, 2);
    ?>
</section>

<?php pie(); ?>
