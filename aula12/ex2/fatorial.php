<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fatorial</title>
    </head>
    <body>
        <?php
            $numero = isset($_POST['numero'])?$_POST['numero']:5;
            $i = $numero;
            $total = 1;

            do {
                $total = $total * $i;
                $i--;
            } while($i >= 1);

            echo("$numero! = $total");
        ?>
        <p><a href="index.html">Voltar</a></p>
    </body>
</html>