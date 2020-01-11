<?php 
	
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	$email = $_POST["email"];
	
	$link = mysqli_connect("localhost", "root", "");
	
	$resultado = mysqli_query($link, "DELETE FROM cadastro_usuarios.usuario WHERE email='$email' ");
   
	if (mysqli_affected_rows($link) > 0 ){
		$msg = "Removido com Sucesso";
		
	}else{
		$msg = "Email não encontrado";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Remover Usuario</title>
</head>
<body>
	<h1>Remover Usuario</h1>

	<form method="POST" action="remover.php">
	<p>
	<label>E-mail:</label>	
	<input type="email" name="email"/>
	</p>	
	<input type="submit" value="Remover"/>
	
	<?php if(isset($msg)){?>
		<h3><?php echo $msg; ?></h3>
	<?php }?>
	</form>
	<p><a href="index.html">Voltar</a></p>

</body>
</html>