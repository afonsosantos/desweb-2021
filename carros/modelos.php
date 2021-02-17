<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Carros - Modelos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Carros - Modelos</h1>
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
				<td width="130">Código: </td>
				<td width="130">
					<input type="text" name="codigo" size="20" placeholder="Código do modelo">
				</td>
			</tr>
			<tr>
				<td width="130">Modelo: </td>
				<td width="130">
					<input type="text" name="modelo" size="20" placeholder="Modelo">
				</td>
			</tr>
			<tr>
				<td width="130">Combustível: </td>
				<td width="130">
					<select name="combustivel">
						<option value="gasolina">Gasolina</option>
						<option value="gasoleo">Gasóleo</option>
						<option value="eletrico">Elétrico</option>
						<option value="hibrido">Hibrído</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="130">Cilindrada: </td>
				<td width="130">
					<input type="number" min="0" step="1" name="cilindrada" size="20" placeholder="Cilindrada">
				</td>
			</tr>
			<tr>
				<td width="130">Potência: </td>
				<td width="130">
					<input type="number" min="0" step="1" name="potencia" size="20" placeholder="Potência">
				</td>
			</tr>
			<tr>
				<td width="130">Valor Base: </td>
				<td width="130">
					<input type="number" min="0" step="0.5" name="valor" size="20" placeholder="Valor Base">
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