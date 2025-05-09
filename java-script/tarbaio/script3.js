function calcularSaldoFinanceiro(ganhos, gastos) {
  const ganhoAnual = ganhos.reduce((total, ganho) => total + ganho, 0);
  const gastoAnual = gastos.reduce((total, gasto) => total + gasto, 0);
  const saldoFinanceiro = ganhoAnual - gastoAnual;
  let resultado = "prejuízo";
  if (saldoFinanceiro > 0) {
    resultado = "lucro";
  }
  return {
    ganhoAnual,
    gastoAnual,
    saldoFinanceiro,
    resultado
  };
}
function solicitarDados() {
  const ganhos = [];
  const gastos = []; 
  for (let i = 1; i <= 12; i++) {
    const ganho = parseFloat(prompt(`Informe o ganho bruto para o mês ${i}:`));
    ganhos.push(ganho);
    
    const gasto = parseFloat(prompt(`Informe os gastos para o mês ${i}:`));
    gastos.push(gasto);
  } 
  return { ganhos, gastos };
}
const { ganhos, gastos } = solicitarDados();
const resultadoAnual = calcularSaldoFinanceiro(ganhos, gastos);
console.log("Ganho bruto anual:", resultadoAnual.ganhoAnual);
console.log("Gasto anual:", resultadoAnual.gastoAnual);
console.log("Saldo financeiro:", resultadoAnual.saldoFinanceiro);
console.log("Resultado:", resultadoAnual.resultado);
