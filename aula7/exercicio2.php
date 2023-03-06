<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>

<?php

    $lista = [];
    $lista[0] = 'Murilo';
    $lista[1] = 'Poliana';
    $lista[2] = 'Dalva';
    $lista[3] = 'Lavinia';
    $lista[4] = 'Kaua';
   

    echo "<ol>";
   for($i = 0; $i <= 4; $i++){
      echo "<li>$lista[$i] </li>";
   }
   echo "</ol>";
?>