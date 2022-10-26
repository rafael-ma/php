<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Funções Aritméticas</title>
    </head>
    <body>
        <div>
            
            <?php
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];
                echo "<h2>Valores recebidos: $v1 e $v2</h2>";
                echo "O valor absoluto de $v2 é ". abs($v2). "<br>";
                echo "O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2). "<br>";
                echo "A raiz de $v1 é ". sqrt($v1). "<br>";
                echo "O valor arredondado de $v2 é ". round($v2). "<br>";
                echo "O valor inteiro de $v2 é ". intval($v2). "<br>";
                echo "O valor de $v2 formatado é ". number_format($v2, 2, ",", "."). "<br>";
            ?>
        </div>
    </body>
</html>