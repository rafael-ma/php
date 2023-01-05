<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>10 à 1</title>
    </head>
    <body>
        <?php
            $contador = 10;
            do {
                echo("$contador ");
                $contador--;
            } while($contador >= 1);
        ?>
    </body>
</html>