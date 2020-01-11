<?php 

session_start();
$login = $_SESSION["login"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Formulario</title>
</head>
<body>
	<h1>Aula 14 Criação de Formulario</h1>
	<form method="POST" action="login.php">
	
		<label>E-mail:</label>
		<input name="email" type="email"/> 
		<label>Senha:</label>
		<input type="password" name="senha" /> 
		<input type="submit" value="Entrar"/>
	
	</form><p>
	
	<?php if ($login == false){?>
	 <p>* Email/senha inválidos.</p>
	<?php }?>
	<a href="index.html">Aula 14</a><p>
</body>
</html>