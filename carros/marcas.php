<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Carros - Marcas</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Carros - Marcas</h1>
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

	<form method="post" action="">
		<table>
			<tr>
				<td width="130">Marca: </td>
				<td width="130">
					<input type="text" name="marca" size="20" placeholder="Marca do carro">
				</td>
			</tr>
			<tr>
				<td width="130">País de Origem: </td>
				<td width="130">
					<input type="text" name="pais" size="20" placeholder="País de origem do carro">
				</td>
			</tr>
			<tr>
				<td width="150">
					<input type="submit" name="enviar" value="Enviar">
					<input type="reset" value="Limpar">
				</td>
				<td width="500">
					<input type="submit" name="alterar" value="Alterar">
					<input type="submit" name="consultar" value="Consultar">
					<input type="submit" name="listar" value="Listar">
					<input type="submit" name="eliminar" value="Eliminar">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>