function ordenarDecrescente(a, b) {
    return b - a;
  }
  const valores = [];
  for (let i = 1; i <= 4; i++) {
    const valor = parseInt(prompt(`Digite o ${i}º valor inteiro:`));
    valores.push(valor);
  }
  valores.sort(ordenarDecrescente);
  console.log("Valores em ordem decrescente:");
  valores.forEach(valor => console.log(valor));