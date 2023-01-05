<pre>
    <?php
        $pessoa = array(array("nome"=>"", "idade"=>"", "peso"=>"",));

        $pessoa[0] = atribuirPessoa(0,"Rafael Matiola", 18, 76.5);

        print_r($pessoa);

        function atribuirPessoa($id, $nome, $idade, $peso) {
            $pessoa[$id]["nome"] = $nome;
            $pessoa[$id]["idade"] = $idade;
            $pessoa[$id]["peso"] = $peso; 
            return $pessoa[$id];
        }
    ?>
</pre>