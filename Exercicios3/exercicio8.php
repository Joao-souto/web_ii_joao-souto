<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio8.php" method="GET">
        <button type="submit" name="botaoClicado">Clique para verificar o valor que falta no array: </button>
    </form>
    <?php
    if(isset($_GET['botaoClicado'])){
        
    function missNumber($numbers)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }

        return 55 - $sum;
    }
    echo missNumber([7, 6, 1, 10, 9, 5, 4, 3, 2]);
    }
    ?>

</body>

</html>