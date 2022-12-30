<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sua Região</title>
    </head>
    <body>
        <?php
            $estado = isset($_POST['estado'])?$_POST['estado']:1;

            switch($estado) {
                case 1:
                    echo('Você mora na Região Norte!');
                    break;
                case 2:
                    echo('Você mora na Região Nordeste!');
                    break;
                case 3:
                    echo('Você mora na Região Centro-Oeste!');
                    break;
                case 4:
                    echo('Você mora na Região Sudeste!');
                    break;
                case 5:
                    echo('Você mora na Região Sul!');
                    break;
            }
        ?>
    </body>
</html>