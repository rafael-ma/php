<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body>
        <?php
            $numero = isset($_GET["numero"])?$_GET["numero"]:0;
            $operacao = isset($_GET["operacao"])?$_GET["operacao"]:1;

            switch ($operacao) {
                case 1:
                    $resultado = $numero * 2;
                    break;
                case 2:
                    $resultado = $numero **  3;
                    break;
                case 3:
                    $resultado = sqrt($numero);
            }

            echo "<p>O resultado da operação foi $resultado.</p>";
        ?>
        <a href="exercicio1.html">Voltar</a>
    </body>
</html>