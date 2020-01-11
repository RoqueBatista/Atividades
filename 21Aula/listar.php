<?php
include('conexao.php');
include("classes/usuario.class.php");

global $link;

$resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios.usuario");

$usuarios = array();

/*if ($resultado) {
	$usuarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
	var_dump($usuarios);
	echo "<br><br>";
}

mysqli_data_seek($resultado, 0);

$usuarios = array();*/
if($resultado) {
	
	while ( $obj = mysqli_fetch_object($resultado, 'Usuario') ) {
		$usuarios[] = $obj;
	}
	
	/*while ( $linha = mysqli_fetch_row($resultado) ) {

		$u = new Usuario();
		$u->id = $linha[0];
		$u->email = $linha[1];
		$u->senha = $linha[2];
		
		$usuarios[] = $u;
	}*/

} else {
	$mensagem = "Algo deu errado. Tente carregar a lista novamente.";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lista Usuários Cadastrados</title>
</head>
<body>
	<a href="usuarios.php">Voltar</a>
	<h1>Usuários cadastrados</h1>
	<form method="POST" action="remover_multi.php">
		<table>
			<thead>
				<tr>
					<td>Selecionar</td>
					<td>ID</td>
					<td>E-mail</td>
					<td>Senha</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($usuarios as $u) { ?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $u->id; ?>" /></td>
					<td><?php echo $u->id; ?></td>
					<td><?php echo $u->email; ?></td>
					<td><?php echo $u->senha; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<input type="submit" value="Excluir" />
	</form>
	<?php if ( isset($mensagem) ) { ?>
	<p><?php echo $mensagem; ?></p>
	<?php } ?>
</body>
</html>
