# Escape Room Online · La Mansión Olvidada

Escape room en PHP para la asignatura **Acceso a Datos (2.º DAM)**.

- 7 habitaciones (H0–H6) y 5 candados de 3 cifras (C1–C5).
- El progreso se guarda en la sesión (`$_SESSION`).
- El candado C5 tiene 3 intentos. Al tercer fallo, el jugador se teletransporta a la habitación 0 y empieza de nuevo.

## Cómo ejecutarlo

1. Copia la carpeta en `C:\xampp\htdocs\DAM2_2627\AD\SCAPEROOM`.
2. Arranca Apache en XAMPP.
3. Abre `http://localhost/DAM2_2627/AD/SCAPEROOM/`.

## Archivos

| Archivo | Qué hace |
|---|---|
| `comun.php` | Datos del juego (habitaciones, candados, mapa) y funciones comunes |
| `hab0.php` … `hab6.php` | Una página por habitación |
| `candado.php` | Comprueba el código de un candado (y los intentos de C5) |
| `reiniciar.php` | Borra la partida |
| `estilos.css` | Estilos |

## Mapa

| Candado | Puerta en | Abre | Pistas en |
|---|---|---|---|
| C1 🔴 | H2 Cocina | H4 Laboratorio | H0, H1, H2 |
| C2 🔵 | H1 Biblioteca | H3 Sótano | H0, H2, H4 |
| C3 🟢 | H3 Sótano | H5 Torre* | H1, H3, H4 |
| C4 🟣 | H4 Laboratorio | H5 Torre* | H0, H2, H4 |
| C5 🟡 (3 intentos) | H5 Torre | H6 Salida | H3, H4, H5 |

H0, H1 y H2 están abiertas desde el principio. \*La Torre tiene dos cerraduras: hay que abrir C3 y C4.

## Pantallazos

Documento con las capturas de todas las habitaciones: *(pega aquí el enlace al documento de Google Drive)*
