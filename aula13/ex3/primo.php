<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Número primo</title>
    </head>
    <body>
        <?php
            $numero = $_POST['numero'];
            $primo = true;

            if ($numero == 1) {
                echo("O número $numero não é primo.");
            } else {
                for($i = 2; $i < $numero; $i++) {
                    if(($numero % $i) == 0) {
                        $primo = false;
                    }
                }
    
                if ($primo) {
                    echo("O número $numero é primo.");
                } else {
                    echo("O número $numero não é primo.");
                }
            }     
        ?>
    </body>
</html>