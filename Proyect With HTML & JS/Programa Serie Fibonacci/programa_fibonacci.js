alert('Programa: La Succesion De Fibonacci')

// Cantidad de números que deseamos imprimir

let limit; //Definimos Limite
let serie = []; //Del 7 a 8Definimos los dos primeros valores
serie[0] = 0
serie[1] = 1

limit = prompt('Ingrese La Cantidad De Numero A Obtener: ')
for(let i=2; i < limit; i++){
    serie[i] = serie[i-2]+serie[i-1];
}
alert('Limite A Determinar: ' +limit+ '\n Resultado Obtenido: ' +serie+ '')