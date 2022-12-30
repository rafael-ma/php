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
            // Variáveis
            $inicio = isset($_POST['inicio'])?$_POST['inicio']:1;
            $fim = isset($_POST['fim'])?$_POST['fim']:10;
            $intervalo = isset($_POST['intervalo'])?$_POST['intervalo']:1;
            $contador = $inicio;
            
            // Crescente
            if ($contador < $fim) {
                while($inicio <= $fim) {
                    echo($inicio . ' ');

                    $inicio += $intervalo;
                }
            }

            // Decrescente
            if ($contador > $fim) {
                while($inicio >= $fim) {
                    echo($inicio . ' ');

                    $inicio -= $intervalo;
                }
            }
        ?>
        <p><a href="index.html">Voltar</a></p>
    </body>
</html>