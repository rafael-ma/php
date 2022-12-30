<?php
// Trim elimina os espaços desnecessários no início e no fim de um valor.
    $nome = "         Afonso Carvalho    ";
    echo($nome." = ".strlen($nome)."<br>");

    echo($nome." = ".strlen(trim($nome))."<br>");
    // Também temos a função ltrim que limpa os somente os espaços da esquerda.
    // rtrim também funciona da mesma forma porém da direita do valor.
     
?>