<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        function soma ($a, $b) {
            $soma = $a + $b;
            echo("O resultado é $soma");        
        }

        soma($_POST['num1'], $_POST['num2']);
    ?>
</body>
</html>