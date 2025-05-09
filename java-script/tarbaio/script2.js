function countdown(seconds) {
    let timer = seconds
    const interval = setInterval(() => {
      timer--;
      if (timer < 0) {
        clearInterval(interval);
        console.log("Lançamento!");
      } else {
        console.log(timer + " segundos para o lançamento");
      }
    }, 1000);
  }
  const segundosParaLancamento = 10;
  countdown(segundosParaLancamento);
  