<?php 

   //inclui o codigo da 'conexao.php' para essa linha
   require_once "../conexao.php";
  
   //String com o comando SQL para ser executado no DB
  $sql = "SELECT * FROM `filmes`";
  
//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//cria um vetor vazio
$filmes = [];

//pegar a primeira linha de resultado
while($filme = $resultado->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $filmes[] = $filme;
}

