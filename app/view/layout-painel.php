<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Eventos-info | Painel</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body class="corpo">
		<?php include "app/view/nav-bar.php";?>
		<div class="principal">
			<form method="POST" class="formulario">
				<fieldset>
					<legend class="legend">Cadastrar Evento</legend>
					<label>Nome:</label><br>
					<input type="text" name="nome" id="nome" placeholder="Insira o nome do evento"required><br>
					<label>Endereco:</label><br>
					<input type="text" name="endereco" id="endereco" placeholder="Endereco evento"required><br>
					<label>Responsavel:</label><br>
					<input type="text" name="responsavel" id="responsavel" placeholder="Nome do responsavel"required><br>
					<label>Data:</label><br>
					<input type="date" name="data_evento" required/><br>
					<label>Enviar Logo:</label><br>
					<input type="file" name="logo" required/><br>
					<fieldset class="status">
						<legend class="legend">Status</legend>
						<label for="s1">Postado:</label>
						<input type="radio" id="s1"name="status_evento" value="1"/>
						<label for="s2">Rascunho:</label>
						<input type="radio" id="s2"name="status_evento" value="0" checked/><br>
					</fieldset>
					<input type="submit" value="Cadastrar"/>
				</fieldset>
			</form>
			<h3>Todos Eventos</h3>
			<table class="tabela">
				<tr>
					<th>Logo:</th>
					<th>Nome:</th>
					<th>Endereco:</th>
					<th>Responsavel:</th>
					<th>Data:</th>
					<th>Status:</th>
					<th>Opcoes:</th>
				</tr>
				
				<?php foreach ($eventos as $e ): ?>
					<tr>
						<td><?= $e->logo; ?></td>
						<td><?= $e->nome; ?></td>
						<td><?= $e->endereco; ?></td>
						<td><?= $e->responsavel ;?></td>
						<td><?= dateForView($e->data_evento);?></td>
						<td><?= statusForView($e->status_evento) ;?></td>
						<td>
							<a href="excluir.php?id=<?= $e->id_evento; ?>">Excluir</a>
							<a href="atualizar.php?id=<?= $e->id_evento; ?>">Atualizar</a>
						</td>
					</tr>
				<?php endforeach; ?>	
			</table>
		</div>
	</body>
</html>