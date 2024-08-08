<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio3.php" method="GET">
        <div>
            <label for="n1">Insira o valor do índice 0: </label>
            <input type="number" name="n1" id="n1" required>
        </div>
        <div>
            <label for="n2">Insira o valor do índice 1: </label>
            <input type="number" name="n2" id="n2" required>
        </div>
        <div>
            <label for="n3">Insira o valor do índice 2: </label>
            <input type="number" name="n3" id="n3" required>
        </div>
        <div>
            <label for="n4">Insira o valor do índice 3: </label>
            <input type="number" name="n4" id="n4" required>
        </div>
        <button type="submit">Calcular último índice</button>
    </form>
    <?php
        if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"]) && isset($_GET["n4"])) {
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $n3 = $_GET["n3"];
            $n4 = $_GET["n4"];
    
            $numbers=[$n1, $n2, $n3, $n4];
            echo "<p>O valor do último índice é: ", $numbers[count($numbers)-1] ,".</p>";
        }
    ?>
</body>

</html>