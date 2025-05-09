<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Document</title>
</head>
<body>
    <h1>Base do triangulo</h1>
<form method = "POST" action="">
        <label for="altura">Informe a base do triangulo:</label>
        <input type="number" id="altura" name="altura" required>
        <br>
        <label for="base">Informe a altura do triangulo:</label>
        <input type="number" id="base" name="base" required>
        <br>
        <button type="submit" name="calcular_area">Calcular area</button>
    </form>

    <?php
    const pi = 3.14;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calcular_area'])){
            $altura = $_POST['altura'];
            $base = $_POST['base'];
            $area = ($altura * $base) / 2;

            if ($area > 1000) {
                echo "A area ultrapassa o limite de 1000.";
            }

            echo "<br> O resultado da area eh $area";
        }
    }
    
    ?>
</body>
</html>