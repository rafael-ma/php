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
                $ano_atual = $_GET["a"];
                echo "O ano atual é $ano_atual e o ano anterior é ". --$ano_atual;
            ?>
        </div>
    </body>
</html>