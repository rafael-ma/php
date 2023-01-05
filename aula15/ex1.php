<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parâmetros de referência</title>
</head>
<body>
    <?php
    // Ao utilizar o E comercial antes da variável de parâmetro, faz com que o PHP pegue a variável utilizada na nos parâmetros como uma referência, assim quaisquer alterações em uma também se aplica a outra.
        function teste (&$x) {
            $x += 2;
            echo($x);
        }

        $a = 3;
        teste($a);
        echo("<p>O valor de A é $a</p>");
    ?>
</body>
</html>