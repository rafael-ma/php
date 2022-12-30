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
            // 1 até 10
            for($i = 1;$i <= 10;$i++) {
                echo("$i ");
            }
            echo"<br>";

            // 10 até 1
            for($i = 10;$i >= 1;$i--) {
                echo("$i ");
            }
            echo("<br>");

            // 0 até 100 pulando 4
            for($i = 0;$i <= 100;$i += 4) {
                echo("$i ");
            }
            echo("<br>");

            // 20 até 1 subtraindo 2
            for($i = 20; $i >= 1; $i -=2) {
                echo("$i ");
            }
        ?>
    </body>
</html>