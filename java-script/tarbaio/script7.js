const sabores = {
    a: "Chocolate",
    b: "Morango",
    c: "Creme",
    d: "Manga",
    e: "Melancia",
    f: "Vanilla Ice",
    g: "Céu Azul",
    h: "Brownie",
    i: "Hawaiano",
  };
  const precos = {
    a: 1.5,
    b: 2.5,
    c: 2.5,
    d: 3.2,
    e: 3.4,
    f: 3,
    g: 3.6,
    h: 4,
    i: 5,
  };
  function calcularPreco(sabor) {
    if (!sabores.hasOwnProperty(sabor)) {
      return "Sabor inválido";
    }
    return `O preço do picolé de ${sabores[sabor]} é R$ ${precos[sabor]}.`;
  } 
  const saborSelecionado = "c";
  const preco = calcularPreco(saborSelecionado);
  console.log(preco);
  function mostrarSabores() {
    for (const sabor in sabores) {
      console.log(`${sabor}: ${sabores[sabor]}`);
    }
  }
  mostrarSabores();
  
  