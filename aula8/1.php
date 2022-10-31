<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Raíz Quadrada</title>
    </head>
    <body>
    <?php
        $valor = $_POST["valor"];
        echo "<p>A raíz quadrada de $valor é ". number_format(sqrt($valor), 2). "</p>";
    ?>
    <a href="1-raizquadrada.html">Voltar</a>
    </body>
</html>