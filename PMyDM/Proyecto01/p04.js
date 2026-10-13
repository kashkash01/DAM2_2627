const ordenador = 
{
    procesador: "17",
    n_procesadores: 3,
    grafica: "2070",
    pantalla: "4k",
    raton: "razer",
    conectado: true
}

nP = ordenador.n_procesadores;
console.log("El numero de procecsadores es " +nP)

console.log("El tipo de procesador es " +ordenador["procesador"])


const ordenador1 = { marca: "Lenovo", ram: 16, precio: 799, procesador: "i7", n_procesadores: 8, grafica: "RTX 2070", conectado: true };
const ordenador2 = { marca: "HP", ram: 8, precio: 549, procesador: "i5", n_procesadores: 4, grafica: "GTX 1650", conectado: false };
let ordenador3 = { marca: "Asus", ram: 32, precio: 1499, procesador: "Ryzen 9", n_procesadores: 12, grafica: "RTX 4080", conectado: true };

const mainframe = [ordenador1, ordenador2, ordenador3];

console.log(mainframe[0].marca);


const {procesador,n_procesadores,grafica} = ordenador1;
console.log ("extraido:"+procesador+n_procesadores+grafica);

animales = ["sapo","rana","mosquito"];
const [p1,p2] = animales;
console.log("valores arrays: "+p1+p2)

function extraerInfoOrdenador({marca,ram,precio}){
    return "Marca: "+marca+" RAM: "+ram+" Precio: "+precio;
}

console.log(extraerInfoOrdenador(ordenador1));

animales = ["sapo","rana","mosquito"];

masAnimales = [...animales,"rino"];

console.log(masAnimales);

ordenador3 = {...ordenador1, marca: "Asus", ram: 32, precio: 1499};

console.log(ordenador3);

//hacer un array con los 3 ordenadores y hacer una funcion que le entre el array y devuelve otro array de los nombres de los procesadores y nombres de graficas que esten conectados
const ordenadores = [ordenador1, ordenador2, ordenador3];

function obtenerProcesadoresYGraficasConectados(ordenadores) {
    const resultado = [];
    for (const {procesador, grafica, conectado} of ordenadores) {
        if (conectado) resultado.push(procesador, grafica);
        }
    return resultado;
}
console.log(obtenerProcesadoresYGraficasConectados(ordenadores));
