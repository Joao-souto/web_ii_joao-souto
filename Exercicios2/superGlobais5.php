<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 5</title>
</head>
<body>   
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $comissao = $_POST["vendas"] * 4 / 100;
            $salario_final = $_POST["salario"] + $comissao;

            echo "<h1 class='ufa'>" . $_POST["nome"] . ", sua comissão é " . $comissao . " reais e seu salário total é " . $salario_final . " reais.</h1>";
        }
    ?>
</body>
</html>