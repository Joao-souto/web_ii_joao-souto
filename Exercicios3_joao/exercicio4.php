<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio4.php" method="GET">
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
        <div>
        <label for="search">Insira o valor procurado: </label>
        <input type="number" name="search" id="search" required>
        </div>
        <button type="submit">Verificar se existe este valor no array: </button>
    </form>
    <?php
if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"]) && isset($_GET["n4"]) && isset($_GET["search"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $search = $_GET["search"];
    $numbers = [$n1, $n2, $n3, $n4];

    function check($numbers, $search)
    {
        foreach ($numbers as $number) {
            if ($number == $search) {
                echo "Valor existe!";
                return;
            }
        }
        echo "Valor não existe!";
    }

    check($numbers, $search);
}
?>

</body>

</html>