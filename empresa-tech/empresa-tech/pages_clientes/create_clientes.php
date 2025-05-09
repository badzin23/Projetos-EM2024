<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO Cliente (nome, email, telefone) VALUES ('$name', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="create_clientes.php">
    Nome: <input type="text" name="nome" required>
    Email: <input type="email" name="email" required>
    Telefone: <input type="telefone" name="telefone" required>
    <input type="submit" value="Adicionar">
</form>

<a href="read_clientes.php">Ver registros.</a>