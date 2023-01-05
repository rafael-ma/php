<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Situação academica</title>
    </head>
    <body>
        <?php
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $media = ($nota1 + $nota2)/2;

            if ($media < 5) {
                $situacao = "reprovado";
            }
            elseif ($media >= 5 && $media < 7) {
                $situacao = "recuperação";
            }

            else {
                $situacao = "aprovado";
            }

            echo "<fieldset><legend>Média</legend><p>Média do aluno: $media</p><p>Situação do aluno: $situacao</p></fieldset>";
        ?>
        <a href="2-exercicio.html">Voltar</a>
    </body>
</html>