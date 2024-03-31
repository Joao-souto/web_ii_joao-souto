<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 4</title>
</head>
<body>
    
    <form action="superGlobais4.php" method="post">
        <fieldset>
            <legend>Peso ideal</legend>

            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="altura">Altura em metros: </label>
            <input type="number" id="altura" name="altura" step="0.01" min="0"><br><br> 
            <!-- O atributo step="0.01" especifica que o controle de entrada aceitará valores em incrementos de 0.01, permitindo a entrada de números decimais. O atributo min="0" garante que apenas números positivos sejam aceitos, o que é adequado para a altura.-->

            <input type="submit" value="Calcular">

        </fieldset> 

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $peso_ideal = 72.7 * $_POST["altura"] - 58;
                echo "Olá, " . $_POST["nome"] . "! Seu peso ideal é $peso_ideal Kg.";
            }
        ?>
    </form>
    
</body>
</html>