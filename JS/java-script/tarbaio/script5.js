function transformarNumero(numero) {
    if (numero % 2 === 0) {
      return numero + 1;
    } else {
      return numero - 1;
    }
  }
  const numero = parseInt(prompt("Digite um número:"));
  const novoNumero = transformarNumero(numero);
  console.log(`O número transformado é: ${novoNumero}`);
  