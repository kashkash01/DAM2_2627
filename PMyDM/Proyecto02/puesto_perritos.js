import {PRECIO_BASE, calcularPrecio, pedidoFamiliar, hacerPedidoFamiliar, llamarAJson} from "./utils.js";

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
console.log("Despues de pedir");

hacerPedidoFamiliar();
console.log("Despues de pedir segunda vez");

let jj = llamarAJson();
console.log("jj vale: " + jj);
console.log("Despues de llamar a json");


