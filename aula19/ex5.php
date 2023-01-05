<pre>
    <?php
        $v = array("d", "b", "a", "c");
        print_r($v);

        sort($v);
        // Ordena os valores do vetor.
        print_r($v);

        rsort($v);
        // Ordena os valores do vetor a contrário.
        print_r($v);

        asort($v);
        // Ordena os valores do vetor mantendo a associação dos índices.
        print_r($v);

        arsort($v); 
        // Ordena os valores do vetor ao contrário, mantendo a associação dos índices.
        print_r($v);

        $v = array(3 => "C", 2 => "E", 0 => "H", 1 => "B");
        ksort($v);
        // Ordena os índices do vetor, mantendo a associação aos valores.
        print_r($v);

        krsort($v);
        // Ordena os índices do vetor de forma reversa, mantendo a associação aos valores.
        print_r($v);
    ?>
</pre>