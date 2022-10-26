<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Operadores</title>
    </head>
    <body>
        <div>
            <?php
                $preco = $_GET["pr"];
                echo "O preço do produto: R$". number_format($preco, 2, ",", "."). "<br>";
                $preco += ($preco * 10)/100;
                echo "O preço com 10% de aumento: R$". number_format($preco, "2", ",", "."). "<br>";


            ?>
        </div>
    </body>
</html>