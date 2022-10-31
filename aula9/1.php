<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maioridade</title>
    </head>
    <body>
        <?php
            $nome = isset($_POST["nome"])?$_POST["nome"]:"Nome não informado";
            $idade = (date("Y") - $_POST["ano"])?date("Y") - $_POST["ano"]:0;
            if ($idade < 16) {
                echo "$nome não pode dirigir e nem votar.";
            }
            elseif ($idade>=16 && $idade < 18) {
                echo "$nome não pode dirigir e possui o voto facultativo.";
            }
            elseif (($idade>65)) {
                echo "$nome pode dirigir e possui o voto facultativo."; 
            }
            else {
                echo "$nome pode dirigir e possui o voto obrigatório.";
            }
        ?>
    </body>
</html>