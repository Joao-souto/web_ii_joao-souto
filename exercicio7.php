<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <style>
        .container{
            display: flex;
        }
    </style>
</head>
<body>

    <div class="container">
        <div>
            <h3>Aluno(a)</h3>
            <p>=========</p>
            <p>Aline</p>
            <p>Mário</p>
            <p>Sérgio</p>
            <p>Shirley</p>
        </div>

        <?php
            $aline = 9;
            $mario = "dez";
            $sergio = 4.5;
            $shirley = 7;

            echo "<div>
            <h3>Nota</h3>
                <p>=========</p>
                <p>$aline</p>
                <p>$mario</p>
                <p>$sergio</p>
                <p>$shirley</p>
            </div>";
        ?>



    </div>
</body>
</html>