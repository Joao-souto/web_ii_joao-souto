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
       $base = $_GET["base"];
       $height = $_GET["height"];
    ?>

    <form action="./ex2.php" method="GET">
        <input type="number" name="base" value=<?= $base?> placeholder="Base">
        <input type="number" name="height" value=<?= $height?> placeholder="Altura">
        <button>Calcular!</button>
    </form>

    <?php
        function area($base, $height){
            return $base*$height/2;
        }

        echo area($base,$height);
    ?>
</body>
</html>
