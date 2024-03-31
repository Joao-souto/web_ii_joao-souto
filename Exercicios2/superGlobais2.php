<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    
    <form action="superGlobais2.php" method="post">
        <fieldset>
            <legend>Cadastro</legend>

            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="idade">Idade: </label>
            <input type="number" id="idade" name="idade"><br><br>

            <label for="genero">Gênero: </label><br>
            <input type="radio" name="genero" value="masculino" required>masculino<br>
            <input type="radio" name="genero" value="feminino" required>Feminino<br><br>

            <label for="linguagens">Linguagens favoritas: </label><br>
            <input type="checkbox" name="linguagens[]" value="Java">Java<br>
            <input type="checkbox" name="linguagens[]" value="JavaScript">JavaScript<br>
            <input type="checkbox" name="linguagens[]" value="C">C<br><br>

            <input type="submit" value="Enviar">

        </fieldset>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST["linguagens"])){
                    echo "Olá, " . $_POST["nome"] . "! Registramos que você têm " . $_POST["idade"] . " anos, é do gênero " . $_POST["genero"] . " e você gosta de " . implode(", ", $_POST["linguagens"]) . ".";
                    //implode é uma função que junta os elementos de um array em uma string, utilizando um delimitador para facilitar a leitura para o usuário
                }
                else{
                    echo "Olá, " . $_POST["nome"] . "! Registramos que você têm " . $_POST["idade"] . " anos, é do gênero " . $_POST["genero"] . " e você não gosta de nenhuma das linguagens acima."; 
                }
            }
        ?>
    </form>
    
</body>
</html>