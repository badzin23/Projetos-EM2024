const usuario ={
    nome: "reinaldo",
    senha: "rei169"
}
function Login(){
    var nome = document.getElementById('nome').value;
    var senha = document.getElementById('senha').value;
if ((usuario.nome == nome) && (usuario.senha == senha)){
    alert("autenticado")
    window.location.href = "index2.html"
} else{
    alert("Seu nome ou senha estão errados")
}
}
