let peso = 70;
let altura = 1.75;

let imc = peso / (altura * altura);

if (imc < 18.5) {
    console.log("Bajo peso");
} else if (imc >= 18.5 && imc < 24.9) {
    console.log("Peso normal");
} else if (imc >= 25 && imc < 29.9) {
    console.log("Sobrepeso");
} else {
    console.log("Obesidad");
} 

// funcion normal que haga media de 4 numeros 

function calcularMedia(num1, num2, num3, num4) {
    let suma = num1 + num2 + num3 + num4;
    let media = suma / 4;
    return media;
} 

console.log(calcularMedia(10, 20, 30, 40));

let saldo = 100;
meses = 0;

for (; saldo > 0;) {
    saldo -= 30;
    meses++;
}
console.log("Meses: " + meses);

const numeros = [10, 20, 30, 40, 50];
const numerosDobles = numeros.map(n => n * 2);

console.log(numeros);
console.log(numerosDobles);

const marcasCoches = ["Toyota", "Honda", "Ford", "Chevrolet"]; 
const marcasCochesSL = marcasCoches.map(marca => marca + " SL");
console.log(marcasCochesSL);

// filtro con filter para las marcas que tengan la letra a

const marcasConA = marcasCoches.filter(marca => marca.includes("a") || marca.includes("A"));
console.log(marcasConA);

// con find, que imprima la primera marca  cuyo tamaño de caracteres sea mayor a 4


const primeraMarcaLarga = marcasCoches.find(marca => marca.length > 4);
console.log(primeraMarcaLarga);