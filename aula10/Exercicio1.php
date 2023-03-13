<h2>Exercicio 1</h2>
<br>

<?php
    $nomes = [];
    $nomes[0] = 'Pedro';
    $nomes[1] = 'Julia';
    $nomes[2] = 'Maria';

    for($i = 0; $i <= 2; $i++){
        echo "<ol>$nomes[$i]</ol>";
    }
?>