<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada</title>
    </head>
    <body>
        <?php
            $denominador = $_POST['denominador'];

            for($i = 1; $i <= 10; $i++) {
                echo("$denominador x $i = " . ($denominador * $i) . "<br>");
            }
        ?>
        <a href="index.html">Voltar</a>
    </body>
</html>