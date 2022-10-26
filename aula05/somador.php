<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Somador</title>
    </head>
    <body>
        <div>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $soma = $n1 + $n2;
                echo "A soma vale $soma<br>";
                echo "A subtração vale ". ($n1 - $n2). "<br>";
                echo "A multiplicação vale ". ($n1 * $n2). "<br>";
                echo "A divisão vale ". ($n1 / $n2). "<br>";
                echo "O módulo vale ". ($n1 % $n2). "<br>";
                echo "A média vale ". (($n1 + $n2) / 2). "<br>";
            ?>
        </div>
    </body>
</html>