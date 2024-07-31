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
        $n3 = $_GET["n3"];
        $n4 = $_GET["n4"];
        $n5 = $_GET["n5"];
    ?>

    <form action="./ex3.php" method="GET">
        <input type="number" name="n1" value=<?= $n1?>>
        <input type="number" name="n2" value=<?= $n2?>>
        <input type="number" name="n3" value=<?= $n3?>>
        <input type="number" name="n4" value=<?= $n4?>>
        <input type="number" name="n5" value=<?= $n5?>>
        <button>Submit!</button>
    </form>

    <?php
        $numbers=[$n1,$n2,$n3,$n4,$n5];

        echo $numbers[count($numbers)-1];
    ?>
</body>
</html>
