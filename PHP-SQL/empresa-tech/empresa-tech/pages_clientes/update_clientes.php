<?php
    include 'db.php';

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "UPDATE Cliente SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: read_clientes.php");
        exit();
    }

    $sql = "SELECT * FROM Cliente WHERE id=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
    <form method="POST" action=" update.php?id=<?php echo $row['id'];?>">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>

</body>
</html>