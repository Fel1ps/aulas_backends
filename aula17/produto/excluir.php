<?php require_once "../controla_sessao/controla.php"; ?>
<?php 

   //inclui o codigo da 'conexao.php' para essa linha
   require_once "../conexao.php";
  
  //verifica se foi enviado o param id pela 
  if(isset($_GET['id'])){

   //pega o valor do id que foi enviado pela url
   $id = $_GET['id'];
  
   //String com o comando SQL para ser executado no DB
  $sql = "DELETE FROM `produto` WHERE  `idproduto`= ? ;";
  echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}

//abre o arquivo form.php
header("Location: index.php");