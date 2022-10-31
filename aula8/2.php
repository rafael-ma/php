<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
    </head>
    <body>
        <?php
            $nome = isset($_POST["nome"])?$_POST["nome"]:"[não informado]";
            $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"[não informado]";
            $ano = isset($_POST["ano"])?$_POST["ano"]:0;
            $idade = date("Y") - $ano;
            echo "<p>$nome tem $idade anos e é do sexo $sexo</p>";
        ?>
        <a href="2-exercicio.html">Voltar</a>
    </body>
</html>