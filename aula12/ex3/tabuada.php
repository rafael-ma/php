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
            $denominador = isset($_POST['denominador'])?$_POST['denominador']:1;
            $i = 1;

            do {
                echo("$denominador x $i = " . ($denominador * $i) . "<br>");
                $i++;
            } while($i <= 10);
        ?>
    </body>
</html>