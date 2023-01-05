<?php
    $frase = "Estou a prendendo PHP no Curso básico de PHP do Curso em Vídeo";
    $cont = substr_count($frase, "PHP");
    // Conta quantas vezes a string selecionada aparece.

    echo("Frase: ".$frase."<br>");
    echo("A palavra PHP apareceu $cont vezes.");
?>