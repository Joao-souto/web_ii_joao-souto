<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exercicio10.php" method="GET">
        <label for="email">Insira o e-mail: </label>
        <input type="text" id="email" name="email">
        <button type="submit">Clique para verificar se o e-mail é válido!</button>
    </form>
    <?php
    if (isset($_GET['email'])) {
        function isValidEmail()
        {
            $email = $_GET['email'];
            $emailDesmembrado = array();
            $temPonto  = false;
            $temArrouba  = false;
            $temStringAntes  = false;
            $emailLength = strlen($email);

            for ($i = 0; $i < $emailLength; $i++) {
                $emailDesmembrado[$i] = substr($email, $i, 1);
            }

            for ($i = 0; $i < $emailLength; $i++) {
                if ($emailDesmembrado[$i] == "@") {
                    $temArrouba = true;
                    if ($i > 0) {
                        $temStringAntes = true;
                    }
                }
                if ($emailDesmembrado[$i] == ".") {
                    $temPonto = true;
                }
            }

            if ($temArrouba == true && $temStringAntes == true && $temPonto == true) {
                echo "<p>Email válido!</p>";
            } else {
                echo "<p>Email inválido!</p>";
                echo "<p>Deve conter '.','@' e texto antes do @!</p>";
            }
        }
    }
    isValidEmail();
    ?>
</body>

</html>