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
        function missNumber($numbers){
            $sum=0;
            foreach($numbers as $number){
                $sum += $number;
            }

            return 55-$sum;
        }

        echo missNumber([7, 6, 8, 10, 9, 5, 4, 3, 2]);
    ?>
</body>
</html>
