//arrow de forma resumida, é uma forma mais enxuta de escrever funções no javascript utilizando =>


//cria um array de numeros definindo seus valores
//map vai percorrer todos os valores do array, e depois disso vai dobrar cada elemento dentro do array
//atv1//
function arrow1(){
    const dobro = [3,7,1,9,5]; 
    let resultado = dobro.map((dobro) => dobro * 2); 
    console.log(resultado)
};

//cria um array de palavras definindo cada palavra
//ordenar.sort ira ordenar os elementos que estão na array ja criada, e então irá comparar o primeiro elemento com o segundo pelo seu tamanho e assim por diante
//assim retornando as palavras na ordem da mais curta para a mais longa
//atv2//
function arrow2(){
    const ordenar = ["Gato", "Tigre", "Cão", "Elefante"];
    ordenar.sort((a, b) => a.length - b.length);
    console.log(ordenar)
};

//atv3//
function arrow3(){
    const pares = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    let result = pares.filter(pares => pares / 2);
};

