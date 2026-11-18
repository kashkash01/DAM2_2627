<?php
require 'comun.php';
entrar(6);

$segundos = time() - $_SESSION['inicio'];
$minutos = intdiv($segundos, 60);
$resto = $segundos % 60;

cabecera(6);
?>

<section class="final">
    <div class="trofeo">🏆</div>
    <h2>¡ENHORABUENA!</h2>
    <p>
        Habéis abierto los 5 candados y escapado de <b>La Mansión Olvidada</b>.
        Fuera ya ha dejado de llover.
    </p>
    <p class="tiempo">⏱️ Tiempo: <b><?php echo $minutos; ?> min <?php echo $resto; ?> s</b></p>
    <a class="boton grande" href="reiniciar.php">Jugar otra vez ↺</a>
</section>

<?php pie(); ?>
