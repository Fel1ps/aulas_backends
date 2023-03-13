<h2>Exercicio 3</h2>
<br>

<?php
    $aluno1 = [
        "nome" => "Poliana",
        "nota1" => 7,
        "nota2" => 9
    ];

    $aluno2 = [
        "nome" => "Murilo",
        "nota1" => 8,
        "nota2" => 5
    ];

    $aluno3 = [
        "nome" => "André",
        "nota1" => 6,
        "nota2" => 7
    ];

    $tabela = [$aluno1, $aluno2, $aluno3];

    for ($i=0; $i < 3; $i++) { 
        foreach ($tabela[$i] as $key => $value) {
            echo $value . "<br>";
        }
    }
?>
    