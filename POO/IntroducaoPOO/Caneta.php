<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando classe</title>
</head>
<body>
    <?php
    class Caneta{ #criando uma classe
        var $modelo; #criando atributos
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar(){ # criando métodos
         if ($this->tampada == false) {
            echo "<h3>Rabiscando...</h3>";   
         }
         else if($this->tampada == true){
            echo "<h3>Destampe a caneta primeiro!</h3>";
         }
        }

        function tampar(){
            $this->tampada =  true; #this serve para referenciar o objeto que chamar a classe
        }

        function destampar(){
            $this->tampada =  false;
        }
    }
    ?>
</body>
</html>