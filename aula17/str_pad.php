<?php
    $nome = "Rafael";
    $pad = str_pad($nome, 30, "#", STR_PAD_BOTH);
    // SINTAXE: str_pad($a, b, c, d) 
    //     $a = String a ser aplicada. 
    //     b = Quantidade de caracteres a ser tranformada. 
    //     c = String que ocuparão os espaços. 
    //     d = Formatação utilizada:
    //         STR_PAD_BOTH = Centraliza
    //         STR_PAD_LEFT = Ajusta a esquerda.
    //         STR_PAD_RIGHT = Ajusta a direita.

    echo($pad);
?>