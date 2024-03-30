<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>

<body>
    <form action="superGlobais1a.php" method="get">
        <fieldset>
            <legend>Atividade 1 a</legend>
            
            <label for="num1">Insira o número 1:</label>
            <input type="number" id="num1" name="num1" />
            <br>
            
            <label for="num2">Insira o número 2:</label>
            <input type="number" id="num2" name="num2" />
            <br>
            <input type="submit" value="Calcular">
            <br>

            <?php
            //acessando o valor que o usuário inserir atráves da superglobal $_GET 
            if(isset($_GET['num1']) && isset($_GET['num2'])){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];

                echo "Soma: " . (num1 + num2) . ".<br>";
                echo "Subtração: " . (num1 - num2) . ".<br>";
                echo "Multiplicação: " . (num1 * num2) . ".<br>";

                if(num2 != 0){
                    echo "Divisão: " . (num1/num2) . ".<br>";
                }
                else{
                    echo "A divisão não pode ser por 0!!"
                }
            }
            ?>
        </fieldset>



    </form>
</body>

</html>