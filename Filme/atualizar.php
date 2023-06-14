
<?php 

   //inclui o codigo da 'conexao.php' para essa linha
   require_once "../conexao.php";

   if(isset($_POST["titulo"]) && isset($_POST["diretor"]) && isset($_POST["ano"]))
   {
      //inclui o arquivo para salvar a foto do upload
      require_once "salvar_foto.php";

    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
   $diretor = $_POST["diretor"];
   $ano = $_POST["ano"];
   $genero = $_POST["genero"];
  
   //String com o comando SQL para ser executado no DB
  $sql = "UPDATE filmes SET `idfilmes`=?, `titulo`=?, `diretor`=?, `ano`=?, `genero`=? WHERE  `idfilmes`=?;";
  echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("issis", $idfilmes, $titulo, $diretor, $ano, $genero,);

//executa o SQL - Comando no Banco de Dados
$comando->execute();
   }
//abre o arquivo form.php
header("Location: index.php");