<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Eventos-info | Atualizar</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body class="corpo">
		<?php include "app/view/nav-bar.php";?>
		<div class="principal">
			<form method="POST" class="formulario">
				<input type="hidden" name="id" value="<?= $e->id_evento; ?>"/>
				<fieldset>
					<legend class="legend">Atualizar Evento</legend>
					<label>Nome:</label><br>
					<input type="text" name="nome" id="nome" placeholder="Insira o nome do evento" value="<?=$e->nome; ?>"required><br>
					<label>Endereco:</label><br>
					<input type="text" name="endereco" id="endereco" placeholder="Endereco evento" value="<?=$e->endereco; ?>" required><br>
					<label>Responsavel:</label><br>
					<input type="text" name="responsavel" id="responsavel" placeholder="Nome do responsavel" value="<?=$e->responsavel;?>" required><br>
					<label>Data:</label><br>
					<input type="date" name="data_evento" value="<?=$e->data_evento; ?>"required/><br>
					<label>Enviar Logo:</label><br>
					<input type="file" name="logo" required/><br>
					<fieldset class="status">
						<legend class="legend">Status</legend>
						<label for="s1">Postado:</label>
						<input type="radio" id="s1"name="status_evento" value="1" <?= ($e->status_evento == 1)?'checked':''; ?>/>
						<label for="s2">Rascunho:</labe>
						<input type="radio" id="s2"name="status_evento" value="0" <?= ($e->status_evento == 0)?'checked':''; ?>/><br>
					</fieldset>
					<input type="submit" value="Atualizar"/>
				</fieldset>
			</form>
		</div>
	</body>
</html>