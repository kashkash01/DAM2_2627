export const PRECIO_BASE = 10.5;

export function calcularPrecio(producto)
{
    let precio_final = PRECIO_BASE;
    switch (producto){
        case "perrito":
            precio_final += 4;
            break;

        case "tortitas":
            precio_final += 2;
            break;
            
        default:
            break;
    }
    return precio_final;
}

export const pedidoFamiliar = new Promise((resolve, reject) => {
    const hayComida = true;
    if (hayComida) {
        resolve("Pedido familiar realizado con éxito");
    } else {
        reject("No hay comida disponible");
    }
});

export async function hacerPedidoFamiliar() {
    try {
        const mensaje = await pedidoFamiliar;
        console.log("pedido OK: " + mensaje);
    } catch (error) {
        console.log("error en el pedido: " + error);
    }
}

export async function llamarAJson() {
  const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');
  return await response.json();
}