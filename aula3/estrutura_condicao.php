<h2>Estrutura de condição</h2>
<hr>
<p>
    A estrutura de condição é utilizada
    para avaliar qual instrução deve ser 
    executada, dada uma condição.


Se a condição for verdadeira executa a instrução 1,
caso contrário executa a instrução 2.

    <strong>Exemplo</strong>
    <pre>
        if (<em>condicao</em> ){
            //instrução 1
        }else{
            //instrução 2
        }
    </pre>
</p>

<?php
    /*
        Para passar de ano é necessário tira no
        minimo 6 pontos em cada disciplina. Murilo
        tirou .... Ele foi aprovado ou não?
    */
    $nota_do_murilo = 5;
    if($nota_do_murilo >= 6){
        echo "Murilo foi aprovado!";
    }else{
        echo "Murilo foi reprovado!";
    }
?>
<br>
<strong>Exemplo 2</storng>
    <p>O aluno para ser aprovado precisa obiter
        nota superior a 6 pontos, para fazer o exame final 
        precisa ter tirado menos que 6 e mais que 3 pontos.
        Notas menores que 3 são reprovações diretas.
    </p>

    <?php
        $nota = 2;
        if($nota >= 6){
            echo "Aprovado";
        }else if ($nota > 3){
            echo "Faz exame final";
        }else {
            echo "Reprovado";
        }
    ?>