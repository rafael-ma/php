<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador</title>
    </head>
    <body>
        <?php
            $numero = 10;

            while($numero >= 1) {
                echo($numero . '<br>');
                $numero--;
            }
        ?>
    </body>
</html>