let edad = 24;
let nombre = "Begoña";

if (edad < 0) {
  console.log("bainas");
} else if (nombre === "Begoña") {
  console.log("guapa");
} else if (edad <= 3) {
  console.log("bebe");
} else if (edad < 10) {
  console.log("niñata");
} else if (edad <= 14) {
  console.log("niñato");
} else if (edad < 18) {
  console.log("adolescente");
} else if (edad < 65) {
  console.log("Eres adulto");
} else {
  console.log("Eres mayor");
}