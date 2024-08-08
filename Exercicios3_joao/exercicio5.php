<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio5.php" method="GET">
        <div>
            <label for="galinhas">Insira a quantidade de galinhas: </label>
            <input type="number" name="galinhas" id="galinhas" required>
        </div>
        <div>
            <label for="vacas">Insira a quantidade de vacas: </label>
            <input type="number" name="vacas" id="vacas" required>
        </div>
        <div>
        <label for="porcos">Insira a quantidade de porcos:  </label>
        <input type="number" name="porcos" id="porcos" required>
        </div>
        <button type="submit">Verificar a quantidade de pernas: </button>
    </form>
    <?php
        if (isset($_GET["galinhas"]) && isset($_GET["vacas"]) && isset($_GET["porcos"])) {

            $galinhas = $_GET["galinhas"];
            $vacas = $_GET["vacas"];
            $porcos = $_GET["porcos"];

            function contagemPernas($g,$v,$p){
                return ($g*2) + ($v*4) + ($p*4);
            }

            echo "<p>A quantidade de pernas é ", contagemPernas($galinhas,$vacas,$porcos) ,"!</p>" ;
        }
?>

</body>

</html>