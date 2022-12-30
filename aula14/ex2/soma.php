<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        function soma($a, $b) {
            return $a + $b;
        }

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = soma($num1, $num2);
    
        echo("<p>O resultado é $resultado.</p>");
    ?>
</body>
</html>