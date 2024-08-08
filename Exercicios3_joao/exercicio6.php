<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio6.php" method="GET">
        <div>
            <label for="n1">Insira o primeiro número: </label>
            <input type="number" name="n1" id="n1" required>
        </div>
        <div>
            <label for="n2">Insira o segundo número: </label>
            <input type="number" name="n2" id="n2" required>
        </div>
        <button type="submit">Verificar qual é o menor número: </button>
    </form>
    <?php
        if (isset($_GET["n1"]) && isset($_GET["n2"])) {

            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];

            function menorNumero(int $n1, int $n2) {
                return $n1<=$n2 ? $n1 : $n2;
            }

            echo "<p>O menor número é ", menorNumero($n1,$n2) ,"!</p>" ;
        }
?>

</body>

</html>