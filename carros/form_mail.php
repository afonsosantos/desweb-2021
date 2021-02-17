<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Carros - Contato</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Carros - Contato</h1>
	</header>

	<nav>
		<ul>
			<li>
				<a href="index.php">Página Inicial</a>
			</li>
			<li>
				<a href="marcas.php">Marcas</a>
			</li>
			<li>
				<a href="modelos.php">Modelos</a>
			</li>
			<li>
				<a href="form_mail.php">Contatos</a>
			</li>
		</ul>
	</nav>

	<p style="margin-bottom: 2em;">
		Hoje é dia 
		<b>
			<?php echo date('d-m-Y'); ?>
		</b>
	</p>

	<form method="post" action="">
		<table>
			<tr>
				<td width="130">Nome: </td>
				<td width="130">
					<input type="text" name="marca" size="25" placeholder="O seu nome">
				</td>
			</tr>
			<tr>
				<td width="130">Email: </td>
				<td width="130">
					<input type="email" name="email" size="25" placeholder="O seu email">
				</td>
			</tr>
			<tr>
				<td width="130">Assunto: </td>
				<td width="130">
					<input type="text" name="assunto" size="25" placeholder="Assunto">
				</td>
			</tr>
			<tr>
				<td width="130">Mensagem: </td>
				<td width="130">
					<textarea name="mensagem" cols="50" rows="5" placeholder="A sua mensagem"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td width="150">
					<input type="submit" name="enviar" value="Enviar">
					<input type="reset" value="Limpar">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>