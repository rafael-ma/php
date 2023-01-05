<?php
    $nome = 'Rafael Matiola';
    $nome2 = ucwords(strrev(strtolower($nome)));
    // Inverte a ordem dos caracteres.

    echo('Seu nome é '.$nome.'<br>');
    echo('Seu nome ao contrário é '.$nome2);
?>