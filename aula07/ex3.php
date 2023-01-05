<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Situação</title>
    </head>
    <body>
        <div>
            <?php
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $m = ($nota1 + $nota2)/2;
                echo "A média do aluno é de $m";
                echo "Média do aluno: $m <br>Situação do aluno: ". (($m >= 6)?"Aprovado":"Reprovado");
            ?>
        </div>
    </body>
</html>