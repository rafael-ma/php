<pre>
    <?php
        $v = array("a", "j", "m", "x", "k");

        array_unshift($v, 9);
        // Adiciona o valor 9 no primeiro elemento do vetor $v.
        print_r($v);

        array_shift($v);
        // Remove o primeiro elemento do vetor $v.
        print_r($v);
    ?>
</pre>