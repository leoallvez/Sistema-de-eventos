<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
		<title>Eventos-info | Login</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<?php include "app/view/nav-bar-login.php";?>
	<body class="corpo">
	
		<form method="POST" id="login">
			<label for="log">Login:</label><br>
			<input type="email" name="login" id="log" placeholder="Digite seu e-mail"required><br>
			<label for="pass">Senha:</label><br>
			<input type="password" name="senha" id="pass" placeholder="Digite sua senha"required><br>
			<input type="submit" value="Enviar">
		</form>
	
	</body>
</html>