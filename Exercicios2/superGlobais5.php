<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>   
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $comissao = $_POST["vendas"] * 4 / 100;
            $salario_final = $_POST["salario"] + $comissao;

            echo $_POST["nome"] . ", sua comissão é " . $comissao . " reais e seu salário total é " . $salario_final . " reais.";
        }
    ?>
</body>
</html>