<html>
<head>
	<title>
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">



</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
        </li>

      </ul>
        <a href="LoginUsuarioView.php"class="btn btn-outline-success" type="submit">Login</a>
        <a href="CadastrarUsuarioView.php"class="btn btn-outline-success disabled" type="submit">Cadastrar</a>

    </div>
  </nav>
	<div class="container col-md-6 row" style="margin-top:60px;">
		<div class="col-md-2"></div>
		<form class="col-md-8" method="post" action="CadastrarUsuarioModel.php">
			<div class="form-group">
				<label for="lbl_nome">Nome Usuario:</label>
				<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario"placeholder="Nome Usuario">
        <label for="lbl_email">E-mail:</label>
        <input type="email" class="form-control" id="emailUsuario" name="emailUsuario"placeholder="test@test.com">
        <label for="lbl_senha">Senha:</label>
        <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario"placeholder="Senha">
        <label for="lbl_confSenha">Confirma Senha:</label>
        <input type="password" class="form-control" id="confSenhaUsuario" name="confSenhaUsuario"placeholder="Confirma Senha">


				<button type="submit" class="btn btn-success" style="margin-top: 20px;">Cadastrar</button>
			</div>

      <!--  comando do php chamando html-->
      <?php if (!empty($_GET['senhaErro'])) {?>
      <div class="alert alert-danger">
        <h6>campo senha diferente de confirma senha</h6>
      </div>
    <?php } ?>
    <!--  fim do comando php chamando html -->
		</form>
  </div>
	<script src="js/boostrap.min.js"></script>
</body>
</html>
