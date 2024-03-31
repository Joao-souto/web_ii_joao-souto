<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    
    <form action="superGlobais3.php" method="post">
        <fieldset>
            <legend>Cadastro</legend>

            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="idade">Idade: </label>
            <input type="number" id="idade" name="idade"><br><br>

            <label for="senha">Senha: </label>
            <input type="text" name="senha"><br><br>

            <label for="profissao">Profissão: </label>
            <input type="text" name="profissao"><br><br>

            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao"><br><br>

            <input type="submit" value="Enviar">

        </fieldset>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "Seu nome: " . $_POST["nome"] . ".<br><br>";
                echo "Sua idade: " . $_POST["idade"] . ".<br><br>";
                echo "Sua senha: " . $_POST["senha"] . ".<br><br>";
                echo "Sua profissão: " . $_POST["profissao"] . ".<br><br>";
                echo "Sua autodescrição: " . $_POST["descricao"] . ".<br><br>";
            }
        ?>
    </form>
    
</body>
</html>