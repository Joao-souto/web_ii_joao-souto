<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
</head>
<body>
    <?php
    require_once 'Caneta.php'; #importando classe

    $caneta1 = new Caneta(); #criando objeto

    $caneta1->cor = "Azul"; #passando valores aos atributos
    $caneta1->ponta = 0.6; 
    $caneta1->tampada = true; 

    $caneta2 = new Caneta();

    $caneta2->cor = "Vermelha";
    $caneta2->ponta = 0.6; 
    $caneta2->destampar(); 
        
    var_dump($caneta1); #var_dump; ou print_r; é uma função para mostrar o status do objeto
    echo "<br>"; 
    print_r($caneta1); #diferença é que o print_r; mostra apenas o dado e não seu tipo
    echo "<br>"; echo "<br>"; 

    $caneta1->rabiscar(); #utilizando método

    var_dump($caneta2); 
    echo "<br>"; 
    print_r($caneta2); 

    $caneta2->rabiscar(); 
    ?>
</body>
</html>