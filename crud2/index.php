<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "aulas_RG";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn -> connect_error){
        die("Falha na conexão: " . $conn -> connect_error);
    }

    if(isset($_POST['create_prof'])){
        $nome_prof = $_POST['nome_prof'];
        $cpf_prof = $_POST['cpf_prof'];

        $sql = "INSERT INTO professores ( nome_prof, cpf_prof) 
        VALUES ( '$nome_prof', '$cpf_prof')";

        if($conn -> query($sql) === TRUE){
            echo "Novo professor adicionado com sucesso!";
        }else{
            echo "Erro:". $sql."<br>".$conn->error;
        }

    }

    if(isset($_POST['update_prof'])){
        $id = $_POST['id'];
        $nome_prof = $_POST['nome_prof'];
        $cpf_prof = $_POST['cpf_prof'];

        $sql = "UPDATE professores SET nome_prof='$nome_prof',cpf_prof='$cpf_prof' WHERE id = $id";

        if($conn -> query($sql) === TRUE){
            echo "Alteração feita com sucesso!";
        }else{
            echo "Erro:". $sql."<br>".$conn->error;
        }

    }

    if(isset($_POST['create_aula'])){
        $nome = $_POST['nome'];
        $sala = $_POST['sala'];
        $hora= $_POST['hora'];
        $data_aula = $_POST['data_aula'];

        $sql = "INSERT INTO aulas ( nome, sala, hora, data_aula) 
        VALUES ( '$nome', '$sala', '$hora', '$data_aula')";

        if($conn -> query($sql) === TRUE){
            echo "Nova aula adicionado com sucesso!";
        }else{
            echo "Erro:". $sql."<br>".$conn->error;
        }

    }

if(isset($_POST['update_aulas'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sala = $_POST['sala'];
    $hora= $_POST['hora'];
    $data_aula = $_POST['data_aula'];

    $sql = "UPDATE aulas SET nome='$nome', sala='$sala', hora='$hora', data_aula='$data_aula' WHERE id = $id";

    if($conn -> query($sql) === TRUE){
        echo "Alteração feita com sucesso!";
    }else{
        echo "Erro:". $sql."<br>".$conn->error;
    }

}

if(isset($_GET['delete_prof'])){
    $id = $_GET['delete_prof'];

    $sql = "DELETE FROM professores WHERE id=$id";

    if($conn -> query($sql) === TRUE){
        echo "Excluido com sucesso!";
    }else{
        echo "Erro:". $sql."<br>".$conn->error;
    }

}

if(isset($_GET['delete_aulas'])){
    $id = $_GET['delete_aulas'];

    $sql = "DELETE FROM aulas WHERE id=$id";

    if($conn -> query($sql) === TRUE){
        echo "Excluido com sucesso!";
    }else{
        echo "Erro:". $sql."<br>".$conn->error;
    }

}

$result = $conn -> query("SELECT * FROM aulas");

$sql = "SELECT * FROM professores";

$result = $conn -> query($sql);

if ($result -> num_rows > 0)
    echo "<table border='1'>
    <tr>
        <th>"
                
?>

<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD AULA</title>
</head>
<body>

    <h2>Adicionar Professor</h2>
    <form method="POST">
        Nome Professor <input type="text" name="nome_prof" required><br><br>
        CPF professor <input type="number" name="cpf_prof" required><br><br>
        <input type="submit" name="create_prof" value="Adicionar Prof">
    </form>

    <h2>Atualizar Professor</h2>
    <form method="POST">
        id do professor <input type="number" name="id" placeholder="id"  required><br><br>
        Nome Professor <input type="text" name="nome_prof" placeholder="Nome_professor"  required><br><br>
        CPF professor <input type="number" name="cpf_prof" placeholder="CPF_professor"  required><br><br>
        <input type="submit" name="update_prof" value="Atualizar Prof">
    </form>
    
    <h2>Adicionar Aula</h2>
    <form method="POST">
        nome <input type="text" name="nome"  required><br><br>
        sala <input type="number" name="sala" required><br><br>
        hora <input type="time" name="hora" required><br><br>
        data_aula <input type="date" name="data_aula" required><br><br>
        <input type="submit" name="create_aula" value="Adicionar Aula">
    </form>

    <h2>Atualizar Aula</h2>
    <form method="POST">
        id da aula <input type="number" name="id" placeholder="id"  required><br><br>
        Nome aula <input type="text" name="nome" placeholder="Nome aula"  required><br><br>
        sala aula <input type="text" name="sala" placeholder="Sala aula"  required><br><br>
        hora aula <input type="time" name="hora" placeholder="Hora aula"  required><br><br>
        data aula <input type="date" name="data_aula" placeholder="Sala aula"  required><br><br>
        <input type="submit" name="update_aula" value="Atualizar Aula">
    </form>

    <h2>Tabela professor</h2>
    <table borde="1">
        <tr>
            <th>ID</th>
            <th>Nome do Professor</th>
            <th>CPF</th>
            <th>Ação</th>
        </tr>

        <?php while($row = $result -> fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome_prof']; ?></td>
                <td><?php echo $row['cpf_prof']; ?></td>
                <td> 
                    <a href="index.php?delete_prof=<?php echo $row['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
s
    </table>''

    <h2>Tabela Aulas</h2>
    <table borde="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sala</th>
            <th>Hora</th>
            <th>Data_Aula</th>
        </tr>

        <?php while($row = $result -> fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['sala']; ?></td>
                <td><?php echo $row['hora']; ?></td>
                <td><?php echo $row['data_aula']; ?></td>
                <td> 
                    <a href="index.php?delete_aulas=<?php echo $row['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>

    </table>''
    
</body>
</html>