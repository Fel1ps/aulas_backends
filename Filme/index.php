<?php require_once "template/cabecalho.php";?>

  <div class="container">
  <h1>Filmes</h1>
  <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir produtor</a>
    </div>


    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Diretor</th>
      <th scope="col">Ano</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($filme as $filmes){ ?>
    <tr>
      <th scope="row"><?php echo $filmes ['titulo']; ?></th>
      <td><?php echo $filmes['diretor']; ?></td>
      <td><?php echo $filmes['ano']; ?></td>
      <td><?php echo $filmes['genero']; ?></td>
      <td class="text-end">
        <a href="excluir.php?id=<?php echo $filmes['idfilmes']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
        <a href="form.php?id=<?php echo $filmes['idfilmes']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Atualizar</a>
      </td>
    </tr>
    <?php } ?>

  </tbody>
</table>


  </div>
    
  <?php require_once "template/rodape.php"; ?>