<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio2.php" method="GET">
        <div>
            <label for="n1">Insira o valor da base: </label>
            <input type="number" name="n1" id="n1" required>
        </div>
        <div>
            <label for="n2">Insira o valor da altura: </label>
            <input type="number" name="n2" id="n2" required>
        </div>
        <button type="submit">Calcular área de triângulo</button>
    </form>
    <?php
    // Verifica se os valores foram passados na URL
    if (isset($_GET["n1"]) && isset($_GET["n2"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        function areaTriangulo($a, $b)
        {
            return ($a*$b)/2;
        }

        echo "<p>A área deste trângulo resulta em: " . areaTriangulo($n1, $n2) . "</p>";
    }
    ?>
</body>

</html>