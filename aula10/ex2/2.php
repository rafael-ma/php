<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem aula hoje?</title>
    </head>
    <body>
        <?php
            $dia = isset($_POST['dia'])?$_POST['dia']:1;

            switch($dia) {
                case 1:
                case 7:
                    echo('Não, hoje não tem aula.');
                    break;
                default:
                    echo('Sim, hoje tem aula.');
            }
        ?>
        <p><a href="index.html">Voltar</a></p>
    </body>
</html>