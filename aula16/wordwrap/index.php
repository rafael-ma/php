<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptatibus quisquam ipsam, soluta aliquid minus reiciendis molestiae consequatur nisi dolores laboriosam deserunt quas incidunt nesciunt, totam inventore a mollitia enim?";
        $resultado = wordwrap($texto, 40, "<br>\n", false);
        // Primeiro atributo é a variável aplicada.
        // O segundo é o tamanho de caracteres por linha.
        // O terceiro é quais argumentos utilizar após a quebra.
        // O quarto, sendo falso, irá quebrar a linha respeitando as palavras, verdadeiro irá quebrar a linha mesmo que tenha que cortar a palavra no meio.

        echo($resultado);
    ?>
</body>
</html>