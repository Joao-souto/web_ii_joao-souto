<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $galinhas = $_GET["galinhas"];
        $vacas = $_GET["vacas"];
        $porcos = $_GET["porcos"];
    ?>

    <form action="./ex5.php" method="GET">
        <input type="number"     name="galinhas" value=<?= $galinhas?> placeholder="Quantas galinhas?">
        <input type="number" name="vacas" value=<?= $vacas?> placeholder="Quantas vacas?">
        <input type="number" name="porcos" value=<?= $porcos?> placeholder="Quantos porcos?">
        <button>Submit!</button>
    </form>

    <?php
        function animals($galinhas,$vacas,$porcos){
            return $galinhas * 2 + $vacas * 4 + $porcos * 4;
        }

        echo animals($galinhas,$vacas,$porcos);
    ?>
</body>
</html>
