<?php 

   //inclui o codigo da 'conexao.php' para essa linha
   require_once "../conexao.php";

   if(isset($_POST["titulo"])){
   
   $titulo = $_POST["titulo"];
   $diretor = $_POST["diretor"];
   $ano = $_POST["ano"];
   $genero = $_POST["genero"];
  
   //String com o comando SQL para ser executado no DB
  $sql = "INSERT INTO `filmes` (`titulo`, `diretor`, `ano`, `genero`) VALUES (?, ?, ?, ?);";
  echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssis", $titulo, $diretor, $ano, $genero);

//executa o SQL - Comando no Banco de Dados
$comando->execute();
   }
//abre o arquivo form.php
header("Location: index.php");