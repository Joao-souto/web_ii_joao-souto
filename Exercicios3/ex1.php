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
       $n1 = $_GET["n1"];
       $n2 = $_GET["n2"];
    ?>

    <form action="./ex1.php" method="GET">
        <input type="number" name="n1" value=<?= $n1?>>
        <input type="number" name="n2" value=<?= $n2?>>
        <button>Somar!</button>
    </form>

    <?php
        function sum($a, $b){
            return $a+$b;
        }

        echo sum($n1,$n2);
    ?>
</body>
</html>
