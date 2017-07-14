<!DOCTYPE html>
<html>
	<head>
		<title>Eventos-infor | Home</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body class="corpo">

		<?php include "nav-bar-index.php"; ?>
		<div class="principal">
			<h1>Proximos eventos</h1>
			<table class="tabela">
				<tr>
					<th>Logo:</th>
					<th>Nome:</th>
					<th>Endereco:</th>
					<th>Responsavel:</th>
					<th>Data:</th>
				</tr>
				
				<?php foreach ($eventos as $e ): ?>
					<tr>
						<td><?= $e->logo; ?></td>
						<td><?= $e->nome; ?></td>
						<td><?= $e->endereco; ?></td>
						<td><?= $e->responsavel ;?></td>
						<td><?= dateForView($e->data_evento);?></td>
					</tr>
				<?php endforeach; ?>	
			</table>
		</div>
	</body>
</html>