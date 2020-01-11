<?php 

$link = mysqli_connect("localhost", "root", "");

$resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios.usuario");

$usuarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h3>Lista de Usuarios do APP Cadastro</h3>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>E-mail</td>
				<td>Senha</td>
			</tr>		
		</thead>
		<tbody>
			<?php foreach($usuarios as $u) {?>
			<tr>
				<td><?php echo $u["id"]; ?></td>
				<td><?php echo $u["email"]; ?></td>
				<td><?php echo $u["senha"]; ?></td>
			</tr>
			<?php }?>		
		</tbody>		
	</table>
	<p><a href="index.html">Voltar</a></p>
</body>
</html>