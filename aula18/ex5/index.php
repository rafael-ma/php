<pre>
    <?php
        $pessoa = array("nome" => "Rafael",
                        "idade" => 18,
                        "peso" => 76.4);
    
        print_r($pessoa);

        $pessoa["fuma"] = false;

        print_r($pessoa);

        foreach($pessoa as $campo => $valor) {
            echo"O valor de $campo é $valor<br>";
        }
    ?>
</pre>