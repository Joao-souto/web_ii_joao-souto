<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Carro.php';

    // $carro1 = new Carro(); # utilizando setters
    // $carro1->setCor("Preto");
    // $carro1->setMarca("BMW");
    // $carro1->setModelo("2020");
    // print_r($carro1);
    // echo "<br><br><h1>Eu tenho um carro da marca {$carro1->getMarca()} e da cor {$carro1->getCor()} e o modelo é {$carro1->getModelo()}.</h1><br>";

    $carro2 = new Carro("Fiat","roxo",2007);
    print_r($carro2);
    echo "<br><h1>Eu tenho um carro da marca {$carro2->getMarca()} e da cor {$carro2->getCor()} e o modelo é {$carro2->getModelo()}.</h1>";
    ?>
    </pre>
</body>
</html>