<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
        <?php
            $n = range(5,20,5);
            // Cria um vetor começando no valor 5 e indo até o valor 20, pulando de 5 números por posição.
            Foreach($n as $v) {
                echo"$v ";
            }
        ?>
</body>
</html>