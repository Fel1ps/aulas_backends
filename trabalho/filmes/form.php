
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"?>

<div class="container">
    <h1>Cadastro de Filmes</h1>
    <hr>

    <form action="<?php echo isset($filmes) ? 'atualizar.php' : 'inserir.php' ?>" method="post"
    enctype="multipart/form-data">

    <label for="titulo">Titulo</label><br>
    <input type="text" name="titulo" id="titulo" value="<?php echo $filmes['titulo'] ?? ""; ?>"><br>
    <input type="hidden" name="id" id="id" value="<?php echo $filmes['idfilmes'] ?? ""; ?>"><br>

    <label for="diretor">Diretor</label><br>
    <textarea name="diretor" id="diretor"><?php echo $filmes['diretor'] ?? ""; ?></textarea><br>

    <label for="ano">Ano</label><br>
    <input type="year" name="ano" id="ano" value="<?php echo $filmes['ano'] ?? ""; ?>"><br>

    <label for="genero">Genero</label><br>
    <textarea name="genero" id="genero"><?php echo $filmes['genero'] ?? ""; ?></textarea><br>

    <button type="submit">Cadastrar</button>

    </form>
</div>
    <?php require_once "../template/rodape.php"; ?>