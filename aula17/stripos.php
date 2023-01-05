<?php
    $frase = 'Estou aprendendo PHP';
    $pos = stripos($frase, 'php');
    // Encontrará a posição da string, utilizada na função, ignorando maiúsculas ou minúsculas.

    echo($frase."<br>");
    echo("A string foi encontrada na posição $pos ");
?>