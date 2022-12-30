<?php
    $frase = "Sei lá mano, qualquer coisa.";
    
    $tamanho = str_word_count($frase, 0);
    echo($tamanho."<br>");

    $tamanho = str_word_count($frase, 1);
    print_r($tamanho);
    echo"<br>";

    $tamanho = str_word_count($frase, 2);
    print_r($tamanho);

?>