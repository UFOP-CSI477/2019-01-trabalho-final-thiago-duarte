<!doctype html>
<html lang="pt-br" dir="ltr">
 <head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Administrador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/cadastro.css" >
	<link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	

 </head>
	
 <body>
	
	<div class="cadastro">
	  <div class="container">
		<h1 class="amarelo castel">Faça o login</h1>
		<form action="loginadministrador" method="post">
		@csrf
		 <div class="form-group">
		  <label id="labnome" for="nome">Nome</label>
		  <input class="form-control" type="text" name="nome" id="nome" placeholder="Informe o nome"required>
		 </div>
		 
		 <div class="form-group">
		  <label id="labsenha" for="senha">Senha</label>
		  <input class="form-control" type="password" name="senha" id="senha" placeholder="Informe sua senha"required>

		 <button type="submit" class="btn btn-success btn-md" id="botao">Login</button>

	    </form>
		<br>
	
	  </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
 </body>
</html>