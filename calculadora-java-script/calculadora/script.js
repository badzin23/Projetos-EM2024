function calculadora(){
    var calculo = document.getElementById('calculo').value;
    var p1 = parseInt(document.getElementById('p1').value);
    var p2 = parseInt(document.getElementById('p2').value);
    var resposta = 0;

    switch (calculo){
        case 'soma':
            resposta = p1 + p2;
            break;

        case 'subtração':
            resposta = p1 - p2;
            break;

        case 'multiplicação':
            resposta = p1 * p2;
            break;

        case 'divisão':
            resposta = p1 / p2;
            break;
    }
    
    alert("O resultado é: " + resposta)
}