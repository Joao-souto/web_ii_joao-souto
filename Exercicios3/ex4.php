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
        function check($numbers,$target){
            foreach($numbers as $number){
                if($number==$target) return true;
            }

            return false;
        }

        echo check([1,2,3,4,5,6,7],4) ? "Yes" : "No";
    ?>
</body>
</html>
