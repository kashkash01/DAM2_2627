const notas = [
  [7, 8, 6],  
  [5, 4, 6],   
  [9, 10, 8],  
];

function sumaPorAlumno(notas){
    const sumas = [];
    for(let i = 0; i < notas.length; i++) {
        let suma = 0 ;
        for (let j = 0; j < notas [i].length; j++)suma += notas [i][j];
    sumas [i] = suma;
}
return sumas;
}
console.log(sumaPorAlumno(notas));

