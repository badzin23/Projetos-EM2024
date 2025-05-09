function verificarLetra(letra) {
    letra = letra.toLowerCase();
    if (letra === "a" || letra === "e" || letra === "i" || letra === "o" || letra === "u") {
      return "vogal";
    } else {
      return "consoante";
    }
  }
  const letra = prompt("Digite uma letra:");
  const resultado = verificarLetra(letra);
  console.log(`A letra digitada é uma ${resultado}.`);
  