<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		require('validacao.php');
		$validacao = validarFormulario();
	}
?>

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

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table>
			<tr>
				<td width="130">Marca: </td>
				<td width="130">
					<input
						type="text"
						name="marca"
						size="20"
						placeholder="Marca do carro"
						value="<?php if($_POST && !empty($_POST['marca'])){echo $_POST['marca'];} ?>">

					<!-- Validação -->
					<?php
						if(isset($_POST['enviar']) && in_array('marca', $validacao)) {
							echo '<span class="erro">Preenchimento obrigatório!</span>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td width="130">País de Origem: </td>
				<td width="130">
					<input
						type="text"
						name="pais"
						size="20"
						placeholder="País de origem do carro"
						value="<?php if ($_POST && !empty($_POST['pais'])){echo $_POST['pais'];}?>">

					<!-- Validação -->
					<?php
						if(isset($_POST['enviar']) && in_array('pais', $validacao)) {
							echo '<span class="erro">Preenchimento obrigatório!</span>';
						}
					?>
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

	<?php
		if ($_POST && count($validacao) == 0) {
			echo '<br />Dados enviados!<br />';

			$conn = new mysqli('localhost:3306', 'root', '', 'desweb_cars');

			if ($con->connect_errno) {
				echo 'Ocorreu um erro ao ligar à BD ' . $conn->connect_error;
				exit();
			}

			echo 'Ligação à BD com sucesso!';

			if (isset($_POST['enviar'])) {
				# TODO
			}
		}
	?>
</body>
</html>