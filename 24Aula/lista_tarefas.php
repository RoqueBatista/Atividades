<?php

$tarefas = array();

include ('conexao.php');

session_start();


global $link;

//Este comando foi para unir as duas tabelas, se for usar deve aplicar em estudar INNER JOIN mais
$resultado = mysqli_query($link, "SELECT u.usuario, t.* FROM cadastro_usuarios.tarefa t INNER JOIN cadastro_usuarios.usuario u ON u.id=id_usuario");

if($resultado) {
    $tarefas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lista de Tarefas</title>
</head>
<body>
	<a href="home.php">Voltar</a>
	<h1>Tarefas Cadastradas / Administração</h1>
	<form method="POST" action="remover_multi_tarefa.php">
		<table>
			<thead>
				<tr>
					<td>Selecionar</td>
					<td>ID</td>
					<td>Tarefa</td>
					<td>Usuario</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($tarefas as $u) { ?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $u["id"];?>" /></td>
					<td><?php echo $u["id"]; ?></td>
					<td><?php echo $u["titulo"]; ?></td>
					<td><?php echo $u["usuario"]; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<input type="submit" value="Excluir" />
	</form>
</body>
</html>
