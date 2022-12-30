<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nomes</title>
    </head>
    <body>
        <form action="#" method="post">
            <fieldset>
                <legend>Guardador de Nomes</legend>
                <?php
                    $numero = isset($_POST['numero'])?$_POST['numero']:1;
                    $i = 1;

                    while($i <= $numero) {
                        echo("<p> <label for='nome$i'>Nome $i:</label> <input type='text' name='nome$i' id='nome$i' required> </p>");

                        $i++;
                    }
                ?>

                <a href="index.html">Voltar</a>
                <button type="submit">Guardar</button>
            </fieldset>
        </form>
    </body>
</html>