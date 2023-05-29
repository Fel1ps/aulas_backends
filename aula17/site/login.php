<?php include_once "../template/cabecalho.php"; ?>

<form action="verifica_login.php" method="post";>

<labelfor="login" class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control">

<labelfor="login" class="form-label">Senha</label>
<input type="password" name="senha" class="form-control">

<button type="submit" class="btn btn-primary">Entrar</button>
</form>

<?php include_once "../template/rodape.php"; ?>