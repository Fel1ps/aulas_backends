<?php include_once "../controla_sessao/verifica_login.php"; ?>
<?php include_once "../template/cabecalho.php"; ?>

<div class="container">
<br>

<?php if(isset($erro_login)):?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $erro_login;?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<h1>Cadastro de Produtos</h1>

<form action="form_login.php" method="post";>

<labelfor="login" class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control">

<labelfor="login" class="form-label">Senha</label>
<input type="password" name="senha" class="form-control">

<button type="submit" class="btn btn-primary">Entrar</button>
</form>

<?php include_once "../template/rodape.php"; ?>

</div>

