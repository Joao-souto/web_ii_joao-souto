<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Carro{
            private $marca;
            private $cor;
            private $modelo;
            private $velocidade;

            public function __construct($valorMarca,$valorCor,$valorModelo){ #método construtor
                $this->marca = $valorMarca;
                $this->cor = $valorCor;
                $this->modelo = $valorModelo;
            }
            public function acelerar ($valor){
                $this->velocidade += $valor;
            }
            public function desacelerar ($valor){
                $this->velocidade -= $valor;
            }
            public function getMarca(){ #Criando métodos getter e setter
                return $this->marca;
            }
            public function setMarca($valor){
                return $this->marca = $valor;
            }
            public function getModelo(){
                return $this->modelo;
            }
            public function setModelo($valor){
                return $this->modelo = $valor;
            }
            public function getCor(){
                return $this->cor;
            }
            public function setCor($valor){
                return $this->cor = $valor;
            }
        }
    ?>
</body>
</html>