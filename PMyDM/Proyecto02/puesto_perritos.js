import {PRECIO_BASE, calcularPrecio, pedidoFamiliar} from "./utils.js";

let miDinero = 100;
console.log("Dinero actual: " + miDinero);
miDinero -= calcularPrecio("perrito");
console.log("Dinero actual: " + miDinero);
miDinero -= calcularPrecio("tortitas");
console.log("Dinero actual: " + miDinero);

console.log(` Angel va a comer otro perrito y le va a costar ${calcularPrecio("perrito")}€`);

pedidoFamiliar
.then (mensaje => console.log("pedido OK: " + mensaje))
.catch(error => console.log("error en el pedido: " + error));

