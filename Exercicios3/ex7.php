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
        function findSmallestNumber($numbers){
            $smallestNumber=$numbers[0];

            foreach($numbers as $number){
                if($number <= $smallestNumber) $smallestNumber=$number;
            }

            return $smallestNumber;
        }

        echo findSmallestNumber([5, 9, 3, 10, 2]);
    ?>
</body>
</html>
