<?php
    $site = "YouTube";
    $sub = substr($site, 3, 3);
    // Pega a partir da posição indicada nos parâmetros substr($site, X, x), quantos caracteres foram indicados substr($site, x, X)

    echo("$sub");
    $site = "YouTube";
    $sub = substr($site, 3);
    // Se referenciarmos apenas um parâmetro, a partir dessa posição, será utilizados os demais caracteres, até o fim da string. 
    // Também pode ser utilizados parâmetros negativos que farão o caminho inverso.
?>