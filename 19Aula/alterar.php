<?php 
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	$email = $_POST["email"];
	$senha = $_POST["senha"];
			
	$link = mysqli_connect("localhost", "root", "");
	
	$resultado = mysqli_query($link, "UPDATE cadastro_usuarios.usuario SET senha = '$senha' WHERE email = '$email' ");
   
	if (mysqli_affected_rows($link) > 0 ){
		
		$msg = "Alterado com Sucesso";
		
	}else{
		$msg = "Email não encontrado";
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Alterar Dados </title>
</head>
<body>
	<h1>Alterar Dados</h1>
	<form method="POST" action="Alterar.php">
	<p>
	<label>E-mail:</label>	
	<input type="email" name="email"/>
	</p>
	<p>
	<label>Senha:</label>	
	<input type="password" name="senha"/>
	</p>		
	<input type="submit" name="Alterar"/>
	
	<?php if(isset($msg)){?>
		<h3><?php echo $msg; ?></h3>
	<?php }?>
	</form>
	<p><a href="index.html">Voltar</a></p>


</body>
</html>