<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada</title>
    </head>
    <body>
        <form action="tabuada.php" method="post">
            <fieldset>
                <legend>Calcular tabuada</legend>
                <p>
                    <label for="denominador">Escolha o denominador: </label>
                    <select name="denominador" id="denominador" required>
                        <?php
                            for($i = 1; $i <= 10; $i++) {
                                echo("<option value='$i'>$i</option>");
                            }
                        ?>
                    </select>
                </p>
                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </body>
</html>