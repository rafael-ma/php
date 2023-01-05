<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Obrigação do voto</title>
    </head>
    <body>
        <div>
            <?php
                $idade = $_GET["age"];
                $voto = ($idade>=18 && $idade <65)?"Obrigatório":"Não obrigatório";
                echo "Situação de voto: $voto";
            ?>
        </div>
    </body>
</html>