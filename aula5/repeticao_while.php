<style>
    div{
        border:1px solid #000;
    }

    .container{
        display: grid;
        grid-template-rows: auto auto ;
        grid-template-columns: auto auto auto auto auto;
    }
</style>

<h2>Estrutura de repetição for</h2>
<p>
    Utilizada para repetir uma sequencia de 
    istruções um número determinado de vezes.
</p>

<p>
    <pre>
        for(inicio; condição; passo){
            //istruções a serem repetidas
        }
    </pre>

</p>

<div class="container">
    <?php
      //for($tabuada = 1; $tabuada <=10; $tabuada++){}
      $tabuada = 1;
       while($tabuada <= 10){
        echo "<div>";
        //for($contador = 1; $contador <= 10; $contador++)
        $contador = 0;    
        while($contador <= 10){
                    $resultado = $tabuada * $contador;
                    echo "$tabuada x $contador = $resultado <br>";
                    $contador++;
            }
        echo "</div>"; 
        $tabuada++;
        }
      
    ?>
</div>