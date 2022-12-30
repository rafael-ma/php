<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ljasfglj</title>
</head>
<body>
    <?php
        $produto = "leite";
        $preco = 4.5;
        // echo"O $produto custa R$$preco";
        printf("O %s custa R$%.2f", $produto, $preco);
        // Após a porcentagem utilizamos abreviações dos tipos dos valores %s para string %f para  float, %d valor decimal(positivo ou negativo), %u valores deciamis apenas positivos.
    ?>
</body>
</html>