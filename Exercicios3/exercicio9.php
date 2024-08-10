<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio9.php" method="GET">
        <label for="date">Insira a data desejada: </label>
        <input type="date" id="date" name="date">
        <button type="submit" >Clique para verificar o valor que falta no array: </button>
    </form>
    <?php
    if(isset($_GET['date'])){
        $date = $_GET['date'];
        function isChristmas($date){
            $verificacao = substr($date,-5);
            if($verificacao == '12-25'){
                echo "<p>É Natal!</p>";
            }else{
                echo "<p>Não é natal!</p>";
            }
        }

        isChristmas($date);
    }
    ?>
</body>

</html>