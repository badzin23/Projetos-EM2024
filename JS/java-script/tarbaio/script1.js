function somarNumeros(){
    let somar = 0;
    let continuar = true;
    while (continuar){
        let numero = parseFloat(prompt("Digite o numero ou digite 0 para acabar:"));
        if(!isNaN(numero)){
            soma += numero;
        } else{
            alert("Digite um numero válido");
        }
        continuar = confirm("quer adicionar mais numero?");
    }
    alert("A soma dos numeros é:" + soma);
}
somarNumeros();