<h2>Vetor com índice textual</h2>
<pre>
            +--------+
    nome    |Notebook|
            +--------+
            +--------+
    nome    |Dell    |
            +--------+
            +--------+
    preco   |5.400   |
            +--------+
</pre>

<?php
    $produto = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 5400.99

    ];
    var_dump($produto);

    echo "<br><br>";
    echo $produto["nome"]. "<br>";
    echo $produto["marca"]. "<br>";
    echo $produto["preco"]. "<br>";
    echo "<br><br>";


    //estrutura de repetição especifica para percorrer vetores
    foreach($produto as $key => $value){
        echo $value . "</br>";
    }
?>