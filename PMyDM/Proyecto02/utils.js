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