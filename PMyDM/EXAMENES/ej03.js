const numeros = [3,8,1,9,4];

const invertir = (array) => {
  const resultado = [];
  for (let i = array.length - 1; i >= 0; i--) resultado[array.length - 1 - i] = array[i];
  return resultado;
};
console.log(invertir(numeros));

