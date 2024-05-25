<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando classe</title>
</head>
<body>
    <?php
    class Caneta2{
        public $modelo; #definindo visibilidade de atributos
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
         if ($this->tampada == false) {
            echo "<h3>Rabiscando...</h3>";   
         }
         else if($this->tampada == true){
            echo "<h3>Destampe a caneta primeiro!</h3>";
         }
        }

        private function tampar(){
            $this->tampada =  true; 
        }

        private function destampar(){
            $this->tampada =  false;
        }
    }
    ?>
</body>
</html>