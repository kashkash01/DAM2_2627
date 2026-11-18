const ventas = [
    {libro: "Dune", categoria: "Ciencia ficcion" },
    {libro: "1984", categoria: "Ciencia ficcion"},
    {libro: "Sapiens", categoria: "Ciencia ficcion" },
    {libro: "Homo Deus", categoria: "Ciencia ficcion" },
    {libro: "Duene", categoria: "Ciencia ficcion" },
];

function contarPorCategoria(ventas) {
    return ventas.reduce((acc, ventas) => {
        acc [ventas.categoria] = (acc[ventas.categoria]|| 0) +1;
        return acc;
    },{});
}
console.log(contarPorCategoria(ventas));