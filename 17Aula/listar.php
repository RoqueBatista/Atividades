<?php 
session_start();
	
	if(isset($_SESSION["lista"])== false){
		$_SESSION["lista"] = array();
		
}
$lista = $_SESSION["lista"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Listar Usuarios</title>
</head>
<body>
	<table>
		<thead>
			<td>
				<tr>Email</tr>
				<tr>Senha</tr>
			</td>
		</thead>
		<tbody>
			<?php foreach($lista as $u){?>
			<tr>
				<td><?php echo $u["email"];?></td>
				<td><?php echo $u["senha"];?></td>	
			</tr>
			<?php }?>
		
		</tbody>
	</table>
<p>

	<form action="index.html">
	<button>
	<p>Voltar</p>
	</button>
	</form>

</p>
</body>
</html>